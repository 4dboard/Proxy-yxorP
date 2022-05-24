<?php /* yxorP */

namespace Predis\PubSub;

use Iterator;

/**
 * @property $position
 * @property int $statusFlags
 */
abstract class AbstractConsumer implements Iterator
{
    public const SUBSCRIBE = 'subscribe';
    public const UNSUBSCRIBE = 'unsubscribe';
    public const PSUBSCRIBE = 'psubscribe';
    public const PUNSUBSCRIBE = 'punsubscribe';
    public const MESSAGE = 'message';
    public const PMESSAGE = 'pmessage';
    public const PONG = 'pong';

    public const STATUS_VALID = 1;
    public const STATUS_SUBSCRIBED = 2;
    public const STATUS_PSUBSCRIBED = 4;

    private $position;
    private int $statusFlags = self::STATUS_VALID;

    public function __destruct()
    {
        $this->stop(true);
    }

    public function stop($drop = false): bool
    {
        if (!$this->valid()) {
            return false;
        }

        if ($drop) {
            $this->invalidate();
            $this->disconnect();
        } else {
            if ($this->isFlagSet(self::STATUS_SUBSCRIBED)) {
                $this->unsubscribe();
            }
            if ($this->isFlagSet(self::STATUS_PSUBSCRIBED)) {
                $this->punsubscribe();
            }
        }

        return !$drop;
    }

    #[Pure] public function valid(): bool
    {
        $isValid = $this->isFlagSet(self::STATUS_VALID);
        $subscriptionFlags = self::STATUS_SUBSCRIBED | self::STATUS_PSUBSCRIBED;
        $hasSubscriptions = ($this->statusFlags & $subscriptionFlags) > 0;

        return $isValid && $hasSubscriptions;
    }

    protected function isFlagSet($value): bool
    {
        return ($this->statusFlags & $value) === $value;
    }

    protected function invalidate(): void
    {
        $this->statusFlags = 0;
    }

    abstract protected function disconnect();

    public function unsubscribe(): void
    {
        $this->writeRequest(self::UNSUBSCRIBE, func_get_args());
    }

    abstract protected function writeRequest($method, $arguments);

    public function punsubscribe(): void
    {
        $this->writeRequest(self::PUNSUBSCRIBE, func_get_args());
    }

    public function subscribe($channel): void
    {
        $this->writeRequest(self::SUBSCRIBE, func_get_args());
        $this->statusFlags |= self::STATUS_SUBSCRIBED;
    }

    public function psubscribe($pattern): void
    {
        $this->writeRequest(self::PSUBSCRIBE, func_get_args());
        $this->statusFlags |= self::STATUS_PSUBSCRIBED;
    }

    public function ping($payload = null): void
    {
        $this->writeRequest('PING', array($payload));
    }

    public function rewind()
    {

    }

    public function current()
    {
        return $this->getValue();
    }

    abstract protected function getValue();

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        if ($this->valid()) {
            $this->position++;
        }

        return $this->position;
    }
}
