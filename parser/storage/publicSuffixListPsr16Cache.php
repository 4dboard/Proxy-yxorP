<?php

namespace yxorP\parser\Storage;

use DateInterval;
use Psr\SimpleCache\InvalidArgumentException;
use Throwable;
use yxorP\parser\publicSuffixListInterface;
use yxorP\psr\SimpleCache\CacheException;
use yxorP\psr\SimpleCache\CacheInterface;
use function md5;
use function strtolower;

final class publicSuffixListPsr16Cache implements publicSuffixListCacheInterface
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
     * @throws InvalidArgumentException
     */
    public function fetch(string $uri): ?publicSuffixListInterface
    {
        $cacheKey = $this->cacheKey($uri);
        $publicSuffixList = $this->cache->get($cacheKey);
        if (null === $publicSuffixList) {
            return null;
        }
        if (!$publicSuffixList instanceof publicSuffixListInterface) {
            $this->cache->delete($cacheKey);
            return null;
        }
        return $publicSuffixList;
    }

    private function cacheKey(string $str): string
    {
        return $this->cachePrefix . md5(strtolower($str));
    }

    /**
     * @throws Throwable
     * @throws InvalidArgumentException
     */
    public function remember(string $uri, publicSuffixListInterface $publicSuffixList): bool
    {
        try {
            return $this->cache->set($this->cacheKey($uri), $publicSuffixList, $this->cacheTtl);
        } catch (Throwable $exception) {
            if ($exception instanceof CacheException) {
                return false;
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