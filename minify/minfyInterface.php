<?php

namespace yxorP\Minify;

interface MinfyInterface
{
    public function process(string $buffer): string;
}
