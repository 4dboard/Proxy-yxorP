<?php /* yxorP */

namespace Predis\Command\Processor;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Predis\Command\CommandInterface;
use Predis\Command\PrefixableCommandInterface;

/**
 * @property string[] $commands
 * @property $prefix
 */
class KeyPrefixProcessor implements ProcessorInterface
{
    private $prefix;
    private array $commands;

    public function __construct($prefix)
    {
        $this->prefix = $prefix;
        $this->commands = array(

            'EXISTS' => 'self::first',
            'DEL' => 'self::all',
            'TYPE' => 'self::first',
            'KEYS' => 'self::first',
            'RENAME' => 'self::all',
            'RENAMENX' => 'self::all',
            'EXPIRE' => 'self::first',
            'EXPIREAT' => 'self::first',
            'TTL' => 'self::first',
            'MOVE' => 'self::first',
            'SORT' => 'self::sort',
            'DUMP' => 'self::first',
            'RESTORE' => 'self::first',
            'SET' => 'self::first',
            'SETNX' => 'self::first',
            'MSET' => 'self::interleaved',
            'MSETNX' => 'self::interleaved',
            'GET' => 'self::first',
            'MGET' => 'self::all',
            'GETSET' => 'self::first',
            'INCR' => 'self::first',
            'INCRBY' => 'self::first',
            'DECR' => 'self::first',
            'DECRBY' => 'self::first',
            'RPUSH' => 'self::first',
            'LPUSH' => 'self::first',
            'LLEN' => 'self::first',
            'LRANGE' => 'self::first',
            'LTRIM' => 'self::first',
            'LINDEX' => 'self::first',
            'LSET' => 'self::first',
            'LREM' => 'self::first',
            'LPOP' => 'self::first',
            'RPOP' => 'self::first',
            'RPOPLPUSH' => 'self::all',
            'SADD' => 'self::first',
            'SREM' => 'self::first',
            'SPOP' => 'self::first',
            'SMOVE' => 'self::skipLast',
            'SCARD' => 'self::first',
            'SISMEMBER' => 'self::first',
            'SINTER' => 'self::all',
            'SINTERSTORE' => 'self::all',
            'SUNION' => 'self::all',
            'SUNIONSTORE' => 'self::all',
            'SDIFF' => 'self::all',
            'SDIFFSTORE' => 'self::all',
            'SMEMBERS' => 'self::first',
            'SRANDMEMBER' => 'self::first',
            'ZADD' => 'self::first',
            'ZINCRBY' => 'self::first',
            'ZREM' => 'self::first',
            'ZRANGE' => 'self::first',
            'ZREVRANGE' => 'self::first',
            'ZRANGEBYSCORE' => 'self::first',
            'ZCARD' => 'self::first',
            'ZSCORE' => 'self::first',
            'ZREMRANGEBYSCORE' => 'self::first',

            'SETEX' => 'self::first',
            'APPEND' => 'self::first',
            'SUBSTR' => 'self::first',
            'BLPOP' => 'self::skipLast',
            'BRPOP' => 'self::skipLast',
            'ZUNIONSTORE' => 'self::zsetStore',
            'ZINTERSTORE' => 'self::zsetStore',
            'ZCOUNT' => 'self::first',
            'ZRANK' => 'self::first',
            'ZREVRANK' => 'self::first',
            'ZREMRANGEBYRANK' => 'self::first',
            'HSET' => 'self::first',
            'HSETNX' => 'self::first',
            'HMSET' => 'self::first',
            'HINCRBY' => 'self::first',
            'HGET' => 'self::first',
            'HMGET' => 'self::first',
            'HDEL' => 'self::first',
            'HEXISTS' => 'self::first',
            'HLEN' => 'self::first',
            'HKEYS' => 'self::first',
            'HVALS' => 'self::first',
            'HGETALL' => 'self::first',
            'SUBSCRIBE' => 'self::all',
            'UNSUBSCRIBE' => 'self::all',
            'PSUBSCRIBE' => 'self::all',
            'PUNSUBSCRIBE' => 'self::all',
            'PUBLISH' => 'self::first',

            'PERSIST' => 'self::first',
            'STRLEN' => 'self::first',
            'SETRANGE' => 'self::first',
            'GETRANGE' => 'self::first',
            'SETBIT' => 'self::first',
            'GETBIT' => 'self::first',
            'RPUSHX' => 'self::first',
            'LPUSHX' => 'self::first',
            'LINSERT' => 'self::first',
            'BRPOPLPUSH' => 'self::skipLast',
            'ZREVRANGEBYSCORE' => 'self::first',
            'WATCH' => 'self::all',

            'PTTL' => 'self::first',
            'PEXPIRE' => 'self::first',
            'PEXPIREAT' => 'self::first',
            'PSETEX' => 'self::first',
            'INCRBYFLOAT' => 'self::first',
            'BITOP' => 'self::skipFirst',
            'BITCOUNT' => 'self::first',
            'HINCRBYFLOAT' => 'self::first',
            'EVAL' => 'self::evalKeys',
            'EVALSHA' => 'self::evalKeys',

            'SSCAN' => 'self::first',
            'ZSCAN' => 'self::first',
            'HSCAN' => 'self::first',
            'PFADD' => 'self::first',
            'PFCOUNT' => 'self::all',
            'PFMERGE' => 'self::all',
            'ZLEXCOUNT' => 'self::first',
            'ZRANGEBYLEX' => 'self::first',
            'ZREMRANGEBYLEX' => 'self::first',
        );
    }

    public static function first(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $arguments[0] = $prefix . $arguments[0] . $command->setRawArguments($arguments);
        }
    }

    public static function all(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            foreach ($arguments as &$key) {
                $key = "$prefix$key";
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function interleaved(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $length = count($arguments);

            for ($i = 0; $i < $length; $i += 2) {
                $arguments[$i] = $prefix . $arguments[$i];
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function skipFirst(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $length = count($arguments);

            for ($i = 1; $i < $length; $i++) {
                $arguments[$i] = $prefix . $arguments[$i];
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function skipLast(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $length = count($arguments);

            for ($i = 0; $i < $length - 1; $i++) {
                $arguments[$i] = $prefix . $arguments[$i];
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function sort(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $arguments[0] = $prefix . $arguments[0];

            if (($count = count($arguments)) > 1) {
                for ($i = 1; $i < $count; $i++) {
                    switch ($arguments[$i]) {
                        case 'BY':
                        case 'STORE':
                            $arguments[$i] = "$prefix{$arguments[++$i]}";
                            break;

                        case 'GET':
                            $value = $arguments[++$i];
                            if ($value !== '#') {
                                $arguments[$i] = "$prefix$value";
                            }
                            break;

                        case 'LIMIT';
                            $i += 2;
                            break;
                    }
                }
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function evalKeys(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            for ($i = 2; $i < $arguments[1] + 2; $i++) {
                $arguments[$i] = $prefix . $arguments[$i];
            }

            $command->setRawArguments($arguments);
        }
    }

    public static function zsetStore(CommandInterface $command, $prefix): void
    {
        if ($arguments = $command->getArguments()) {
            $arguments[0] = $prefix . $arguments[0];
            $length = ((int)$arguments[1]) + 2;

            for ($i = 2; $i < $length; $i++) {
                $arguments[$i] = $prefix . $arguments[$i];
            }

            $command->setRawArguments($arguments);
        }
    }

    public function process(CommandInterface $command)
    {
        if ($command instanceof PrefixableCommandInterface) {
            $command->prefixKeys($this->prefix);
        } elseif (isset($this->commands[$commandID = strtoupper($command->getId())])) {
            call_user_func($this->commands[$commandID], $command, $this->prefix);
        }
    }

    public function setCommandHandler($commandID, $callback = null): void
    {
        $commandID = strtoupper($commandID);

        if (!isset($callback)) {
            unset($this->commands[$commandID]);

            return;
        }

        if (!is_callable($callback)) {
            throw new InvalidArgumentException(
                "Callback must be a valid callable object or NULL"
            );
        }

        $this->commands[$commandID] = $callback;
    }

    #[Pure] public function __toString()
    {
        return $this->getPrefix();
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    public function setPrefix($prefix): void
    {
        $this->prefix = $prefix;
    }
}
