<?php namespace Lime;

use ArrayAccess;
use ArrayObject;
use Closure;
use DirectoryIterator;
use SplPriorityQueue;
use function array_map;
use function array_merge;
use function array_pop;
use function array_slice;
use function array_unshift;
use function base64_encode;
use function call_user_func;
use function call_user_func_array;
use function chr;
use function count;
use function ctype_alpha;
use function dirname;
use function explode;
use function extract;
use function file_exists;
use function func_get_args;
use function htmlspecialchars;
use function implode;
use function in_array;
use function is_array;
use function is_bool;
use function is_callable;
use function is_null;
use function is_numeric;
use function is_object;
use function is_string;
use function json_encode;
use function ltrim;
use function method_exists;
use function ob_get_clean;
use function ob_start;
use function ord;
use function password_hash;
use function php_uname;
use function preg_match;
use function preg_quote;
use function preg_replace;
use function realpath;
use function register_shutdown_function;
use function rtrim;
use function session_status;
use function session_write_close;
use function str_replace;
use function strlen;
use function strpos;
use function strtolower;
use function substr;
use function trim;
use const ENT_QUOTES;
use const EXTR_OVERWRITE;
use const PHP_SAPI;
use const PHP_SESSION_ACTIVE;
use const PHP_URL_PATH;

include(__DIR__ . '/request.php');
include(__DIR__ . '/response.php');

class App implements ArrayAccess
{
    protected static $apps = [];
    public ?response $response = null;
    public ?request $request = null;
    public ArrayObject $helpers;
    public mixed $layout = false;
    protected array $registry = [];
    protected array $routes = [];
    protected array $paths = [];
    protected array $events = [];
    protected array $blocks = [];

    public function __construct(array $settings = [])
    {
        $self = $this;
        $base_url = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1));
        $this->registry = array_merge(['debug' => true, 'app.name' => 'LimeApp', 'session.name' => 'limeappsession', 'autoload' => new ArrayObject([]), 'sec-key' => 'xxxxx-SiteSecKeyPleaseChangeMe-xxxxx', 'route' => $_SERVER['PATH_INFO'] ?? '/', 'charset' => 'UTF-8', 'helpers' => [], 'base_url' => $base_url, 'base_route' => $base_url, 'base_host' => $_SERVER['SERVER_NAME'] ?? php_uname('n'), 'base_port' => $_SERVER['SERVER_PORT'] ?? 80, 'docs_root' => null, 'site_url' => null], $settings);
        $this->registry['modules'] = new ArrayObject([]);
        if (!isset($this['site_url']) && PHP_SAPI !== 'cli') {
            $url = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http') . '://';
            if (!in_array($this->registry['base_port'], ['80', '443'])) {
                $url .= $this->registry['base_host'] . ':' . $this->registry['base_port'];
            } else {
                $url .= $this->registry['base_host'];
            }
            $this->registry['site_url'] = rtrim($url, '/');
        } elseif (is_string($this->registry['site_url'])) {
            $this->registry['site_url'] = rtrim($this->registry['site_url'], '/');
        }
        if (!isset($this['docs_root'])) {
            $this->registry['docs_root'] = str_replace(DIRECTORY_SEPARATOR, '/', isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : dirname($_SERVER['SCRIPT_FILENAME']));
        }
        $this->registry['base_url'] = rtrim($this->registry['base_url'], '/');
        $this->registry['base_route'] = rtrim($this->registry['base_route'], '/');
        self::$apps[$this['app.name']] = $this;
        $this->helpers = new ArrayObject(array_merge(['cache' => '\yxorP\app\lib\lime\\Helper\\cache', 'fs' => '\yxorP\app\lib\lime\\Helper\\Filesystem', 'session' => '\yxorP\app\lib\lime\\Helper\\session', 'utils' => '\yxorP\app\lib\lime\\Helper\\utils'], $this->registry['helpers']));
        spl_autoload_register(function ($class) use ($self) {
            foreach ($self->retrieve('autoload', []) as $dir) {
                $class_file = $dir . '/' . str_replace('\\', '/', $class) . '.php';
                if (file_exists($class_file)) {
                    include_once($class_file);
                    return;
                }
            }
        });
    }

    public function retrieve(string $key, mixed $default = null): mixed
    {
        return fetch_from_array($this->registry, $key, $default);
    }

    public static function instance(string $name, bool $clone = false): self
    {
        return $clone ? clone self::$apps[$name] : self::$apps[$name];
    }

    public function __clone()
    {
        $this->helpers = clone $this->helpers;
        foreach ($this->helpers as $name => $helper) {
            if (is_string($helper)) continue;
            $helper = clone $helper;
            $helper->app = $this;
            $this->helpers[$name] = $helper;
        }
        $this->registry['modules'] = clone $this->registry['modules'];
        foreach ($this->registry['modules'] as $name => $module) {
            $module = clone $module;
            $module->bindApp($this);
            $this->registry['modules'][$name] = $module;
        }
        foreach ($this->events as $name => &$list) {
            foreach ($list as &$meta) {
                if (is_object($meta['fn']) && $meta['fn'] instanceof Closure) {
                    $meta['fn'] = $meta['fn']->bindTo($this, $this);
                }
            }
        }
    }

    public function service(string $name, mixed $callable): object
    {
        $this->registry[$name] = function ($c) use ($callable) {
            static $object;
            if (null === $object) {
                $object = $callable($c);
            }
            return $object;
        };
        return $this;
    }

    public function base(string $path): void
    {
        $args = func_get_args();
        echo (count($args) === 1) ? $this->baseUrl($args[0]) : $this->baseUrl(call_user_func_array('sprintf', $args));
    }

    public function baseUrl(string $path): string
    {
        $url = '';
        if (strpos($path, ':') === false) {
            $url .= $this->registry['base_url'] . '/' . ltrim($path, '/');
        } else {
            $url = $this->pathToUrl($path);
        }
        return $url;
    }

    public function pathToUrl(string $path, bool $full = false): mixed
    {
        $url = false;
        if ($file = $this->path($path)) {
            $file = str_replace(DIRECTORY_SEPARATOR, '/', $file);
            $root = str_replace(DIRECTORY_SEPARATOR, '/', $this['docs_root']);
            $url = '/' . ltrim(str_replace($root, '', $file), '/');
            $url = implode('/', array_map('rawurlencode', explode('/', $url)));
            if ($full) {
                $site_url = str_replace(parse_url($this->registry['site_url'] ?? '', PHP_URL_PATH) ?? '', '', $this->registry['site_url'] ?? '');
                $url = rtrim($site_url, '/') . $url;
            }
        }
        return $url;
    }

    public function path(): mixed
    {
        $args = func_get_args();
        switch (count($args)) {
            case 1:
                $file = $args[0];
                if ($this->isAbsolutePath($file) && file_exists($file)) {
                    return $file;
                }
                $parts = explode(':', $file, 2);
                if (count($parts) === 2) {
                    if (!isset($this->paths[$parts[0]])) return null;
                    foreach ($this->paths[$parts[0]] as &$path) {
                        if (file_exists($path . $parts[1])) {
                            return $path . $parts[1];
                        }
                    }
                }
                return null;
            case 2:
                if (!isset($this->paths[$args[0]])) {
                    $this->paths[$args[0]] = [];
                }
                array_unshift($this->paths[$args[0]], rtrim(str_replace(DIRECTORY_SEPARATOR, '/', $args[1]), '/') . '/');
                return $this;
        }
        return null;
    }

    public function isAbsolutePath(string $path): bool
    {
        return '/' === $path[0] || '\\' === $path[0] || (3 < strlen($path) && ctype_alpha($path[0]) && $path[1] === ':' && ('\\' === $path[2] || '/' === $path[2]));
    }

    public function route(): void
    {
        $args = func_get_args();
        echo (count($args) === 1) ? $this->routeUrl($args[0]) : $this->routeUrl(call_user_func_array('sprintf', $args));
    }

    public function routeUrl(string $path): string
    {
        $url = '';
        $url .= $this->registry['base_route'];
        return $url . '/' . ltrim($path, '/');
    }

    public function reroute(string $path): void
    {
        if (strpos($path, '://') === false) {
            if (substr($path, 0, 1) != '/') {
                $path = '/' . $path;
            }
            $path = $this->routeUrl($path);
        }
        $this->response->status = 307;
        $this->response->headers['Location'] = $path;
        $this->stop();
    }

    public function stop(mixed $data = null, ?int $status = null): void
    {
        if (!isset($this->response)) {
            if (is_array($data) || is_object($data)) {
                $data = json_encode($data);
            }
            if ($data) {
                echo $data;
            }
            $this->trigger('after', [true]);
            exit;
        }
        if ($status) {
            $this->response->status = $status;
        }
        if ($data) {
            $this->response->body = $data;
        }
        if (is_numeric($data) && isset(response::$statusCodes[$data])) {
            $this->response->status = $data;
            if ($this->response->mime === 'json') {
                $this->response->body = json_encode(['error' => response::$statusCodes[$data]]);
            } else {
                $this->response->body = response::$statusCodes[$data];
            }
        }
        $this->request->stopped = true;
    }

    public function trigger(string $event, array $params = []): self
    {
        if (!isset($this->events[$event])) {
            return $this;
        }
        if (!count($this->events[$event])) {
            return $this;
        }
        $queue = new SplPriorityQueue();
        foreach ($this->events[$event] as $index => $action) {
            $queue->insert($index, $action['prio']);
        }
        $queue->top();
        while ($queue->valid()) {
            $index = $queue->current();
            if (is_callable($this->events[$event][$index]['fn'])) {
                if (call_user_func_array($this->events[$event][$index]['fn'], $params) === false) {
                    break;
                }
            }
            $queue->next();
        }
        return $this;
    }

    public function set(string $key, mixed $value): App
    {
        $keys = explode('/', $key);
        if (count($keys) > 5) return false;
        switch (count($keys)) {
            case 1:
                $this->registry[$keys[0]] = $value;
                break;
            case 2:
                $this->registry[$keys[0]][$keys[1]] = $value;
                break;
            case 3:
                $this->registry[$keys[0]][$keys[1]][$keys[2]] = $value;
                break;
            case 4:
                $this->registry[$keys[0]][$keys[1]][$keys[2]][$keys[3]] = $value;
                break;
            case 5:
                $this->registry[$keys[0]][$keys[1]][$keys[2]][$keys[3]][$keys[4]] = $value;
                break;
        }
        return $this;
    }

    public function paths(?string $namespace = null): array
    {
        if (!$namespace) {
            return $this->paths;
        }
        return $this->paths[$namespace] ?? [];
    }

    public function cache(): mixed
    {
        $args = func_get_args();
        switch (count($args)) {
            case 1:
                return $this->helper('cache')->read($args[0]);
            case 2:
                return $this->helper('cache')->write($args[0], $args[1]);
        }
        return null;
    }

    public function helper(string $helper): Helper
    {
        if (isset($this->helpers[$helper]) && !is_object($this->helpers[$helper])) {
            $this->helpers[$helper] = new $this->helpers[$helper]($this);
        }
        return $this->helpers[$helper];
    }

    public function on(string|array $event, mixed $callback, int $priority = 0): self
    {
        if (is_array($event)) {
            foreach ($event as &$evt) {
                $this->on($evt, $callback, $priority);
            }
            return $this;
        }
        if (!isset($this->events[$event])) $this->events[$event] = [];
        if (is_object($callback) && $callback instanceof Closure) {
            $callback = $callback->bindTo($this, $this);
        }
        $this->events[$event][] = ['fn' => $callback, 'prio' => $priority];
        return $this;
    }

    public function render(string $____template, array $_____slots = []): string
    {
        $this->trigger('app.render.view', [&$____template, &$_____slots]);
        if (is_string($____template) && $____template) {
            $this->trigger("app.render.view/{$____template}", [&$____template, &$_____slots]);
        }
        $____layout = $this->layout;
        if (strpos($____template, ' with ') !== false) {
            list($____template, $____layout) = explode(' with ', $____template, 2);
        }
        if (strpos($____template, ':') !== false && $____file = $this->path($____template)) {
            $____template = $____file;
        }
        $extend = function ($from) use (&$____layout) {
            $____layout = $from;
        };
        extract((array)$_____slots);
        ob_start();
        include $____template;
        $output = ob_get_clean();
        if ($____layout) {
            if (strpos($____layout, ':') !== false && $____file = $this->path($____layout)) {
                $____layout = $____file;
            }
            $content_for_layout = $output;
            ob_start();
            include $____layout;
            $output = ob_get_clean();
        }
        return $output;
    }

    public function start(string $name): void
    {
        if (!isset($this->blocks[$name])) {
            $this->blocks[$name] = [];
        }
        ob_start();
    }

    public function end(string $name): void
    {
        $out = ob_get_clean();
        if (isset($this->blocks[$name])) {
            $this->blocks[$name][] = $out;
        }
    }

    public function block(string $name, array $options = []): ?string
    {
        if (!isset($this->blocks[$name])) return null;
        $options = array_merge(['print' => true], $options);
        $block = implode("\n", $this->blocks[$name]);
        if ($options['print']) {
            echo $block;
        }
        return $block;
    }

    public function escape(?string $string, ?string $charset = null): string
    {
        if (is_null($charset)) {
            $charset = $this['charset'];
        }
        return htmlspecialchars($string ?? '', ENT_QUOTES, $charset);
    }

    public function assets(mixed $src, ?string $version = null): string
    {
        $list = [];
        foreach ((array)$src as $asset) {
            $src = $asset;
            if (is_array($asset)) {
                extract($asset, EXTR_OVERWRITE);
            }
            if (@substr($src, -3) === '.js') {
                $list[] = $this->script($asset, $version);
            }
            if (@substr($src, -4) === '.css') {
                $list[] = $this->style($asset, $version);
            }
        }
        return implode("\n", $list);
    }

    public function script(mixed $src, ?string $version = null): string
    {
        $output = '';
        $type = 'text/javascript';
        $load = '';
        if (is_array($src)) {
            extract($src, EXTR_OVERWRITE);
        }
        $ispath = strpos($src, ':') !== false && !preg_match('#^(/|http:|https:)//#', $src);
        $output = '<script src="' . ($ispath ? $this->pathToUrl($src) : $src) . ($version ? "?ver={$version}" : "") . '" type="' . $type . '" ' . $load . '></script>';
        return $output;
    }

    public function style(mixed $href, ?string $version = null): string
    {
        $output = '';
        $type = 'text/css';
        $rel = 'stylesheet';
        $src = $href;
        if (is_array($href)) {
            extract($href, EXTR_OVERWRITE);
        }
        $ispath = strpos($src, ':') !== false && !preg_match('#^(|http:|https:)//#', $src);
        $output = '<link href="' . ($ispath ? $this->pathToUrl($src) : $src) . ($version ? "?ver={$version}" : "") . '" type="' . $type . '" rel="' . $rel . '">';
        return $output;
    }

    public function get(string $path, mixed $callback, bool $condition = true): void
    {
        if ($this->request && $this->request->is('get')) {
            $this->bind($path, $callback, $condition);
        }
    }

    public function bind(string $path, mixed $callback, bool $condition = true): void
    {
        if (!$condition) return;
        if (!isset($this->routes[$path])) {
            $this->routes[$path] = [];
        }
        if (is_object($callback) && $callback instanceof Closure) {
            $callback = $callback->bindTo($this, $this);
        }
        if (substr($path, -2) === '/*' && !isset($this->routes[substr($path, 0, -2)])) {
            $this->bind(substr($path, 0, -2), $callback, $condition);
        }
        $this->routes[$path] = $callback;
    }

    public function post(string $path, mixed $callback, bool $condition = true): void
    {
        if ($this->request && $this->request->is('post')) {
            $this->bind($path, $callback, $condition);
        }
    }

    public function bindClass(string $class, ?string $alias = null): void
    {
        $self = $this;
        $clean = ltrim($alias ? $alias : trim(strtolower(str_replace("\\", "/", $class)), "\\"), '/');
        $this->bind("/{$clean}/*", function () use ($self, $class, $clean) {
            $parts = explode('/', trim(preg_replace("#$clean#", "", $self->request->route, 1), '/'));
            $action = isset($parts[0]) ? $parts[0] : "index";
            $params = count($parts) > 1 ? array_slice($parts, 1) : [];
            return $self->invoke($class, $action, $params);
        });
        $this->bind("/{$clean}", function () use ($self, $class) {
            return $self->invoke($class, 'index', []);
        });
    }

    public function invoke(string $class, string $action = 'index', array $params = []): mixed
    {
        $context = compact('action', 'params');
        $controller = new $class($this, $context);
        return method_exists($controller, $action) && is_callable([$controller, $action]) ? call_user_func_array([$controller, $action], $params) : false;
    }

    public function bindNamespace(string $namespace, ?string $alias = null): void
    {
        $self = $this;
        $clean = $alias ? $alias : trim(strtolower(str_replace("\\", "/", $namespace)), "\\");
        $this->bind('/' . $clean . '/*', function () use ($self, $namespace, $clean) {
            $parts = explode('/', trim(preg_replace("#$clean#", "", $self["route"], 1), '/'));
            $class = $namespace . '\\' . $parts[0];
            $action = isset($parts[1]) ? $parts[1] : "index";
            $params = count($parts) > 2 ? array_slice($parts, 2) : [];
            return $self->invoke($class, $action, $params);
        });
        $this->bind('/' . strtolower($namespace), function () use ($self, $namespace) {
            $class = $namespace . "\\" . array_pop(explode('\\', $namespace));
            return $self->invoke($class, 'index', []);
        });
    }

    public function run(?string $route = null, ?request $request = null, bool $flush = true): response
    {
        $self = $this;
        $this->request = $request ?? $this->getRequestfromGlobals();
        register_shutdown_function(function () use ($self) {
            if (session_status() === PHP_SESSION_ACTIVE) {
                session_write_close();
            }
            $self->trigger('shutdown');
        });
        if ($route) {
            $this->request->route = $route;
        }
        $this->response = new response();
        $this->trigger('before');
        if (!$this->request->stopped) {
            $contents = $this->dispatch($route);
            if (!$this->request->stopped) {
                $this->response->body = $contents;
            }
        }
        if ($this->response->status === 200 && $this->response->body === false) {
            $this->response->status = 404;
        }
        $this->trigger('after');
        if ($flush) {
            if ($this->response->status === 307 && isset($this->response->headers['Location'])) {
                header("Location: {$this->response->headers['Location']}");
                exit;
            }
            $this->response->flush();
        }
        return $this->response;
    }

    protected function getRequestfromGlobals(): request
    {
        return request::fromGlobalRequest(['site_url' => $this->registry['site_url'], 'base_url' => $this->registry['base_url'], 'base_route' => $this->registry['base_route']]);
    }

    public function dispatch(string $path): mixed
    {
        $found = false;
        $params = [];
        if (isset($this->routes[$path])) {
            $found = $this->render_route($path, $params);
        } else {
            foreach ($this->routes as $route => $callback) {
                $params = [];
                if (substr($route, 0, 1) === '#' && substr($route, -1) === '#') {
                    if (preg_match($route, $path, $matches)) {
                        $params[':captures'] = array_slice($matches, 1);
                        $found = $this->render_route($route, $params);
                        break;
                    }
                }
                if (strpos($route, '*') !== false) {
                    $pattern = '#^' . str_replace('\*', '(.*)', preg_quote($route, '#')) . '#';
                    if (preg_match($pattern, $path, $matches)) {
                        $params[':splat'] = array_slice($matches, 1);
                        $found = $this->render_route($route, $params);
                        break;
                    }
                }
                if (strpos($route, ':') !== false) {
                    $parts_p = explode('/', $path);
                    $parts_r = explode('/', $route);
                    if (count($parts_p) === count($parts_r)) {
                        $matched = true;
                        foreach ($parts_r as $index => $part) {
                            if (':' === substr($part, 0, 1)) {
                                $params[substr($part, 1)] = $parts_p[$index];
                                continue;
                            }
                            if ($parts_p[$index] != $parts_r[$index]) {
                                $matched = false;
                                break;
                            }
                        }
                        if ($matched) {
                            $found = $this->render_route($route, $params);
                            break;
                        }
                    }
                }
            }
        }
        return $found;
    }

    protected function render_route(string $route, array $params = []): mixed
    {
        $output = false;
        if (isset($this->routes[$route])) {
            $ret = null;
            if (is_callable($this->routes[$route])) {
                $ret = call_user_func($this->routes[$route], $params);
            }
            if (!is_null($ret)) {
                return $ret;
            }
        }
        return $output;
    }

    public function param(?string $index = null, mixed $default = null, mixed $source = null): mixed
    {
        return isset($this->request) ? $this->request->param($index, $default, $source) : $default;
    }

    public function req_is(string $type): bool
    {
        return isset($this->request) ? $this->request->is($type) : false;
    }

    public function getClientIp(): string
    {
        return isset($this->request) ? $this->request->getClientIp() : '';
    }

    public function getClientLang(string $default = "en"): string
    {
        return isset($this->request) ? $this->request->getClientLang($default) : $default;
    }

    public function getSiteUrl(bool $withpath = false): string
    {
        return isset($this->request) ? $this->request->getSiteUrl($withpath) : '';
    }

    public function hash(string $text, mixed $algo = PASSWORD_BCRYPT): string
    {
        return password_hash($text, $algo);
    }

    public function decode(string $data, string $pwd): string
    {
        return $this->encode($data, $pwd);
    }

    public function encode(string $data, string $pwd, bool $base64encoded = false): string
    {
        $key = [''];
        $box = [''];
        $cipher = '';
        $pwd_length = strlen($pwd);
        $data_length = strlen($data);
        for ($i = 0; $i < 256; $i++) {
            $key[$i] = ord($pwd[$i % $pwd_length]);
            $box[$i] = $i;
        }
        for ($j = $i = 0; $i < 256; $i++) {
            $j = ($j + $box[$i] + $key[$i]) % 256;
            $cache = $box[$i];
            $box[$i] = $box[$j];
            $box[$j] = $cache;
        }
        for ($a = $j = $i = 0; $i < $data_length; $i++) {
            $a = ($a + 1) % 256;
            $j = ($j + $box[$a]) % 256;
            $cache = $box[$a];
            $box[$a] = $box[$j];
            $box[$j] = $cache;
            $k = $box[(($box[$a] . $box[$j]) % 256)];
            $cipher .= chr(ord($data[$i]) ^ $k);
        }
        return $base64encoded ? base64_encode($cipher) : $cipher;
    }

    public function module(string $name): mixed
    {
        return $this->registry['modules'][$name] ?? null;
    }

    public function loadModules(mixed $dirs, bool $autoload = true, mixed $prefix = null): array
    {
        $modules = [];
        $dirs = (array)$dirs;
        foreach ($dirs as &$dir) {
            if (file_exists($dir)) {
                foreach (new DirectoryIterator($dir) as $module) {
                    if ($module->isFile() || $module->isDot()) continue;
                    if ($this->loadModule($module->getRealPath(), $prefix)) {
                        $modules[] = strtolower($module->getBasename());
                    }
                }
                if ($autoload) $this['autoload']->append($dir);
            }
        }
        return $modules;
    }

    public function loadModule($path, $prefix = null)
    {
        if (is_array($path)) {
            foreach ($path as $p) $this->loadModule($p);
            return true;
        }
        $disabled = $this->registry['modules.disabled'] ?? null;
        $basename = basename($path);
        $pfx = is_bool($prefix) && $prefix ? strtolower(basename($path)) : $prefix;
        $name = $prefix ? "{$pfx}-{$basename}" : $basename;
        if ($disabled && in_array($name, $disabled)) return false;
        $this->registerModule($name, $path);
        return true;
    }

    public function registerModule(string $name, string $dir): Module
    {
        $name = strtolower($name);
        if (!isset($this->registry['modules'][$name])) {
            $module = new Module($this);
            $module->_dir = $dir;
            $module->_bootfile = "{$dir}/bootstrap.php";
            $this->path($name, $dir);
            $this->registry['modules'][$name] = $module;
            $this->bootModule($module);
        }
        return $this->registry['modules'][$name];
    }

    protected function bootModule(Module $module): void
    {
        if (is_file($module->_bootfile)) {
            $app = $this;
            require($module->_bootfile);
        }
    }

    public function __get($name): mixed
    {
        return $this[$name];
    }

    public function offsetSet(mixed $key, mixed $value): void
    {
        $this->registry[$key] = $value;
    }

    public function offsetGet($key): mixed
    {
        $value = $this->retrieve($key, null);
        if (!is_null($value)) {
            return ($value instanceof Closure) ? $value($this) : $value;
        }
        return $value;
    }

    public function offsetExists($key): bool
    {
        return isset($this->registry[$key]);
    }

    public function offsetUnset(mixed $key): void
    {
        unset($this->registry[$key]);
    }

    public function __invoke($helper)
    {
        return $this->helper($helper);
    }
}

class AppAware
{
    public App $app;
    public mixed $context;

    public function __construct(App $app, mixed $context = null)
    {
        $this->app = $app;
        $this->context = $context;
        $this->initialize();
    }

    protected function initialize()
    {
    }

    public function __call($name, $arguments)
    {
        if (is_callable([$this->app, $name])) {
            return call_user_func_array([$this->app, $name], $arguments);
        }
        return $this;
    }

    public function __invoke($helper)
    {
        return $this->app->helper($helper);
    }

    public function __get($name)
    {
        return $this->app[$name];
    }
}

class Module extends AppAware
{
    public ?string $_dir = null;
    public ?string $_bootfile = null;
    protected $apis = [];

    public function bindApp(App $app)
    {
        $this->app = $app;
        foreach ($this->apis as $name => $value) {
            if ($value instanceof Closure) {
                $value = $value->bindTo($this, $this);
            }
            $this->apis[$name] = $value;
        }
    }

    public function __get($name)
    {
        return isset($this->apis[$name]) ? $this->apis[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->extend([$name => $value]);
    }

    public function extend(array $api)
    {
        foreach ($api as $name => $value) {
            if ($value instanceof Closure) {
                $value = $value->bindTo($this, $this);
                $this->apis[$name] = $value;
            } else {
                $this->{$name} = $value;
            }
        }
    }

    public function __isset($name)
    {
        return isset($this->apis[$name]);
    }

    public function __unset($name)
    {
        unset($this->apis[$name]);
    }

    public function __call($name, $arguments)
    {
        if (isset($this->apis[$name]) && is_callable($this->apis[$name])) {
            return call_user_func_array($this->apis[$name], $arguments);
        }
        if (isset($this->apis['__call']) && is_callable($this->apis['__call'])) {
            return call_user_func_array($this->apis['__call'], [$name, $arguments]);
        }
        return null;
    }
}

class Helper extends AppAware
{
}

include(__DIR__ . '/helper/session.php');
include(__DIR__ . '/helper/cache.php');
function fetch_from_array(array &$array, ?string $index = null, mixed $default = null)
{
    if (is_null($index)) {
        return $array;
    } elseif (isset($array[$index])) {
        return $array[$index];
    } elseif (strpos($index, '/')) {
        $keys = explode('/', $index);
        switch (count($keys)) {
            case 1:
                if (isset($array[$keys[0]])) {
                    return $array[$keys[0]];
                }
                break;
            case 2:
                if (isset($array[$keys[0]][$keys[1]])) {
                    return $array[$keys[0]][$keys[1]];
                }
                break;
            case 3:
                if (isset($array[$keys[0]][$keys[1]][$keys[2]])) {
                    return $array[$keys[0]][$keys[1]][$keys[2]];
                }
                break;
            case 4:
                if (isset($array[$keys[0]][$keys[1]][$keys[2]][$keys[3]])) {
                    return $array[$keys[0]][$keys[1]][$keys[2]][$keys[3]];
                }
                break;
        }
    }
    return is_callable($default) ? call_user_func($default) : $default;
}
