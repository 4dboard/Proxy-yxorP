<?php namespace yxorP\app\lib\proxy\psr7;

use InvalidArgumentException;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\psr\http\message\serverRequestInterface;
use yxorP\app\lib\psr\http\message\uploadedFileInterface;

class serverRequest extends request implements serverRequestInterface
{
    private array $attributes = [];
    private array $cookieParams = [];
    private array|null|object $parsedBody;
    private array $queryParams = [];
    private array $serverParams;
    private array $uploadedFiles = [];

    public function __construct($method, $uri, array $headers = [], $body = null, $version = '1.1', array $serverParams = [])
    {
        $this->serverParams = $serverParams;
        parent::__construct($method, $uri, $headers, $body, $version);
    }

    public static function fromGlobals(): serverRequest
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $headers = helpers::getallheaders();
        $uri = self::getUriFromGlobals();
        $body = new cachingStream(new lazyOpenStream('php://input', 'r+'));
        $protocol = isset($_SERVER['SERVER_PROTOCOL']) ? str_replace('HTTP/', '', $_SERVER['SERVER_PROTOCOL']) : '1.1';
        $serverRequest = new serverRequest($method, $uri, $headers, $body, $protocol, $_SERVER);
        return $serverRequest->withCookieParams($_COOKIE)->withQueryParams($_GET)->withParsedBody($_POST)->withUploadedFiles(self::normalizeFiles($_FILES));
    }

    public static function getUriFromGlobals(): uri
    {
        $uri = new uri('');
        $uri = $uri->withScheme(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http');
        $hasPort = false;
        if (isset($_SERVER['HTTP_HOST'])) {
            list($host, $port) = self::extractHostAndPortFromAuthority($_SERVER['HTTP_HOST']);
            if ($host !== null) {
                $uri = $uri->withHost($host);
            }
            if ($port !== null) {
                $hasPort = true;
                $uri = $uri->withPort($port);
            }
        } elseif (isset($_SERVER['SERVER_NAME'])) {
            $uri = $uri->withHost($_SERVER['SERVER_NAME']);
        } elseif (isset($_SERVER['SERVER_ADDR'])) {
            $uri = $uri->withHost($_SERVER['SERVER_ADDR']);
        }
        if (!$hasPort && isset($_SERVER['SERVER_PORT'])) {
            $uri = $uri->withPort($_SERVER['SERVER_PORT']);
        }
        $hasQuery = false;
        if (isset($_SERVER['REQUEST_URI'])) {
            $requestUriParts = explode('?', $_SERVER['REQUEST_URI'], 2);
            $uri = $uri->withPath($requestUriParts[0]);
            if (isset($requestUriParts[1])) {
                $hasQuery = true;
                $uri = $uri->withQuery($requestUriParts[1]);
            }
        }
        if (!$hasQuery && isset($_SERVER['QUERY_STRING'])) {
            $uri = $uri->withQuery($_SERVER['QUERY_STRING']);
        }
        return $uri;
    }

    private static function extractHostAndPortFromAuthority($authority): array
    {
        $uri = 'https://' . $authority;
        $parts = parse_url($uri);
        if (false === $parts) {
            return [null, null];
        }
        $host = $parts['host'] ?? null;
        $port = $parts['port'] ?? null;
        return [$host, $port];
    }

    public function withUploadedFiles(array $uploadedFiles): serverRequest
    {
        $new = clone $this;
        $new->uploadedFiles = $uploadedFiles;
        return $new;
    }

    public function withParsedBody(object|array|null $data): serverRequest
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }

    public function withQueryParams(array $query): serverRequest
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }

    public function withCookieParams(array $cookies): serverRequest
    {
        $new = clone $this;
        $new->cookieParams = $cookies;
        return $new;
    }

    public static function normalizeFiles(array $files): array
    {
        $normalized = [];
        foreach ($files as $key => $value) {
            if ($value instanceof uploadedFileInterface) {
                $normalized[$key] = $value;
            } elseif (is_array($value) && isset($value['cache_name'])) {
                $normalized[$key] = self::createUploadedFileFromSpec($value);
            } elseif (is_array($value)) {
                $normalized[$key] = self::normalizeFiles($value);
            } else {
                throw new InvalidArgumentException('Invalid value in files specification');
            }
        }
        return $normalized;
    }

    private static function createUploadedFileFromSpec(array $value): array|uploadedFile
    {
        if (is_array($value['cache_name'])) {
            return self::normalizeNestedFileSpec($value);
        }
        return new uploadedFile($value['cache_name'], (int)$value['size'], (int)$value['error'], $value['name'], $value['type']);
    }

    private static function normalizeNestedFileSpec(array $files = []): array
    {
        $normalizedFiles = [];
        foreach (array_keys($files['cache_name']) as $key) {
            $spec = ['cache_name' => $files['cache_name'][$key], 'size' => $files['size'][$key], 'error' => $files['error'][$key], 'name' => $files['name'][$key], 'type' => $files['type'][$key],];
            $normalizedFiles[$key] = self::createUploadedFileFromSpec($spec);
        }
        return $normalizedFiles;
    }

    public function getServerParams(): array
    {
        return $this->serverParams;
    }

    public function getUploadedFiles(): array
    {
        return $this->uploadedFiles;
    }

    public function getCookieParams(): array
    {
        return $this->cookieParams;
    }

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getParsedBody(): object|array|null
    {
        return $this->parsedBody;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getAttribute(string $name, mixed $default = null)
    {
        if (false === array_key_exists($name, $this->attributes)) {
            return $default;
        }
        return $this->attributes[$name];
    }

    public function withAttribute(string $name, mixed $value): serverRequest
    {
        $new = clone $this;
        $new->attributes[$name] = $value;
        return $new;
    }

    public function withoutAttribute(string $name): static
    {
        if (false === array_key_exists($name, $this->attributes)) {
            return $this;
        }
        $new = clone $this;
        unset($new->attributes[$name]);
        return $new;
    }
}
