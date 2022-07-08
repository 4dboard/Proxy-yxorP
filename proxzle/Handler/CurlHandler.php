<?php namespace yxorP\guzzle\Handler;

use JetBrains\PhpStorm\Pure;
use yxorP\psr\Http\Message\RequestInterface;

class CurlHandler
{
    private mixed $factory;

    #[Pure] public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new CurlFactory(3);
    }

    public function __invoke(RequestInterface $request, array $options): \GuzzleHttp\Promise\FulfilledPromise|\GuzzleHttp\Promise\RejectedPromise|\GuzzleHttp\Promise\PromiseInterface
    {
        if (isset($options['delay'])) {
            usleep($options['delay'] * 1000);
        }
        $easy = $this->factory->create($request, $options);
        curl_exec($easy->handle);
        $easy->errno = curl_errno($easy->handle);
        return CurlFactory::finish($this, $easy, $this->factory);
    }
}