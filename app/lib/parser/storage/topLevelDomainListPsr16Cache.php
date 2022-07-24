<?php

namespace yxorP\app\lib\parser\storage;

use DateInterval;
use Exception;
use Psr\SimpleCache\InvalidArgumentException;
use Throwable;
use yxorP\app\lib\parser\topLevelDomainListInterface;
use yxorP\psr\SimpleCache\CacheException;
use yxorP\psr\SimpleCache\CacheInterface;
use function md5;
use function strtolower;

final class topLevelDomainListPsr16Cache implements topLevelDomainListCacheInterface
{
    private CacheInterface $cache;
    private string $cachePrefix;
    private ?DateInterval $cacheTtl;

    /**
     * @throws Exception
     */
    public function __construct(CacheInterface $cache, string $cachePrefix = '', $cacheTtl = null)
    {
        $this->cache = $cache;
        $this->cachePrefix = $cachePrefix;
        $this->cacheTtl = timeToLive::convert($cacheTtl);
    }

    /**
     * @throws InvalidArgumentException
     */
    public function fetch(string $uri): ?topLevelDomainListInterface
    {
        $cacheKey = $this->cacheKey($uri);
        $topLevelDomainList = $this->cache->get($cacheKey);
        if (null === $topLevelDomainList) {
            return null;
        }
        if (!$topLevelDomainList instanceof topLevelDomainListInterface) {
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
     * @throws InvalidArgumentException
     */
    public function remember(string $uri, topLevelDomainListInterface $topLevelDomainList): bool
    {
        try {
            return $this->cache->set($this->cacheKey($uri), $topLevelDomainList, $this->cacheTtl);
        } catch (Throwable $exception) {
            if ($exception instanceof CacheException) {
                return 0;
            }
            throw $exception;
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public function forget(string $uri): bool
    {
        return $this->cache->delete($this->cacheKey($uri));
    }
}