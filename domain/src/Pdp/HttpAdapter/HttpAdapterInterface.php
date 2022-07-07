<?php

/**
 * PHP Domain Parser: Public Suffix List based URL parsing.
 *
 * @see       http://github.com/jeremykendall/php-domain-parser for the canonical source repository
 *
 * @copyright Copyright (c) 2014 Jeremy Kendall (http://about.me/jeremykendall)
 * @license   http://github.com/jeremykendall/php-domain-parser/blob/master/LICENSE MIT License
 */
namespace Pdp\HttpAdapter;

use Pdp\Exception\HttpAdapterException;

/**
 * Interface for http adapters.
 *
 * Lifted pretty much completely from William Durand's excellent Geocoder
 * project
 *
 * @see   https://github.com/willdurand/Geocoder Geocoder on GitHub
 */
interface HttpAdapterInterface
{
    /**
     * Returns the content fetched from a given URL.
     *
     * @param string $url
     * @param int    $timeout
     *
     * @throws HttpAdapterException
     *
     * @return false|string Retrieved content
     */
    public function getContent($url, $timeout = 5);
}
