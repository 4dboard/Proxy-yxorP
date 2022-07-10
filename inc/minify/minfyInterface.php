<?php

namespace yxorP\inc\minify;

interface minfyInterface
{
    public function process(string $buffer): string;
}
