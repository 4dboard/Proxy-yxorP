<?php /* yxorP */

namespace Predis\Profile;
class RedisUnstable extends RedisVersion300
{

    public function getSupportedCommands(): array
    {
        return array_merge(parent::getSupportedCommands(), array());
    }
}
