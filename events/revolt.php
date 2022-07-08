<?php


namespace yxorP\events;

use Revolt\EventLoop;
use Revolt\EventLoop\Driver;
use function count;

class revolt implements eventInterface
{
    /**
     * @var Driver|null
     */
    private ?Driver $_driver = null;

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
     * event listeners of signal.
     * @var array
     */
    private array $_eventSignal = [];

    /**
     * event listeners of timer.
     * @var array
     */
    private array $_eventTimer = [];

    /**
     * timer id.
     * @var int
     */
    private int $_timerId = 1;

    /**
     * Construct.
     */
    public function __construct()
    {
        $this->_driver = EventLoop::getDriver();
    }

    /**
     * {}
     */
    public function driver(): ?Driver
    {
        return $this->_driver;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->_driver->run();
    }

    /**
     * {@inheritdoc}
     */
    public function stop()
    {
        foreach ($this->_eventSignal as $cb_id) $this->_driver->cancel($cb_id);
        $this->_driver->stop();
        pcntl_signal(SIGINT, SIG_IGN);
    }

    /**
     * {@inheritdoc}
     */
    public function delay(float $delay, $func, $args): bool|int
    {
        $args = (array)$args;
        $timer_id = $this->_timerId++;
        $closure = function () use ($func, $args, $timer_id) {
            unset($this->_eventTimer[$timer_id]);
            $func(...$args);
        };
        $cb_id = $this->_driver->delay($delay, $closure);
        $this->_eventTimer[$timer_id] = $cb_id;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function repeat(float $interval, $func, $args): bool|int
    {
        $args = (array)$args;
        $timer_id = $this->_timerId++;
        $closure = function () use ($func, $args, $timer_id) {
            $func(...$args);
        };
        $cb_id = $this->_driver->repeat($interval, $closure);
        $this->_eventTimer[$timer_id] = $cb_id;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function onReadable($stream, $func)
    {
        $fd_key = (int)$stream;
        if (isset($this->_readEvents[$fd_key])) {
            $this->_driver->cancel($this->_readEvents[$fd_key]);
            unset($this->_readEvents[$fd_key]);
        }

        $this->_readEvents[$fd_key] = $this->_driver->onReadable($stream, function () use ($stream, $func) {
            $func($stream);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function offReadable($stream)
    {
        $fd_key = (int)$stream;
        if (isset($this->_readEvents[$fd_key])) {
            $this->_driver->cancel($this->_readEvents[$fd_key]);
            unset($this->_readEvents[$fd_key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onWritable($stream, $func)
    {
        $fd_key = (int)$stream;
        if (isset($this->_writeEvents[$fd_key])) {
            $this->_driver->cancel($this->_writeEvents[$fd_key]);
            unset($this->_writeEvents[$fd_key]);
        }
        $this->_writeEvents[$fd_key] = $this->_driver->onWritable($stream, function () use ($stream, $func) {
            $func($stream);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function offWritable($stream)
    {
        $fd_key = (int)$stream;
        if (isset($this->_writeEvents[$fd_key])) {
            $this->_driver->cancel($this->_writeEvents[$fd_key]);
            unset($this->_writeEvents[$fd_key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onSignal($signal, $func)
    {
        $fd_key = (int)$signal;
        if (isset($this->_eventSignal[$fd_key])) {
            $this->_driver->cancel($this->_eventSignal[$fd_key]);
            unset($this->_eventSignal[$fd_key]);
        }
        $this->_eventSignal[$fd_key] = $this->_driver->onSignal($signal, function () use ($signal, $func) {
            $func($signal);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function offSignal($signal)
    {
        $fd_key = (int)$signal;
        if (isset($this->_eventSignal[$fd_key])) {
            $this->_driver->cancel($this->_eventSignal[$fd_key]);
            unset($this->_eventSignal[$fd_key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTimer($timer_id): bool
    {
        if (isset($this->_eventTimer[$timer_id])) {
            $this->_driver->cancel($this->_eventTimer[$timer_id]);
            unset($this->_eventTimer[$timer_id]);
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAllTimer()
    {
        foreach ($this->_eventTimer as $cb_id) {
            $this->_driver->cancel($cb_id);
        }
        $this->_eventTimer = [];
    }

    /**
     * {@inheritdoc}
     */
    public function getTimerCount(): int
    {
        return count($this->_eventTimer);
    }
}
