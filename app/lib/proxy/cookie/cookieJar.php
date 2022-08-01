<?php namespace yxorP\app\lib\proxy\cookie;

use ArrayIterator;
use RuntimeException;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

class cookieJar implements cookieJarInterface
{
    private $cookies = [];
    private $strictMode;

    public function __construct($strictMode = false, $cookieArray = [])
    {
        $this->strictMode = $strictMode;
        foreach ($cookieArray as $cookie) {
            if (!($cookie instanceof setCookie)) {
                $cookie = new setCookie($cookie);
            }
            $this->setCookie($cookie);
        }
    }

    public function setCookie(setCookie $cookie)
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

    private function removeCookieIfEmpty(setCookie $cookie)
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
            return;
        } elseif (!$path) {
            $this->cookies = array_filter($this->cookies, function (setCookie $cookie) use ($domain) {
                return !$cookie->matchesDomain($domain);
            });
        } elseif (!$name) {
            $this->cookies = array_filter($this->cookies, function (setCookie $cookie) use ($path, $domain) {
                return !($cookie->matchesPath($path) && $cookie->matchesDomain($domain));
            });
        } else {
            $this->cookies = array_filter($this->cookies, function (setCookie $cookie) use ($path, $domain, $name) {
                return !($cookie->getName() === $name && $cookie->matchesPath($path) && $cookie->matchesDomain($domain));
            });
        }
    }

    public static function fromArray(array $cookies, $domain)
    {
        $cookieJar = new self();
        foreach ($cookies as $name => $value) {
            $cookieJar->setCookie(new setCookie(['Domain' => $domain, 'Name' => $name, 'Value' => $value, 'Discard' => true]));
        }
        return $cookieJar;
    }

    public static function getCookieValue($value)
    {
        return $value;
    }

    public static function shouldPersist(setCookie $cookie, $allowSessionCookies = false)
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
        if ($name === null || !is_scalar($name)) {
            return null;
        }
        foreach ($this->cookies as $cookie) {
            if ($cookie->getName() !== null && strcasecmp($cookie->getName(), $name) === 0) {
                return $cookie;
            }
        }
        return null;
    }

    public function toArray()
    {
        return array_map(function (setCookie $cookie) {
            return $cookie->toArray();
        }, $this->getIterator()->getArrayCopy());
    }

    #[ReturnTypeWillChange] public function getIterator()
    {
        return new ArrayIterator(array_values($this->cookies));
    }

    public function clearSessionCookies()
    {
        $this->cookies = array_filter($this->cookies, function (setCookie $cookie) {
            return !$cookie->getDiscard() && $cookie->getExpires();
        });
    }

    #[ReturnTypeWillChange] public function count()
    {
        return count($this->cookies);
    }

    public function extractCookies(requestInterface $request, responseInterface $response)
    {
        if ($cookieHeader = $response->getHeader('Set-Cookie')) {
            foreach ($cookieHeader as $cookie) {
                $sc = setCookie::fromString($cookie);
                if (!$sc->getDomain()) {
                    $sc->setDomain($request->getUri()->getHost());
                }
                if (0 !== strpos($sc->getPath(), '/')) {
                    $sc->setPath($this->getCookiePathFromRequest($request));
                }
                $this->setCookie($sc);
            }
        }
    }

    private function getCookiePathFromRequest(requestInterface $request)
    {
        $uriPath = $request->getUri()->getPath();
        if ('' === $uriPath) {
            return '/';
        }
        if (0 !== strpos($uriPath, '/')) {
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

    public function withCookieHeader(requestInterface $request)
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

