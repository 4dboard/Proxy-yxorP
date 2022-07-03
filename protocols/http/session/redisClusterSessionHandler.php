<?php


namespace yxorP\protocols\Http\Session;

use Redis;
use RedisCluster;
use RedisClusterException;

class redisClusterSessionHandler extends redisSessionHandler
{
    /**
     * @throws RedisClusterException
     */
    public function __construct($config)
    {
        $timeout = $config['timeout'] ?? 2;
        $read_timeout = $config['read_timeout'] ?? $timeout;
        $persistent = $config['persistent'] ?? false;
        $auth = $config['auth'] ?? '';
        $args = [null, $config['host'], $timeout, $read_timeout, $persistent];
        if ($auth) $args[] = $auth;
        $this->_redis = new RedisCluster(...$args);
        if (empty($config['prefix'])) $config['prefix'] = 'redis_session_';
        $this->_redis->setOption(Redis::OPT_PREFIX, $config['prefix']);
    }

    /**
     * {@inheritdoc}
     */
    public function read(string $session_id)
    {
        return $this->_redis->get($session_id);
    }

}
