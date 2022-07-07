<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\topLevelDomainList;

final class topLevelDomainsStorage implements topLevelDomainListStorage
{
    private topLevelDomainListCache $cache;
    private topLevelDomainListClient $client;

    public function __construct(topLevelDomainListCache $cache, topLevelDomainListClient $client)
    {
        $this->cache = $cache;
        $this->client = $client;
    }

    public function get(string $uri): topLevelDomainList
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