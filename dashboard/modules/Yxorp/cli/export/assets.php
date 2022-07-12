<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!YXORP_CLI) return;

$target = $app->param('target', null);

if (!$target) {
    return;
}

$fs = $app->helper('fs');
$assets = $app->storage->find('yxorp/assets')->toArray();

if (count($assets)) {

    CLI::writeln("Exporting yxorp/assets (".count($assets).")");

    $fs->write("{$target}/yxorp/assets.json", json_encode($assets, JSON_PRETTY_PRINT));

    // move assets files
    foreach ($assets as &$asset) {

        $path = trim($asset['path'], '/');
        $_target = "{$target}/yxorp/assets/{$path}";

        if ($app->filestorage->has("assets://{$path}") && $resource = $app->filestorage->readStream("assets://{$path}")) {

            $fs->mkdir(dirname($_target));

            $stream = fopen($_target, 'w+b');

            stream_copy_to_stream($resource, $stream);

            fclose($stream);
            fclose($resource);
        }
    }
}
