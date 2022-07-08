<?php


namespace yxorP\protocols\Http\Session;

use Redis;
use RuntimeException;
use yxorP\http\timer;
use yxorP\protocols\Http\Session;

class redisSessionHandler implements sessionHandlerInterface
{

    /**
     * @var Redis
     */
    protected Redis $_redis;

    /**
     * @var array
     */
    protected array $_config;

    /**
     * redisSessionHandler constructor.
     * @param array $config = [
     *  'host'     => '127.0.0.1',
     *  'port'     => 6379,
     *  'timeout'  => 2,
     *  'auth'     => '******',
     *  'database' => 2,
     *  'prefix'   => 'redis_session_',
     *  'ping'     => 55,
     * ]
     */
    public function __construct(array $config)
    {
        if (false === extension_loaded('redis')) throw new RuntimeException('Please install redis extension.');

        if (!isset($config['timeout'])) $config['timeout'] = 2;

        $this->_config = $config;

        $this->connect();

        Timer::add($config['ping'] ?? 55, function () {
            $this->_redis->get('ping');
        });
    }

    public function connect()
    {
        $config = $this->_config;

        $this->_redis = new Redis();
        if (false === $this->_redis->connect($config['host'], $config['port'], $config['timeout'])) throw new RuntimeException("Redis connect {$config['host']}:{$config['port']} fail.");
        if (!empty($config['auth'])) $this->_redis->auth($config['auth']);
        if (!empty($config['database'])) $this->_redis->select($config['database']);
        if (empty($config['prefix'])) $config['prefix'] = 'redis_session_';
        $this->_redis->setOption(Redis::OPT_PREFIX, $config['prefix']);
    }

    /**
     * {@inheritdoc}
     */
    public function open(string $save_path, string $name): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function read(string $session_id)
    {
        return $this->_redis->get($session_id);
    }

    /**
     * {@inheritdoc}
     */
    public function write(string $session_id, string $session_data): bool
    {
        return true === $this->_redis->setex($session_id, Session::$lifetime, $session_data);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(string $id, string $data = ""): bool
    {
        return true === $this->_redis->expire($id, Session::$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(string $session_id): bool
    {
        $this->_redis->del($session_id);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close(): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function gc(int $maxlifetime): bool
    {
        return true;
    }
}
