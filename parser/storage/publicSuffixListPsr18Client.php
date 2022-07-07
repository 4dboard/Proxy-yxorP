<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\publicSuffixList;
use Pdp\rules;
use Pdp\unableToLoadResource;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;

final class publicSuffixListPsr18Client implements publicSuffixListClient
{
    private ClientInterface $client;
    private RequestFactoryInterface $requestFactory;

    public function __construct(ClientInterface $client, RequestFactoryInterface $requestFactory)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }

    public function get(string $uri): publicSuffixList
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