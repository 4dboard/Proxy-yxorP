<?php

declare(strict_types=1);

/**
 * PHP Domain Parser: Public Suffix List based URL parsing.
 *
 * @see       http://github.com/jeremykendall/php-domain-parser for the canonical source repository
 *
 * @copyright Copyright (c) 2014 Jeremy Kendall (http://about.me/jeremykendall)
 * @license   http://github.com/jeremykendall/php-domain-parser/blob/master/LICENSE MIT License
 */
namespace Pdp\Uri\Url;

/**
 * Represents the host portion of a Url.
 */
class Host
{
    /**
     * @var string|null Subdomain
     */
    protected $subdomain;

    /**
     * @var string|null Registrable domain
     */
    protected $registrableDomain;

    /**
     * @var string|null Public suffix
     */
    protected $publicSuffix;

    /**
     * @var string host Entire host part
     */
    protected $host = '';

    /**
     * Public constructor.
     *
     * @param string|null $subdomain         Subdomain portion of host
     * @param string|null $registrableDomain Registrable domain portion of host
     * @param string|null $publicSuffix      Public suffix portion of host
     * @param string      $host              OPTIONAL Entire host part
     */
    public function __construct($subdomain, $registrableDomain, $publicSuffix, $host = '')
    {
        $this->subdomain = $subdomain;
        $this->registrableDomain = $registrableDomain;
        $this->publicSuffix = $publicSuffix;
        $this->host = $host;
    }

    /**
     * Get string representation of host.
     *
     * @return string String representation of host
     */
    public function __toString()
    {
        if ($this->host) {
            return $this->host;
        }

        // retain only the elements that are not empty
        $str = \array_filter(
            [$this->subdomain, $this->registrableDomain],
            '\strlen'
        );

        return \implode('.', $str);
    }

    /**
     * Get Subdomain.
     *
     * @return string|null
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * @return string|null
     */
    public function getRegistrableDomain()
    {
        return $this->registrableDomain;
    }

    /**
     * Get Public suffix.
     *
     * @return string|null
     */
    public function getPublicSuffix()
    {
        return $this->publicSuffix;
    }

    /**
     * Get Entire host part.
     *
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Get array representation of host.
     *
     * @return array Array representation of host
     */
    public function toArray(): array
    {
        return [
            'subdomain'         => $this->getSubdomain(),
            'registrableDomain' => $this->getRegistrableDomain(),
            'publicSuffix'      => $this->getPublicSuffix(),
            'host'              => $this->getHost(),
        ];
    }
}
