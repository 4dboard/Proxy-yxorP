<?php use yxorP\app\lib\http\request;

date_default_timezone_set('UTC');

define('SITE_START_TIME', microtime(true));
const SITE_ADMIN = true;
require(__DIR__ . '/bootstrap.php');
$SITE_SPACE_DIR = __DIR__;
$SITE_DIR = str_replace(DIRECTORY_SEPARATOR, '/', __DIR__);
$SITE_DOCUMENT_ROOT = str_replace(DIRECTORY_SEPARATOR, '/', isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : __DIR__);
if (!str_starts_with($SITE_DIR, $SITE_DOCUMENT_ROOT) && isset($_SERVER['SCRIPT_NAME'])) $SITE_DOCUMENT_ROOT = str_replace(dirname(str_replace(DIRECTORY_SEPARATOR, '/', $_SERVER['SCRIPT_NAME'])), '', $SITE_DIR);

if (PHP_SAPI === 'cli-server') {
    $file = $_SERVER['SCRIPT_FILENAME'];
    $path = pathinfo($file);
    $index = realpath($path['dirname'] . DIRECTORY_SEPARATOR . 'index.php');
    $_SERVER['PATH_INFO'] = explode('?', $_SERVER['REQUEST_URI'] ?? '')[0];
    if (is_file($file) && $path['extension'] != 'php') return false;
    if (is_file($index) && $index != __FILE__) {
        include($index);
        return;
    }
    $SITE_BASE = "";
    $SITE_BASE_URL = "";
    $SITE_BASE_ROUTE = $SITE_BASE_URL;
    $SITE_ROUTE = $_SERVER['PATH_INFO'];
} else {
    $SITE_BASE = trim(str_replace($SITE_DOCUMENT_ROOT, '', $SITE_DIR), "/");
    $SITE_BASE_URL = strlen($SITE_BASE) ? "/{$SITE_BASE}" : $SITE_BASE;
    $SITE_BASE_ROUTE = $SITE_BASE_URL;
    $SITE_ROUTE = preg_replace('#' . preg_quote($SITE_BASE_URL, '#') . '#', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);
}
if ($SITE_ROUTE && str_starts_with($SITE_ROUTE, '/:')) {
    $parts = explode('/', $SITE_ROUTE);
    $env = substr($parts[1], 1);
    $spaceDir = __DIR__ . "/.spaces/{$env}";
    if (file_exists($spaceDir)) {
        $SITE_ROUTE = '/' . trim(implode('/', array_slice($parts, 2)), '/');
        $SITE_BASE_URL .= "/.spaces/{$env}";
        $SITE_BASE_ROUTE .= "/:{$env}";
        $SITE_SPACE_DIR = $spaceDir;
    }
}
if ($SITE_ROUTE === '') {
    $SITE_ROUTE = '/';
}
define('SITE_DOCUMENT_ROOT', $SITE_DOCUMENT_ROOT);
define('SITE_BASE_URL', $SITE_BASE_URL);
define('SITE_API_REQUEST', str_starts_with($SITE_ROUTE, '/api/') ? 1 : 0);
$app = App::instance($SITE_SPACE_DIR, ['base_route' => $SITE_BASE_ROUTE, 'base_url' => $SITE_BASE_URL]);
$app->on('error', function ($error) {
    if (!isset($this->request)) return;
    if ($this['debug']) $body = $this->request->is('ajax') || SITE_API_REQUEST ? json_encode(['error' => $error['message'], 'file' => $error['file'], 'line' => $error['line']]) : $this->render('app:views/errors/500-debug.php', ['error' => $error]); else    $body = $this->request->is('ajax') || SITE_API_REQUEST ? '{"error": "500", "message": "system error"}' : $this->render('app:views/errors/500.php');
    header('HTTP/1.0 500 Internal Server Error');
    echo $body;
});
$request = request::fromGlobalRequest(['route' => $SITE_ROUTE, 'site_url' => $app->retrieve('site_url'), 'base_url' => $SITE_BASE_URL, 'base_route' => $SITE_BASE_ROUTE]);
if (SITE_API_REQUEST) {
    $app->on('before', function () {
        $cors = $this->retrieve('cors', []);
        $this->response->headers['Access-Control-Allow-Origin'] = $cors['allowedOrigins'] ?? '*';
        $this->response->headers['Access-Control-Allow-Credentials'] = $cors['allowCredentials'] ?? 'true';
        $this->response->headers['Access-Control-Max-Age'] = $cors['maxAge'] ?? '1000';
        $this->response->headers['Access-Control-Allow-Headers'] = $cors['allowedHeaders'] ?? 'X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, API-TOKEN';
        $this->response->headers['Access-Control-Allow-Methods'] = $cors['allowedMethods'] ?? 'PUT, POST, GET, OPTIONS, DELETE';
        $this->response->headers['Access-Control-Expose-Headers'] = $cors['exposedHeaders'] ?? 'true';
    });
    if ($request->is('preflight')) {
        header('HTTP/1.1 200 OK CORS');
        die();
    }
}
if (!SITE_API_REQUEST) {
    $app->helper('session')->init();
    $app->trigger('app.admin.init');
} else  $app->trigger('app.api.init');
$app->trigger(SITE_API_REQUEST ? 'app.api.request' : 'app.admin.request', [$request])->run($request->route, $request);
