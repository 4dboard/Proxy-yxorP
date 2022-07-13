<?php

namespace yxorP\inc\proxy\Handler;

use Countable;
use ReturnTypeWillChange;
use yxorP\inc\proxy\Exception\ARequestException;
use yxorP\inc\proxy\HandlerStack;
use yxorP\inc\proxy\Promise\PromiseInterface;
use yxorP\inc\proxy\TransferStats;
use yxorP\inc\psr\Http\Message\RequestInterface;
use yxorP\inc\psr\Http\Message\ResponseInterface;
use yxorP\inc\psr\Http\Message\StreamInterface;
use function yxorP\inc\proxy\describe_type;
use function yxorP\inc\proxy\Promise\promise_for;
use function yxorP\inc\proxy\Promise\rejection_for;

/**
 * Handler that returns responses or throw exceptions from a queue.
 */
class MockHandler implements Countable
{
    private array $queue = [];
    private RequestInterface $lastRequest;
    private array $lastOptions;
    private $onFulfilled;
    private $onRejected;

    /**
     * The passed in value must be an array of
     * {@see Psr7\Http\Message\ResponseInterface} objects, Exceptions,
     * callables, or Promises.
     *
     * @param array|null $queue
     * @param callable|null $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null $onRejected Callback to invoke when the return value is rejected.
     */
    public function __construct(
        array    $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null
    )
    {
        $this->onFulfilled = $onFulfilled;
        $this->onRejected = $onRejected;

        if ($queue) {
            call_user_func_array([$this, 'append'], $queue);
        }
    }

    /**
     * Creates a new MockHandler that uses the default handler stack list of
     * middlewares.
     *
     * @param array|null $queue Array of responses, callables, or exceptions.
     * @param callable|null $onFulfilled Callback to invoke when the return value is fulfilled.
     * @param callable|null $onRejected Callback to invoke when the return value is rejected.
     *
     * @return HandlerStack
     */
    public static function createWithMiddleware(
        array    $queue = null,
        callable $onFulfilled = null,
        callable $onRejected = null
    ): HandlerStack
    {
        return HandlerStack::create(new self($queue, $onFulfilled, $onRejected));
    }

    public function __invoke(RequestInterface $request, array $options): \yxorP\inc\proxy\Promise\FulfilledPromise|PromiseInterface|\yxorP\inc\proxy\Promise\Promise|\yxorP\inc\proxy\Promise\RejectedPromise
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
                $response = new ARequestException($msg, $request, $response, $e);
            }
        }

        if (is_callable($response)) {
            $response = call_user_func($response, $request, $options);
        }

        $response = $response instanceof Exception
            ? rejection_for($response)
            : promise_for($response);

        return $response->then(
            function ($value) use ($request, $options) {
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
            },
            function ($reason) use ($request, $options) {
                $this->invokeStats($request, $options, null, $reason);
                if ($this->onRejected) {
                    call_user_func($this->onRejected, $reason);
                }
                return rejection_for($reason);
            }
        );
    }

    private function invokeStats(
        RequestInterface  $request,
        array             $options,
        ResponseInterface $response = null,
                          $reason = null
    )
    {
        if (isset($options['on_stats'])) {
            $transferTime = $options['transfer_time'] ?? 0;
            $stats = new TransferStats($request, $response, $transferTime, $reason);
            call_user_func($options['on_stats'], $stats);
        }
    }

    /**
     * Adds one or more variadic requests, exceptions, callables, or promises
     * to the queue.
     */
    public function append()
    {
        foreach (func_get_args() as $value) {
            if ($value instanceof ResponseInterface
                || $value instanceof Exception
                || $value instanceof PromiseInterface
                || is_callable($value)
            ) {
                $this->queue[] = $value;
            } else {
                throw new InvalidArgumentException('Expected a response or '
                    . 'exception. Found ' . describe_type($value));
            }
        }
    }

    /**
     * Get the last received request.
     *
     * @return RequestInterface
     */
    public function getLastRequest(): RequestInterface
    {
        return $this->lastRequest;
    }

    /**
     * Get the last received request options.
     *
     * @return array
     */
    public function getLastOptions(): array
    {
        return $this->lastOptions;
    }

    /**
     * Returns the number of remaining items in the queue.
     *
     * @return int
     */
    #[ReturnTypeWillChange] public function count(): int
    {
        return count($this->queue);
    }

    public function reset()
    {
        $this->queue = [];
    }
}
