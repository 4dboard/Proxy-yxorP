<?php

namespace yxorP\app\lib\minify;

interface minfyInterface
{
    public function process(string $buffer): string;
}
