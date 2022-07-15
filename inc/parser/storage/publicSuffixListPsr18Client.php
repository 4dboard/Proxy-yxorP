<?php

namespace yxorP\inc\parser\storage;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use yxorP\inc\GuzzleHttp\ClientInterface;
use yxorP\inc\parser\publicSuffixListInterface;
use yxorP\inc\parser\rules;
use yxorP\inc\parser\unableToLoadResource;
use yxorP\psr\Http\Message\RequestFactoryInterface;

final class publicSuffixListPsr18Client implements publicSuffixListClientInterface
{
    private clientInterface $client;
    private RequestFactoryInterface $requestFactory;

    public function __construct(clientInterface $client, RequestFactoryInterface $requestFactory)
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