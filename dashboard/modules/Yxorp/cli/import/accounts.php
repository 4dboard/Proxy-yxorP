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


$src = $app->param('src', null);

if (!$src) {
    return;
}

if (!file_exists("{$src}/yxorp/accounts.json")) {
    return;
}

$check = $app->param('check', false);

if ($data = $app->helper('fs')->read("{$src}/yxorp/accounts.json")) {

    if ($accounts = json_decode($data, true)) {

        if (count($accounts)) {

            CLI::writeln("Importing yxorp/accounts (" . count($accounts) . ")");

            foreach ($accounts as $account) {
                if ($check) {
                    if (!$app->storage->count('yxorp/accounts', ['_id' => $account['_id']])) {
                        $app->storage->insert('yxorp/accounts', $account);
                    }
                } else {
                    $app->storage->insert('yxorp/accounts', $account);
                }
            }
        }
    }
}
