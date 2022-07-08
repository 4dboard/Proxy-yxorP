<?php declare(strict_types=1);

namespace yxorP\parser;
interface domainNameProvider
{
    public function domain(): domainName;
}