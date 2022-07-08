<?php

namespace yxorP\parser\Storage;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use yxorP\proxzle\ClientInterface;
use yxorP\parser\publicSuffixListInterface;
use yxorP\parser\rules;
use yxorP\parser\unableToLoadResource;
use yxorP\psr\Http\Client\ClientExceptionInterface;
use yxorP\psr\Http\Client\ClientInterface;
use yxorP\psr\Http\Message\RequestFactoryInterface;

final class publicSuffixListPsr18Client implements publicSuffixListClientInterface
{
    private ClientInterface $client;
    private RequestFactoryInterface $requestFactory;

    public function __construct(ClientInterface $client, RequestFactoryInterface $requestFactory)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }

    public function get(string $uri): publicSuffixListInterface
    {
        $request = $this->requestFactory->createRequest('GET', $uri);
        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw unableToLoadResource::dueToUnavailableService($uri, $exception);
        }
        if (400 <= $response->getStatusCode()) {
            throw unableToLoadResource::dueToUnexpectedStatusCode($uri, $response->getStatusCode());
        }
        return rules::fromString($response->getBody());
    }
}