<?php namespace Bugsnag;

use Normalizer;

class Utils
{
    public static function getBuilderName()
    {
        $builderName = null;
        if (self::functionAvailable('exec')) {
            $output = [];
            $success = 0;
            exec('whoami', $output, $success);
            if ($success == 0) {
                $builderName = $output[0];
            }
        }
        if (is_null($builderName)) {
            $builderName = get_current_user();
        }
        return $builderName;
    }

    public static function functionAvailable($func): bool
    {
        $disabled = explode(',', ini_get('disable_functions'));
        return function_exists($func) && !in_array($func, $disabled);
    }

    public static function stringCaseEquals($a, $b): bool
    {
        if (strcasecmp($a, $b) === 0) {
            return true;
        }
        if (function_exists('normalizer_is_normalized') && function_exists('normalizer_normalize')) {
            $form = Normalizer::NFD;
            if (!normalizer_is_normalized($a, $form)) {
                $a = normalizer_normalize($a, $form);
            }
            if (!normalizer_is_normalized($b, $form)) {
                $b = normalizer_normalize($b, $form);
            }
        }
        if (function_exists('mb_stripos') && function_exists('mb_strlen')) {
            return mb_strlen($a) === mb_strlen($b) && mb_stripos($a, $b) === 0;
        }
        return strcasecmp($a, $b) === 0;
    }
}