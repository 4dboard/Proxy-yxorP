<?php namespace yxorP\http;

/* Defining the namespace of the file. */

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use Throwable;
use yxorP\connection\connectionInterface;
use yxorP\connection\tcpConnection;
use yxorP\connection\udpConnection;
use yxorP\events\event;
use yxorP\events\select;

/* Creating a class called worker. */

class worker
{
    /* Defining a constant named VERSION with a value of '5.0.0'. */
    /* Defining a constant named STATUS_STARTING with a value of 1. */
    const VERSION = '5.0.0';
    const STATUS_STARTING = 1;
    /* Defining a constant named STATUS_RUNNING and assigning it the value of 2. */
    /* Defining a constant named STATUS_SHUTDOWN with a value of 4. */
    const STATUS_RUNNING = 2;
    /* Defining a constant named STATUS_SHUTDOWN with a value of 4. */
    const STATUS_SHUTDOWN = 4;
    /* Defining a constant named STATUS_RELOADING and assigning it the value of 8. */
    const STATUS_RELOADING = 8;
    /* Defining a constant named DEFAULT_BACKLOG with a value of 102400. */
    const DEFAULT_BACKLOG = 102400;
    /* Defining a constant named MAX_UDP_PACKAGE_SIZE and assigning it the value 65535. */
    const MAX_UDP_PACKAGE_SIZE = 65535;
    /* Defining a constant called UI_SAFE_LENGTH and setting it to 4. */
    const UI_SAFE_LENGTH = 4;
    /* Declaring a variable called $daemonize and setting it to false. */
    public static bool $daemonize = false;
    /* Setting the stdoutFile to /dev/null. */
    public static string $stdoutFile = '/dev/null';
    /* Defining a variable called $pidFile and setting it to an empty string. */
    public static string $pidFile = '';
    /* Defining a static variable called $statusFile. */
    public static string $statusFile = '';
    /* Declaring a public static string variable called $logFile and setting it to an empty string. */
    public static string $logFile = '';
    /* Creating a global variable called $globalEvent. */
    public static $globalEvent = null;
    /* Creating a variable called $onMasterReload and setting it to null. */
    public static $onMasterReload = null;
    /* Defining a variable called $onMasterStop and setting it to null. */
    public static $onMasterStop = null;
    /* Defining a constant. */
    public static string $eventLoopClass = '';
    /* Setting the process title of the current process to "YXORP". */
    public static string $processTitle = 'YXORP';
    /* Defining a constant variable called stopTimeout and setting it to 2. */
    /* *|CURSOR_MARCADOR|* */
    public static int $stopTimeout = 2;
    /*  */
    public static string $command = '';
    /* Declaring a private static variable called $_masterPid and setting it to 0. */
    /* Creating a private static array called $_workers. */
    private static int $_masterPid = 0;
    /* Creating a private static array called $_workers. */
    private static array $_workers = [];
    /* Creating a static array called $_pidMap. */
    private static array $_pidMap = [];
    /* Creating a private static array called $_pidsToRestart. */
    private static array $_pidsToRestart = [];
    /* Creating an array called $_idMap. */
    /*  */
    private static array $_idMap = [];
    /* *|CURSOR_MARCADOR|* */
    private static int $_status = self::STATUS_STARTING;
    /*  */
    private static int $_maxWorkerNameLength = 12;
    /* Declaring a private static variable $_maxSocketNameLength and assigning it a value of 12. */
    private static int $_maxSocketNameLength = 12;
    /* Declaring a private static variable $_maxUserNameLength and assigning it a value of 12. */
    private static int $_maxUserNameLength = 12;
    /* *|CURSOR_MARCADOR|* */
    private static int $_maxProtoNameLength = 4;
    /* Declaring a private static variable called $_maxProcessesNameLength and assigning it the value of 9. */
    /* Declaring a private static variable $_maxStatusNameLength and assigning it the value 1. */
    private static int $_maxProcessesNameLength = 9;
    /* Declaring a private static variable called $_statisticsFile. */
    private static int $_maxStatusNameLength = 1;
    private static string $_statisticsFile = '';
    /* Declaring a private static variable called $_startFile and setting it to an empty string. */
    private static string $_startFile = '';
    /* Creating an array called $_processForWindows. */
    private static array $_processForWindows = [];
    /* Defining a static variable. */
    private static array $_globalStatistics = ['start_timestamp' => 0, 'worker_exit_info' => []];
    /* Defining a private static array called $_availableEventLoops. */
    private static array $_availableEventLoops = ["event" => event::class,];
    /*  */
    private static array $_builtinTransports = ['tcp' => 'tcp', 'udp' => 'udp', 'unix' => 'unix', 'ssl' => 'tcp'];
    /* Defining an array of error types. */
    private static array $_errorType = [E_ERROR => 'E_ERROR', E_WARNING => 'E_WARNING', E_PARSE => 'E_PARSE', E_NOTICE => 'E_NOTICE', E_CORE_ERROR => 'E_CORE_ERROR', E_CORE_WARNING => 'E_CORE_WARNING', E_COMPILE_ERROR => 'E_COMPILE_ERROR', E_COMPILE_WARNING => 'E_COMPILE_WARNING', E_USER_ERROR => 'E_USER_ERROR', E_USER_WARNING => 'E_USER_WARNING', E_USER_NOTICE => 'E_USER_NOTICE', E_STRICT => 'E_STRICT', E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR', E_DEPRECATED => 'E_DEPRECATED', E_USER_DEPRECATED => 'E_USER_DEPRECATED'];
    /* Declaring a private static variable called $_gracefulStop and setting it to false. */
    private static bool $_gracefulStop = false;
    /* Setting the output stream to null. */
    /* Checking if the output is decorated or not. */
    private static $_outputStream = null;
    /* Declaring a variable called $id and assigning it a value of 0. */
    private static $_outputDecorated = null;
    public int $id = 0;
    /* Declaring a variable called $name and assigning it a value of 'none'. */
    public string $name = 'none';
    /* Declaring a public variable called $count and assigning it a value of 1. */
    public int $count = 1;
    /* Declaring a variable called $user and setting it to an empty string. */
    public string $user = '';
    /* Declaring a variable called $group and setting it to an empty string. */
    public string $group = '';
    /* Declaring a variable called $reloadable and setting it to true. */
    /*  */
    public bool $reloadable = true;
    /* Creating a variable called $onWorkerStart and assigning it the value of null. */
    public bool $reusePort = false;
    /* Creating a variable called $onConnect and setting it to null. */
    public $onWorkerStart = null;
    public $onConnect = null;
    /* Creating a variable called $onMessage and setting it to null. */
    public $onMessage = null;
    /* Creating a variable called $onClose and setting it to null. */
    public $onClose = null;
    /* Creating a variable called $onError and setting it to null. */
    /* Creating a variable called $onBufferFull and assigning it the value of null. */
    public $onError = null;
    public $onBufferFull = null;
    /* Creating a variable called $onBufferDrain and assigning it the value of null. */
    public $onBufferDrain = null;
    /* Creating a variable called $onWorkerStop and assigning it the value of null. */
    public $onWorkerStop = null;
    /* Creating a variable called $onWorkerReload and setting it to null. */
    /* Declaring a variable called $transport and assigning it the value of 'tcp'. */
    public $onWorkerReload = null;
    /* Declaring a variable called $connections and setting it to an empty array. */
    public string $transport = 'tcp';
    /* Declaring a variable called $connections and setting it to an empty array. */
    /* Declaring a variable called $protocol and setting it to null. */
    public array $connections = [];
    /* Declaring a variable called $stopping and setting it to false. */
    public $protocol = null;
    /* Declaring a private variable called $_pauseAccept and setting it to true. */
    public bool $stopping = false;
    private bool $_pauseAccept = true;
    /* Creating a private variable called $_mainSocket and setting it to null. */
    private $_mainSocket = null;
    /* Declaring a private variable called $_socketName and setting it to an empty string. */
    /* Creating a private variable called $_localSocket and setting it to null. */
    private string $_socketName = '';
    private $_localSocket = null;
    /* Creating a private variable called $_context. */
    /* Declaring a private property called $workerId and setting it to null. */
    private $_context = null;
    private ?string $workerId = null;

    /* Creating a constructor for the class. */
    public function __construct(string $socket_name = null, array $context_option = [])
    {
        /* Assigning a unique ID to the worker. */
        $this->workerId = spl_object_hash($this);
        /* Setting the workerId as the key and the worker as the value. */
        static::$_workers[$this->workerId] = $this;
        /* Creating a new array for each workerId. */
        /* Checking if the socket name is set. */
        static::$_pidMap[$this->workerId] = [];
        if ($socket_name) {
            /* Setting the socket name to the socket name passed in. */
            $this->_socketName = $socket_name;
            /* Checking if the socket backlog is set. */
            if (!isset($context_option['socket']['backlog'])) {
                /* Setting the default backlog to 128. */
                $context_option['socket']['backlog'] = static::DEFAULT_BACKLOG;
            }
            /* The above code is creating a stream context. */
            $this->_context = stream_context_create($context_option);
        }
    }

    /**
     * @throws Exception
     */
    /* A method that is being called from the class. */
    public static function runAll()
    {
        /* Checking the SAPI environment. */
        static::checkSapiEnv();
        /* Calling the init() method of the static class. */
        /* Parsing the command line arguments. */
        static::init();
        static::parseCommand();
        /* Creating a daemon process. */
        static::daemonize();
        /* Initializing the workers. */
        static::initWorkers();
        /* Installing a signal handler for the SIGINT signal. */
        static::installSignal();
        /* Saving the master process id to a file. */
        /* Calling the static method displayUI() from the class. */
        static::saveMasterPid();
        static::displayUI();
        /* Forking the workers. */
        static::forkWorkers();
        /* Resetting the standard output to the default. */
        static::resetStd();
        /* Monitoring the workers. */
        static::monitorWorkers();
    }

    /* Checking the SAPI environment. */
    protected static function checkSapiEnv()
    {
        /* Checking if the PHP script is being run from the command line. */
        if (PHP_SAPI !== 'cli') exit("Only run in command line mode \n");
    }

    /* A static method that is called when the class is loaded. */
    protected static function init()
    {
        /* Setting the error handler to a function that takes 4 parameters. */
        set_error_handler(function ($code, $msg, $file, $line) {
            /* Printing the error message, file name and line number to the console. */
            worker::safeEcho("$msg in file $file on line $line\n");
        });
        /* Creating a backtrace of the current script. */
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        /* Getting the file name of the file that called the class. */
        static::$_startFile = end($backtrace)['file'];
        /* Replacing the forward slash with an underscore. */
        $unique_prefix = str_replace('/', '_', static::$_startFile);
        if (empty(static::$pidFile)) static::$pidFile = __DIR__ . "/../$unique_prefix.pid";
        if (empty(static::$logFile)) static::$logFile = __DIR__ . '/../../yxorp.log';
        if (!is_file(static::$logFile)) {
            if (!is_dir(dirname(static::$logFile))) @mkdir(dirname(static::$logFile), 0777, true);
            touch(static::$logFile);
            chmod(static::$logFile, 0622);
        }
        static::$_status = static::STATUS_STARTING;
        static::$_globalStatistics['start_timestamp'] = time();
        static::setProcessTitle(static::$processTitle . ': master process  start_file=' . static::$_startFile);
        static::initId();
        timer::init();
    }

    public static function safeEcho(string $msg, bool $decorated = false): bool
    {
        $stream = static::outputStream();
        if (!$stream) return false;
        if (!$decorated) {
            $line = $white = $green = $end = '';
            if (static::$_outputDecorated) {
                $line = "\033[1A\n\033[K";
                $white = "\033[47;30m";
                $green = "\033[32;40m";
                $end = "\033[0m";
            }
            $msg = str_replace(['<n>', '<w>', '<g>'], [$line, $white, $green], $msg);
            $msg = str_replace(['</n>', '</w>', '</g>'], $end, $msg);
        } elseif (!static::$_outputDecorated) return false;
        fwrite($stream, $msg);
        fflush($stream);
        return true;
    }

    private static function outputStream($stream = null): bool
    {
        if (!$stream) $stream = static::$_outputStream ?: STDOUT;
        if (!$stream || !is_resource($stream) || 'stream' !== get_resource_type($stream)) return false;
        $stat = fstat($stream);
        if (!$stat) return false;
        if (($stat['mode'] & 0170000) === 0100000) static::$_outputDecorated = false; else  static::$_outputDecorated = DIRECTORY_SEPARATOR === '/' && function_exists('posix_isatty') && posix_isatty($stream);
        return static::$_outputStream = $stream;
    }

    protected static function setProcessTitle(string $title)
    {
        set_error_handler(function () {
        });
        cli_set_process_title($title);
        restore_error_handler();
    }

    protected static function initId()
    {
        foreach (static::$_workers as $worker_id => $worker) {
            $new_id_map = [];
            $worker->count = max($worker->count, 1);
            for ($key = 0; $key < $worker->count; $key++) $new_id_map[$key] = static::$_idMap[$worker_id][$key] ?? 0;
            static::$_idMap[$worker_id] = $new_id_map;
        }
    }

    protected static function parseCommand()
    {
        if (DIRECTORY_SEPARATOR !== '/') return;
        global $argv;
        $start_file = $argv[0];
        $usage = "Usage: php yourfile <command> [mode]\nCommands: \nstart\t\tStart worker in DEBUG mode.\n\t\tUse mode -d to start in DAEMON mode.\nstop\t\tStop worker.\n\t\tUse mode -g to stop gracefully.\nrestart\t\tRestart workers.\n\t\tUse mode -d to start in DAEMON mode.\n\t\tUse mode -g to stop gracefully.\nreload\t\tReload codes.\n\t\tUse mode -g to reload gracefully.\nstatus\t\tGet worker status.\n\t\tUse mode -d to show live status.\nconnections\tGet worker connections.\n";
        $available_commands = ['start', 'stop', 'restart', 'reload', 'status', 'connections',];
        $available_mode = ['-d', '-g'];
        $command = $mode = '';
        foreach (static::getArgv() as $value) if (in_array($value, $available_commands)) $command = $value; elseif (in_array($value, $available_mode)) $mode = $value;
        if (!$command) exit($usage);
        $mode_str = '';
        if ($command === 'start') if ($mode === '-d' || static::$daemonize) $mode_str = 'in DAEMON mode'; else    $mode_str = 'in DEBUG mode';
        static::log("Yxorp[$start_file] $command $mode_str");
        $master_pid = is_file(static::$pidFile) ? (int)file_get_contents(static::$pidFile) : 0;
        if (static::checkMasterIsAlive($master_pid)) if ($command === 'start') {
            static::log("Yxorp[$start_file] already running");
            exit;
        } elseif ($command !== 'start' && $command !== 'restart') {
            static::log("Yxorp[$start_file] not run");
            exit;
        }
        $statistics_file = static::$statusFile ?: __DIR__ . "/../yxorp-$master_pid.status";
        switch ($command) {
            case 'start':
                if ($mode === '-d') static::$daemonize = true;
                break;
            case 'status':
                while (1) {
                    if (is_file($statistics_file)) x @unlink($statistics_file);
                    posix_kill($master_pid, SIGIOT);
                    sleep(1);
                    if ($mode === '-d') static::safeEcho("\33[H\33[2J\33(B\33[m", true);
                    static::safeEcho(static::formatStatusData($statistics_file));
                    if ($mode !== '-d') exit(0);
                    static::safeEcho("\nPress Ctrl+C to quit.\n\n");
                }
                exit(0);
            case 'connections':
                if (is_file($statistics_file) && is_writable($statistics_file)) unlink($statistics_file);
                posix_kill($master_pid, SIGIO);
                usleep(500000);
                if (is_readable($statistics_file)) readfile($statistics_file);
                exit(0);
            case 'restart':
            case 'stop':
                if ($mode === '-g') {
                    static::$_gracefulStop = true;
                    $sig = SIGQUIT;
                    static::log("Yxorp[$start_file] is gracefully stopping ...");
                } else {
                    static::$_gracefulStop = false;
                    $sig = SIGINT;
                    static::log("Yxorp[$start_file] is stopping ...");
                }
                $master_pid && posix_kill($master_pid, $sig);
                $timeout = static::$stopTimeout + 3;
                $start_time = time();
                while (1) {
                    $master_is_alive = $master_pid && posix_kill($master_pid, 0);
                    if ($master_is_alive) {
                        if (!static::$_gracefulStop && time() - $start_time >= $timeout) {
                            static::log("Yxorp[$start_file] stop fail");
                            exit;
                        }
                        usleep(10000);
                        continue;
                    }
                    static::log("Yxorp[$start_file] stop success");
                    if ($command === 'stop') exit(0);
                    if ($mode === '-d') static::$daemonize = true;
                    break;
                }
                break;
            case 'reload':
                if ($mode === '-g') $sig = SIGUSR2; else   $sig = SIGUSR1;
                posix_kill($master_pid, $sig);
                exit;
            default:
                static::safeEcho('Unknown command: ' . $command . "\n");
                exit($usage);
        }
    }

    public static function getArgv(): array
    {
        global $argv;
        return isset($argv[1]) ? $argv : (static::$command ? explode(' ', static::$command) : $argv);
    }

    public static function log($msg)
    {
        $msg = $msg . "\n";
        if (!static::$daemonize) static::safeEcho($msg);
        file_put_contents(static::$logFile, date('Y-m-d H:i:s') . ' ' . 'pid:' . (DIRECTORY_SEPARATOR === '/' ? posix_getpid() : 1) . ' ' . $msg, FILE_APPEND | LOCK_EX);
    }

    protected static function checkMasterIsAlive($master_pid): bool
    {
        if (empty($master_pid)) return false;
        $master_is_alive = posix_kill((int)$master_pid, 0) && posix_getpid() !== $master_pid;
        if (!$master_is_alive) return false;
        $cmdline = "/proc/{$master_pid}/cmdline";
        if (!is_readable($cmdline) || empty(static::$processTitle)) return true;
        $content = file_get_contents($cmdline);
        if (empty($content)) return true;
        return stripos($content, static::$processTitle) !== false || stripos($content, 'php') !== false;
    }

    protected static function formatStatusData($statistics_file): string
    {
        static $total_request_cache = [];
        if (!is_readable($statistics_file)) return '';
        $info = file($statistics_file, FILE_IGNORE_NEW_LINES);
        if (!$info) return '';
        $status_str = '';
        $current_total_request = [];
        $worker_info = unserialize($info[0]);
        ksort($worker_info, SORT_NUMERIC);
        unset($info[0]);
        $data_waiting_sort = [];
        $read_process_status = false;
        $total_requests = 0;
        $total_qps = 0;
        $total_connections = 0;
        $total_fails = 0;
        $total_memory = 0;
        $total_timers = 0;
        $maxLen1 = static::$_maxSocketNameLength;
        $maxLen2 = static::$_maxWorkerNameLength;
        foreach ($info as $value) {
            if (!$read_process_status) {
                $status_str .= $value . "\n";
                if (preg_match('/^pid.*?memory.*?listening/', $value)) $read_process_status = true;
                continue;
            }
            if (preg_match('/^[0-9]+/', $value, $pid_math)) {
                $pid = $pid_math[0];
                $data_waiting_sort[$pid] = $value;
                if (preg_match('/^\S+?\s+?(\S+?)\s+?(\S+?)\s+?(\S+?)\s+?(\S+?)\s+?(\S+?)\s+?(\S+?)\s+?(\S+?)\s+?/', $value, $match)) {
                    $total_memory += intval(str_ireplace('M', '', $match[1]));
                    $maxLen1 = max($maxLen1, strlen($match[2]));
                    $maxLen2 = max($maxLen2, strlen($match[3]));
                    $total_connections += intval($match[4]);
                    $total_fails += intval($match[5]);
                    $total_timers += intval($match[6]);
                    $current_total_request[$pid] = $match[7];
                    $total_requests += intval($match[7]);
                }
            }
        }
        foreach ($worker_info as $pid => $info) {
            if (!isset($data_waiting_sort[$pid])) {
                $status_str .= "$pid\t" . str_pad('N/A', 7) . " " . str_pad($info['listen'], static::$_maxSocketNameLength) . " " . str_pad($info['name'], static::$_maxWorkerNameLength) . " " . str_pad('N/A', 11) . " " . str_pad('N/A', 9) . " " . str_pad('N/A', 7) . " " . str_pad('N/A', 13) . " N/A    [busy] \n";
                continue;
            }
            if (!isset($total_request_cache[$pid]) || !isset($current_total_request[$pid]))
                $qps = 0; else {
                $qps = $current_total_request[$pid] - $total_request_cache[$pid];
                $total_qps += $qps;
            }
            $status_str .= $data_waiting_sort[$pid] . " " . str_pad($qps, 6) . " [idle]\n";
        }
        $total_request_cache = $current_total_request;
        $status_str .= "----------------------------------------------PROCESS STATUS---------------------------------------------------\n";
        $status_str .= "Summary\t" . str_pad($total_memory . 'M', 7) . " " . str_pad('-', $maxLen1) . " " . str_pad('-', $maxLen2) . " " . str_pad($total_connections, 11) . " " . str_pad($total_fails, 9) . " " . str_pad($total_timers, 7) . " " . str_pad($total_requests, 13) . " " . str_pad($total_qps, 6) . " [Summary] \n";
        return $status_str;
    }

    /**
     * @throws Exception
     */
    protected static function daemonize()
    {
        if (!static::$daemonize || DIRECTORY_SEPARATOR !== '/') return;
        umask(0);
        $pid = pcntl_fork();
        if (-1 === $pid) throw new Exception('Fork fail'); elseif ($pid > 0) exit(0);
        if (-1 === posix_setsid()) throw new Exception("Setsid fail");
        $pid = pcntl_fork();
        if (-1 === $pid) throw new Exception("Fork fail"); elseif (0 !== $pid) exit(0);
    }

    protected static function initWorkers()
    {
        if (DIRECTORY_SEPARATOR !== '/') return;
        static::$_statisticsFile = static::$statusFile ?: __DIR__ . '/../yxorp-' . posix_getpid() . '.status';
        foreach (static::$_workers as $worker) {
            if (empty($worker->name)) $worker->name = 'none';
            if (empty($worker->user)) $worker->user = static::getCurrentUser(); else if (posix_getuid() !== 0 && $worker->user !== static::getCurrentUser()) static::log('Warning: You must have the root privileges to change uid and gid.');
            $worker->socket = $worker->getSocketName();
            $worker->status = '<g> [OK] </g>';
            foreach (static::getUiColumns() as $column_name => $prop) {
                !isset($worker->{$prop}) && $worker->{$prop} = 'NNNN';
                $prop_length = strlen($worker->{$prop});
                $key = '_max' . ucfirst(strtolower($column_name)) . 'NameLength';
                static::$$key = max(static::$$key, $prop_length);
            }
            if (!$worker->reusePort) $worker->listen();
        }
    }

    protected static function getCurrentUser()
    {
        $user_info = posix_getpwuid(posix_getuid());
        return $user_info['name'];
    }

    #[ArrayShape(['proto' => "string", 'user' => "string", 'worker' => "string", 'socket' => "string", 'processes' => "string", 'status' => "string"])] public static function getUiColumns(): array
    {
        return ['proto' => 'transport', 'user' => 'user', 'worker' => 'name', 'socket' => 'socket', 'processes' => 'count', 'status' => 'status',];
    }

    protected static function installSignal()
    {
        if (DIRECTORY_SEPARATOR !== '/') return;
        $signals = [SIGINT, SIGTERM, SIGHUP, SIGTSTP, SIGQUIT, SIGUSR1, SIGUSR2, SIGIOT, SIGIO];
        foreach ($signals as $signal) pcntl_signal($signal, [static::class, 'signalHandler'], false);
        pcntl_signal(SIGPIPE, SIG_IGN, false);
    }

    /**
     * @throws Exception
     */
    protected static function saveMasterPid()
    {
        if (DIRECTORY_SEPARATOR !== '/') return;
        static::$_masterPid = posix_getpid();
        if (false === file_put_contents(static::$pidFile, static::$_masterPid)) throw new Exception('can not save pid to ' . static::$pidFile);
    }

    protected static function displayUI()
    {
        $tmp_argv = static::getArgv();
        if (in_array('-q', $tmp_argv)) return;
        if (DIRECTORY_SEPARATOR !== '/') {
            static::safeEcho("----------------------- YXORP -----------------------------\r\n");
            static::safeEcho('Yxorp version:' . static::VERSION . '          PHP version:' . PHP_VERSION . "\r\n");
            static::safeEcho("------------------------ WORKERS -------------------------------\r\n");
            static::safeEcho("worker               listen                              processes status\r\n");
            return;
        }
        $line_version = 'Yxorp version:' . static::VERSION . str_pad('PHP version:', 16, ' ', STR_PAD_LEFT) . PHP_VERSION . str_pad('event-loop:', 16, ' ', STR_PAD_LEFT) . static::getEventLoopName() . PHP_EOL;
        !defined('LINE_VERSIOIN_LENGTH') && define('LINE_VERSIOIN_LENGTH', strlen($line_version));
        $total_length = static::getSingleLineTotalLength();
        $line_one = '<n>' . str_pad('<w> YXORP </w>', $total_length + strlen('<w></w>'), '-', STR_PAD_BOTH) . '</n>' . PHP_EOL;
        $line_two = str_pad('<w> WORKERS </w>', $total_length + strlen('<w></w>'), '-', STR_PAD_BOTH) . PHP_EOL;
        static::safeEcho($line_one . $line_version . $line_two);
        $title = '';
        foreach (static::getUiColumns() as $column_name => $prop) {
            $key = '_max' . ucfirst(strtolower($column_name)) . 'NameLength';
            $column_name === 'socket' && $column_name = 'listen';
            $title .= "<w>{$column_name}</w>" . str_pad('', static::$$key + static::UI_SAFE_LENGTH - strlen($column_name));
        }
        $title && static::safeEcho($title . PHP_EOL);
        foreach (static::$_workers as $worker) {
            $content = '';
            foreach (static::getUiColumns() as $column_name => $prop) {
                $key = '_max' . ucfirst(strtolower($column_name)) . 'NameLength';
                preg_match_all("/(<n>|<\/n>|<w>|<\/w>|<g>|<\/g>)/is", $worker->{$prop}, $matches);
                $place_holder_length = !empty($matches) ? strlen(implode('', $matches[0])) : 0;
                $content .= str_pad($worker->{$prop}, static::$$key + static::UI_SAFE_LENGTH + $place_holder_length);
            }
            $content && static::safeEcho($content . PHP_EOL);
        }
        $line_last = str_pad('', static::getSingleLineTotalLength(), '-') . PHP_EOL;
        !empty($content) && static::safeEcho($line_last);
        if (static::$daemonize) {
            global $argv;
            $start_file = $argv[0];
            static::safeEcho('Input "php ' . $start_file . ' stop" to stop. Start success.' . "\n\n");
        } else {
            static::safeEcho("Press Ctrl+C to stop. Start success.\n");
        }
    }

    protected static function getEventLoopName(): string
    {
        if (static::$eventLoopClass) {
            return static::$eventLoopClass;
        }
        if (!class_exists(\Swoole\Event::class, false)) {
            unset(static::$_availableEventLoops['swoole']);
        }
        $loop_name = '';
        foreach (static::$_availableEventLoops as $name => $class) {
            if (extension_loaded($name)) {
                $loop_name = $name;
                break;
            }
        }
        if ($loop_name) {
            static::$eventLoopClass = static::$_availableEventLoops[$loop_name];
        } else {
            static::$eventLoopClass = select::class;
        }
        return static::$eventLoopClass;
    }

    public static function getSingleLineTotalLength(): int
    {
        $total_length = 0;
        foreach (static::getUiColumns() as $column_name => $prop) {
            $key = '_max' . ucfirst(strtolower($column_name)) . 'NameLength';
            $total_length += static::$$key + static::UI_SAFE_LENGTH;
        }
        !defined('LINE_VERSIOIN_LENGTH') && define('LINE_VERSIOIN_LENGTH', 0);
        $total_length <= LINE_VERSIOIN_LENGTH && $total_length = LINE_VERSIOIN_LENGTH;
        return $total_length;
    }

    protected static function forkWorkers()
    {
        if (DIRECTORY_SEPARATOR === '/') {
            static::forkWorkersForLinux();
        } else {
            static::forkWorkersForWindows();
        }
    }

    /**
     * @throws Exception
     */
    protected static function forkWorkersForLinux()
    {
        foreach (static::$_workers as $worker) {
            if (static::$_status === static::STATUS_STARTING) {
                if (empty($worker->name)) {
                    $worker->name = $worker->getSocketName();
                }
                $worker_name_length = strlen($worker->name);
                if (static::$_maxWorkerNameLength < $worker_name_length) {
                    static::$_maxWorkerNameLength = $worker_name_length;
                }
            }
            while (count(static::$_pidMap[$worker->workerId]) < $worker->count) {
                static::forkOneWorkerForLinux($worker);
            }
        }
    }

    /**
     * @throws Exception
     */
    protected static function forkOneWorkerForLinux(self $worker)
    {
        $id = static::getId($worker->workerId, 0);
        $pid = pcntl_fork();
        if ($pid > 0) {
            static::$_pidMap[$worker->workerId][$pid] = $pid;
            static::$_idMap[$worker->workerId][$id] = $pid;
        } elseif (0 === $pid) {
            srand();
            mt_srand();
            if ($worker->reusePort) {
                $worker->listen();
            }
            if (static::$_status === static::STATUS_STARTING) {
                static::resetStd();
            }
            static::$_pidsToRestart = static::$_pidMap = [];
            foreach (static::$_workers as $key => $one_worker) {
                if ($one_worker->workerId !== $worker->workerId) {
                    $one_worker->unlisten();
                    unset(static::$_workers[$key]);
                }
            }
            timer::delAll();
            static::setProcessTitle(self::$processTitle . ': worker process  ' . $worker->name . ' ' . $worker->getSocketName());
            $worker->setUserAndGroup();
            $worker->id = $id;
            $worker->run();
            if (str_contains(static::$eventLoopClass, 'yxorP\events\swoole')) {
                exit(0);
            }
            $err = new Exception('event-loop exited');
            static::log($err);
            exit(250);
        } else {
            throw new Exception("forkOneWorker fail");
        }
    }

    protected static function getId($worker_id, $pid): bool|int|string
    {
        return array_search($pid, static::$_idMap[$worker_id]);
    }

    /**
     * @throws Exception
     */
    public function listen()
    {
        if (!$this->_socketName) {
            return;
        }
        if (!$this->_mainSocket) {
            $local_socket = $this->parseSocketAddress();
            $flags = $this->transport === 'udp' ? STREAM_SERVER_BIND : STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
            $errno = 0;
            $errmsg = '';
            if ($this->reusePort) {
                stream_context_set_option($this->_context, 'socket', 'so_reuseport', 1);
            }
            $this->_mainSocket = stream_socket_server($local_socket, $errno, $errmsg, $flags, $this->_context);
            if (!$this->_mainSocket) {
                throw new Exception($errmsg);
            }
            if ($this->transport === 'ssl') {
                stream_socket_enable_crypto($this->_mainSocket, false);
            } elseif ($this->transport === 'unix') {
                $socket_file = substr($local_socket, 7);
                if ($this->user) {
                    chown($socket_file, $this->user);
                }
                if ($this->group) {
                    chgrp($socket_file, $this->group);
                }
            }
            if (function_exists('socket_import_stream') && static::$_builtinTransports[$this->transport] === 'tcp') {
                set_error_handler(function () {
                });
                $socket = socket_import_stream($this->_mainSocket);
                socket_set_option($socket, SOL_SOCKET, SO_KEEPALIVE, 1);
                socket_set_option($socket, SOL_TCP, TCP_NODELAY, 1);
                restore_error_handler();
            }
            stream_set_blocking($this->_mainSocket, false);
        }
        $this->resumeAccept();
    }

    /**
     * @throws Exception
     */
    protected function parseSocketAddress()
    {
        if (!$this->_socketName) {
            return;
        }
        list($scheme, $address) = explode(':', $this->_socketName, 2);
        if (!isset(static::$_builtinTransports[$scheme])) {
            $scheme = ucfirst($scheme);
            $this->protocol = str_starts_with($scheme, '\\') ? $scheme : 'protocols\\' . $scheme;
            if (!class_exists($this->protocol)) {
                $this->protocol = "yxorP\\protocols\\$scheme";
                if (!class_exists($this->protocol)) {
                    throw new Exception("class \\protocols\\$scheme not exist");
                }
            }
            if (!isset(static::$_builtinTransports[$this->transport])) {
                throw new Exception('Bad worker->transport ' . var_export($this->transport, true));
            }
        } else {
            if ($this->transport === 'tcp') {
                $this->transport = $scheme;
            }
        }
        return static::$_builtinTransports[$this->transport] . ":" . $address;
    }

    public function resumeAccept()
    {
        if (static::$globalEvent && true === $this->_pauseAccept && $this->_mainSocket) {
            if ($this->transport !== 'udp') {
                static::$globalEvent->onReadable($this->_mainSocket, [$this, 'acceptTcpConnection']);
            } else {
                static::$globalEvent->onReadable($this->_mainSocket, [$this, 'acceptUdpConnection']);
            }
            $this->_pauseAccept = false;
        }
    }

    /**
     * @throws Exception
     */
    public static function resetStd(bool $throw_exception = true)
    {
        if (!static::$daemonize || DIRECTORY_SEPARATOR !== '/') {
            return;
        }
        global $STDOUT, $STDERR;
        $handle = fopen(static::$stdoutFile, "a");
        if ($handle) {
            unset($handle);
            set_error_handler(function () {
            });
            if ($STDOUT) {
                fclose($STDOUT);
            }
            if ($STDERR) {
                fclose($STDERR);
            }
            fclose(STDOUT);
            fclose(STDERR);
            $STDOUT = fopen(static::$stdoutFile, "a");
            $STDERR = fopen(static::$stdoutFile, "a");
            static::$_outputStream = null;
            static::outputStream($STDOUT);
            restore_error_handler();
            return;
        }
        if ($throw_exception) {
            throw new Exception('Can not open stdoutFile ' . static::$stdoutFile);
        }
    }

    public function getSocketName(): string
    {
        return $this->_socketName ? lcfirst($this->_socketName) : 'none';
    }

    public function setUserAndGroup()
    {
        $user_info = posix_getpwnam($this->user);
        if (!$user_info) {
            static::log("Warning: User {$this->user} not exsits");
            return;
        }
        $uid = $user_info['uid'];
        if ($this->group) {
            $group_info = posix_getgrnam($this->group);
            if (!$group_info) {
                static::log("Warning: Group {$this->group} not exsits");
                return;
            }
            $gid = $group_info['gid'];
        } else {
            $gid = $user_info['gid'];
        }
        if ($uid !== posix_getuid() || $gid !== posix_getgid()) {
            if (!posix_setgid($gid) || !posix_initgroups($user_info['name'], $gid) || !posix_setuid($uid)) {
                static::log("Warning: change gid or uid fail.");
            }
        }
    }

    public function run()
    {
        static::$_status = static::STATUS_RUNNING;
        register_shutdown_function(["\\yxorP\\worker", 'checkErrors']);
        if (!static::$globalEvent) {
            $event_loop_class = static::getEventLoopName();
            static::$globalEvent = new $event_loop_class;
            $this->resumeAccept();
        }
        static::reinstallSignal();
        timer::init(static::$globalEvent);
        if (empty($this->onMessage)) {
            $this->onMessage = function () {
            };
        }
        restore_error_handler();
        if ($this->onWorkerStart) {
            try {
                ($this->onWorkerStart)($this);
            } catch (Throwable $e) {
                sleep(1);
                static::stopAll(250, $e);
            }
        }
        static::$globalEvent->run();
    }

    protected static function reinstallSignal()
    {
        if (DIRECTORY_SEPARATOR !== '/') {
            return;
        }
        $signals = [SIGINT, SIGTERM, SIGHUP, SIGTSTP, SIGQUIT, SIGUSR1, SIGUSR2, SIGIOT, SIGIO];
        foreach ($signals as $signal) {
            pcntl_signal($signal, SIG_IGN, false);
            static::$globalEvent->onSignal($signal, [static::class, 'signalHandler']);
        }
    }

    public static function stopAll($code = 0, $log = '')
    {
        if ($log) {
            static::log($log);
        }
        static::$_status = static::STATUS_SHUTDOWN;
        if (DIRECTORY_SEPARATOR === '/' && static::$_masterPid === posix_getpid()) {
            static::log("Yxorp[" . basename(static::$_startFile) . "] stopping ...");
            $worker_pid_array = static::getAllWorkerPids();
            $sig = static::$_gracefulStop ? SIGQUIT : SIGINT;
            foreach ($worker_pid_array as $worker_pid) {
                posix_kill($worker_pid, $sig);
                if (!static::$_gracefulStop) {
                    timer::add(static::$stopTimeout, '\posix_kill', [$worker_pid, SIGKILL], false);
                }
            }
            timer::add(1, "\\yxorP\\worker::checkIfChildRunning");
            if (is_file(static::$_statisticsFile)) {
                @unlink(static::$_statisticsFile);
            }
        } else {
            foreach (static::$_workers as $worker) {
                if (!$worker->stopping) {
                    $worker->stop();
                    $worker->stopping = true;
                }
            }
            if (!static::$_gracefulStop || connectionInterface::$statistics['connection_count'] <= 0) {
                static::$_workers = [];
                static::$globalEvent?->stop();
                try {
                    exit($code);
                } catch (Exception $e) {
                }
            }
        }
    }

    protected static function getAllWorkerPids(): array
    {
        $pid_array = [];
        foreach (static::$_pidMap as $worker_pid_array) {
            foreach ($worker_pid_array as $worker_pid) {
                $pid_array[$worker_pid] = $worker_pid;
            }
        }
        return $pid_array;
    }

    protected static function forkWorkersForWindows()
    {
        $files = static::getStartFilesForWindows();
        if (in_array('-q', static::getArgv()) || count($files) === 1) {
            if (count(static::$_workers) > 1) {
                static::safeEcho("@@@ Error: multi workers init in one php file are not support @@@\r\n");
                static::safeEcho("@@@ See https://www.yxorp.net/doc/yxorp/faq/multi-woker-for-windows.html @@@\r\n");
            } elseif (count(static::$_workers) <= 0) {
                exit("@@@no worker inited@@@\r\n\r\n");
            }
            reset(static::$_workers);
            $worker = current(static::$_workers);
            static::safeEcho(str_pad($worker->name, 21) . str_pad($worker->getSocketName(), 36) . str_pad($worker->count, 10) . "[ok]\n");
            $worker->listen();
            $worker->run();
            exit("@@@child exit@@@\r\n");
        } else {
            static::$globalEvent = new select();
            timer::init(static::$globalEvent);
            foreach ($files as $start_file) {
                static::forkOneWorkerForWindows($start_file);
            }
        }
    }

    public static function getStartFilesForWindows(): array
    {
        $files = [];
        foreach (static::getArgv() as $file) {
            if (is_file($file)) {
                $files[$file] = $file;
            }
        }
        return $files;
    }

    public static function forkOneWorkerForWindows($start_file)
    {
        $start_file = realpath($start_file);
        $descriptorspec = array(STDIN, STDOUT, STDOUT);
        $pipes = array();
        $process = proc_open("php \"$start_file\" -q", $descriptorspec, $pipes);
        if (empty(static::$globalEvent)) {
            static::$globalEvent = new select();
            timer::init(static::$globalEvent);
        }
        static::$_processForWindows[$start_file] = array($process, $start_file);
    }

    protected static function monitorWorkers()
    {
        if (DIRECTORY_SEPARATOR === '/') {
            static::monitorWorkersForLinux();
        } else {
            static::monitorWorkersForWindows();
        }
    }

    protected static function monitorWorkersForLinux()
    {
        static::$_status = static::STATUS_RUNNING;
        while (1) {
            pcntl_signal_dispatch();
            $status = 0;
            $pid = pcntl_wait($status, WUNTRACED);
            pcntl_signal_dispatch();
            if ($pid > 0) {
                foreach (static::$_pidMap as $worker_id => $worker_pid_array) {
                    if (isset($worker_pid_array[$pid])) {
                        $worker = static::$_workers[$worker_id];
                        if ($status !== 0) {
                            static::log("worker[" . $worker->name . ":$pid] exit with status $status");
                        }
                        if (!isset(static::$_globalStatistics['worker_exit_info'][$worker_id][$status])) {
                            static::$_globalStatistics['worker_exit_info'][$worker_id][$status] = 0;
                        }
                        ++static::$_globalStatistics['worker_exit_info'][$worker_id][$status];
                        unset(static::$_pidMap[$worker_id][$pid]);
                        $id = static::getId($worker_id, $pid);
                        static::$_idMap[$worker_id][$id] = 0;
                        break;
                    }
                }
                if (static::$_status !== static::STATUS_SHUTDOWN) {
                    static::forkWorkers();
                    if (isset(static::$_pidsToRestart[$pid])) {
                        unset(static::$_pidsToRestart[$pid]);
                        static::reload();
                    }
                }
            }
            if (static::$_status === static::STATUS_SHUTDOWN && !static::getAllWorkerPids()) {
                static::exitAndClearAll();
            }
        }
    }

    /**
     * @throws Exception
     */
    protected static function reload()
    {
        if (static::$_masterPid === posix_getpid()) {
            if (static::$_status !== static::STATUS_RELOADING && static::$_status !== static::STATUS_SHUTDOWN) {
                static::log("Yxorp[" . basename(static::$_startFile) . "] reloading");
                static::$_status = static::STATUS_RELOADING;
                static::resetStd(false);
                if (static::$onMasterReload) {
                    try {
                        call_user_func(static::$onMasterReload);
                    } catch (Throwable $e) {
                        static::stopAll(250, $e);
                    }
                    static::initId();
                }
            }
            $sig = static::$_gracefulStop ? SIGUSR2 : SIGUSR1;
            $reloadable_pid_array = [];
            foreach (static::$_pidMap as $worker_id => $worker_pid_array) {
                $worker = static::$_workers[$worker_id];
                if ($worker->reloadable) {
                    foreach ($worker_pid_array as $pid) {
                        $reloadable_pid_array[$pid] = $pid;
                    }
                } else {
                    foreach ($worker_pid_array as $pid) {
                        posix_kill($pid, $sig);
                    }
                }
            }
            static::$_pidsToRestart = array_intersect(static::$_pidsToRestart, $reloadable_pid_array);
            if (empty(static::$_pidsToRestart)) {
                if (static::$_status !== static::STATUS_SHUTDOWN) {
                    static::$_status = static::STATUS_RUNNING;
                }
                return;
            }
            $one_worker_pid = current(static::$_pidsToRestart);
            posix_kill($one_worker_pid, $sig);
            if (!static::$_gracefulStop) {
                timer::add(static::$stopTimeout, '\posix_kill', [$one_worker_pid, SIGKILL], false);
            }
        } else {
            reset(static::$_workers);
            $worker = current(static::$_workers);
            if ($worker->onWorkerReload) {
                try {
                    call_user_func($worker->onWorkerReload, $worker);
                } catch (Throwable $e) {
                    static::stopAll(250, $e);
                }
            }
            if ($worker->reloadable) {
                static::stopAll();
            } else {
                static::resetStd(false);
            }
        }
    }

    #[NoReturn] protected static function exitAndClearAll()
    {
        foreach (static::$_workers as $worker) {
            $socket_name = $worker->getSocketName();
            if ($worker->transport === 'unix' && $socket_name) {
                list(, $address) = explode(':', $socket_name, 2);
                $address = substr($address, strpos($address, '/') + 2);
                @unlink($address);
            }
        }
        @unlink(static::$pidFile);
        static::log("Yxorp[" . basename(static::$_startFile) . "] has been stopped");
        if (static::$onMasterStop) {
            call_user_func(static::$onMasterStop);
        }
        exit(0);
    }

    protected static function monitorWorkersForWindows()
    {
        timer::add(1, "\\yxorP\\worker::checkWorkerStatusForWindows");
        static::$globalEvent->run();
    }

    public static function reloadAllWorkers()
    {
        static::init();
        static::initWorkers();
        static::displayUI();
        static::$_status = static::STATUS_RELOADING;
    }

    public static function getAllWorkers(): array
    {
        return static::$_workers;
    }

    public static function getEventLoop()
    {
        return static::$globalEvent;
    }

    public static function signalHandler($signal)
    {
        switch ($signal) {
            case SIGINT:
            case SIGTERM:
            case SIGHUP:
            case SIGTSTP;
                static::$_gracefulStop = false;
                static::stopAll();
                break;
            case SIGQUIT:
                static::$_gracefulStop = true;
                static::stopAll();
                break;
            case SIGUSR2:
            case SIGUSR1:
                static::$_gracefulStop = $signal === SIGUSR2;
                static::$_pidsToRestart = static::getAllWorkerPids();
                static::reload();
                break;
            case SIGIOT:
                static::writeStatisticsToStatusFile();
                break;
            case SIGIO:
                static::writeConnectionsStatisticsToStatusFile();
                break;
        }
    }

    protected static function writeStatisticsToStatusFile()
    {
        if (static::$_masterPid === posix_getpid()) {
            $all_worker_info = [];
            foreach (static::$_pidMap as $worker_id => $pid_array) {
                $worker = static::$_workers[$worker_id];
                foreach ($pid_array as $pid) {
                    $all_worker_info[$pid] = ['name' => $worker->name, 'listen' => $worker->getSocketName()];
                }
            }
            file_put_contents(static::$_statisticsFile, serialize($all_worker_info) . "\n", FILE_APPEND);
            $loadavg = function_exists('sys_getloadavg') ? array_map('round', sys_getloadavg(), [2, 2, 2]) : ['-', '-', '-'];
            file_put_contents(static::$_statisticsFile, "----------------------------------------------GLOBAL STATUS----------------------------------------------------\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, 'Yxorp version:' . static::VERSION . "          PHP version:" . PHP_VERSION . "\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, 'start time:' . date('Y-m-d H:i:s', static::$_globalStatistics['start_timestamp']) . '   run ' . floor((time() - static::$_globalStatistics['start_timestamp']) / (24 * 60 * 60)) . ' days ' . floor(((time() - static::$_globalStatistics['start_timestamp']) % (24 * 60 * 60)) / (60 * 60)) . " hours   \n", FILE_APPEND);
            $load_str = 'load average: ' . implode(", ", $loadavg);
            file_put_contents(static::$_statisticsFile, str_pad($load_str, 33) . 'event-loop:' . static::getEventLoopName() . "\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, count(static::$_pidMap) . ' workers       ' . count(static::getAllWorkerPids()) . " processes\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, str_pad('worker_name', static::$_maxWorkerNameLength) . " exit_status      exit_count\n", FILE_APPEND);
            foreach (static::$_pidMap as $worker_id => $worker_pid_array) {
                $worker = static::$_workers[$worker_id];
                if (isset(static::$_globalStatistics['worker_exit_info'][$worker_id])) {
                    foreach (static::$_globalStatistics['worker_exit_info'][$worker_id] as $worker_exit_status => $worker_exit_count) {
                        file_put_contents(static::$_statisticsFile, str_pad($worker->name, static::$_maxWorkerNameLength) . " " . str_pad($worker_exit_status, 16) . " $worker_exit_count\n", FILE_APPEND);
                    }
                } else {
                    file_put_contents(static::$_statisticsFile, str_pad($worker->name, static::$_maxWorkerNameLength) . " " . str_pad(0, 16) . " 0\n", FILE_APPEND);
                }
            }
            file_put_contents(static::$_statisticsFile, "----------------------------------------------PROCESS STATUS---------------------------------------------------\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, "pid\tmemory  " . str_pad('listening', static::$_maxSocketNameLength) . " " . str_pad('worker_name', static::$_maxWorkerNameLength) . " connections " . str_pad('send_fail', 9) . " " . str_pad('timers', 8) . str_pad('total_request', 13) . " qps    status\n", FILE_APPEND);
            chmod(static::$_statisticsFile, 0722);
            foreach (static::getAllWorkerPids() as $worker_pid) {
                posix_kill($worker_pid, SIGIOT);
            }
            return;
        }
        gc_collect_cycles();
        if (function_exists('gc_mem_caches')) {
            gc_mem_caches();
        }
        reset(static::$_workers);
        $worker = current(static::$_workers);
        $worker_status_str = posix_getpid() . "\t" . str_pad(round(memory_get_usage() / (1024 * 1024), 2) . "M", 7) . " " . str_pad($worker->getSocketName(), static::$_maxSocketNameLength) . " " . str_pad(($worker->name === $worker->getSocketName() ? 'none' : $worker->name), static::$_maxWorkerNameLength) . " ";
        $worker_status_str .= str_pad(connectionInterface::$statistics['connection_count'], 11) . " " . str_pad(connectionInterface::$statistics['send_fail'], 9) . " " . str_pad(static::$globalEvent->getTimerCount(), 7) . " " . str_pad(connectionInterface::$statistics['total_request'], 13) . "\n";
        file_put_contents(static::$_statisticsFile, $worker_status_str, FILE_APPEND);
    }

    protected static function writeConnectionsStatisticsToStatusFile()
    {
        if (static::$_masterPid === posix_getpid()) {
            file_put_contents(static::$_statisticsFile, "--------------------------------------------------------------------- YXORP CONNECTION STATUS --------------------------------------------------------------------------------\n", FILE_APPEND);
            file_put_contents(static::$_statisticsFile, "PID      worker          CID       Trans   Protocol        ipv4   ipv6   Recv-Q       Send-Q       Bytes-R      Bytes-W       Status         Local Address          Foreign Address\n", FILE_APPEND);
            chmod(static::$_statisticsFile, 0722);
            foreach (static::getAllWorkerPids() as $worker_pid) {
                posix_kill($worker_pid, SIGIO);
            }
            return;
        }
        $bytes_format = function ($bytes) {
            if ($bytes > 1024 * 1024 * 1024 * 1024) {
                return round($bytes / (1024 * 1024 * 1024 * 1024), 1) . "TB";
            }
            if ($bytes > 1024 * 1024 * 1024) {
                return round($bytes / (1024 * 1024 * 1024), 1) . "GB";
            }
            if ($bytes > 1024 * 1024) {
                return round($bytes / (1024 * 1024), 1) . "MB";
            }
            if ($bytes > 1024) {
                return round($bytes / (1024), 1) . "KB";
            }
            return $bytes . "B";
        };
        $pid = posix_getpid();
        $str = '';
        reset(static::$_workers);
        $current_worker = current(static::$_workers);
        $default_worker_name = $current_worker->name;
        foreach (tcpConnection::$connections as $connection) {
            $transport = $connection->transport;
            $ipv4 = $connection->isIpV4() ? ' 1' : ' 0';
            $ipv6 = $connection->isIpV6() ? ' 1' : ' 0';
            $recv_q = $bytes_format($connection->getRecvBufferQueueSize());
            $send_q = $bytes_format($connection->getSendBufferQueueSize());
            $local_address = trim($connection->getLocalAddress());
            $remote_address = trim($connection->getRemoteAddress());
            $state = $connection->getStatus(false);
            $bytes_read = $bytes_format($connection->bytesRead);
            $bytes_written = $bytes_format($connection->bytesWritten);
            $id = $connection->id;
            $protocol = $connection->protocol ?: $connection->transport;
            $pos = strrpos($protocol, '\\');
            if ($pos) {
                $protocol = substr($protocol, $pos + 1);
            }
            if (strlen($protocol) > 15) {
                $protocol = substr($protocol, 0, 13) . '..';
            }
            $worker_name = isset($connection->worker) ? $connection->worker->name : $default_worker_name;
            if (strlen($worker_name) > 14) {
                $worker_name = substr($worker_name, 0, 12) . '..';
            }
            $str .= str_pad($pid, 9) . str_pad($worker_name, 16) . str_pad($id, 10) . str_pad($transport, 8) . str_pad($protocol, 16) . str_pad($ipv4, 7) . str_pad($ipv6, 7) . str_pad($recv_q, 13) . str_pad($send_q, 13) . str_pad($bytes_read, 13) . str_pad($bytes_written, 13) . ' ' . str_pad($state, 14) . ' ' . str_pad($local_address, 22) . ' ' . str_pad($remote_address, 22) . "\n";
        }
        if ($str) {
            file_put_contents(static::$_statisticsFile, $str, FILE_APPEND);
        }
    }

    public static function checkWorkerStatusForWindows()
    {
        foreach (static::$_processForWindows as $process_data) {
            $process = $process_data[0];
            $start_file = $process_data[1];
            $status = proc_get_status($process);
            if (isset($status['running'])) {
                if (!$status['running']) {
                    static::safeEcho("process $start_file terminated and try to restart\n");
                    proc_close($process);
                    static::forkOneWorkerForWindows($start_file);
                }
            } else {
                static::safeEcho("proc_get_status fail\n");
            }
        }
    }

    public static function checkIfChildRunning()
    {
        foreach (static::$_pidMap as $worker_id => $worker_pid_array) {
            foreach ($worker_pid_array as $pid => $worker_pid) {
                if (!posix_kill($pid, 0)) {
                    unset(static::$_pidMap[$worker_id][$pid]);
                }
            }
        }
    }

    public static function getStatus(): int
    {
        return static::$_status;
    }

    public static function getGracefulStop(): bool
    {
        return static::$_gracefulStop;
    }

    public static function checkErrors()
    {
        if (static::STATUS_SHUTDOWN !== static::$_status) {
            $error_msg = DIRECTORY_SEPARATOR === '/' ? 'worker[' . posix_getpid() . '] process terminated' : 'worker process terminated';
            $errors = error_get_last();
            if ($errors && ($errors['type'] === E_ERROR || $errors['type'] === E_PARSE || $errors['type'] === E_CORE_ERROR || $errors['type'] === E_COMPILE_ERROR || $errors['type'] === E_RECOVERABLE_ERROR)) {
                $error_msg .= ' with ERROR: ' . static::getErrorType($errors['type']) . " \"{$errors['message']} in {$errors['file']} on line {$errors['line']}\"";
            }
            static::log($error_msg);
        }
    }

    protected static function getErrorType($type): mixed
    {
        if (isset(self::$_errorType[$type])) {
            return self::$_errorType[$type];
        }
        return '';
    }

    protected static function lock()
    {
        $fd = fopen(static::$_startFile, 'r');
        if ($fd && !flock($fd, LOCK_EX)) {
            static::log('Yxorp[' . static::$_startFile . '] already running.');
            exit;
        }
    }

    protected static function unlock()
    {
        $fd = fopen(static::$_startFile, 'r');
        $fd && flock($fd, LOCK_UN);
    }

    public function stop()
    {
        if ($this->onWorkerStop) {
            try {
                ($this->onWorkerStop)($this);
            } catch (Throwable $e) {
                worker::log($e);
            }
        }
        $this->unlisten();
        if (!static::$_gracefulStop) {
            foreach ($this->connections as $connection) {
                $connection->close();
            }
        }
        $this->onMessage = $this->onClose = $this->onError = $this->onBufferDrain = $this->onBufferFull = null;
    }

    public function unlisten()
    {
        $this->pauseAccept();
        if ($this->_mainSocket) {
            set_error_handler(function () {
            });
            fclose($this->_mainSocket);
            restore_error_handler();
            $this->_mainSocket = null;
        }
    }

    public function pauseAccept()
    {
        if (static::$globalEvent && false === $this->_pauseAccept && $this->_mainSocket) {
            static::$globalEvent->offReadable($this->_mainSocket);
            $this->_pauseAccept = true;
        }
    }

    public function getMainSocket()
    {
        return $this->_mainSocket;
    }

    public function acceptTcpConnection($socket)
    {
        set_error_handler(function () {
        });
        $new_socket = stream_socket_accept($socket, 0, $remote_address);
        restore_error_handler();
        if (!$new_socket) {
            return;
        }
        $connection = new tcpConnection($new_socket, $remote_address);
        $this->connections[$connection->id] = $connection;
        $connection->worker = $this;
        $connection->protocol = $this->protocol;
        $connection->transport = $this->transport;
        $connection->onMessage = $this->onMessage;
        $connection->onClose = $this->onClose;
        $connection->onError = $this->onError;
        $connection->onBufferDrain = $this->onBufferDrain;
        $connection->onBufferFull = $this->onBufferFull;
        if ($this->onConnect) {
            try {
                ($this->onConnect)($connection);
            } catch (Throwable $e) {
                static::stopAll(250, $e);
            }
        }
    }

    public function acceptUdpConnection($socket): bool
    {
        set_error_handler(function () {
        });
        $recv_buffer = stream_socket_recvfrom($socket, static::MAX_UDP_PACKAGE_SIZE, 0, $remote_address);
        restore_error_handler();
        if (false === $recv_buffer || empty($remote_address)) {
            return false;
        }
        $connection = new udpConnection($socket, $remote_address);
        $connection->protocol = $this->protocol;
        $message_cb = $this->onMessage;
        if ($message_cb) {
            try {
                if ($this->protocol !== null) {
                    $parser = $this->protocol;
                    if ($parser && method_exists($parser, 'input')) {
                        while ($recv_buffer !== '') {
                            $len = $parser::input($recv_buffer, $connection);
                            if ($len === 0) return true;
                            $package = substr($recv_buffer, 0, $len);
                            $recv_buffer = substr($recv_buffer, $len);
                            $data = $parser::decode($package, $connection);
                            if ($data === false) {
                                continue;
                            }
                            $message_cb($connection, $data);
                        }
                    } else {
                        $data = $parser::decode($recv_buffer, $connection);
                        if ($data === false) {
                            return true;
                        }
                        $message_cb($connection, $data);
                    }
                } else {
                    $message_cb($connection, $recv_buffer);
                }
                ++connectionInterface::$statistics['total_request'];
            } catch (Throwable $e) {
                static::stopAll(250, $e);
            }
        }
        return true;
    }
}