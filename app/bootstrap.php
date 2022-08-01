<?php define('SITE_VERSION', '2.0.2');
if (!defined('SITE_START_TIME')) define('SITE_START_TIME', microtime(true));
if (!defined('SITE_CLI')) define('SITE_CLI', PHP_SAPI === 'cli');
if (!defined('SITE_ADMIN')) define('SITE_ADMIN', false);
define('SITE_DIR', str_replace(DIRECTORY_SEPARATOR, '/', __DIR__));
include_once(__DIR__ . '/lib/_autoload.php');
dotEnv::load(SITE_DIR);
spl_autoload_register(function ($class) {
    $class_path = __DIR__ . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($class_path)) include_once($class_path);
});

class App
{
    protected static $instance = [];

    public static function instance(?string $envDir = null, array $config = []): \yxorP\app\lib\lime\App
    {
        if (!$envDir) $envDir = SITE_DIR;
        if (!isset(static::$instance[$envDir])) static::$instance[$envDir] = static::init($envDir, $config);
        return static::$instance[$envDir];
    }

    protected static function init(?string $envDir = null, array $config = []): \yxorP\app\lib\lime\App
    {
        $appDir = SITE_DIR;
        $app = null;
        $cfg = null;
        if (!$envDir) $envDir = $appDir;
        if ($appDir != $envDir) dotEnv::load($envDir);
        if (file_exists("{$envDir}/config/config.php")) $cfg = include("{$envDir}/config/config.php");
        $config = array_replace_recursive(['docs_root' => defined('SITE_DOCUMENT_ROOT') ? SITE_DOCUMENT_ROOT : null, 'debug' => SITE_CLI ? true : preg_match('/(localhost|::1|\.local)$/', $_SERVER['SERVER_NAME'] ?? ''), 'app.name' => 'App', 'app.version' => SITE_VERSION, 'session.name' => md5($envDir), 'sec-key' => 'c3b40c4c-db44-s5h7-a814-b5931a15e5e1', 'i18n' => 'en', 'database' => ['server' => "mongolite://{$envDir}/storage/data", 'options' => ['db' => 'app'], 'driverOptions' => []], 'memory' => ['server' => "redislite://{$envDir}/storage/data/app.memory.sqlite", 'options' => []], 'paths' => ['#app' => __DIR__, '#root' => $envDir, '#config' => $envDir . '/config', '#modules' => $envDir . '/modules', '#addons' => $envDir . '/addons', '#storage' => $envDir . '/storage', '#cache' => $envDir . '/storage/cache', '#cache' => $envDir . '/storage/cache', '#uploads' => $envDir . '/storage/uploads',], 'response' => ['cache' => ['handler' => 'memory', 'duration' => 600,]]], $cfg ?? [], $config);
        if ($config['debug']) $config['app.version'] .= '-' . time();
        $app = new \yxorP\app\lib\lime\App($config);
        foreach ($config['paths'] as $key => $path) $app->path($key, $path);
        $app->helper('cache')->setCachePath($app->path('#cache:') ?? sys_get_temp_dir());
        $app->service('fileStorage', function () use ($config, $app) {
            $visibility = League\Flysystem\UnixVisibility\PortableVisibilityConverter::fromArray(['file' => ['public' => 0644, 'private' => 0644,], 'dir' => ['public' => 0755, 'private' => 0755,],]);
            $storages = array_replace_recursive(['#app' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#app:')], 'mount' => true, 'url' => $app->pathToUrl('#app:', true)], 'root' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#root:')], 'mount' => true, 'url' => $app->pathToUrl('#root:', true)], 'cache' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#cache:'), $visibility], 'mount' => true, 'url' => $app->pathToUrl('#cache:', true)], 'cache' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#cache:'), $visibility], 'mount' => true, 'url' => $app->pathToUrl('#cache:', true)], 'uploads' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#uploads:'), $visibility], 'mount' => true, 'url' => $app->pathToUrl('#uploads:', true)], '#uploads' => ['adapter' => 'League\Flysystem\Local\LocalFilesystemAdapter', 'args' => [$app->path('#uploads:'), $visibility], 'mount' => true, 'url' => $app->pathToUrl('#uploads:', true)],], $config['fileStorage'] ?? []);
            $app->trigger('app.filestorage.init', [&$storages]);
            $filestorage = new fileStorage($storages);
            return $filestorage;
        });
        $app->service('dataStorage', function () use ($config) {
            $client = new MongoHybrid\client($config['database']['server'], $config['database']['options'], $config['database']['driverOptions']);
            return $client;
        });
        $app->service('memory', function () use ($config) {
            $client = new MemoryStorage\client($config['memory']['server'], array_merge(['key' => $config['sec-key']], $config['memory']['options']));
            return $client;
        });
        $app->service('mailer', function () use ($app, $config) {
            $options = isset($config['mailer']) ? $config['mailer'] : [];
            if (is_string($options)) parse_str($options, (array)$options);
            $mailer = new Mailer($options['transport'] ?? 'mail', $options);
            return $mailer;
        });
        $modulesPaths = ["{$appDir}/modules", "{$appDir}/addons"];
        if ($appDir != $envDir) $modulesPaths[] = $config['paths']['#addons'];
        $app->loadModules($modulesPaths);
        if (SITE_CLI || SITE_ADMIN) set_exception_handler(function ($exception) use ($app) {
            $error = ['message' => $exception->getMessage(), 'file' => $exception->getFile(), 'line' => $exception->getLine(), 'trace' => array_slice($exception->getTrace(), 0, 4),];
            $app->trigger('error', [$error, $exception]);
        });
        if ($custombootfile = $app->path('#config:bootstrap.php')) include($custombootfile);
        $app->trigger('bootstrap');
        return $app;
    }
}
