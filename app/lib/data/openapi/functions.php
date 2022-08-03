<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use Symfony\Component\Finder\Finder;

if (defined('OpenApi\\UNDEFINED') === false) {
    define('OpenApi\\UNDEFINED', Generator::UNDEFINED);
    define('OpenApi\\Annotations\\UNDEFINED', Generator::UNDEFINED);
    define('OpenApi\\Processors\\UNDEFINED', Generator::UNDEFINED);
}
if (!function_exists('OpenApi\\scan')) {
    function scan($directory, $options = []): annotations\openApi
    {
        $exclude = array_key_exists('exclude', $options) ? $options['exclude'] : null;
        $pattern = array_key_exists('pattern', $options) ? $options['pattern'] : null;
        return Generator::scan(Util::finder($directory, $exclude, $pattern), $options);
    }
}
