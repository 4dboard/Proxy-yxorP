<?php


namespace yxorP\inc\protocols\http\session;

use Exception;
use yxorP\inc\protocols\http\session;
use function clearstatcache;
use function file_get_contents;
use function file_put_contents;
use function filemtime;
use function glob;
use function is_dir;
use function is_file;
use function mkdir;
use function rename;
use function session_save_path;
use function strlen;
use function sys_get_temp_dir;
use function time;
use function touch;
use function unlink;

class fileSessionHandler implements sessionHandlerInterface
{
    /**
     * session save path.
     *
     * @var string|null
     */
    private static ?string $_sessionSavePath = null;

    /**
     * session file prefix.
     *
     * @var string
     */
    private static string $_sessionFilePrefix = 'session_';

    /**
     * fileSessionHandler constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (isset($config['save_path'])) static::sessionSavePath($config['save_path']);
    }

    /**
     * Get or set session file path.
     *
     * @param string $path
     * @return string
     */
    public static function sessionSavePath(string $path): string
    {
        if ($path) {
            if ($path[strlen($path) - 1] !== DIRECTORY_SEPARATOR) $path .= DIRECTORY_SEPARATOR;
            static::$_sessionSavePath = $path;
            if (!is_dir($path)) mkdir($path, 0777, true);
        }
        return $path;
    }

    /**
     * Init.
     */
    public static function init()
    {
        $save_path = @session_save_path();
        if (!$save_path || str_starts_with($save_path, 'tcp://')) $save_path = sys_get_temp_dir();
        static::sessionSavePath($save_path);
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
    public function read(string $session_id): string
    {
        $session_file = static::sessionFile($session_id);
        clearstatcache();
        if (is_file($session_file)) {
            if (time() - filemtime($session_file) > Session::$lifetime) {
                unlink($session_file);
                return '';
            }
            $data = file_get_contents($session_file);
            return $data ?: '';
        }
        return '';
    }

    /**
     * Get session file path.
     *
     * @param string $session_id
     * @return string
     */
    protected static function sessionFile(string $session_id): string
    {
        return static::$_sessionSavePath . static::$_sessionFilePrefix . $session_id;
    }

    /**
     * {@inheritdoc}
     * @throws Exception
     */
    public function write(string $session_id, string $session_data): bool
    {
        $temp_file = static::$_sessionSavePath . uniqid(bin2hex(random_bytes(8)), true);
        if (!file_put_contents($temp_file, $session_data)) return false;
        return rename($temp_file, static::sessionFile($session_id));
    }

    /**
     * Update sesstion modify time.
     *
     * @see https://www.php.net/manual/en/class.sessionupdatetimestamphandlerinterface.php
     * @see https://www.php.net/manual/zh/function.touch.php
     *
     * @param string $id session id.
     * @param string $data session Data.
     *
     * @return bool
     */
    public function updateTimestamp(string $id, string $data = ""): bool
    {
        $session_file = static::sessionFile($id);
        if (!file_exists($session_file)) return false;
        // set file modify time to current time
        $set_modify_time = touch($session_file);
        // clear file stat cache
        clearstatcache();
        return $set_modify_time;
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
    public function destroy(string $session_id): bool
    {
        $session_file = static::sessionFile($session_id);
        if (is_file($session_file)) unlink($session_file);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function gc(int $maxlifetime)
    {
        $time_now = time();
        foreach (glob(static::$_sessionSavePath . static::$_sessionFilePrefix . '*') as $file) if (is_file($file) && $time_now - filemtime($file) > $maxlifetime) unlink($file);
    }
}

fileSessionHandler::init();