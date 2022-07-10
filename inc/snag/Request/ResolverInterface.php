<?php

namespace yxorP\inc\snag\Request;

interface ResolverInterface
{
    /**
     * Resolve the current request.
     *
     * @return \yxorP\inc\snag\Request\RequestInterface
     */
    public function resolve();
}
