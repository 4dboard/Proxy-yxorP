<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP\Helper;

use Exception;
use Lime\Helper;
use ZipArchive;

/**
 * Admin Helper class.
 */
class Updater extends Helper
{


    public function update($zipUrl, $targetPath, $options = [])
    {

        $options = array_merge([
            'zipRoot' => '/'
        ], $options);

        $fs = $this->app->helper('fs');
        $tmppath = $this->app->path('#tmp:');
        $error = false;
        $zipname = null;

        // download

        if (!is_writable($targetPath)) {
            $error = 'Target folder is not writable!';
        } else {

            $zipname = basename($zipUrl);

            if (!file_put_contents("{$tmppath}/{$zipname}", $handle = @fopen($zipUrl, 'r'))) {
                $error = "Couldn't download {$zipUrl}!";
            }
            @fclose($handle);
        }

        if ($error) {
            throw new Exception($error);
        }

        // extract zip contents

        @mkdir("{$tmppath}/extract-{$zipname}", 0777);
        $zip = new ZipArchive;

        if ($zip->open("{$tmppath}/{$zipname}") === true) {

            if (!$zip->extractTo("{$tmppath}/extract-{$zipname}")) {
                $error = 'Extracting zip file failed!';
            }
            $zip->close();
        } else {
            $error = 'Open zip file failed!';
        }

        if ($error) {
            throw new Exception($error);
        }

        // copy

        $fs->copy("{$tmppath}/extract-{$zipname}/" . trim($options['zipRoot'], '/'), $targetPath);

        // cleanup
        $fs->delete("{$tmppath}/{$zipname}");
        $fs->delete("{$tmppath}/extract-{$zipname}");

        return true;
    }

}
