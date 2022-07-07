<?php declare(strict_types=1);

namespace yxorP\parser;


use yxorP\parser\Exception\seriouslyMalformedUrlException;
use yxorP\parser\Uri\url;
use yxorP\parser\Uri\Url\host;
use function array_reverse;
use function array_shift;
use function array_slice;
use function count;
use function explode;
use function implode;
use function preg_match;
use function preg_replace;
use function strlen;
use function strpos;

class parser
{
    const SCHEME_PATTERN = '#^([a-zA-Z][a-zA-Z0-9+\-.]*)://#';
    const IP_ADDRESS_PATTERN = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
    protected $publicSuffixList;
    protected $isNormalized = false;
    private $punycodeWrapper;

    public function __construct(publicSuffixList $publicSuffixList)
    {
        $this->publicSuffixList = $publicSuffixList;
        $this->punycodeWrapper = new punycodeWrapper();
    }

    public function parseUrl($url): url
    {
        $rawUrl = $url;
        $elem = ['scheme' => null, 'user' => null, 'pass' => null, 'host' => null, 'port' => null, 'path' => null, 'query' => null, 'fragment' => null,];
        if (preg_match(self::SCHEME_PATTERN, $url) === 0) {
            $url = 'php-hack://' . preg_replace('#^//#', '', $url, 1);
        }
        $parts = pdp_parse_url($url);
        if ($parts === false || !isset($parts['host'])) {
            throw new seriouslyMalformedUrlException($rawUrl);
        }
        if ($parts['scheme'] === 'php-hack') {
            $parts['scheme'] = null;
        }
        $elem = (array)$parts + $elem;
        $host = $this->parseHost($parts['host']);
        return new url($elem['scheme'], $elem['user'], $elem['pass'], $host, $elem['port'], $elem['path'], $elem['query'], $elem['fragment']);
    }

    public function parseHost(string $host): host
    {
        $host = UTF8::strtolower($host);
        return new host($this->getSubdomain($host), $this->getRegistrableDomain($host), $this->getPublicSuffix($host), $host);
    }

    public function getSubdomain(string $host)
    {
        $registrableDomain = $this->getRegistrableDomain($host);
        if ($registrableDomain === null || $host === $registrableDomain) {
            return null;
        }
        $registrableDomainParts = array_reverse(explode('.', $registrableDomain));
        $host = $this->normalize($host);
        $hostParts = array_reverse(explode('.', $host));
        $subdomainParts = array_slice($hostParts, count($registrableDomainParts));
        $subdomain = implode('.', array_reverse($subdomainParts));
        return $this->denormalize($subdomain);
    }

    public function getRegistrableDomain($host)
    {
        if ($host === null || !$this->isMultiLabelDomain($host)) {
            return null;
        }
        $publicSuffix = $this->getPublicSuffix($host);
        if ($publicSuffix === null || $host == $publicSuffix) {
            return null;
        }
        $publicSuffixParts = array_reverse(explode('.', $publicSuffix));
        $hostParts = array_reverse(explode('.', $host));
        $registrableDomainParts = $publicSuffixParts + array_slice($hostParts, 0, count($publicSuffixParts) + 1);
        return implode('.', array_reverse($registrableDomainParts));
    }

    protected function isMultiLabelDomain($host): bool
    {
        if (!$host) {
            return false;
        }
        return strpos($host, '.') !== false;
    }

    public function getPublicSuffix(string $host)
    {
        if (strpos($host, '.') === 0) {
            return null;
        }
        if (!$this->isMultiLabelDomain($host)) {
            return null;
        }
        if ($this->isIpv4Address($host)) {
            return null;
        }
        $suffix = $this->getRawPublicSuffix($host);
        if ($suffix === false) {
            $parts = array_reverse(explode('.', $host));
            $suffix = array_shift($parts);
        }
        return $suffix;
    }

    protected function isIpv4Address(string $host): bool
    {
        return preg_match(self::IP_ADDRESS_PATTERN, $host) === 1;
    }

    protected function getRawPublicSuffix(string $host)
    {
        $host = $this->normalize($host);
        $parts = array_reverse(explode('.', $host));
        $publicSuffix = Arrayy::create();
        $publicSuffixList = clone $this->publicSuffixList;
        foreach ($parts as $part) {
            if ($publicSuffixList->keyExists($part) && ($partValue = $publicSuffixList->get($part))) {
                if ($partValue->keyExists('!')) {
                    break;
                }
                $publicSuffix->unshift($part);
                $publicSuffixList = $partValue;
                continue;
            }
            if ($publicSuffixList->keyExists('*')) {
                $publicSuffix->unshift($part);
                $publicSuffixList = $publicSuffixList->get('*');
                continue;
            }
            break;
        }
        if ($publicSuffix->isEmpty()) {
            return false;
        }
        $suffix = $publicSuffix->filter(static function ($value) {
            return strlen($value);
        })->implode('.');
        return $this->denormalize($suffix);
    }

    protected function normalize(string $part): string
    {
        $punycoded = (strpos($part, 'xn--') !== false);
        if ($punycoded === false) {
            $part = $this->punycodeWrapper->encode($part);
            $this->isNormalized = true;
        }
        return UTF8::strtolower($part);
    }

    protected function denormalize(string $part): string
    {
        if ($this->isNormalized === true) {
            $part = $this->punycodeWrapper->decode($part);
            $this->isNormalized = false;
        }
        return $part;
    }

    public function isSuffixValid(string $host): bool
    {
        return $this->getRawPublicSuffix($host) !== false;
    }
}