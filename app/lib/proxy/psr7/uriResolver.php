<?php namespace yxorP\app\lib\proxy\psr7;

use yxorP\app\lib\psr\http\message\uriInterface;

final class uriResolver
{
    private function __construct()
    {
    }

    public static function resolve(uriInterface $base, uriInterface $rel)
    {
        if ((string)$rel === '') {
            return $base;
        }
        if ($rel->getScheme() != '') {
            return $rel->withPath(self::removeDotSegments($rel->getPath()));
        }
        if ($rel->getAuthority() != '') {
            $targetAuthority = $rel->getAuthority();
            $targetPath = self::removeDotSegments($rel->getPath());
            $targetQuery = $rel->getQuery();
        } else {
            $targetAuthority = $base->getAuthority();
            if ($rel->getPath() === '') {
                $targetPath = $base->getPath();
                $targetQuery = $rel->getQuery() != '' ? $rel->getQuery() : $base->getQuery();
            } else {
                if ($rel->getPath()[0] === '/') {
                    $targetPath = $rel->getPath();
                } else {
                    if ($targetAuthority != '' && $base->getPath() === '') {
                        $targetPath = '/' . $rel->getPath();
                    } else {
                        $lastSlashPos = strrpos($base->getPath(), '/');
                        if ($lastSlashPos === false) {
                            $targetPath = $rel->getPath();
                        } else {
                            $targetPath = substr($base->getPath(), 0, $lastSlashPos + 1) . $rel->getPath();
                        }
                    }
                }
                $targetPath = self::removeDotSegments($targetPath);
                $targetQuery = $rel->getQuery();
            }
        }
        return new uri(uri::composeComponents($base->getScheme(), $targetAuthority, $targetPath, $targetQuery, $rel->getFragment()));
    }

    public static function removeDotSegments($path)
    {
        if ($path === '' || $path === '/') {
            return $path;
        }
        $results = [];
        $segments = explode('/', $path);
        foreach ($segments as $segment) {
            if ($segment === '..') {
                array_pop($results);
            } elseif ($segment !== '.') {
                $results[] = $segment;
            }
        }
        $newPath = implode('/', $results);
        if ($path[0] === '/' && (!isset($newPath[0]) || $newPath[0] !== '/')) {
            $newPath = '/' . $newPath;
        } elseif ($newPath !== '' && ($segment === '.' || $segment === '..')) {
            $newPath .= '/';
        }
        return $newPath;
    }

    public static function relativize(uriInterface $base, uriInterface $target)
    {
        if ($target->getScheme() !== '' && ($base->getScheme() !== $target->getScheme() || $target->getAuthority() === '' && $base->getAuthority() !== '')) {
            return $target;
        }
        if (uri::isRelativePathReference($target)) {
            return $target;
        }
        if ($target->getAuthority() !== '' && $base->getAuthority() !== $target->getAuthority()) {
            return $target->withScheme('');
        }
        $emptyPathUri = $target->withScheme('')->withPath('')->withUserInfo('')->withPort(null)->withHost('');
        if ($base->getPath() !== $target->getPath()) {
            return $emptyPathUri->withPath(self::getRelativePath($base, $target));
        }
        if ($base->getQuery() === $target->getQuery()) {
            return $emptyPathUri->withQuery('');
        }
        if ($target->getQuery() === '') {
            $segments = explode('/', $target->getPath());
            $lastSegment = end($segments);
            return $emptyPathUri->withPath($lastSegment === '' ? './' : $lastSegment);
        }
        return $emptyPathUri;
    }

    private static function getRelativePath(uriInterface $base, uriInterface $target)
    {
        $sourceSegments = explode('/', $base->getPath());
        $targetSegments = explode('/', $target->getPath());
        array_pop($sourceSegments);
        $targetLastSegment = array_pop($targetSegments);
        foreach ($sourceSegments as $i => $segment) {
            if (isset($targetSegments[$i]) && $segment === $targetSegments[$i]) {
                unset($sourceSegments[$i], $targetSegments[$i]);
            } else {
                break;
            }
        }
        $targetSegments[] = $targetLastSegment;
        $relativePath = str_repeat('../', count($sourceSegments)) . implode('/', $targetSegments);
        if ('' === $relativePath || false !== strpos(explode('/', $relativePath, 2)[0], ':')) {
            $relativePath = "./$relativePath";
        } elseif ('/' === $relativePath[0]) {
            if ($base->getAuthority() != '' && $base->getPath() === '') {
                $relativePath = ".$relativePath";
            } else {
                $relativePath = "./$relativePath";
            }
        }
        return $relativePath;
    }
}
