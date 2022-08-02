<?php

namespace yxorP\app\lib\http\helper;

use function preg_match;

/**
 * Class Utils
 * @package \yxorP\app\lib\http\helper
 */
class utils extends Helper
{

    /**
     * Converts many english words that equate to true or false to boolean.
     *
     * Supports 'y', 'n', 'yes', 'no' and a few other variations.
     *
     * @param string $string The string to convert to boolean
     * @param bool $default The value to return if we can't match any
     *                          yes/no words
     * @return boolean
     */
    public function strToBool(string $string, bool $default = false): bool
    {

        $yes_words = 'affirmative|all right|aye|indubitably|most assuredly|ok|of course|okay|sure thing|y|yes+|yea|yep|sure|yeah|true|t|on|1|oui|vrai';
        $no_words = 'no*|no way|nope|nah|na|never|absolutely not|by no means|negative|never ever|false|f|off|0|non|faux';

        if (preg_match('/^(' . $yes_words . ')$/i', $string)) {
            return true;
        } else if (preg_match('/^(' . $no_words . ')$/i', $string)) {
            return false;
        }

        return $default;
    }

}
