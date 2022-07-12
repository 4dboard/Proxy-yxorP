<?php
/**
 * This file is part of the Yxorp project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!YXORP_CLI) return;

$fs = $app->helper('fs');

foreach ($app->paths('#cli') as $__dir) {

    foreach ($fs->ls($__dir.'flush') as $__file) {
        include($__file->getRealPath());
    }
}

CLI::writeln("Done flushing data.", true);

$app->trigger('yxorp.flush', []);
