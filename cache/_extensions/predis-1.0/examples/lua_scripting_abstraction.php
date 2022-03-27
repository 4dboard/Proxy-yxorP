<?php /* yxorP */


require __DIR__ . '/shared.php';

// This example will not work with versions of Redis < 2.6.
//
// Additionally to the EVAL command defined in the current development profile,
// the Predis\Command\ScriptCommand class can be used to build an higher level
// abstraction for "scriptable" commands so that they will appear just like any
// other command on the client-side. This is a quick example used to implement
// INCREX.

use Predis\Command\ScriptCommand;

class IncrementExistingKeysBy extends ScriptCommand
{
    public function getKeysCount(): int
    {


        return -1;
    }

    public function getScript(): string
    {
        return <<<LUA
local cmd, insert = redis.call, table.insert
local increment, results = ARGV[1], { }

for idx, key in ipairs(KEYS) do
  if cmd('exists', key) == 1 then
    insert(results, idx, cmd('incrby', key, increment))
  else
    insert(results, idx, false)
  end
end

return results
LUA;
    }
}

$client = new Predis\Client($single_server, array(
    'profile' => static function ($options) {
        $profile = $options->getDefault('profile');
        $profile->defineCommand('increxby', 'IncrementExistingKeysBy');

        return $profile;
    }
));

$client->mset((array)'foo', 10, 'foobar', 100);

var_export($client->increxby('foo', 'foofoo', 'foobar', 50));


