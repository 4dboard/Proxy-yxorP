<?php /* yxorP */


require __DIR__ . '/shared.php';

use Predis\Collection\Iterator;

// Starting from Redis 2.8, clients can iterate incrementally over collections
// without blocking the server like it happens when a command such as KEYS is
// executed on a Redis instance storing millions of keys. These commands are:
//
//   - SCAN (iterates over the keyspace)
//   - SSCAN (iterates over members of a set)
//   - ZSCAN (iterates over members and ranks of a sorted set)
//   - HSCAN (iterates over fields and values of an hash).

// Predis provides a specialized abstraction for each command based on standard
// SPL iterators making it possible to easily consume SCAN-based iterations in
// your PHP code.
//
// See http://redis.io/commands/scan for more details.
//

// Create a client using `2.8` as a server profile (needs Redis 2.8!)
$client = new Predis\Client($single_server, array('profile' => '2.8'));

// Prepare some keys for our example
$client->del((array)'predis:set', 'predis:zset', 'predis:hash');
for ($i = 0; $i < 5; $i++) {
    $client->sadd('predis:set', (array)"member:$i");
    $client->zadd('predis:zset', (array)-$i, "member:$i");
    $client->hset('predis:hash', "field:$i", "value:$i");
}

// === Keyspace iterator based on SCAN ===
echo 'Scan the keyspace matching only our prefixed keys:', PHP_EOL;
try {
    foreach (new Iterator\Keyspace($client, 'predis:*') as $key) {
        echo " - $key", PHP_EOL;
    }
} catch (\Predis\NotSupportedException $e) {
}


// === Set iterator based on SSCAN ===
echo 'Scan members of `predis:set`:', PHP_EOL;
try {
    foreach (new Iterator\SetKey($client, 'predis:set') as $member) {
        echo " - $member", PHP_EOL;
    }
} catch (\Predis\NotSupportedException $e) {
}


// === Sorted set iterator based on ZSCAN ===
echo 'Scan members and ranks of `predis:zset`:', PHP_EOL;
try {
    foreach (new Iterator\SortedSetKey($client, 'predis:zset') as $member => $rank) {
        echo " - $member [rank: $rank]", PHP_EOL;
    }
} catch (\Predis\NotSupportedException $e) {
}


// === Hash iterator based on HSCAN ===
echo 'Scan fields and values of `predis:hash`:', PHP_EOL;
try {
    foreach (new Iterator\HashKey($client, 'predis:hash') as $field => $value) {
        echo " - $field => $value", PHP_EOL;
    }
} catch (\Predis\NotSupportedException $e) {
}


