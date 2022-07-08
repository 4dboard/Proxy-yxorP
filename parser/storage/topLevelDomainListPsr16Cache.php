<?php

namespace yxorP\parser\Storage;

use DateInterval;
use Psr\SimpleCache\CacheException;
use Psr\SimpleCache\CacheInterface;
use Throwable;
use yxorP\parser\topInterfaceLevelDomainListInterface;
use function md5;
use function strtolower;

final class topLevelDomainListPsr16Cache implements topLevelDomainListCacheInterface
{
    private CacheInterface $cache;
    private string $cachePrefix;
    private ?DateInterval $cacheTtl;

    public function __construct(CacheInterface $cache, string $cachePrefix = '', $cacheTtl = null)
    {
        $this->cache = $cache;
        $this->cachePrefix = $cachePrefix;
        $this->cacheTtl = timeToLive::convert($cacheTtl);
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function fetch(string $uri): ?topInterfaceLevelDomainListInterface
    {
        $cacheKey = $this->cacheKey($uri);
        $topLevelDomainList = $this->cache->get($cacheKey);
        if (null === $topLevelDomainList) {
            return null;
        }
        if (!$topLevelDomainList instanceof topInterfaceLevelDomainListInterface) {
            $this->cache->delete($cacheKey);
            return null;
        }
        return $topLevelDomainList;
    }

    private function cacheKey(string $str): string
    {
        return $this->cachePrefix . md5(strtolower($str));
    }

    /**
     * @throws Throwable
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function remember(string $uri, topInterfaceLevelDomainListInterface $topLevelDomainList): bool
    {
        try {
            return $this->cache->set($this->cacheKey($uri), $topLevelDomainList, $this->cacheTtl);
        } catch (Throwable $exception) {
            if ($exception instanceof CacheException) {
                return false;
            }
            throw $exception;
        }
    }

    /**
     * @throws \Psr\SimpleCache\InvalidArgumentException
     */
    public function forget(string $uri): bool
    {
        return $this->cache->delete($this->cacheKey($uri));
    }
}