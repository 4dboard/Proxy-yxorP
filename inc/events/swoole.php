<?php


namespace yxorP\inc\events;

use Swoole\Event;
use Swoole\Process;
use Swoole\Timer;
use Throwable;
use yxorP\inc\http\worker;

/**
 * @property int $mapId
 */
class swoole implements eventInterface
{
    /**
     * All listeners for read timer
     * @var array
     */
    private array $_eventTimer = [];

    /**
     * All listeners for read event.
     * @var array
     */
    private array $_readEvents = [];

    /**
     * All listeners for write event.
     * @var array
     */
    private array $_writeEvents = [];

    /**
     * {@inheritdoc}
     */
    public function delay(float $delay, $func, $args): bool|int
    {
        $t = (int)($delay * 1000);
        $t = max($t, 1);
        $timer_id = Timer::after($t, function () use ($func, $args, &$timer_id) {
            unset($this->_eventTimer[$timer_id]);
            try {
                $func(...(array)$args);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        });
        $this->_eventTimer[$timer_id] = $timer_id;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTimer($timer_id): bool
    {
        if (isset($this->_eventTimer[$timer_id])) {
            $res = Timer::clear($timer_id);
            unset($this->_eventTimer[$timer_id]);
            return $res;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function repeat(float $interval, $func, $args): bool|int
    {
        if ($this->mapId > PHP_INT_MAX) $this->mapId = 0;
        $t = (int)($interval * 1000);
        $t = max($t, 1);
        $timer_id = Timer::tick($t, function () use ($func, $args) {
            try {
                $func(...(array)$args);
            } catch (Throwable $e) {
                Worker::stopAll(250, $e);
            }
        });
        $this->_eventTimer[$timer_id] = $timer_id;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function onReadable($stream, $func)
    {
        $this->_readEvents[(int)$stream] = $stream;
        return Event::add($stream, $func, null, SWOOLE_EVENT_READ);
    }

    /**
     * {@inheritdoc}
     */
    public function offReadable($stream)
    {
        $fd = (int)$stream;
        if (!isset($this->_readEvents[$fd])) return;
        unset($this->_readEvents[$fd]);
        if (!isset($this->_writeEvents[$fd])) return Event::del($stream);
        return Event::set($stream, null, null, SWOOLE_EVENT_READ);
    }

    /**
     * {@inheritdoc}
     */
    public function onWritable($stream, $func)
    {
        $this->_writeEvents[(int)$stream] = $stream;
        return Event::add($stream, null, $func, SWOOLE_EVENT_WRITE);
    }

    /**
     * {@inheritdoc}
     */
    public function offWritable($stream)
    {
        $fd = (int)$stream;
        if (!isset($this->_writeEvents[$fd])) return;
        unset($this->_writeEvents[$fd]);
        if (!isset($this->_readEvents[$fd])) return Event::del($stream);
        return Event::set($stream, null, null, SWOOLE_EVENT_WRITE);
    }

    /**
     * {@inheritdoc}
     */
    public function onSignal($signal, $func)
    {
        return Process::signal($signal, $func);
    }

    /**
     * {@inheritdoc}
     */
    public function offSignal($signal)
    {
        return Process::signal($signal, function () {
        });
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAllTimer()
    {
        foreach ($this->_eventTimer as $timer_id) Timer::clear($timer_id);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        Event::wait();
    }

    /**
     * Destroy loop.
     *
     * @return void
     */
    public function stop()
    {
        Event::exit();
        posix_kill(posix_getpid(), SIGINT);
    }

    /**
     * Get timer count.
     *
     * @return integer
     */
    public function getTimerCount(): int
    {
        return count($this->_eventTimer);
    }

}
