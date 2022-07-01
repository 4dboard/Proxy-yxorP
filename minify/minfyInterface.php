<?php

namespace yxorP\Minify;

interface minfyInterface
{
    public function process(string $buffer): string;
}
