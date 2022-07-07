<?php declare(strict_types=1);

namespace Pdp\Storage;

use DateInterval;
use Pdp\publicSuffixList;
use Psr\SimpleCache\CacheException;
use Psr\SimpleCache\CacheInterface;
use Throwable;
use function md5;
use function strtolower;

final class publicSuffixListPsr16Cache implements publicSuffixListCache
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

    public function fetch(string $uri): ?publicSuffixList
    {
        $cacheKey = $this->cacheKey($uri);
        $publicSuffixList = $this->cache->get($cacheKey);
        if (null === $publicSuffixList) {
            return null;
        }
        if (!$publicSuffixList instanceof publicSuffixList) {
            $this->cache->delete($cacheKey);
            return null;
        }
        return $publicSuffixList;
    }

    private function cacheKey(string $str): string
    {
        return $this->cachePrefix . md5(strtolower($str));
    }

    public function remember(string $uri, publicSuffixList $publicSuffixList): bool
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

    public function forget(string $uri): bool
    {
        return $this->cache->delete($this->cacheKey($uri));
    }
}