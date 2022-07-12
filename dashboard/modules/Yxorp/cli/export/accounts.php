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

$target = $app->param('target', null);

if (!$target) {
    return;
}

$accounts = $app->storage->find('yxorp/accounts')->toArray();


if (count($accounts)) {

    CLI::writeln("Exporting yxorp/accounts (".count($accounts).")");

    $app->helper('fs')->write("{$target}/yxorp/accounts.json", json_encode($accounts, JSON_PRETTY_PRINT));
}
