<?php error_reporting(1);
define('COCKPIT_ADMIN', 1);
date_default_timezone_set('UTC');
if (PHP_SAPI == 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}
require(__DIR__ . '/bootstrap.php');
if (COCKPIT_ADMIN && !defined('COCKPIT_ADMIN_ROUTE')) {
    $route = preg_replace('#' . preg_quote(COCKPIT_BASE_URL, '#') . '#', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);
    if ($route == '') {
        $route = '/';
    }
    define('COCKPIT_ADMIN_ROUTE', $route);
}
if (COCKPIT_API_REQUEST) {
    $_cors = $cockpit->retrieve('config/cors', []);
    header('Access-Control-Allow-Origin: ' . ($_cors['allowedOrigins'] ?? '*'));
    header('Access-Control-Allow-Credentials: ' . ($_cors['allowCredentials'] ?? 'true'));
    header('Access-Control-Max-Age: ' . ($_cors['maxAge'] ?? '1000'));
    header('Access-Control-Allow-Headers: ' . ($_cors['allowedHeaders'] ?? 'X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, Cockpit-Token'));
    header('Access-Control-Allow-Methods: ' . ($_cors['allowedMethods'] ?? 'PUT, POST, GET, OPTIONS, DELETE'));
    header('Access-Control-Expose-Headers: ' . ($_cors['exposedHeaders'] ?? 'true'));
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        exit(0);
    }
}
$cockpit->set('route', COCKPIT_ADMIN_ROUTE)->trigger('admin.init')->run();