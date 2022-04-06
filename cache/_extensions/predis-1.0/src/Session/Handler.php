<?php /* yxorP */

namespace Predis\Session;

use Predis\AClientInterface;
use SessionHandlerInterface;

/**
 * @property int|string $ttl
 * @property AClientInterface $client
 */
class Handler implements SessionHandlerInterface
{
    protected AClientInterface $client;
    protected string|int $ttl;

    public function __construct(AClientInterface $client, array $options = array())
    {
        $this->client = $client;

        if (isset($options['gc_maxlifetime'])) {
            $this->ttl = (int)$options['gc_maxlifetime'];
        } else {
            $this->ttl = ini_get('session.gc_maxlifetime');
        }
    }

    public function register(): void
    {
        if (version_compare(PHP_VERSION, '5.4.0') >= 0) {
            session_set_save_handler($this, true);
        } else {
            session_set_save_handler(
                array($this, 'open'),
                array($this, 'close'),
                array($this, 'read'),
                array($this, 'write'),
                array($this, 'destroy'),
                array($this, 'gc')
            );
        }
    }

    public function open($save_path, $session_id): bool
    {

        return true;
    }

    public function close(): bool
    {

        return true;
    }

    public function gc($maxlifetime): bool
    {
        // NOOP
        return true;
    }

    public function read($session_id): string
    {
        if ($data = $this->client->get($session_id)) {
            return $data;
        }

        return '';
    }

    public function write($session_id, $session_data): bool
    {
        $this->client->setex($session_id, $this->ttl, $session_data);

        return true;
    }

    public function destroy($session_id): bool
    {
        $this->client->del((array)$session_id);

        return true;
    }

    public function getClient(): AClientInterface
    {
        return $this->client;
    }

    public function getMaxLifeTime(): int|string
    {
        return $this->ttl;
    }
}
