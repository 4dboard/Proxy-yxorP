<?php

namespace yxorP\minify;

interface minfyInterface
{
    public function process(string $buffer): string;
}
