<?php

namespace League\Flysystem\Adapter;

use DateTime;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Config;
use League\Flysystem\NotSupportedException;
use League\Flysystem\SafeStorage;
use RuntimeException;

abstract class AbstractFtpAdapter extends AbstractAdapter
{
    /**
     * @var mixed
     */
    protected mixed $connection;

    /**
     * @var string
     */
    protected string $host;

    /**
     * @var int
     */
    protected int $port = 21;

    /**
     * @var bool
     */
    protected bool $ssl = false;

    /**
     * @var int
     */
    protected int $timeout = 90;

    /**
     * @var bool
     */
    protected bool $passive = true;

    /**
     * @var string
     */
    protected string $separator = '/';

    /**
     * @var string|null
     */
    protected ?string $root;

    /**
     * @var int
     */
    protected int $permPublic = 0744;

    /**
     * @var int
     */
    protected int $permPrivate = 0700;

    /**
     * @var array
     */
    protected $configurable = [];

    /**
     * @var string
     */
    protected string $systemType;

    /**
     * @var SafeStorage
     */
    protected SafeStorage $safeStorage;

    /**
     * True to enable timestamps for FTP servers that return unix-style listings.
     *
     * @var bool
     */
    protected bool $enableTimestampsOnUnixListings = false;

    /**
     * Constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->safeStorage = new SafeStorage();
        $this->setConfig($config);
    }

    /**
     * Set the config.
     *
     * @param array $config
     *
     * @return $this
     */
    public function setConfig(array $config): static
    {
        foreach ($this->configurable as $setting) {
            if (!isset($config[$setting])) {
                continue;
            }

            $method = 'set' . ucfirst($setting);

            if (method_exists($this, $method)) {
                $this->$method($config[$setting]);
            }
        }

        return $this;
    }

    /**
     * Returns the host.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Set the host.
     *
     * @param string $host
     *
     * @return $this
     */
    public function setHost(string $host): static
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Returns the ftp port.
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Set the ftp port.
     *
     * @param int|string $port
     *
     * @return $this
     */
    public function setPort(int|string $port): static
    {
        $this->port = (int)$port;

        return $this;
    }

    /**
     * Returns the root folder to work from.
     *
     * @return string
     */
    public function getRoot(): ?string
    {
        return $this->root;
    }

    /**
     * Set the root folder to work from.
     *
     * @param string $root
     *
     * @return $this
     */
    public function setRoot(string $root): static
    {
        $this->root = rtrim($root, '\\/') . $this->separator;

        return $this;
    }

    /**
     * Returns the ftp username.
     *
     * @return string username
     */
    public function getUsername(): string
    {
        $username = $this->safeStorage->retrieveSafely('username');

        return $username !== null ? $username : 'anonymous';
    }

    /**
     * Set ftp username.
     *
     * @param string $username
     *
     * @return $this
     */
    public function setUsername(string $username): static
    {
        $this->safeStorage->storeSafely('username', $username);

        return $this;
    }

    /**
     * Returns the password.
     *
     * @return string password
     */
    public function getPassword(): string
    {
        return $this->safeStorage->retrieveSafely('password');
    }

    /**
     * Set the ftp password.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword(string $password): static
    {
        $this->safeStorage->storeSafely('password', $password);

        return $this;
    }

    /**
     * Returns the amount of seconds before the connection will timeout.
     *
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * Set the amount of seconds before the connection should timeout.
     *
     * @param int $timeout
     *
     * @return $this
     */
    public function setTimeout(int $timeout): static
    {
        $this->timeout = (int)$timeout;

        return $this;
    }

    /**
     * Return the FTP system type.
     *
     * @return string
     */
    public function getSystemType(): string
    {
        return $this->systemType;
    }

    /**
     * Set the FTP system type (windows or unix).
     *
     * @param string $systemType
     *
     * @return $this
     */
    public function setSystemType(string $systemType): static
    {
        $this->systemType = strtolower($systemType);

        return $this;
    }

    /**
     * True to enable timestamps for FTP servers that return unix-style listings.
     *
     * @param bool $bool
     *
     * @return $this
     */
    public function setEnableTimestampsOnUnixListings(bool $bool = false): static
    {
        $this->enableTimestampsOnUnixListings = $bool;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function listContents($directory = '', $recursive = false): array
    {
        return $this->listDirectoryContents($directory, $recursive);
    }

    abstract protected function listDirectoryContents($directory, $recursive = false);

    /**
     * @inheritdoc
     */
    public function getSize($path): bool|array
    {
        return $this->getMetadata($path);
    }

    /**
     * @inheritdoc
     */
    public function getVisibility($path): bool|array
    {
        return $this->getMetadata($path);
    }

    /**
     * Ensure a directory exists.
     *
     * @param string $dirname
     */
    public function ensureDirectory(string $dirname)
    {
        $dirname = (string)$dirname;

        if ($dirname !== '' && !$this->has($dirname)) {
            $this->createDir($dirname, new Config());
        }
    }

    /**
     * @inheritdoc
     */
    public function has($path): bool|array|null
    {
        return $this->getMetadata($path);
    }

    /**
     * @return mixed
     */
    public function getConnection(): mixed
    {
        if (!$this->isConnected()) {
            $this->disconnect();
            $this->connect();
        }

        return $this->connection;
    }

    /**
     * Check if a connection is active.
     *
     * @return bool
     */
    abstract public function isConnected(): bool;

    /**
     * Close the connection.
     */
    abstract public function disconnect();

    /**
     * Establish a connection.
     */
    abstract public function connect();

    /**
     * Get the public permission value.
     *
     * @return int
     */
    public function getPermPublic(): int
    {
        return $this->permPublic;
    }

    /**
     * Set the public permission value.
     *
     * @param int $permPublic
     *
     * @return $this
     */
    public function setPermPublic(int $permPublic): static
    {
        $this->permPublic = $permPublic;

        return $this;
    }

    /**
     * Get the private permission value.
     *
     * @return int
     */
    public function getPermPrivate(): int
    {
        return $this->permPrivate;
    }

    /**
     * Set the private permission value.
     *
     * @param int $permPrivate
     *
     * @return $this
     */
    public function setPermPrivate(int $permPrivate): static
    {
        $this->permPrivate = $permPrivate;

        return $this;
    }

    /**
     * Disconnect on destruction.
     */
    public function __destruct()
    {
        $this->disconnect();
    }

    /**
     * Normalize a directory listing.
     *
     * @param array $listing
     * @param string $prefix
     *
     * @return array directory listing
     */
    protected function normalizeListing(array $listing, string $prefix = ''): array
    {
        $base = $prefix;
        $result = [];
        $listing = $this->removeDotDirectories($listing);

        while ($item = array_shift($listing)) {
            if (preg_match('#^.*:$#', $item)) {
                $base = preg_replace('~^\./*|:$~', '', $item);
                continue;
            }

            $result[] = $this->normalizeObject($item, $base);
        }

        return $this->sortListing($result);
    }

    /**
     * Filter out dot-directories.
     *
     * @param array $list
     *
     * @return array
     */
    public function removeDotDirectories(array $list): array
    {
        $filter = function ($line) {
            return $line !== '' && !preg_match('#.* \.(\.)?$|^total#', $line);
        };

        return array_filter($list, $filter);
    }

    /**
     * Normalize a file entry.
     *
     * @param string $item
     * @param string $base
     *
     * @return array normalized file array
     *
     * @throws NotSupportedException
     */
    protected function normalizeObject(string $item, string $base): array
    {
        $systemType = $this->systemType ?: $this->detectSystemType($item);

        if ($systemType === 'unix') {
            return $this->normalizeUnixObject($item, $base);
        } elseif ($systemType === 'windows') {
            return $this->normalizeWindowsObject($item, $base);
        }

        throw NotSupportedException::forFtpSystemType($systemType);
    }

    /**
     * Get the system type from a listing item.
     *
     * @param string $item
     *
     * @return string the system type
     */
    protected function detectSystemType(string $item): string
    {
        return preg_match('/^[0-9]{2,4}-[0-9]{2}-[0-9]{2}/', trim($item)) ? 'windows' : 'unix';
    }

    /**
     * Normalize a Unix file entry.
     *
     * Given $item contains:
     *    '-rw-r--r--   1 ftp      ftp           409 Aug 19 09:01 file1.txt'
     *
     * This function will return:
     * [
     *   'type' => 'file',
     *   'path' => 'file1.txt',
     *   'visibility' => 'public',
     *   'size' => 409,
     *   'timestamp' => 1566205260
     * ]
     *
     * @param string $item
     * @param string $base
     *
     * @return array normalized file array
     */
    protected function normalizeUnixObject(string $item, string $base): array
    {
        $item = preg_replace('#\s+#', ' ', trim($item), 7);

        if (count(explode(' ', $item, 9)) !== 9) {
            throw new RuntimeException("Metadata can't be parsed from item '$item' , not enough parts.");
        }

        list($permissions, /* $number */, /* $owner */, /* $group */, $size, $month, $day, $timeOrYear, $name) = explode(' ', $item, 9);
        $type = $this->detectType($permissions);
        $path = $base === '' ? $name : $base . $this->separator . $name;

        if ($type === 'dir') {
            $result = compact('type', 'path');
            if ($this->enableTimestampsOnUnixListings) {
                $timestamp = $this->normalizeUnixTimestamp($month, $day, $timeOrYear);
                $result += compact('timestamp');
            }

            return $result;
        }

        $permissions = $this->normalizePermissions($permissions);
        $visibility = $permissions & 0044 ? AdapterInterface::VISIBILITY_PUBLIC : AdapterInterface::VISIBILITY_PRIVATE;
        $size = (int)$size;

        $result = compact('type', 'path', 'visibility', 'size');
        if ($this->enableTimestampsOnUnixListings) {
            $timestamp = $this->normalizeUnixTimestamp($month, $day, $timeOrYear);
            $result += compact('timestamp');
        }

        return $result;
    }

    /**
     * Get the file type from the permissions.
     *
     * @param string $permissions
     *
     * @return string file type
     */
    protected function detectType(string $permissions): string
    {
        return str_starts_with($permissions, 'd') ? 'dir' : 'file';
    }

    /**
     * Only accurate to the minute (current year), or to the day.
     *
     * Inadequacies in timestamp accuracy are due to limitations of the FTP 'LIST' command
     *
     * Note: The 'MLSD' command is a machine-readable replacement for 'LIST'
     * but many FTP servers do not support it :(
     *
     * @param string $month e.g. 'Aug'
     * @param string $day e.g. '19'
     * @param string $timeOrYear e.g. '09:01' OR '2015'
     *
     * @return int
     */
    protected function normalizeUnixTimestamp(string $month, string $day, string $timeOrYear): int
    {
        if (is_numeric($timeOrYear)) {
            $year = $timeOrYear;
            $hour = '00';
            $minute = '00';
        } else {
            $year = date('Y');
            list($hour, $minute) = explode(':', $timeOrYear);
        }
        $seconds = '00';
        $dateTime = DateTime::createFromFormat('Y-M-j-G:i:s', "{$year}-{$month}-{$day}-{$hour}:{$minute}:{$seconds}");

        return $dateTime->getTimestamp();
    }

    /**
     * Normalize a permissions string.
     *
     * @param string $permissions
     *
     * @return int
     */
    protected function normalizePermissions(string $permissions): int
    {
        if (is_numeric($permissions)) {
            return ((int)$permissions) & 0777;
        }

        // remove the type identifier
        $permissions = substr($permissions, 1);

        // map the string rights to the numeric counterparts
        $map = ['-' => '0', 'r' => '4', 'w' => '2', 'x' => '1'];
        $permissions = strtr($permissions, $map);

        // split up the permission groups
        $parts = str_split($permissions, 3);

        // convert the groups
        $mapper = function ($part) {
            return array_sum(str_split($part));
        };

        // converts to decimal number
        return octdec(implode('', array_map($mapper, $parts)));
    }

    /**
     * Normalize a Windows/DOS file entry.
     *
     * @param string $item
     * @param string $base
     *
     * @return array normalized file array
     */
    protected function normalizeWindowsObject(string $item, string $base): array
    {
        $item = preg_replace('#\s+#', ' ', trim($item), 3);

        if (count(explode(' ', $item, 4)) !== 4) {
            throw new RuntimeException("Metadata can't be parsed from item '$item' , not enough parts.");
        }

        list($date, $time, $size, $name) = explode(' ', $item, 4);
        $path = $base === '' ? $name : $base . $this->separator . $name;

        // Check for the correct date/time format
        $format = strlen($date) === 8 ? 'm-d-yH:iA' : 'Y-m-dH:i';
        $dt = DateTime::createFromFormat($format, $date . $time);
        $timestamp = $dt ? $dt->getTimestamp() : (int)strtotime("$date $time");

        if ($size === '<DIR>') {
            $type = 'dir';

            return compact('type', 'path', 'timestamp');
        }

        $type = 'file';
        $visibility = AdapterInterface::VISIBILITY_PUBLIC;
        $size = (int)$size;

        return compact('type', 'path', 'visibility', 'size', 'timestamp');
    }

    /**
     * Sort a directory listing.
     *
     * @param array $result
     *
     * @return array sorted listing
     */
    protected function sortListing(array $result): array
    {
        $compare = function ($one, $two) {
            return strnatcmp($one['path'], $two['path']);
        };

        usort($result, $compare);

        return $result;
    }

    protected function escapePath($path): array|string
    {
        return str_replace(['*', '[', ']'], ['\\*', '\\[', '\\]'], $path);
    }
}
