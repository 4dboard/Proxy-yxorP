<?php

namespace yxorP\inc\parser;

use function array_filter;
use const ARRAY_FILTER_USE_KEY;

final class idnaInfo
{
    private const ERRORS = [idna::ERROR_EMPTY_LABEL => 'a non-final domain name label (or the whole domain name) is empty', idna::ERROR_LABEL_TOO_LONG => 'a domain name label is longer than 63 bytes', idna::ERROR_DOMAIN_NAME_TOO_LONG => 'a domain name is longer than 255 bytes in its storage form', idna::ERROR_LEADING_HYPHEN => 'a label starts with a hyphen-minus ("-")', idna::ERROR_TRAILING_HYPHEN => 'a label ends with a hyphen-minus ("-")', idna::ERROR_HYPHEN_3_4 => 'a label contains hyphen-minus ("-") in the third and fourth positions', idna::ERROR_LEADING_COMBINING_MARK => 'a label starts with a combining mark', idna::ERROR_DISALLOWED => 'a label or domain name contains disallowed characters', idna::ERROR_PUNYCODE => 'a label starts with "xn--" but does not contain valid Punycode', idna::ERROR_LABEL_HAS_DOT => 'a label contains a dot=full stop', idna::ERROR_INVALID_ACE_LABEL => 'An ACE label does not contain a valid label string', idna::ERROR_BIDI => 'a label does not meet the IDNA BiDi requirements (for right-to-left characters)', idna::ERROR_CONTEXTJ => 'a label does not meet the IDNA CONTEXTJ requirements', idna::ERROR_CONTEXTO_DIGITS => 'a label does not meet the IDNA CONTEXTO requirements for digits', idna::ERROR_CONTEXTO_PUNCTUATION => 'a label does not meet the IDNA CONTEXTO requirements for punctuation characters. Some punctuation characters "Would otherwise have been DISALLOWED" but are allowed in certain contexts',];
    private string $result;
    private bool $isTransitionalDifferent;
    private int $errors;
    private array $errorList;

    private function __construct(string $result, bool $isTransitionalDifferent, int $errors)
    {
        $this->result = $result;
        $this->errors = $errors;
        $this->isTransitionalDifferent = $isTransitionalDifferent;
        $this->errorList = array_filter(self::ERRORS, fn(int $error): bool => 0 !== ($error & $this->errors), ARRAY_FILTER_USE_KEY);
    }

    public static function __set_state(array $properties): self
    {
        return self::fromIntl($properties);
    }

    public static function fromIntl(array $infos): self
    {
        return new self($infos['result'], $infos['isTransitionalDifferent'], $infos['errors']);
    }

    public function result(): string
    {
        return $this->result;
    }

    public function isTransitionalDifferent(): bool
    {
        return $this->isTransitionalDifferent;
    }

    public function errors(): int
    {
        return $this->errors;
    }

    public function error(int $error): ?string
    {
        return $this->errorList[$error] ?? null;
    }

    public function errorList(): array
    {
        return $this->errorList;
    }
}