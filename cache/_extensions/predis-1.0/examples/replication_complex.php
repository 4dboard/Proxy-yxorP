<?php /* yxorP */
require __DIR__ . '/shared.php';

// Predis allows to set Lua scripts as read-only operations for replication.
// This works for both EVAL and EVALSHA and also for the client-side abstraction
// built upon them (Predis\Command\ScriptCommand). This example shows a slightly
// more complex configuration that injects a new script command in the server
// profile used by the new client instance and marks it marks it as a read-only
// operation for replication so that it will be executed on slaves.

use Predis\Command\ScriptCommand;
use Predis\Connection\Aggregate\MasterSlaveReplication;
use Predis\Replication\ReplicationStrategy;

// ------------------------------------------------------------------------- //

// Define a new script command that returns all the fields of a variable number
// of hashes with a single roundtrip.

class HashMultipleGetAll extends ScriptCommand
{
    public const BODY = <<<LUA
local hashes = {}
for _, key in pairs(KEYS) do
    table.insert(hashes, key)
    table.insert(hashes, redis.call('hgetall', key))
end
return hashes
LUA;

    public function getScript(): string
    {
        return self::BODY;
    }
}

// ------------------------------------------------------------------------- //

$parameters = array(
    'tcp://127.0.0.1:6379/?alias=master',
    'tcp://127.0.0.1:6380/?alias=slave',
);

$options = array(
    'profile' => static function ($options, $option) {
        $profile = $options->getDefault($option);
        $profile->defineCommand('hmgetall', 'HashMultipleGetAll');

        return $profile;
    },
    'replication' => static function () {
        $strategy = new ReplicationStrategy();
        $strategy->setScriptReadOnly(HashMultipleGetAll::BODY);

        return new MasterSlaveReplication($strategy);
    },
);

// ------------------------------------------------------------------------- //

$client = new Predis\Client($parameters, $options);

// Execute the following commands on the master server using redis-cli:
// $ ./redis-cli HMSET metavars foo bar hoge piyo
// $ ./redis-cli HMSET servers master host1 slave host2

$hashes = $client->hmgetall('metavars', 'servers');

$replication = $client->getConnection();
$stillOnSlave = $replication->getCurrent() === $replication->getConnectionById('slave');

echo "Is still on slave? ", $stillOnSlave ? 'YES!' : 'NO!', PHP_EOL;
var_export($hashes);
