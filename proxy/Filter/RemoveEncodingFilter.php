<?php

namespace Proxy\Filter;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RemoveEncodingFilter implements FilterInterface
{
    public const TRANSFER_ENCODING = 'transfer-encoding';
    public const CONTENT_ENCODING = 'content-encoding';

    public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next)
    {
        $response = $next($request, $response);

        return $response
            ->withoutHeader(self::TRANSFER_ENCODING)
            ->withoutHeader(self::CONTENT_ENCODING);
    }
}
