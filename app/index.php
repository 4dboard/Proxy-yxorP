<?php date_default_timezone_set('UTC');
define('APP_START_TIME', microtime(true));
define('APP_ADMIN', true);
require(__DIR__ . '/bootstrap.php');
$APP_SPACE_DIR = __DIR__;
$APP_DIR = str_replace(DIRECTORY_SEPARATOR, '/', __DIR__);
$APP_DOCUMENT_ROOT = str_replace(DIRECTORY_SEPARATOR, '/', isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : __DIR__);
if (strpos($APP_DIR, $APP_DOCUMENT_ROOT) !== 0 && isset($_SERVER['SCRIPT_NAME'])) {
    $APP_DOCUMENT_ROOT = str_replace(dirname(str_replace(DIRECTORY_SEPARATOR, '/', $_SERVER['SCRIPT_NAME'])), '', $APP_DIR);
}
if (PHP_SAPI === 'cli-server') {
    $file = $_SERVER['SCRIPT_FILENAME'];
    $path = pathinfo($file);
    $index = realpath($path['dirname'] . '/index.php');
    $_SERVER['PATH_INFO'] = explode('?', $_SERVER['REQUEST_URI'] ?? '')[0];
    if (is_file($file) && $path['extension'] != 'php') {
        return false;
    }
    if (is_file($index) && $index != __FILE__) {
        include($index);
        return;
    }
    $APP_BASE = "";
    $APP_BASE_URL = "";
    $APP_BASE_ROUTE = $APP_BASE_URL;
    $APP_ROUTE = $_SERVER['PATH_INFO'];
} else {
    $APP_BASE = trim(str_replace($APP_DOCUMENT_ROOT, '', $APP_DIR), "/");
    $APP_BASE_URL = strlen($APP_BASE) ? "/{$APP_BASE}" : $APP_BASE;
    $APP_BASE_ROUTE = $APP_BASE_URL;
    $APP_ROUTE = preg_replace('#' . preg_quote($APP_BASE_URL, '#') . '#', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);
}
if ($APP_ROUTE && substr($APP_ROUTE, 0, 2) === '/:') {
    $parts = explode('/', $APP_ROUTE);
    $env = substr($parts[1], 1);
    $spaceDir = __DIR__ . "/.spaces/{$env}";
    if (file_exists($spaceDir)) {
        $APP_ROUTE = '/' . trim(implode('/', array_slice($parts, 2)), '/');
        $APP_BASE_URL .= "/.spaces/{$env}";
        $APP_BASE_ROUTE .= "/:{$env}";
        $APP_SPACE_DIR = $spaceDir;
    }
}
if ($APP_ROUTE === '') {
    $APP_ROUTE = '/';
}
define('APP_DOCUMENT_ROOT', $APP_DOCUMENT_ROOT);
define('APP_BASE_URL', $APP_BASE_URL);
define('APP_API_REQUEST', strpos($APP_ROUTE, '/api/') === 0 ? 1 : 0);
$app = App::instance($APP_SPACE_DIR, ['base_route' => $APP_BASE_ROUTE, 'base_url' => $APP_BASE_URL]);
$app->on('error', function ($error) {
    if (!isset($this->request)) {
        return;
    }
    if ($this['debug']) {
        $body = $this->request->is('ajax') || APP_API_REQUEST ? json_encode(['error' => $error['message'], 'file' => $error['file'], 'line' => $error['line']]) : $this->render('app:views/errors/500-debug.php', ['error' => $error]);
    } else {
        $body = $this->request->is('ajax') || APP_API_REQUEST ? '{"error": "500", "message": "system error"}' : $this->render('app:views/errors/500.php');
    }
    header('HTTP/1.0 500 Internal Server Error');
    echo $body;
});
$request = Lime\Request::fromGlobalRequest(['route' => $APP_ROUTE, 'site_url' => $app->retrieve('site_url'), 'base_url' => $APP_BASE_URL, 'base_route' => $APP_BASE_ROUTE]);
if (APP_API_REQUEST) {
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
if (!APP_API_REQUEST) {
    $app->helper('session')->init();
    $app->trigger('app.admin.init');
} else {
    $app->trigger('app.api.init');
}
$app->trigger(APP_API_REQUEST ? 'app.api.request' : 'app.admin.request', [$request])->run($request->route, $request);
