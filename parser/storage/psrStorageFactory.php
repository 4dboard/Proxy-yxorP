<?php declare(strict_types=1);

namespace yxorP\parser\Storage;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\SimpleCache\CacheInterface;
use yxorP\parser\resourceUri;

final class psrStorageFactory implements resourceUri, publicSuffixListStorageFactory, topLevelDomainListStorageFactory
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

    public function createPublicSuffixListStorage(string $cachePrefix = '', $cacheTtl = null): publicSuffixListStorage
    {
        return new rulesStorage(new publicSuffixListPsr16Cache($this->cache, $cachePrefix, $cacheTtl), new publicSuffixListPsr18Client($this->client, $this->requestFactory));
    }

    public function createTopLevelDomainListStorage(string $cachePrefix = '', $cacheTtl = null): topLevelDomainListStorage
    {
        return new topLevelDomainsStorage(new topLevelDomainListPsr16Cache($this->cache, $cachePrefix, $cacheTtl), new topLevelDomainListPsr18Client($this->client, $this->requestFactory));
    }
}