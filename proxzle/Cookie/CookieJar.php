<?php namespace yxorP\guzzle\Cookie;

use ArrayIterator;
use ReturnTypeWillChange;
use RuntimeException;
use yxorP\psr\Http\Message\RequestInterface;
use yxorP\psr\Http\Message\ResponseInterface;

class CookieJar implements CookieJarInterface
{
    private array $cookies = [];
    private mixed $strictMode;

    public function __construct($strictMode = false, $cookieArray = [])
    {
        $this->strictMode = $strictMode;
        foreach ($cookieArray as $cookie) {
            if (!($cookie instanceof SetCookie)) {
                $cookie = new SetCookie($cookie);
            }
            $this->setCookie($cookie);
        }
    }

    public function setCookie(SetCookie $cookie): bool
    {
        $name = $cookie->getName();
        if (!$name && $name !== '0') {
            return false;
        }
        $result = $cookie->validate();
        if ($result !== true) {
            if ($this->strictMode) {
                throw new RuntimeException('Invalid cookie: ' . $result);
            } else {
                $this->removeCookieIfEmpty($cookie);
                return false;
            }
        }
        foreach ($this->cookies as $i => $c) {
            if ($c->getPath() != $cookie->getPath() || $c->getDomain() != $cookie->getDomain() || $c->getName() != $cookie->getName()) {
                continue;
            }
            if (!$cookie->getDiscard() && $c->getDiscard()) {
                unset($this->cookies[$i]);
                continue;
            }
            if ($cookie->getExpires() > $c->getExpires()) {
                unset($this->cookies[$i]);
                continue;
            }
            if ($cookie->getValue() !== $c->getValue()) {
                unset($this->cookies[$i]);
                continue;
            }
            return false;
        }
        $this->cookies[] = $cookie;
        return true;
    }

    private function removeCookieIfEmpty(SetCookie $cookie)
    {
        $cookieValue = $cookie->getValue();
        if ($cookieValue === null || $cookieValue === '') {
            $this->clear($cookie->getDomain(), $cookie->getPath(), $cookie->getName());
        }
    }

    public function clear($domain = null, $path = null, $name = null)
    {
        if (!$domain) {
            $this->cookies = [];
        } elseif (!$path) {
            $this->cookies = array_filter($this->cookies, function (SetCookie $cookie) use ($domain) {
                return !$cookie->matchesDomain($domain);
            });
        } elseif (!$name) {
            $this->cookies = array_filter($this->cookies, function (SetCookie $cookie) use ($path, $domain) {
                return !($cookie->matchesPath($path) && $cookie->matchesDomain($domain));
            });
        } else {
            $this->cookies = array_filter($this->cookies, function (SetCookie $cookie) use ($path, $domain, $name) {
                return !($cookie->getName() == $name && $cookie->matchesPath($path) && $cookie->matchesDomain($domain));
            });
        }
    }

    public static function fromArray(array $cookies, $domain): CookieJar
    {
        $cookieJar = new self();
        foreach ($cookies as $name => $value) {
            $cookieJar->setCookie(new SetCookie(['Domain' => $domain, 'Name' => $name, 'Value' => $value, 'Discard' => true]));
        }
        return $cookieJar;
    }

    public static function getCookieValue($value)
    {
        return $value;
    }

    public static function shouldPersist(SetCookie $cookie, $allowSessionCookies = false): bool
    {
        if ($cookie->getExpires() || $allowSessionCookies) {
            if (!$cookie->getDiscard()) {
                return true;
            }
        }
        return false;
    }

    public function getCookieByName($name)
    {
        if (!is_scalar($name)) {
            return null;
        }
        foreach ($this->cookies as $cookie) {
            if ($cookie->getName() !== null && strcasecmp($cookie->getName(), $name) === 0) {
                return $cookie;
            }
        }
        return null;
    }

    /**
     * @throws \Exception
     */
    public function toArray(): array
    {
        return array_map(function (SetCookie $cookie) {
            return $cookie->toArray();
        }, $this->getIterator()->getArrayCopy());
    }

    #[ReturnTypeWillChange] public function getIterator(): ArrayIterator
    {
        return new ArrayIterator(array_values($this->cookies));
    }

    public function clearSessionCookies()
    {
        $this->cookies = array_filter($this->cookies, function (SetCookie $cookie) {
            return !$cookie->getDiscard() && $cookie->getExpires();
        });
    }

    #[ReturnTypeWillChange] public function count(): int
    {
        return count($this->cookies);
    }

    public function extractCookies(RequestInterface $request, ResponseInterface $response)
    {
        if ($cookieHeader = $response->getHeader('Set-Cookie')) {
            foreach ($cookieHeader as $cookie) {
                $sc = SetCookie::fromString($cookie);
                if (!$sc->getDomain()) {
                    $sc->setDomain($request->getUri()->getHost());
                }
                if (!str_starts_with($sc->getPath(), '/')) {
                    $sc->setPath($this->getCookiePathFromRequest($request));
                }
                $this->setCookie($sc);
            }
        }
    }

    private function getCookiePathFromRequest(RequestInterface $request): string
    {
        $uriPath = $request->getUri()->getPath();
        if ('' === $uriPath) {
            return '/';
        }
        if (!str_starts_with($uriPath, '/')) {
            return '/';
        }
        if ('/' === $uriPath) {
            return '/';
        }
        if (0 === $lastSlashPos = strrpos($uriPath, '/')) {
            return '/';
        }
        return substr($uriPath, 0, $lastSlashPos);
    }

    public function withCookieHeader(RequestInterface $request): RequestInterface
    {
        $values = [];
        $uri = $request->getUri();
        $scheme = $uri->getScheme();
        $host = $uri->getHost();
        $path = $uri->getPath() ?: '/';
        foreach ($this->cookies as $cookie) {
            if ($cookie->matchesPath($path) && $cookie->matchesDomain($host) && !$cookie->isExpired() && (!$cookie->getSecure() || $scheme === 'https')) {
                $values[] = $cookie->getName() . '=' . $cookie->getValue();
            }
        }
        return $values ? $request->withHeader('Cookie', implode('; ', $values)) : $request;
    }
}