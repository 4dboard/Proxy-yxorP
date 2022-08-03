<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use Closure;
use Exception;

class Logger
{
    public static Logger $instance;
    public Closure $log;

    protected function __construct()
    {
        $this->log = function ($entry, $type) {
            if ($entry instanceof Exception) {
                $entry = $entry->getMessage();
            }
            trigger_error($entry, $type);
        };
    }

    public static function warning($entry): void
    {
        call_user_func(self::getInstance()->log, $entry, E_USER_WARNING);
    }

    public static function getInstance(): Logger
    {
        if (self::$instance === null) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    public static function notice($entry): void
    {
        call_user_func(self::getInstance()->log, $entry, E_USER_NOTICE);
    }

    public static function shorten($classes)
    {
        return Util::shorten($classes);
    }
}
