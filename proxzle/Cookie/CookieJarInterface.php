<?php namespace yxorP\guzzle\Cookie;

use Countable;
use IteratorAggregate;
use yxorP\psr\Http\Message\RequestInterface;
use yxorP\psr\Http\Message\ResponseInterface;

interface CookieJarInterface extends Countable, IteratorAggregate
{
    public function withCookieHeader(RequestInterface $request);

    public function extractCookies(RequestInterface $request, ResponseInterface $response);

    public function setCookie(SetCookie $cookie);

    public function clear($domain = null, $path = null, $name = null);

    public function clearSessionCookies();

    public function toArray();
}