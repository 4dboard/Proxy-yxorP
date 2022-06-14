<?php namespace yxorP\Helpers;
class IncludeHelper
{
    public function __construct()
    {
        foreach (array('helper', 'domain') as $_asset) self::FILES_CHECK($GLOBALS['PLUGIN_DIR'] . DIRECTORY_SEPARATOR . $_asset, true);
        new HeaderHelper();
    }

    public static function FILES_CHECK($dir, $inc): void
    {
        if (file($dir) || is_dir($dir)) foreach (scandir($dir) as $x) if (strlen($x) > 3) {
            if (str_contains($x, 'Interface')) continue;
            if (is_dir($_loc = $dir . '/' . $x)) self::FILES_CHECK($_loc, $inc); else if ($inc) require_once($_loc); else if (str_contains($GLOBALS['SITE_CONTEXT']->REQUEST_URI, $x)) {
                echo file_get_contents($_loc);
                exit;
            }
        }
    }
}