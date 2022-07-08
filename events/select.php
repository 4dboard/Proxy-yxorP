<?php


namespace yxorP\events;

use SplPriorityQueue;
use Throwable;
use function count;
use function microtime;
use function pcntl_signal;
use function pcntl_signal_dispatch;
use const DIRECTORY_SEPARATOR;

class select implements eventInterface
{
    /**
     * All listeners for read/write event.
     *
     * @var array
     */
    private array $_readEvents = [];

    /**
     * All listeners for read/write event.
     *
     * @var array
     */
    private array $_writeEvents = [];

    /**
     * @var array
     */
    private array $_exceptEvents = [];

    /**
     * event listeners of signal.
     *
     * @var array
     */
    private array $_signalEvents = [];

    /**
     * Fds waiting for read event.
     *
     * @var array
     */
    private array $_readFds = [];

    /**
     * Fds waiting for write event.
     *
     * @var array
     */
    private array $_writeFds = [];

    /**
     * Fds waiting for except event.
     *
     * @var array
     */
    private array $_exceptFds = [];

    /**
     * timer scheduler.
     * {['data':timer_id, 'priority':run_timestamp], ..}
     *
     * @var SplPriorityQueue
     */
    private ?SplPriorityQueue $_scheduler = null;

    /**
     * All timer event listeners.
     * [[func, args, flag, timer_interval], ..]
     *
     * @var array
     */
    private array $_eventTimer = [];

    /**
     * timer id.
     *
     * @var int
     */
    private int $_timerId = 1;

    /**
     * select timeout.
     *
     * @var int
     */
    private int $_selectTimeout = 100000000;

    /**
     * Construct.
     */
    public function __construct()
    {
        // Init SplPriorityQueue.
        $this->_scheduler = new SplPriorityQueue();
        $this->_scheduler->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
    }

    /**
     * {@inheritdoc}
     */
    public function delay(float $delay, $func, $args): bool|int
    {
        $timer_id = $this->_timerId++;
        $run_time = microtime(true) + $delay;
        $this->_scheduler->insert($timer_id, -$run_time);
        $this->_eventTimer[$timer_id] = [$func, (array)$args];
        $select_timeout = ($run_time - microtime(true)) * 1000000;
        $select_timeout = $select_timeout <= 0 ? 1 : (int)$select_timeout;
        if ($this->_selectTimeout > $select_timeout) $this->_selectTimeout = $select_timeout;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function repeat(float $delay, $func, $args): bool|int
    {
        $timer_id = $this->_timerId++;
        $run_time = microtime(true) + $delay;
        $this->_scheduler->insert($timer_id, -$run_time);
        $this->_eventTimer[$timer_id] = [$func, (array)$args, $delay];
        $select_timeout = ($run_time - microtime(true)) * 1000000;
        $select_timeout = $select_timeout <= 0 ? 1 : (int)$select_timeout;
        if ($this->_selectTimeout > $select_timeout) $this->_selectTimeout = $select_timeout;
        return $timer_id;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTimer($timer_id): bool
    {
        if (isset($this->_eventTimer[$timer_id])) {
            unset($this->_eventTimer[$timer_id]);
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function onReadable($stream, $func)
    {
        $count = count($this->_readFds);
        if ($count >= 1024) echo "Warning: system call select exceeded the maximum number of connections 1024, please install event/libevent extension for more connections.\n"; else if (DIRECTORY_SEPARATOR !== '/' && $count >= 256) echo "Warning: system call select exceeded the maximum number of connections 256.\n";
        $fd_key = (int)$stream;
        $this->_readEvents[$fd_key] = $func;
        $this->_readFds[$fd_key] = $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function offReadable($stream)
    {
        $fd_key = (int)$stream;
        unset($this->_readEvents[$fd_key], $this->_readFds[$fd_key]);
    }

    /**
     * {@inheritdoc}
     */
    public function onWritable($stream, $func)
    {
        $count = count($this->_writeFds);
        if ($count >= 1024) echo "Warning: system call select exceeded the maximum number of connections 1024, please install event/libevent extension for more connections.\n"; else if (DIRECTORY_SEPARATOR !== '/' && $count >= 256) echo "Warning: system call select exceeded the maximum number of connections 256.\n";
        $fd_key = (int)$stream;
        $this->_writeEvents[$fd_key] = $func;
        $this->_writeFds[$fd_key] = $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function offWritable($stream)
    {
        $fd_key = (int)$stream;
        unset($this->_writeEvents[$fd_key], $this->_writeFds[$fd_key]);
    }

    /**
     * {}
     */
    public function onExcept($stream, $func)
    {
        $fd_key = (int)$stream;
        $this->_exceptEvents[$fd_key] = $func;
        $this->_exceptFds[$fd_key] = $stream;
    }

    /**
     * {}
     */
    public function offExcept($stream)
    {
        $fd_key = (int)$stream;
        unset($this->_exceptEvents[$fd_key], $this->_exceptFds[$fd_key]);
    }

    /**
     * {@inheritdoc}
     */
    public function onSignal($signal, $func)
    {
        if (DIRECTORY_SEPARATOR !== '/') return null;
        $this->_signalEvents[$signal] = $func;
        pcntl_signal($signal, [$this, 'signalHandler']);
    }

    /**
     * Signal handler.
     *
     * @param int $signal
     */
    public function signalHandler(int $signal)
    {
        $this->_signalEvents[$signal]($signal);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        while (1) {
            if (DIRECTORY_SEPARATOR === '/') pcntl_signal_dispatch();

            $read = $this->_readFds;
            $write = $this->_writeFds;
            $except = $this->_exceptFds;

            if ($read || $write || $except) try {
                @stream_select($read, $write, $except, 0, $this->_selectTimeout);
            } catch (Throwable $e) {
            } else {
                $this->_selectTimeout >= 1 && usleep($this->_selectTimeout);
                $ret = false;
            }

            if (!$this->_scheduler->isEmpty()) $this->tick();

            foreach ($read as $fd) {
                $fd_key = (int)$fd;
                if (isset($this->_readEvents[$fd_key])) $this->_readEvents[$fd_key]($fd);
            }

            foreach ($write as $fd) {
                $fd_key = (int)$fd;
                if (isset($this->_writeEvents[$fd_key])) $this->_writeEvents[$fd_key]($fd);
            }

            foreach ($except as $fd) {
                $fd_key = (int)$fd;
                if (isset($this->_exceptEvents[$fd_key])) $this->_exceptEvents[$fd_key]($fd);
            }
        }
    }

    /**
     * Tick for timer.
     *
     * @return void
     */
    protected function tick()
    {
        while (!$this->_scheduler->isEmpty()) {
            $scheduler_data = $this->_scheduler->top();
            $timer_id = $scheduler_data['data'];
            $next_run_time = -$scheduler_data['priority'];
            $time_now = microtime(true);
            $this->_selectTimeout = (int)(($next_run_time - $time_now) * 1000000);
            if ($this->_selectTimeout <= 0) {
                $this->_scheduler->extract();

                if (!isset($this->_eventTimer[$timer_id])) continue;

                // [func, args, timer_interval]
                $task_data = $this->_eventTimer[$timer_id];
                if (isset($task_data[2])) {
                    $next_run_time = $time_now + $task_data[2];
                    $this->_scheduler->insert($timer_id, -$next_run_time);
                } else unset($this->_eventTimer[$timer_id]);
                $task_data[0]($task_data[1]);
                continue;
            }
            return;
        }
        $this->_selectTimeout = 100000000;
    }

    /**
     * {@inheritdoc}
     */
    public function stop()
    {
        $this->deleteAllTimer();
        foreach ($this->_signalEvents as $signal => $item) $this->offsignal($signal);
        $this->_readFds = $this->_writeFds = $this->_exceptFds = $this->_readEvents = $this->_writeEvents = $this->_exceptEvents = $this->_signalEvents = [];
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAllTimer()
    {
        $this->_scheduler = new SplPriorityQueue();
        $this->_scheduler->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
        $this->_eventTimer = [];
    }

    /**
     * {@inheritdoc}
     */
    public function offsignal($signal)
    {
        unset($this->_signalEvents[$signal]);
        pcntl_signal($signal, SIG_IGN);
    }

    /**
     * {@inheritdoc}
     */
    public function getTimerCount(): int
    {
        return count($this->_eventTimer);
    }

}
