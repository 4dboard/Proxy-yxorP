<?php namespace yxorP\app\lib\proxy\handler;

use Countable;
use Exception;
use InvalidArgumentException;
use OutOfBoundsException;
use yxorP\app\lib\proxy\exception\aRequestException;
use yxorP\app\lib\proxy\handlerStack;
use yxorP\app\lib\proxy\promise\promiseInterface;
use yxorP\app\lib\proxy\transferStats;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;
use yxorP\app\lib\psr\http\message\streamInterface;
use function yxorP\app\lib\proxy\describe_type;
use function yxorP\app\lib\proxy\promise\promise_for;
use function yxorP\app\lib\proxy\promise\rejection_for;

class mockHandler implements Countable
{
    private $queue = [];
    private $lastRequest;
    private $lastOptions;
    private $onFulfilled;
    private $onRejected;

    public function __construct(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
    {
        $this->onFulfilled = $onFulfilled;
        $this->onRejected = $onRejected;
        if ($queue) {
            call_user_func_array([$this, 'append'], $queue);
        }
    }

    public static function createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null)
    {
        return handlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }

    public function __invoke(requestInterface $request, array $options)
    {
        if (!$this->queue) {
            throw new OutOfBoundsException('Mock queue is empty');
        }
        if (isset($options['delay']) && is_numeric($options['delay'])) {
            usleep($options['delay'] * 1000);
        }
        $this->lastRequest = $request;
        $this->lastOptions = $options;
        $response = array_shift($this->queue);
        if (isset($options['on_headers'])) {
            if (!is_callable($options['on_headers'])) {
                throw new InvalidArgumentException('on_headers must be callable');
            }
            try {
                $options['on_headers']($response);
            } catch (Exception $e) {
                $msg = 'An error was encountered during the on_headers event';
                $response = new aRequestException($msg, $request, $response, $e);
            }
        }
        if (is_callable($response)) {
            $response = call_user_func($response, $request, $options);
        }
        $response = $response instanceof Exception ? rejection_for($response) : promise_for($response);
        return $response->then(function ($value) use ($request, $options) {
            $this->invokeStats($request, $options, $value);
            if ($this->onFulfilled) {
                call_user_func($this->onFulfilled, $value);
            }
            if (isset($options['sink'])) {
                $contents = (string)$value->getBody();
                $sink = $options['sink'];
                if (is_resource($sink)) {
                    fwrite($sink, $contents);
                } elseif (is_string($sink)) {
                    file_put_contents($sink, $contents);
                } elseif ($sink instanceof streamInterface) {
                    $sink->write($contents);
                }
            }
            return $value;
        }, function ($reason) use ($request, $options) {
            $this->invokeStats($request, $options, null, $reason);
            if ($this->onRejected) {
                call_user_func($this->onRejected, $reason);
            }
            return rejection_for($reason);
        });
    }

    private function invokeStats(requestInterface $request, array $options, responseInterface $response = null, $reason = null)
    {
        if (isset($options['on_stats'])) {
            $transferTime = isset($options['transfer_time']) ? $options['transfer_time'] : 0;
            $stats = new transferStats($request, $response, $transferTime, $reason);
            call_user_func($options['on_stats'], $stats);
        }
    }

    public function append()
    {
        foreach (func_get_args() as $value) {
            if ($value instanceof responseInterface || $value instanceof Exception || $value instanceof promiseInterface || is_callable($value)) {
                $this->queue[] = $value;
            } else {
                throw new InvalidArgumentException('Expected a response or ' . 'exception. Found ' . describe_type($value));
            }
        }
    }

    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    public function getLastOptions()
    {
        return $this->lastOptions;
    }

    #[ReturnTypeWillChange] public function count()
    {
        return count($this->queue);
    }

    public function reset()
    {
        $this->queue = [];
    }
}
