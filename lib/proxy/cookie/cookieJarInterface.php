<?php namespace yxorP\lib\proxy\cookie;

use Countable;
use IteratorAggregate;
use yxorP\lib\psr\http\message\requestInterface;
use yxorP\lib\psr\http\message\responseInterface;

interface cookieJarInterface extends Countable, IteratorAggregate
{
    public function withCookieHeader(requestInterface $request);

    public function extractCookies(requestInterface $request, responseInterface $response);

    public function setCookie(setCookie $cookie);

    public function clear($domain = null, $path = null, $name = null);

    public function clearSessionCookies();

    public function toArray();
}
