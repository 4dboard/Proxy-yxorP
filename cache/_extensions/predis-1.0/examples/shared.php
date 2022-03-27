<?php /* yxorP */


require __DIR__ . '/../autoload.php';

function redis_version($info)
{
    if (isset($info['Server']['redis_version'])) {
        return $info['Server']['redis_version'];
    }

    return $info['redis_version'] ?? 'unknown version';
}

$single_server = array(
    'host' => '127.0.0.1',
    'port' => 6379,
    'database' => 15
);

$multiple_servers = array(
    array(
        'host' => '127.0.0.1',
        'port' => 6379,
        'database' => 15,
        'alias' => 'first',
    ),
    array(
        'host' => '127.0.0.1',
        'port' => 6380,
        'database' => 15,
        'alias' => 'second',
    ),
);
