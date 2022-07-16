<?php

namespace yxorP\app\lib\parser\storage;

use GuzzleHttp\ClientInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use yxorP\app\lib\parser\publicSuffixListInterface;
use yxorP\app\lib\parser\rules;
use yxorP\app\lib\parser\unableToLoadResource;
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