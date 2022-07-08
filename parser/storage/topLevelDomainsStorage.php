<?php

namespace yxorP\parser\Storage;

use yxorP\parser\topInterfaceLevelDomainListInterface;

final class topLevelDomainsStorage implements topLevelDomainListStorageInterface
{
    private topLevelDomainListCacheInterface $cache;
    private topLevelDomainListClientInterface $client;

    public function __construct(topLevelDomainListCacheInterface $cache, topLevelDomainListClientInterface $client)
    {
        $this->cache = $cache;
        $this->client = $client;
    }

    public function get(string $uri): topInterfaceLevelDomainListInterface
    {
        $topLevelDomains = $this->cache->fetch($uri);
        if (null !== $topLevelDomains) {
            return $topLevelDomains;
        }
        $topLevelDomains = $this->client->get($uri);
        $this->cache->remember($uri, $topLevelDomains);
        return $topLevelDomains;
    }

    public function delete(string $uri): bool
    {
        return $this->cache->forget($uri);
    }
}