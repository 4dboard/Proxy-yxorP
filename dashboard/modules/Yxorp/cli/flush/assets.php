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

CLI::writeln('Flushing yxorp/assets data');


$app->storage->dropCollection('yxorp/assets');
$app->storage->dropCollection('yxorp/assets_folders');
