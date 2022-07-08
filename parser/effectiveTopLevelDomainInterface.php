<?php

namespace yxorP\parser;
interface effectiveTopLevelDomainInterface extends bHostInterface, domainNameProviderInterface
{
    public function isKnown(): bool;

    public function isIANA(): bool;

    public function isPublicSuffix(): bool;

    public function isICANN(): bool;

    public function isPrivate(): bool;

    public function normalize(aaDomainNameInterface $domain): self;
}