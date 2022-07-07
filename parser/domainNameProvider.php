<?php declare(strict_types=1);

namespace Pdp;
interface domainNameProvider
{
    public function domain(): domainName;
}