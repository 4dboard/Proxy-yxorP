<?php namespace yxorP\app\lib\proxy\cookie;

use Countable;
use IteratorAggregate;
use yxorP\app\lib\psr\http\message\requestInterface;
use yxorP\app\lib\psr\http\message\responseInterface;

interface cookieJarInterface extends Countable, IteratorAggregate
{
    public function withCookieHeader(requestInterface $request);

    public function extractCookies(requestInterface $request, responseInterface $response);

    public function setCookie(sessionCookieJar $cookie);

    public function clear($domain = null, $path = null, $name = null);

    public function clearSessionCookies();

    public function toArray();
}
