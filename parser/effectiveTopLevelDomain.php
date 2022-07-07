<?php declare(strict_types=1);

namespace Pdp;
interface effectiveTopLevelDomain extends host, domainNameProvider
{
    public function isKnown(): bool;

    public function isIANA(): bool;

    public function isPublicSuffix(): bool;

    public function isICANN(): bool;

    public function isPrivate(): bool;

    public function normalize(domainName $domain): self;
}