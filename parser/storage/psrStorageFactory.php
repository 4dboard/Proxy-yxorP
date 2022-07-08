<?php

namespace yxorP\parser\Storage;

use yxorP\guzzle\ClientInterface;
use yxorP\psr\Http\Client\ClientInterface;
use yxorP\psr\Http\Message\RequestFactoryInterface;
use yxorP\psr\SimpleCache\CacheInterface;
use yxorP\parser\resourceUriInterface;

final class psrStorageFactory implements resourceUriInterface, publicSuffixListStorageFactoryInterface, topLevelDomainListStorageFactoryInterface
{
    private CacheInterface $cache;
    private ClientInterface $client;
    private RequestFactoryInterface $requestFactory;

    public function __construct(CacheInterface $cache, ClientInterface $client, RequestFactoryInterface $requestFactory)
    {
        $this->cache = $cache;
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }

    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorageInterface
    {
        return new rulesStorage(new publicSuffixListPsr16Cache($this->cache, $cachePrefix, $cacheTtl), new publicSuffixListPsr18Client($this->client, $this->requestFactory));
    }

    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorageInterface
    {
        return new topLevelDomainsStorage(new topLevelDomainListPsr16Cache($this->cache, $cachePrefix, $cacheTtl), new topLevelDomainListPsr18Client($this->client, $this->requestFactory));
    }
}