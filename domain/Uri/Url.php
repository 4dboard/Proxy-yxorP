<?php declare(strict_types=1);

namespace Pdp\Uri;

use Pdp\Parser;
use Pdp\Uri\Url\Host;
use voku\helper\UTF8;
use function preg_replace;
use function urlencode;

class Url
{
    protected $scheme;
    protected $host;
    protected $port;
    protected $user;
    protected $pass;
    protected $path;
    protected $query;
    protected $fragment;

    public function __construct($scheme, $user, $pass, Host $host, $port, $path, $query, $fragment)
    {
        $this->scheme = $scheme ? UTF8::strtolower($scheme) : null;
        $this->user = $user;
        $this->pass = $pass;
        $this->host = $host;
        $this->port = $port;
        $this->path = $path;
        $this->query = $query;
        $this->fragment = $fragment;
    }

    public function __toString()
    {
        $url = '';
        if ($this->scheme) {
            $url .= $this->scheme . '://';
        }
        if ($this->user) {
            $url .= urlencode($this->user);
            if ($this->pass) {
                $url .= ':' . urlencode($this->pass);
            }
            $url .= '@';
        }
        $host = (string)$this->host;
        if ($host) {
            $url .= $host;
        }
        if ($this->port) {
            $url .= ':' . (int)$this->port;
        }
        if ($this->path) {
            $url .= $this->path;
        }
        if ($this->query) {
            $url .= '?' . $this->query;
        }
        if ($this->fragment) {
            $url .= '#' . urlencode($this->fragment);
        }
        return $url;
    }

    public function getSchemeless(): string
    {
        return (string)preg_replace(Parser::SCHEME_PATTERN, '//', (string)$this, 1);
    }

    public function toArray(): array
    {
        return ['scheme' => $this->getScheme(), 'user' => $this->getUser(), 'pass' => $this->getPass(), 'host' => (string)$this->getHost(), 'subdomain' => $this->getHost()->getSubdomain(), 'registrableDomain' => $this->getHost()->getRegistrableDomain(), 'publicSuffix' => $this->getHost()->getPublicSuffix(), 'port' => $this->getPort(), 'path' => $this->getPath(), 'query' => $this->getQuery(), 'fragment' => $this->getFragment(),];
    }

    public function getScheme()
    {
        return $this->scheme;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function getHost(): Host
    {
        return $this->host;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getFragment()
    {
        return $this->fragment;
    }
}