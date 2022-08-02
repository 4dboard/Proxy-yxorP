<?php namespace yxorP\app\lib\data\annotation;

use Doctrine\Common\Cache\Cache;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;
use function array_map;
use function array_merge;
use function assert;
use function filemtime;
use function max;
use function time;

final class cachedReader
{
    private $delegate;
    private $cache;
    private $debug;
    private $loadedAnnotations = [];
    private $loadedFilemtimes = [];

    public function __construct(Cache $cache, $debug = false)
    {
        $this->cache = $cache;
        $this->debug = (bool)$debug;
    }

    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        foreach ($this->getClassAnnotations($class) as $annot) if ($annot instanceof $annotationName) return $annot;
        return null;
    }

    public function getClassAnnotations(ReflectionClass $class)
    {
        $cacheKey = $class->getName();
        if (isset($this->loadedAnnotations[$cacheKey])) {
            return $this->loadedAnnotations[$cacheKey];
        }
        $annots = $this->fetchFromCache($cacheKey, $class);
        if ($annots === false) {
            $annots = $this->delegate->getClassAnnotations($class);
            $this->saveToCache($cacheKey, $annots);
        }
        return $this->loadedAnnotations[$cacheKey] = $annots;
    }

    private function fetchFromCache($cacheKey, ReflectionClass $class)
    {
        $data = $this->cache->fetch($cacheKey);
        if ($data !== false) {
            if (!$this->debug || $this->isCacheFresh($cacheKey, $class)) {
                return $data;
            }
        }
        return false;
    }

    private function isCacheFresh($cacheKey, ReflectionClass $class)
    {
        $lastModification = $this->getLastModification($class);
        if ($lastModification === 0) {
            return true;
        }
        return $this->cache->fetch('[C]' . $cacheKey) >= $lastModification;
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

    private function saveToCache($cacheKey, $value)
    {
        $this->cache->save($cacheKey, $value);
        if (!$this->debug) {
            return;
        }
        $this->cache->save('[C]' . $cacheKey, time());
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
        $annots = $this->fetchFromCache($cacheKey, $class);
        if ($annots === false) {
            $annots = $this->delegate->getPropertyAnnotations($property);
            $this->saveToCache($cacheKey, $annots);
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
        $annots = $this->fetchFromCache($cacheKey, $class);
        if ($annots === false) {
            $annots = $this->delegate->getMethodAnnotations($method);
            $this->saveToCache($cacheKey, $annots);
        }
        return $this->loadedAnnotations[$cacheKey] = $annots;
    }

    public function clearLoadedAnnotations()
    {
        $this->loadedAnnotations = [];
        $this->loadedFilemtimes = [];
    }
}
