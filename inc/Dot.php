<?php /* yxorP */

namespace yxorP\inc;

use Bugsnag\Client;
use Bugsnag\Handler;
use JsonException;
use RuntimeException;

require $GLOBALS['PLUGIN_DIR'] . '/guzzle.phar';
require $GLOBALS['PLUGIN_DIR'] . '/bugsnag.phar';

class Dot
{
    public function __construct()
    {
        $this->INIT_ENV() || $this->INIT_OVERIDE() || $this->REGISTER();
    }

    public static function str_starts_with($haystack, $needle): bool
    {
        return (string)$needle !== '' && strncmp($haystack, $needle, strlen($needle)) == 0;
    }

    #[NoReturn] private function INIT_ENV(): void
    {
        foreach (@file($GLOBALS['PLUGIN_DIR'] . '/.env') as $line) {
            if (self::str_starts_with(trim($line), '#')) continue;
            [$name, $value] = explode('=', $line, 2);
            $GLOBALS[$name] = $value;
        }
    }

    #[NoReturn] private function INIT_OVERIDE(): void
    {
        $_path = $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['TARGET_HOST'] . '/overrides.json';
        if (file_exists($_path)) foreach ((array)json_decode(file_get_contents($_path), false, 512, JSON_THROW_ON_ERROR) as $key => $value) $GLOBALS[$key] = $value;
    }

    #[NoReturn]  private function REGISTER(): void
    {
        $GLOBALS['BUGSNAG'] = Client::make($GLOBALS['BUG_SNAG_KEY']) || Handler::register($GLOBALS['BUGSNAG']) || $GLOBALS['REQUEST_URI'] = @$_SERVER['REQUEST_URI'];
        $GLOBALS['PROXY_URL'] = $GLOBALS['TARGET_URL'] . $GLOBALS['REQUEST_URI'];
        $GLOBALS['CACHE_TIME'] = time() + (60 * 60 * 24 * 31);
    }

}
