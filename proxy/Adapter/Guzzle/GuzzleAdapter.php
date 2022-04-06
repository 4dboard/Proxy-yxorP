<?php

namespace Proxy\Adapter\Guzzle;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Proxy\Adapter\AdapterInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @property Client $client
 */
class GuzzleAdapter implements AdapterInterface
{
    protected Client $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client;
    }

    /**
     * @throws GuzzleException
     */
    public function send(RequestInterface $request): ResponseInterface
    {
        return $this->client->send($request);
    }
}
