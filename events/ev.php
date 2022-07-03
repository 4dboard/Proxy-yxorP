<?php
/**
 *
 *
 * @author  walkor<walkor@yxorp.net>
 * @link    http://www.yxorp.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace yxorP\events;

use EvIo;
use EvSignal;
use EvTimer;
use yxorP\Worker;
use function count;

/**
 * ev eventloop
 */
class ev implements eventInterface
{
    /**
     * timer id.
     *
     * @var int
     */
    private static int $_timerId = 1;
    /**
     * All listeners for read event.
     *
     * @var array
     */
    private array $_readEvents = [];
    /**
     * All listeners for write event.
     *
     * @var array
     */
    private array $_writeEvents = [];
    /**
     * event listeners of signal.
     *
     * @var array
     */
    private array $_eventSignal = [];
    /**
     * All timer event listeners.
     *
     * @var array
     */
    private array $_eventTimer = [];

    /**
     * {@inheritdoc}
     */
    public function delay(float $delay, $func, $args): bool|int
    {
        $timer_id = self::$_timerId;
        $event = new EvTimer($delay, 0, function () use ($func, $args, $timer_id) {
            unset($this->_eventTimer[$timer_id]);
            $func(...(array)$args);
        });
        $this->_eventTimer[self::$_timerId] = $event;
        return self::$_timerId++;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTimer($timer_id): bool
    {
        if (isset($this->_eventTimer[$timer_id])) {
            $this->_eventTimer[$timer_id]->stop();
            unset($this->_eventTimer[$timer_id]);
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function repeat(float $interval, $func, $args): bool|int
    {
        $event = new EvTimer($interval, $interval, function () use ($func, $args) {
            $func(...(array)$args);
        });
        $this->_eventTimer[self::$_timerId] = $event;
        return self::$_timerId++;
    }

    /**
     * {@inheritdoc}
     */
    public function onReadable($stream, $func)
    {
        $fd_key = (int)$stream;
        $event = new EvIo($stream, \Ev::READ, function () use ($func, $stream) {
            $func($stream);
        });
        $this->_readEvents[$fd_key] = $event;
    }

    /**
     * {@inheritdoc}
     */
    public function offReadable($stream)
    {
        $fd_key = (int)$stream;
        if (isset($this->_readEvents[$fd_key])) {
            $this->_readEvents[$fd_key]->stop();
            unset($this->_readEvents[$fd_key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onWritable($stream, $func)
    {
        $fd_key = (int)$stream;
        $event = new EvIo($stream, \Ev::WRITE, function () use ($func, $stream) {
            $func($stream);
        });
        $this->_readEvents[$fd_key] = $event;
    }

    /**
     * {@inheritdoc}
     */
    public function offWritable($stream)
    {
        $fd_key = (int)$stream;
        if (isset($this->_writeEvents[$fd_key])) {
            $this->_writeEvents[$fd_key]->stop();
            unset($this->_writeEvents[$fd_key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onSignal($signal, $func)
    {
        $event = new EvSignal($signal, function () use ($func, $signal) {
            $func($signal);
        });
        $this->_eventSignal[$signal] = $event;
    }

    /**
     * {@inheritdoc}
     */
    public function offSignal($signal)
    {
        if (isset($this->_eventSignal[$signal])) {
            $this->_eventSignal[$signal]->stop();
            unset($this->_eventSignal[$signal]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAllTimer()
    {
        foreach ($this->_eventTimer as $event) $event->stop();
        $this->_eventTimer = [];
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        \Ev::run();
    }

    /**
     * {@inheritdoc}
     */
    public function stop()
    {
        \Ev::stop();
    }

    /**
     * {@inheritdoc}
     */
    public function getTimerCount(): int
    {
        return count($this->_eventTimer);
    }

}
