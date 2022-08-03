<?php

namespace yxorP\app\modules\app\helper;

use yxorP\app\lib\http\helperAware;
use function exec;
use function explode;
use function fclose;
use function file_get_contents;
use function fsockopen;
use function function_exists;
use function fwrite;
use function in_array;
use function ini_get;
use function parse_url;
use function pclose;
use function php_uname;
use function str_replace;
use function strlen;
use function strtolower;
use function substr;
use function time;
use function trim;
use function uniqid;
use function unlink;
use function var_export;

/**
 * Async Helper class.
 * Use only if you know what you're doing!!!
 *
 * Usage:
 *
 * Cockpit::instance()->helper('async')->exec('
 *    sleep(10);
 *    file_put_contents(COCKPIT_DIR."/debug.txt", $test);
 * ', ['test' => 222]);
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class async extends helperAware
{

    public $phpPath = null;

    public function exec($script, $params = [], $maxTime = 60)
    {

        $processId = uniqid('worker') . '-' . (time() + $maxTime);
        $fs = $this->app->helper('fs');

        if ($path = $this->app->path($script)) {
            $script = file_get_contents($path);
        }

        $script = trim($script);

        if (substr($script, 0, 4) !== '<?php') {
            $script = "<?php " . $script;
        }

        $appDir = SITE_DIR;
        $envDir = rtrim($this->app->path('#root:'), '/');
        $script = "<?php

if (isset(\$_GET['async'])) {
    \session_write_close();
}

// include cockpit
include('{$appDir}/bootstrap.php');

function Cockpit() {

    static \$instance;

    if (!isset(\$instance)) {
        \$instance = Cockpit::instance('{$envDir}');
    }

    return \$instance;
}

extract(" . var_export($params, true) . ");

?>" . $script . "

// delete worker script after execution
unlink(__FILE__);
";

        $file = "#storage:tmp/async/{$processId}.php";
        $fs->write($file, $script);
        $scriptfile = $this->app->path($file);

        $this->execInBackground($scriptfile);

        return $processId;
    }

    protected function execInBackground($scriptfile)
    {

        if (!$this->isExecAvailable()) {

            // fire and forget calling script
            $url = $this->app->pathToUrl($scriptfile, true) . '?async=true';
            $parts = parse_url($url);
            $fp = fsockopen($parts['host'], $parts['port'] ?? 80, $errno, $errstr, 30);

            if ($fp) {
                $out = "POST " . $parts['path'] . " HTTP/1.1\r\n";
                $out .= "Host: " . $parts['host'] . "\r\n";
                $out .= "Content-Type: application/x-www-form-urlencoded\r\n";
                $out .= "Content-Length: " . strlen($parts['query']) . "\r\n";
                $out .= "Connection: Close\r\n\r\n";
                if (isset($parts['query'])) $out .= $parts['query'];
            }

            fwrite($fp, $out);
            fclose($fp);
            return;
        }

        $cmd = $this->phpPath . " -f $scriptfile";

        if (substr(php_uname(), 0, 7) === "Windows") {
            pclose(popen("start /B " . $cmd, "r"));
        } else {
            exec($cmd . " > /dev/null &");
        }
    }

    protected function isExecAvailable()
    {

        if (!$this->phpPath || in_array(strtolower(ini_get('safe_mode')), ['on', '1'], true) || (!function_exists('exec'))) {
            return false;
        }

        $disabled_functions = explode(',', ini_get('disable_functions'));

        return !in_array('exec', $disabled_functions) && strlen(trim(exec($this->phpPath . ' -v')));
    }

    public function finished($processId, &$error = null)
    {

        $processId = str_replace('..', '', $processId);
        $file = $this->app->path("#storage:async/{$processId}.php");

        if ($file) {
            $exit = explode('-', basename($file, '.php'))[1];

            if (time() > $exit) {

                // do something
                unlink($file);
                $error = 'timeout';
                return true;
            }

            return false;
        }

        return true;
    }

    public function possible()
    {
        return $this->isExecAvailable() || function_exists('fsockopen');
    }

    protected function initialize()
    {

        $this->phpPath = $this->app->retrieve('aysnc.php', 'php');
    }

}
