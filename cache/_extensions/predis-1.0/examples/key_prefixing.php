<?php /* yxorP */
require __DIR__ . '/shared.php';

// Predis can prefix keys found in commands arguments before sending commands to
// Redis, even for complex commands such as SORT, ZUNIONSTORE and ZINTERSTORE.
// Prefixing keys can be useful to create user-level namespaces for you keyspace
// thus reducing the need for separate logical databases in certain scenarios.

$client = new Predis\Client($single_server, array('prefix' => 'nrk:'));

$client->mset(array('foo' => 'bar', 'lol' => 'wut'));
var_export($client->mget((array)'foo', 'lol'));
var_export($client->keys('*'));

