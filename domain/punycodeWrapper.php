<?php declare(strict_types=1);

namespace yxorp\domain;

use TrueBV\Punycode;
use function constant;
use function defined;
use function function_exists;
use function idn_to_ascii;
use function idn_to_utf8;
use const IDNA_NONTRANSITIONAL_TO_ASCII;
use const IDNA_NONTRANSITIONAL_TO_UNICODE;
use const INTL_IDNA_VARIANT_UTS46;

class PunycodeWrapper
{
    private static $punycode;
    private $idnSupport = false;

    public function __construct()
    {
        if (function_exists('idn_to_ascii') && function_exists('idn_to_utf8')) {
            $this->idnSupport = true;
        }
        if (self::$punycode === null) {
            self::$punycode = new Punycode();
        }
    }

    public function encode(string $input): string
    {
        if ($input === '') {
            return '';
        }
        if ($this->idnSupport === true) {
            if (defined('IDNA_NONTRANSITIONAL_TO_ASCII') && defined('INTL_IDNA_VARIANT_UTS46') && constant('IDNA_NONTRANSITIONAL_TO_ASCII')) {
                $return = idn_to_ascii($input, IDNA_NONTRANSITIONAL_TO_ASCII, INTL_IDNA_VARIANT_UTS46);
            } else {
                $return = idn_to_ascii($input);
            }
            if ($return !== false) {
                return $return;
            }
        }
        return self::$punycode->encode($input);
    }

    public function decode(string $input): string
    {
        if ($input === '') {
            return '';
        }
        if ($this->idnSupport === true) {
            if (defined('IDNA_NONTRANSITIONAL_TO_UNICODE') && defined('INTL_IDNA_VARIANT_UTS46') && constant('IDNA_NONTRANSITIONAL_TO_UNICODE')) {
                $return = idn_to_utf8($input, IDNA_NONTRANSITIONAL_TO_UNICODE, INTL_IDNA_VARIANT_UTS46);
            } else {
                $return = idn_to_utf8($input);
            }
            if ($return !== false) {
                return $return;
            }
        }
        return self::$punycode->decode($input);
    }
}