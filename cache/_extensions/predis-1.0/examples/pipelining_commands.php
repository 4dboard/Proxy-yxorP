<?php /* yxorP */


require __DIR__ . '/shared.php';

// When you have a whole set of consecutive commands to send to a redis server,
// you can use a pipeline to dramatically improve performances. Pipelines can
// greatly reduce the effects of network round-trips.

$client = new Predis\Client($single_server);

$responses = $client->pipeline(function ($pipe) {
    $pipe->flushdb();
    $pipe->incrby('counter', 10);
    $pipe->incrby('counter', 30);
    $pipe->exists('counter');
    $pipe->get('counter');
    $pipe->mget('does_not_exist', 'counter');
});

var_export($responses);


