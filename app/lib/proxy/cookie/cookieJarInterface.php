<?php namespace yxorP\app\lib\proxy\cookie;

use Countable;
use IteratorAggregate;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

interface cookieJarInterface extends Countable, IteratorAggregate
{
    public function withCookieHeader(RequestInterface $request);

    public function extractCookies(RequestInterface $request, ResponseInterface $response);

    public function setCookie(sessionCookieJar $cookie);

    public function clear($domain = null, $path = null, $name = null);

    public function clearSessionCookies();

    public function toArray();
}
