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

$target = $app->param('target');

if (!$target) {
    return;
}

foreach ($app->module('collections')->collections() as $name => $collection) {

    $cid = $collection['_id'];
    $items = $app->storage->find("collections/{$cid}")->toArray();

    if (count($items)) {

        CLI::writeln("Exporting collections/{$name} (" . count($items) . ")");

        $app->helper('fs')->write("{$target}/collections/{$name}.json", json_encode($items, JSON_PRETTY_PRINT));
    }
}
