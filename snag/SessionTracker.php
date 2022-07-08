<?php namespace yxorP\snag;

use Exception;
use InvalidArgumentException;
use JetBrains\PhpStorm\ArrayShape;

class SessionTracker
{
    private static string $SESSION_PAYLOAD_VERSION = HttpClient::SESSION_PAYLOAD_VERSION;
    private static int $DELIVERY_INTERVAL = 30;
    private static int $MAX_SESSION_COUNT = 50;
    private static string $SESSION_COUNTS_KEY = 'snag-session-counts';
    private static string $SESSIONS_LAST_SENT_KEY = 'snag-sessions-last-sent';
    private Configuration $config;
    private HttpClient $http;
    private array $sessionCounts = [];
    private $lockFunction = null;
    private $unlockFunction = null;
    private $retryFunction = null;
    private $storageFunction = null;
    private $sessionFunction = null;
    private int $lastSent = 0;
    private array $currentSession = [];

    public function __construct(Configuration $config, HttpClient $http = null)
    {
        $this->config = $config;
        $this->http = $http === null ? new HttpClient($config, $config->getSessionClient()) : $http;
    }

    public function setConfig(Configuration $config)
    {
        $this->config = $config;
    }

    public function startSession()
    {
        $currentTime = date('Y-m-d\TH:i:00');
        $session = ['id' => uniqid('', true), 'startedAt' => $currentTime, 'events' => ['handled' => 0, 'unhandled' => 0,],];
        $this->setCurrentSession($session);
        $this->incrementSessions($currentTime);
    }

    protected function incrementSessions($minute, $count = 1, $deliver = true)
    {
        $locked = false;
        if (is_callable($this->lockFunction) && is_callable($this->unlockFunction)) {
            call_user_func($this->lockFunction);
            $locked = true;
        }
        try {
            $sessionCounts = $this->getSessionCounts();
            if (array_key_exists($minute, $sessionCounts)) {
                $sessionCounts[$minute] += $count;
            } else {
                $sessionCounts[$minute] = $count;
            }
            $this->setSessionCounts($sessionCounts);
            if (count($sessionCounts) > self::$MAX_SESSION_COUNT) {
                $this->trimOldestSessions();
            }
            $lastSent = $this->getLastSent();
            if ($deliver && ((time() - $lastSent) > self::$DELIVERY_INTERVAL)) {
                $this->deliverSessions();
            }
        } finally {
            if ($locked) {
                call_user_func($this->unlockFunction);
            }
        }
    }

    protected function getSessionCounts(): bool|array
    {
        if (is_callable($this->storageFunction)) {
            $sessionCounts = call_user_func($this->storageFunction, self::$SESSION_COUNTS_KEY);
            if (is_array($sessionCounts)) {
                return $sessionCounts;
            }
            return [];
        }
        return $this->sessionCounts;
    }

    protected function setSessionCounts(array $sessionCounts)
    {
        if (is_callable($this->storageFunction)) {
            call_user_func($this->storageFunction, self::$SESSION_COUNTS_KEY, $sessionCounts);
        }
        $this->sessionCounts = $sessionCounts;
    }

    protected function trimOldestSessions()
    {
        $sessions = $this->getSessionCounts();
        uksort($sessions, function ($a, $b) {
            return strtotime($b) - strtotime($a);
        });
        $sessionCounts = array_slice($sessions, 0, self::$MAX_SESSION_COUNT);
        $this->setSessionCounts($sessionCounts);
    }

    protected function getLastSent(): int
    {
        if (is_callable($this->storageFunction)) {
            $lastSent = call_user_func($this->storageFunction, self::$SESSIONS_LAST_SENT_KEY);
            if (is_numeric($lastSent)) {
                return (int)$lastSent;
            }
            return 0;
        }
        return $this->lastSent;
    }

    protected function setLastSent()
    {
        $time = time();
        if (is_callable($this->storageFunction)) {
            call_user_func($this->storageFunction, self::$SESSIONS_LAST_SENT_KEY, $time);
        } else {
            $this->lastSent = $time;
        }
    }

    protected function deliverSessions()
    {
        $sessions = $this->getSessionCounts();
        $this->setSessionCounts([]);
        if (count($sessions) === 0) {
            return;
        }
        if (!$this->config->shouldNotify()) {
            return;
        }
        $payload = $this->constructPayload($sessions);
        $this->setLastSent();
        try {
            $this->http->sendSessions($payload);
        } catch (Exception $e) {
            error_log('Snag Warning: Couldn\'t notify. ' . $e->getMessage());
            if (is_callable($this->retryFunction)) {
                call_user_func($this->retryFunction, $sessions);
            } else {
                foreach ($sessions as $minute => $count) {
                    $this->incrementSessions($minute, $count, false);
                }
            }
        }
    }

    #[ArrayShape(['notifier' => "string[]", 'device' => "array", 'app' => "array", 'sessionCounts' => "array"])] protected function constructPayload(array $sessions): array
    {
        $formattedSessions = [];
        foreach ($sessions as $minute => $count) {
            $formattedSessions[] = ['startedAt' => $minute, 'sessionsStarted' => $count];
        }
        return ['notifier' => $this->config->getNotifier(), 'device' => $this->config->getDeviceData(), 'app' => $this->config->getAppData(), 'sessionCounts' => $formattedSessions,];
    }

    public function getCurrentSession(): bool|array
    {
        if (is_callable($this->sessionFunction)) {
            $currentSession = call_user_func($this->sessionFunction);
            if (is_array($currentSession)) {
                return $currentSession;
            }
            return [];
        }
        return $this->currentSession;
    }

    public function setCurrentSession(array $session)
    {
        if (is_callable($this->sessionFunction)) {
            call_user_func($this->sessionFunction, $session);
        } else {
            $this->currentSession = $session;
        }
    }

    public function sendSessions()
    {
        $locked = false;
        if (is_callable($this->lockFunction) && is_callable($this->unlockFunction)) {
            call_user_func($this->lockFunction);
            $locked = true;
        }
        try {
            $this->deliverSessions();
        } finally {
            if ($locked) {
                call_user_func($this->unlockFunction);
            }
        }
    }

    public function setLockFunctions($lock, $unlock)
    {
        if (!is_callable($lock) || !is_callable($unlock)) {
            throw new InvalidArgumentException('Both lock and unlock functions must be callable');
        }
        $this->lockFunction = $lock;
        $this->unlockFunction = $unlock;
    }

    public function setRetryFunction($function)
    {
        if (!is_callable($function)) {
            throw new InvalidArgumentException('The retry function must be callable');
        }
        $this->retryFunction = $function;
    }

    public function setStorageFunction($function)
    {
        if (!is_callable($function)) {
            throw new InvalidArgumentException('Storage function must be callable');
        }
        $this->storageFunction = $function;
    }

    public function setSessionFunction($function)
    {
        if (!is_callable($function)) {
            throw new InvalidArgumentException('Session function must be callable');
        }
        $this->sessionFunction = $function;
    }
}