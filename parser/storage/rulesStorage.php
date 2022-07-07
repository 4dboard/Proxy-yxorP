<?php declare(strict_types=1);

namespace Pdp\Storage;

use Pdp\publicSuffixList;

final class rulesStorage implements publicSuffixListStorage
{
    private publicSuffixListCache $cache;
    private publicSuffixListClient $client;

    public function __construct(publicSuffixListCache $cache, publicSuffixListClient $client)
    {
        $this->cache = $cache;
        $this->client = $client;
    }

    public function get(string $uri): publicSuffixList
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