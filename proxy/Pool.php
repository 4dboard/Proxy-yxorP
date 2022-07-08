<?php namespace yxorP\proxy;

use InvalidArgumentException;
use yxorP\proxy\Apromise\EachPromise;
use yxorP\proxy\Apromise\Promise;
use yxorP\proxy\Apromise\PromiseInterface;
use yxorP\proxy\Apromise\PromisorInterface;
use yxorP\psr\Http\Message\RequestInterface;
use function yxorP\proxy\Apromise\iter_for;

class Pool implements PromisorInterface
{
    private EachPromise $each;

    public function __construct(ClientInterface $client, $requests, array $config = [])
    {
        if (isset($config['pool_size'])) {
            $config['concurrency'] = $config['pool_size'];
        } elseif (!isset($config['concurrency'])) {
            $config['concurrency'] = 25;
        }
        if (isset($config['options'])) {
            $opts = $config['options'];
            unset($config['options']);
        } else {
            $opts = [];
        }
        $iterable = iter_for($requests);
        $requests = function () use ($iterable, $client, $opts) {
            foreach ($iterable as $key => $rfn) {
                if ($rfn instanceof RequestInterface) {
                    yield $key => $client->sendAsync($rfn, $opts);
                } elseif (is_callable($rfn)) {
                    yield $key => $rfn($opts);
                } else {
                    throw new InvalidArgumentException('Each value yielded by ' . 'the iterator must be a Psr7\Http\Message\RequestInterface ' . 'or a callable that returns a promise that fulfills ' . 'with a Psr7\Message\Http\ResponseInterface object.');
                }
            }
        };
        $this->each = new EachPromise($requests(), $config);
    }

    public static function batch(ClientInterface $client, $requests, array $options = []): array
    {
        $res = [];
        self::cmpCallback($options, 'fulfilled', $res);
        self::cmpCallback($options, 'rejected', $res);
        $pool = new static($client, $requests, $options);
        $pool->promise()->wait();
        ksort($res);
        return $res;
    }

    private static function cmpCallback(array &$options, $name, array &$results)
    {
        if (!isset($options[$name])) {
            $options[$name] = function ($v, $k) use (&$results) {
                $results[$k] = $v;
            };
        } else {
            $currentFn = $options[$name];
            $options[$name] = function ($v, $k) use (&$results, $currentFn) {
                $currentFn($v, $k);
                $results[$k] = $v;
            };
        }
    }

    public function promise(): Promise|PromiseInterface
    {
        return $this->each->promise();
    }
}