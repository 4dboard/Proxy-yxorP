<?php

namespace yxorP\app\lib\parser;
interface topLevelDomainInterface extends hostInterface, domainNameProviderInterface
{
    public function isKnown(): bool;

    public function isIANA(): bool;

    public function isPublicSuffix(): bool;

    public function isICANN(): bool;

    public function isPrivate(): bool;

    public function normalize(nameInterface $domain): self;
}