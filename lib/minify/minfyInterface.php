<?php

namespace yxorP\lib\minify;

interface minfyInterface
{
    /**
     *
     */
    public function process(string $buffer): string;
}
