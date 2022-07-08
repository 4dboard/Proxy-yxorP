<?php namespace yxorP\proxy\Handler;

use BadMethodCallException;
use JetBrains\PhpStorm\Pure;
use yxorP\proxy\Apromise\Promise;
use yxorP\proxy\Utils;
use yxorP\proxyApromise as P;
use yxorP\psr\Http\Message\RequestInterface;

/**
 * @property CurlMultiHandle|CurlMultiHandle $_mh
 */
class CurlMultiHandler
{
    private mixed $factory;
    private mixed $selectTimeout;
    private $active;
    private array $handles = [];
    private array $delays = [];
    private mixed $options = [];

    #[Pure] public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new CurlFactory(50);
        if (isset($options['select_timeout'])) {
            $this->selectTimeout = $options['select_timeout'];
        } elseif ($selectTimeout = getenv('PROXY_CURL_SELECT_TIMEOUT')) {
            $this->selectTimeout = $selectTimeout;
        } else {
            $this->selectTimeout = 1;
        }
        $this->options = $options['options'] ?? [];
    }

    public function __get($name)
    {
        if ($name === '_mh') {
            $this->_mh = curl_multi_init();
            foreach ($this->options as $option => $value) {
                curl_multi_setopt($this->_mh, $option, $value);
            }
            return $this->_mh;
        }
        throw new BadMethodCallException();
    }

    public function __destruct()
    {
        if (isset($this->_mh)) {
            curl_multi_close($this->_mh);
            unset($this->_mh);
        }
    }

    public function __invoke(RequestInterface $request, array $options): Promise
    {
        $easy = $this->factory->create($request, $options);
        $id = (int)$easy->handle;
        $promise = new Promise([$this, 'execute'], function () use ($id) {
            return $this->cancel($id);
        });
        $this->addRequest(['easy' => $easy, 'deferred' => $promise]);
        return $promise;
    }

    private function cancel($id): bool
    {
        if (!isset($this->handles[$id])) {
            return false;
        }
        $handle = $this->handles[$id]['easy']->handle;
        unset($this->delays[$id], $this->handles[$id]);
        curl_multi_remove_handle($this->_mh, $handle);
        curl_close($handle);
        return true;
    }

    private function addRequest(array $entry)
    {
        $easy = $entry['easy'];
        $id = (int)$easy->handle;
        $this->handles[$id] = $entry;
        if (empty($easy->options['delay'])) {
            curl_multi_add_handle($this->_mh, $easy->handle);
        } else {
            $this->delays[$id] = Utils::currentTime() + ($easy->options['delay'] / 1000);
        }
    }

    public function execute()
    {
        $queue = P\queues();
        while ($this->handles || !$queue->isEmpty()) {
            if (!$this->active && $this->delays) {
                usleep($this->timeToNext());
            }
            $this->tick();
        }
    }

    #[Pure] private function timeToNext(): float|int
    {
        $currentTime = Utils::currentTime();
        $nextTime = PHP_INT_MAX;
        foreach ($this->delays as $time) {
            if ($time < $nextTime) {
                $nextTime = $time;
            }
        }
        return max(0, $nextTime - $currentTime) * 1000000;
    }

    public function tick()
    {
        if ($this->delays) {
            $currentTime = Utils::currentTime();
            foreach ($this->delays as $id => $delay) {
                if ($currentTime >= $delay) {
                    unset($this->delays[$id]);
                    curl_multi_add_handle($this->_mh, $this->handles[$id]['easy']->handle);
                }
            }
        }
        P\queues()->run();
        if ($this->active && curl_multi_select($this->_mh, $this->selectTimeout) === -1) {
            usleep(250);
        }
        while (curl_multi_exec($this->_mh, $this->active) === CURLM_CALL_MULTI_PERFORM) ;
        $this->processMessages();
    }

    private function processMessages()
    {
        while ($done = curl_multi_info_read($this->_mh)) {
            $id = (int)$done['handle'];
            curl_multi_remove_handle($this->_mh, $done['handle']);
            if (!isset($this->handles[$id])) {
                continue;
            }
            $entry = $this->handles[$id];
            unset($this->handles[$id], $this->delays[$id]);
            $entry['easy']->errno = $done['result'];
            $entry['deferred']->resolve(CurlFactory::finish($this, $entry['easy'], $this->factory));
        }
    }
}