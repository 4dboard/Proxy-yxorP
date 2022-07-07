<?php

declare(strict_types=1);

namespace Pdp;

use TrueBV\Punycode;

class PunycodeWrapper
{
    /**
     * @var Punycode
     */
    private static $punycode;

    /**
     * @var bool
     */
    private $idnSupport = false;

    public function __construct()
    {
        if (
            \function_exists('idn_to_ascii')
            &&
            \function_exists('idn_to_utf8')
        ) {
            $this->idnSupport = true;
        }

        if (self::$punycode === null) {
            self::$punycode = new Punycode();
        }
    }

    /**
     * Encode a domain to its Punycode version
     *
     * @param string $input Domain name in Unicode to be encoded
     *
     * @return string Punycode representation in ASCII
     *
     * @noinspection PhpComposerExtensionStubsInspection
     */
    public function encode(string $input): string
    {
        if ($input === '') {
            return '';
        }

        if ($this->idnSupport === true) {
            // https://git.ispconfig.org/ispconfig/ispconfig3/blob/master/interface/lib/classes/functions.inc.php#L305
            if (\defined('IDNA_NONTRANSITIONAL_TO_ASCII') && \defined('INTL_IDNA_VARIANT_UTS46') && \constant('IDNA_NONTRANSITIONAL_TO_ASCII')) {
                $return = \idn_to_ascii($input, \IDNA_NONTRANSITIONAL_TO_ASCII, \INTL_IDNA_VARIANT_UTS46);
            } else {
                $return = \idn_to_ascii($input);
            }

            if ($return !== false) {
                return $return;
            }
        }

        return self::$punycode->encode($input);
    }

    /**
     * Decode a Punycode domain name to its Unicode counterpart
     *
     * @param string $input Domain name in Punycode
     *
     * @return string Unicode domain name
     * @noinspection PhpComposerExtensionStubsInspection
     */
    public function decode(string $input): string
    {
        if ($input === '') {
            return '';
        }

        if ($this->idnSupport === true) {
            if (\defined('IDNA_NONTRANSITIONAL_TO_UNICODE') && \defined('INTL_IDNA_VARIANT_UTS46') && \constant('IDNA_NONTRANSITIONAL_TO_UNICODE')) {
                $return = \idn_to_utf8($input, \IDNA_NONTRANSITIONAL_TO_UNICODE, \INTL_IDNA_VARIANT_UTS46);
            } else {
                $return = \idn_to_utf8($input);
            }

            if ($return !== false) {
                return $return;
            }
        }

        return self::$punycode->decode($input);
    }
}
