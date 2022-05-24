<?php /* yxorP */

namespace Predis\Replication;

use Predis\Command\CommandInterface;
use Predis\NotSupportedException;

/**
 * @property array $readonlySHA1
 * @property array $readonly
 * @property bool[] $disallowed
 */
class ReplicationStrategy
{
    protected array $disallowed;
    protected array $readonly;
    protected array $readonlySHA1;

    #[Pure] public function __construct()
    {
        $this->disallowed = $this->getDisallowedOperations();
        $this->readonly = $this->getReadOnlyOperations();
        $this->readonlySHA1 = array();
    }

    protected function getDisallowedOperations(): array
    {
        return array(
            'SHUTDOWN' => true,
            'INFO' => true,
            'DBSIZE' => true,
            'LASTSAVE' => true,
            'CONFIG' => true,
            'MONITOR' => true,
            'SLAVEOF' => true,
            'SAVE' => true,
            'BGSAVE' => true,
            'BGREWRITEAOF' => true,
            'SLOWLOG' => true,
        );
    }

    protected function getReadOnlyOperations(): array
    {
        return array(
            'EXISTS' => true,
            'TYPE' => true,
            'KEYS' => true,
            'SCAN' => true,
            'RANDOMKEY' => true,
            'TTL' => true,
            'GET' => true,
            'MGET' => true,
            'SUBSTR' => true,
            'STRLEN' => true,
            'GETRANGE' => true,
            'GETBIT' => true,
            'LLEN' => true,
            'LRANGE' => true,
            'LINDEX' => true,
            'SCARD' => true,
            'SISMEMBER' => true,
            'SINTER' => true,
            'SUNION' => true,
            'SDIFF' => true,
            'SMEMBERS' => true,
            'SSCAN' => true,
            'SRANDMEMBER' => true,
            'ZRANGE' => true,
            'ZREVRANGE' => true,
            'ZRANGEBYSCORE' => true,
            'ZREVRANGEBYSCORE' => true,
            'ZCARD' => true,
            'ZSCORE' => true,
            'ZCOUNT' => true,
            'ZRANK' => true,
            'ZREVRANK' => true,
            'ZSCAN' => true,
            'ZLEXCOUNT' => true,
            'ZRANGEBYLEX' => true,
            'HGET' => true,
            'HMGET' => true,
            'HEXISTS' => true,
            'HLEN' => true,
            'HKEYS' => true,
            'HVALS' => true,
            'HGETALL' => true,
            'HSCAN' => true,
            'PING' => true,
            'AUTH' => true,
            'SELECT' => true,
            'ECHO' => true,
            'QUIT' => true,
            'OBJECT' => true,
            'BITCOUNT' => true,
            'TIME' => true,
            'PFCOUNT' => true,
            'SORT' => array($this, 'isSortReadOnly'),
        );
    }

    /**
     * @throws NotSupportedException
     */
    public function isReadOperation(CommandInterface $command): bool
    {
        if (isset($this->disallowed[$id = $command->getId()])) {
            throw new NotSupportedException(
                "The command '$id' is not allowed in replication mode."
            );
        }

        if (isset($this->readonly[$id])) {
            if (true === $readonly = $this->readonly[$id]) {
                return true;
            }

            return $readonly($command);
        }

        if (($eval = $id === 'EVAL') || $id === 'EVALSHA') {
            $sha1 = $eval ? sha1($command->getArgument(0)) : $command->getArgument(0);

            if (isset($this->readonlySHA1[$sha1])) {
                if (true === $readonly = $this->readonlySHA1[$sha1]) {
                    return true;
                }

                return $readonly($command);
            }
        }

        return false;
    }

    public function isDisallowedOperation(CommandInterface $command): bool
    {
        return isset($this->disallowed[$command->getId()]);
    }

    public function setCommandReadOnly($commandID, $readonly = true): void
    {
        $commandID = strtoupper($commandID);

        if ($readonly) {
            $this->readonly[$commandID] = $readonly;
        } else {
            unset($this->readonly[$commandID]);
        }
    }

    public function setScriptReadOnly($script, $readonly = true): void
    {
        $sha1 = sha1($script);

        if ($readonly) {
            $this->readonlySHA1[$sha1] = $readonly;
        } else {
            unset($this->readonlySHA1[$sha1]);
        }
    }

    protected function isSortReadOnly(CommandInterface $command): bool
    {
        $arguments = $command->getArguments();

        return ($c = count($arguments)) === 1 || $arguments[$c - 2] !== 'STORE';
    }
}
