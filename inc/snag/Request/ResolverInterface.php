<?php

namespace yxorP\inc\snag\Request;

interface ResolverInterface
{
    /**
     * Resolve the current request.
     *
     * @return RequestInterface
     */
    public function resolve(): RequestInterface;
}
