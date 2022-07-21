<?php

class admin
{
    public static function init()
    {
        // define base route and url
        $COCKPIT_DIR = str_replace(DIRECTORY_SEPARATOR, '/', __DIR__);
        $COCKPIT_DOCS_ROOT = str_replace(DIRECTORY_SEPARATOR, '/', isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : dirname(__DIR__));

        # make sure that $_SERVER['DOCUMENT_ROOT'] is set correctly
        if (!str_starts_with($COCKPIT_DIR, $COCKPIT_DOCS_ROOT) && isset($_SERVER['SCRIPT_NAME'])) {
            $COCKPIT_DOCS_ROOT = str_replace(dirname(str_replace(DIRECTORY_SEPARATOR, '/', $_SERVER['SCRIPT_NAME'])), '', $COCKPIT_DIR);
        }

        $COCKPIT_BASE = trim(str_replace($COCKPIT_DOCS_ROOT, '', $COCKPIT_DIR), "/");


        define('COCKPIT_BASE_ROUTE', strlen($COCKPIT_BASE) ? "/{$COCKPIT_BASE}" : $COCKPIT_BASE);
        define('COCKPIT_API_REQUEST', str_contains(YXORP_REQUEST_URI, COCKPIT_BASE_ROUTE . '/api/') ? 1 : 0);


        // define admin route
        $route = preg_replace('#' . preg_quote(COCKPIT_BASE_ROUTE, '#') . '#', '', parse_url(YXORP_REQUEST_URI, PHP_URL_PATH), 1);
        define('COCKPIT_ADMIN_ROUTE', $route == '' ? '/' : $route);


        // set error handler or do, whatever you want...


        // Instead of including index.php, you can copy and paste the missing parts from
        // the original index.php into this file. Now include bootstrap.php instead.
        // After including bootstrap.php and before running the app, you can change any
        // settings with $cockpit->set('key', 'value');
    }
}

admin::init();
require(__DIR__ . '/lib/cockpit/index.php');