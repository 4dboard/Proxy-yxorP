<?php

namespace yxorP\Helper;

use Lime\Helper;
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
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Async Helper class.
 * Use only if you know what you're doing!!!
 *
 * Usage:
 *
 * yxorp()->helper('async')->exec('
 *    sleep(10);
 *    file_put_contents(YXORP_DIR."/debug.txt", json_encode(ASYNC_PARAMS));
 * ', ['test' => 222]);
 */
class Async extends Helper
{

    public string $phpPath = 'php';

    public function exec($script, $params = null, $maxTime = 60): string
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


        $script = "<?php

// include yxorp
include('" . YXORP_DIR . "/bootstrap.php');
const ASYNC_PARAMS = " . var_export($params, true) . ";

?>" . $script . "

// delete script after execution
unlink(__FILE__);
";

        $fs->write("#storage:async/{$processId}.php", $script);
        $scriptfile = $this->app->path("#storage:async/{$processId}.php");

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

        $cmd = $this->phpPath . " $scriptfile";

        if (str_starts_with(php_uname(), "Windows")) {
            pclose(popen("start /B " . $cmd, "r"));
        } else {
            exec($cmd . " > /dev/null &");
        }
    }

    protected function isExecAvailable(): bool
    {

        if (in_array(strtolower(ini_get('safe_mode')), ['on', '1'], true) || (!function_exists('exec'))) {
            return false;
        }

        $disabled_functions = explode(',', ini_get('disable_functions'));

        return !in_array('exec', $disabled_functions);
    }

    public function finished($processId, &$error = null): bool
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

}