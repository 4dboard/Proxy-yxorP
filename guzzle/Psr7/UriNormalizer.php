<?php namespace yxorP\guzzle\Psr7;

use Psr\Http\Message\UriInterface;

final class UriNormalizer
{
    const PRESERVING_NORMALIZATIONS = 63;
    const CAPITALIZE_PERCENT_ENCODING = 1;
    const DECODE_UNRESERVED_CHARACTERS = 2;
    const CONVERT_EMPTY_PATH = 4;
    const REMOVE_DEFAULT_HOST = 8;
    const REMOVE_DEFAULT_PORT = 16;
    const REMOVE_DOT_SEGMENTS = 32;
    const REMOVE_DUPLICATE_SLASHES = 64;
    const SORT_QUERY_PARAMETERS = 128;

    private function __construct()
    {
    }

    public static function isEquivalent(UriInterface $uri1, UriInterface $uri2, $normalizations = self::PRESERVING_NORMALIZATIONS): bool
    {
        return (string)self::normalize($uri1, $normalizations) === (string)self::normalize($uri2, $normalizations);
    }

    public static function normalize(UriInterface $uri, $flags = self::PRESERVING_NORMALIZATIONS): UriInterface
    {
        if ($flags & self::CAPITALIZE_PERCENT_ENCODING) {
            $uri = self::capitalizePercentEncoding($uri);
        }
        if ($flags & self::DECODE_UNRESERVED_CHARACTERS) {
            $uri = self::decodeUnreservedCharacters($uri);
        }
        if ($flags & self::CONVERT_EMPTY_PATH && $uri->getPath() === '' && ($uri->getScheme() === 'http' || $uri->getScheme() === 'https')) {
            $uri = $uri->withPath('/');
        }
        if ($flags & self::REMOVE_DEFAULT_HOST && $uri->getScheme() === 'file' && $uri->getHost() === 'localhost') {
            $uri = $uri->withHost('');
        }
        if ($flags & self::REMOVE_DEFAULT_PORT && $uri->getPort() !== null && Uri::isDefaultPort($uri)) {
            $uri = $uri->withPort(null);
        }
        if ($flags & self::REMOVE_DOT_SEGMENTS && !Uri::isRelativePathReference($uri)) {
            $uri = $uri->withPath(UriResolver::removeDotSegments($uri->getPath()));
        }
        if ($flags & self::REMOVE_DUPLICATE_SLASHES) {
            $uri = $uri->withPath(preg_replace('#//++#', '/', $uri->getPath()));
        }
        if ($flags & self::SORT_QUERY_PARAMETERS && $uri->getQuery() !== '') {
            $queryKeyValues = explode('&', $uri->getQuery());
            sort($queryKeyValues);
            $uri = $uri->withQuery(implode('&', $queryKeyValues));
        }
        return $uri;
    }

    private static function capitalizePercentEncoding(UriInterface $uri): UriInterface
    {
        $regex = '/(?:%[A-Fa-f0-9]{2})++/';
        $callback = function (array $match) {
            return strtoupper($match[0]);
        };
        return $uri->withPath(preg_replace_callback($regex, $callback, $uri->getPath()))->withQuery(preg_replace_callback($regex, $callback, $uri->getQuery()));
    }

    private static function decodeUnreservedCharacters(UriInterface $uri): UriInterface
    {
        $regex = '/%(?:2D|2E|5F|7E|3[0-9]|[46][1-9A-F]|[57][0-9A])/i';
        $callback = function (array $match) {
            return rawurldecode($match[0]);
        };
        return $uri->withPath(preg_replace_callback($regex, $callback, $uri->getPath()))->withQuery(preg_replace_callback($regex, $callback, $uri->getQuery()));
    }
}