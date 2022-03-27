<?php /* yxorP */


require __DIR__ . '/shared.php';

// This is an implementation of an atomic client-side ZPOP using the support for
// check-and-set (CAS) operations with MULTI/EXEC transactions, as described in
// "WATCH explained" from http://redis.io/topics/transactions
//
// First, populate your database with a tiny sample data set:
//
// ./redis-cli
// SELECT 15
// ZADD zset 1 a 2 b 3 c
//
// Then execute this script four times and see its output.
//

function zpop($client, $key)
{
    $element = null;
    $options = array(
        'cas' => true,
        'watch' => $key,
        'retry' => 3,

    );

    $client->transaction($options, function ($tx) use ($key, &$element) {
        @list($element) = $tx->zrange($key, 0, 0);

        if (isset($element)) {
            $tx->multi();
            $tx->zrem($key, $element);
        }
    });

    return $element;
}

$client = new Predis\Client($single_server);
$zpopped = zpop($client, 'zset');

echo isset($zpopped) ? "ZPOPed $zpopped" : "Nothing to ZPOP!", PHP_EOL;
