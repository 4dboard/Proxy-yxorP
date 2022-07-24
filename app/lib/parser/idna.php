<?php

namespace yxorP\app\lib\parser;


use function defined;
use function function_exists;
use function idn_to_ascii;
use function idn_to_utf8;
use function preg_match;
use function rawurldecode;
use function strtolower;
use const INTL_IDNA_VARIANT_UTS46;

final class idna
{
    private const REGEXP_IDNA_PATTERN = '/[^\x20-\x7f]/';
    public const IDNA_DEFAULT = 0;
    public const IDNA_ALLOW_UNASSIGNED = 1;
    public const IDNA_USE_STD3_RULES = 2;
    public const IDNA_CHECK_BIDI = 4;
    public const IDNA_CHECK_CONTEXTJ = 8;
    public const IDNA_NONTRANSITIONAL_TO_ASCII = 0x10;
    public const IDNA_NONTRANSITIONAL_TO_UNICODE = 0x20;
    public const IDNA_CHECK_CONTEXTO = 0x40;
    public const ERROR_EMPTY_LABEL = 1;
    public const ERROR_LABEL_TOO_LONG = 2;
    public const ERROR_DOMAIN_NAME_TOO_LONG = 4;
    public const ERROR_LEADING_HYPHEN = 8;
    public const ERROR_TRAILING_HYPHEN = 0x10;
    public const ERROR_HYPHEN_3_4 = 0x20;
    public const ERROR_LEADING_COMBINING_MARK = 0x40;
    public const ERROR_DISALLOWED = 0x80;
    public const ERROR_PUNYCODE = 0x100;
    public const ERROR_LABEL_HAS_DOT = 0x200;
    public const ERROR_INVALID_ACE_LABEL = 0x400;
    public const ERROR_BIDI = 0x800;
    public const ERROR_CONTEXTJ = 0x1000;
    public const ERROR_CONTEXTO_PUNCTUATION = 0x2000;
    public const ERROR_CONTEXTO_DIGITS = 0x4000;
    public const IDNA2008_ASCII = self::IDNA_NONTRANSITIONAL_TO_ASCII | self::IDNA_CHECK_BIDI | self::IDNA_USE_STD3_RULES | self::IDNA_CHECK_CONTEXTJ;
    public const IDNA2008_UNICODE = self::IDNA_NONTRANSITIONAL_TO_UNICODE | self::IDNA_CHECK_BIDI | self::IDNA_USE_STD3_RULES | self::IDNA_CHECK_CONTEXTJ;
    public const IDNA2003_ASCII = self::IDNA_DEFAULT;
    public const IDNA2003_UNICODE = self::IDNA_DEFAULT;

    public static function toAscii(string $domain, int $options): idnaInfo
    {
        $domain = rawurldecode($domain);
        if (1 !== preg_match(self::REGEXP_IDNA_PATTERN, $domain)) {
            return idnaInfo::fromIntl(['result' => strtolower($domain), 'isTransitionalDifferent' => 0, 'errors' => 0]);
        }
        self::supportsIdna();
        idn_to_ascii($domain, $options, INTL_IDNA_VARIANT_UTS46, $idnaInfo);
        $info = idnaInfo::fromIntl($idnaInfo);
        if (0 !== $info->errors()) {
            throw syntaxError::dueToIDNAError($domain, $info);
        }
        return $info;
    }

    private static function supportsIdna(): void
    {
        static $idnSupport;
        if (null === $idnSupport) $idnSupport = function_exists('\idn_to_ascii') && defined('\INTL_IDNA_VARIANT_UTS46');
        if (!$idnSupport) throw new UnexpectedValueException('IDN host can not be processed. Verify that ext/intl is installed for IDN support and that ICU is at least version 4.6.');
    }

    public static function toUnicode(string $domain, int $options): idnaInfo
    {
        if (!str_contains($domain, 'xn--')) return idnaInfo::fromIntl(['result' => $domain, 'isTransitionalDifferent' => 0, 'errors' => 0]);
        self::supportsIdna();
        idn_to_utf8($domain, $options, INTL_IDNA_VARIANT_UTS46, $idnaInfo);
        $info = idnaInfo::fromIntl($idnaInfo);
        if (0 !== $info->errors()) return idnaInfo::fromIntl(['result' => $domain, 'isTransitionalDifferent' => 0, 'errors' => 0]);
        return $info;
    }
}