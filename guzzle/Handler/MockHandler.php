<?php namespace GuzzleHttp\Handler;

use Countable;
use Exception;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\TransferStats;
use InvalidArgumentException;
use OutOfBoundsException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use ReturnTypeWillChange;
use function GuzzleHttp\describe_type;
use function GuzzleHttp\Promise\promise_for;
use function GuzzleHttp\Promise\rejection_for;

class MockHandler implements Countable
{
    private array $queue = [];
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

    public static function createWithMiddleware(array $queue = null, callable $onFulfilled = null, callable $onRejected = null): HandlerStack
    {
        return HandlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }

    public function __invoke(RequestInterface $request, array $options): \GuzzleHttp\Promise\RejectedPromise|\GuzzleHttp\Promise\FulfilledPromise|\GuzzleHttp\Promise\Promise|PromiseInterface
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
                $response = new RequestException($msg, $request, $response, $e);
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
                } elseif ($sink instanceof StreamInterface) {
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

    private function invokeStats(RequestInterface $request, array $options, ResponseInterface $response = null, $reason = null)
    {
        if (isset($options['on_stats'])) {
            $transferTime = $options['transfer_time'] ?? 0;
            $stats = new TransferStats($request, $response, $transferTime, $reason);
            call_user_func($options['on_stats'], $stats);
        }
    }

    public function append()
    {
        foreach (func_get_args() as $value) {
            if ($value instanceof ResponseInterface || $value instanceof Exception || $value instanceof PromiseInterface || is_callable($value)) {
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

    #[ReturnTypeWillChange] public function count(): int
    {
        return count($this->queue);
    }

    public function reset()
    {
        $this->queue = [];
    }
}