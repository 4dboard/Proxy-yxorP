<?php namespace yxorP\app\lib\data\firebase;

use ArrayAccess;
use LogicException;
use OutOfBoundsException;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use RuntimeException;
use function is_null;
use function strlen;

class cachedKeySet implements ArrayAccess
{
    private $jwksUri;
    private $httpClient;
    private $httpFactory;
    private $cache;
    private $expiresAfter;
    private $cacheItem;
    private $keySet;
    private $cacheKey;
    private $cacheKeyPrefix = 'jwks';
    private $maxKeyLength = 64;
    private $rateLimit;
    private $rateLimitCacheKey;
    private $maxCallsPerMinute = 10;
    private $defaultAlg;

    public function __construct(string $jwksUri, ClientInterface $httpClient, RequestFactoryInterface $httpFactory, CacheItemPoolInterface $cache, int $expiresAfter = null, bool $rateLimit = false, string $defaultAlg = null)
    {
        $this->jwksUri = $jwksUri;
        $this->httpClient = $httpClient;
        $this->httpFactory = $httpFactory;
        $this->cache = $cache;
        $this->expiresAfter = $expiresAfter;
        $this->rateLimit = $rateLimit;
        $this->defaultAlg = $defaultAlg;
        $this->setCacheKeys();
    }

    private function setCacheKeys(): void
    {
        if (empty($this->jwksUri)) {
            throw new RuntimeException('JWKS URI is empty');
        }
        $key = preg_replace('|[^a-zA-Z0-9_\.!]|', '', $this->jwksUri);
        $key = $this->cacheKeyPrefix . $key;
        if (strlen($key) > $this->maxKeyLength) {
            $key = substr(hash('sha256', $key), 0, $this->maxKeyLength);
        }
        $this->cacheKey = $key;
        if ($this->rateLimit) {
            $rateLimitKey = $this->cacheKeyPrefix . 'ratelimit' . $key;
            if (strlen($rateLimitKey) > $this->maxKeyLength) {
                $rateLimitKey = substr(hash('sha256', $rateLimitKey), 0, $this->maxKeyLength);
            }
            $this->rateLimitCacheKey = $rateLimitKey;
        }
    }

    public function offsetGet($keyId): key
    {
        if (!$this->keyIdExists($keyId)) {
            throw new OutOfBoundsException('Key ID not found');
        }
        return $this->keySet[$keyId];
    }

    private function keyIdExists(string $keyId): bool
    {
        $keySetToCache = null;
        if (null === $this->keySet) {
            $item = $this->getCacheItem();
            if ($item->isHit()) {
                $this->keySet = $item->get();
            }
        }
        if (!isset($this->keySet[$keyId])) {
            if ($this->rateLimitExceeded()) {
                return false;
            }
            $request = $this->httpFactory->createRequest('get', $this->jwksUri);
            $jwksResponse = $this->httpClient->sendRequest($request);
            $jwks = json_decode((string)$jwksResponse->getBody(), true);
            $this->keySet = $keySetToCache = jWK::parseKeySet($jwks, $this->defaultAlg);
            if (!isset($this->keySet[$keyId])) {
                return false;
            }
        }
        if ($keySetToCache) {
            $item = $this->getCacheItem();
            $item->set($keySetToCache);
            if ($this->expiresAfter) {
                $item->expiresAfter($this->expiresAfter);
            }
            $this->cache->save($item);
        }
        return true;
    }

    /**
     * @throws \Psr\Cache\invalidArgumentExceptionInterface
     */
    private function getCacheItem(): CacheItemInterface
    {
        if (is_null($this->cacheItem)) {
            $this->cacheItem = $this->cache->getItem($this->cacheKey);
        }
        return $this->cacheItem;
    }

    /**
     * @throws \Psr\Cache\invalidArgumentExceptionInterface
     */
    private function rateLimitExceeded(): bool
    {
        if (!$this->rateLimit) {
            return false;
        }
        $cacheItem = $this->cache->getItem($this->rateLimitCacheKey);
        if (!$cacheItem->isHit()) {
            $cacheItem->expiresAfter(1);
        }
        $callsPerMinute = (int)$cacheItem->get();
        if (++$callsPerMinute > $this->maxCallsPerMinute) {
            return true;
        }
        $cacheItem->set($callsPerMinute);
        $this->cache->save($cacheItem);
        return false;
    }

    public function offsetExists($keyId): bool
    {
        return $this->keyIdExists($keyId);
    }

    public function offsetSet($offset, $value): void
    {
        throw new LogicException('Method not implemented');
    }

    public function offsetUnset($offset): void
    {
        throw new LogicException('Method not implemented');
    }
}
