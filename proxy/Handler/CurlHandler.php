<?php namespace yxorP\proxy\Handler;

use JetBrains\PhpStorm\Pure;
use yxorP\proxy\Apromise\FulfilledPromise;
use yxorP\proxy\Apromise\PromiseInterface;
use yxorP\proxy\Apromise\RejectedPromise;
use yxorP\psr\Http\Message\RequestInterface;

class CurlHandler
{
    private mixed $factory;

    #[Pure] public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new CurlFactory(3);
    }

    public function __invoke(RequestInterface $request, array $options): FulfilledPromise|RejectedPromise|PromiseInterface
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