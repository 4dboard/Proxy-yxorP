<?php

namespace yxorP\inc\proxy\Handler;

use JetBrains\PhpStorm\Pure;
use yxorP\inc\psr\Http\Message\RequestInterface;

/**
 * HTTP handler that uses cURL easy handles as a transport layer.
 *
 * When using the CurlHandler, custom curl options can be specified as an
 * associative array of curl option constants mapping to values in the
 * **curl** key of the "client" key of the request.
 */
class CurlHandler
{
    /** @var CurlFactoryInterface */
    private mixed $factory;

    /**
     * Accepts an associative array of options:
     *
     * - factory: Optional curl factory used to create cURL handles.
     *
     * @param array $options Array of options to use with the handler
     */
    #[Pure] public function __construct(array $options = [])
    {
        $this->factory = $options['handle_factory'] ?? new CurlFactory(3);
    }

    public function __invoke(RequestInterface $request, array $options): \yxorP\inc\proxy\Promise\FulfilledPromise|\yxorP\inc\proxy\Promise\PromiseInterface|\yxorP\inc\proxy\Promise\RejectedPromise
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
