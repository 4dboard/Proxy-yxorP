<?php

namespace yxorP\snag\Request;

interface ResolverInterface
{
    /**
     * Resolve the current request.
     *
     * @return \yxorP\snag\Request\RequestInterface
     */
    public function resolve();
}
