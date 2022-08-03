<?php namespace yxorP\app\lib\data\annotation;


use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\invalidArgumentExceptionInterface;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;
use Reflector;
use function array_map;
use function array_merge;
use function assert;
use function filemtime;
use function max;
use function rawurlencode;
use function time;

final class psrCachedReader implements readerInterface
{
    private readerInterface $delegate;
    private CacheItemPoolInterface $cache;
    private bool $debug;
    private array $loadedAnnotations = [];
    private array $loadedFilemtimes = [];

    public function __construct(readerInterface $reader, CacheItemPoolInterface $cache, bool $debug = false)
    {
        $this->delegate = $reader;
        $this->cache = $cache;
        $this->debug = $debug;
    }

    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        foreach ($this->getClassAnnotations($class) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getClassAnnotations(ReflectionClass $class)
    {
        $cacheKey = $class->getName();
        if (isset($this->loadedAnnotations[$cacheKey])) {
            return $this->loadedAnnotations[$cacheKey];
        }
        try {
            $annots = $this->fetchFromCache($cacheKey, $class, 'getClassAnnotations', $class);
        } catch (invalidArgumentExceptionInterface $e) {
        }
        return $this->loadedAnnotations[$cacheKey] = $annots;
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        foreach ($this->getPropertyAnnotations($property) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getPropertyAnnotations(ReflectionProperty $property)
    {
        $class = $property->getDeclaringClass();
        $cacheKey = $class->getName() . '$' . $property->getName();
        if (isset($this->loadedAnnotations[$cacheKey])) {
            return $this->loadedAnnotations[$cacheKey];
        }
        try {
            $annots = $this->fetchFromCache($cacheKey, $class, 'getPropertyAnnotations', $property);
        } catch (invalidArgumentExceptionInterface $e) {
        }
        return $this->loadedAnnotations[$cacheKey] = $annots;
    }

    public function getMethodAnnotation(ReflectionMethod $method, $annotationName)
    {
        foreach ($this->getMethodAnnotations($method) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getMethodAnnotations(ReflectionMethod $method)
    {
        $class = $method->getDeclaringClass();
        $cacheKey = $class->getName() . '#' . $method->getName();
        if (isset($this->loadedAnnotations[$cacheKey])) {
            return $this->loadedAnnotations[$cacheKey];
        }
        try {
            $annots = $this->fetchFromCache($cacheKey, $class, 'getMethodAnnotations', $method);
        } catch (invalidArgumentExceptionInterface $e) {
        }
        return $this->loadedAnnotations[$cacheKey] = $annots;
    }

    public function clearLoadedAnnotations(): void
    {
        $this->loadedAnnotations = [];
        $this->loadedFilemtimes = [];
    }

    /**
     * @throws invalidArgumentExceptionInterface
     */
    private function fetchFromCache(string $cacheKey, ReflectionClass $class, string $method, Reflector $reflector): array
    {
        $cacheKey = rawurlencode($cacheKey);
        $item = $this->cache->getItem($cacheKey);
        if (($this->debug && !$this->refresh($cacheKey, $class)) || !$item->isHit()) {
            $this->cache->save($item->set($this->delegate->{$method}($reflector)));
        }
        return $item->get();
    }

    /**
     * @throws invalidArgumentExceptionInterface
     */
    private function refresh(string $cacheKey, ReflectionClass $class): bool
    {
        $lastModification = $this->getLastModification($class);
        if ($lastModification === 0) {
            return true;
        }
        $item = $this->cache->getItem('[C]' . $cacheKey);
        if ($item->isHit() && $item->get() >= $lastModification) {
            return true;
        }
        $this->cache->save($item->set(time()));
        return false;
    }

    private function getLastModification(ReflectionClass $class): int
    {
        $filename = $class->getFileName();
        if (isset($this->loadedFilemtimes[$filename])) {
            return $this->loadedFilemtimes[$filename];
        }
        $parent = $class->getParentClass();
        $lastModification = max(array_merge([$filename ? filemtime($filename) : 0], array_map(function (ReflectionClass $reflectionTrait): int {
            return $this->getTraitLastModificationTime($reflectionTrait);
        }, $class->getTraits()), array_map(function (ReflectionClass $class): int {
            return $this->getLastModification($class);
        }, $class->getInterfaces()), $parent ? [$this->getLastModification($parent)] : []));
        assert($lastModification !== false);
        return $this->loadedFilemtimes[$filename] = $lastModification;
    }

    private function getTraitLastModificationTime(ReflectionClass $reflectionTrait): int
    {
        $fileName = $reflectionTrait->getFileName();
        if (isset($this->loadedFilemtimes[$fileName])) {
            return $this->loadedFilemtimes[$fileName];
        }
        $lastModificationTime = max(array_merge([$fileName ? filemtime($fileName) : 0], array_map(function (ReflectionClass $reflectionTrait): int {
            return $this->getTraitLastModificationTime($reflectionTrait);
        }, $reflectionTrait->getTraits())));
        assert($lastModificationTime !== false);
        return $this->loadedFilemtimes[$fileName] = $lastModificationTime;
    }
}
