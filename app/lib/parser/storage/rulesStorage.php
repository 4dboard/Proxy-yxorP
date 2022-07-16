<?php

namespace yxorP\app\lib\parser\storage;

use yxorP\app\lib\parser\publicSuffixListInterface;

final class rulesStorage implements publicSuffixListStorageInterface
{
    private publicSuffixListCacheInterface $cache;
    private publicSuffixListClientInterface $client;

    public function __construct(publicSuffixListCacheInterface $cache, publicSuffixListClientInterface $client)
    {
        $this->cache = $cache;
        $this->client = $client;
    }

    public function get(string $uri): publicSuffixListInterface
    {
        $publicSuffixList = $this->cache->fetch($uri);
        if (null !== $publicSuffixList) {
            return $publicSuffixList;
        }
        $publicSuffixList = $this->client->get($uri);
        $this->cache->remember($uri, $publicSuffixList);
        return $publicSuffixList;
    }

    public function delete(string $uri): bool
    {
        return $this->cache->forget($uri);
    }
}