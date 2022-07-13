<?php

namespace yxorP\inc\parser;
interface effectiveTopLevelDomainInterface extends aHostInterface, domainNameProviderInterface
{
    public function isKnown(): bool;

    public function isIANA(): bool;

    public function isPublicSuffix(): bool;

    public function isICANN(): bool;

    public function isPrivate(): bool;

    public function normalize(aaDomainNameInterface $domain): self;
}