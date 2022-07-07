<?php declare(strict_types=1);

namespace yxorp\domain;

use Exception;
use InvalidArgumentException;
use SplFileObject;
use yxorp\domain\HttpAdapter\httpAdapterInterface;
use function array_filter;
use function array_keys;
use function array_pop;
use function count;
use function dirname;
use function explode;
use function extension_loaded;
use function fclose;
use function fflush;
use function file;
use function file_exists;
use function flock;
use function fopen;
use function ftruncate;
use function fwrite;
use function is_array;
use function md5;
use function realpath;
use function strpos;
use function substr;
use function trim;
use function var_export;
use const DIRECTORY_SEPARATOR;
use const FILE_IGNORE_NEW_LINES;
use const FILE_SKIP_EMPTY_LINES;
use const LOCK_EX;
use const LOCK_SH;
use const LOCK_UN;
use const PHP_EOL;

class publicSuffixListManager
{
    const ALL_DOMAINS = 'ALL';
    const ICANN_DOMAINS = 'ICANN';
    const PRIVATE_DOMAINS = 'PRIVATE';
    protected static $domainList = [self::ALL_DOMAINS => PATH_PDP_PSL_PHP, self::ICANN_DOMAINS => PATH_ICANN_PSL_PHP_FILE, self::PRIVATE_DOMAINS => PATH_PRIVATE_PSL_PHP,];
    protected $publicSuffixListUrl = 'https://publicsuffix.org/list/effective_tld_names.dat';
    protected $cacheDir;
    protected $httpAdapter;

    public function __construct($cacheDir = null)
    {
        if ($cacheDir === null) {
            $cacheDir = realpath(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'data');
        }
        if ($cacheDir === false) {
            throw new InvalidArgumentException('$cacheDir (' . $cacheDir . ') is not valid');
        }
        $this->cacheDir = $cacheDir;
    }

    public function parseListToArray($textFile): array
    {
        $fp = @fopen($textFile, 'rb');
        if (!$fp || !flock($fp, LOCK_SH)) {
            throw new Exception("Cannot read '${textFile}'");
        }
        $data = file($textFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        flock($fp, LOCK_UN);
        fclose($fp);
        if ($data === false) {
            return [];
        }
        $data = array_filter($data, static function ($line) {
            return strpos($line, '//') === false;
        });
        $publicSuffixListArray = [];
        foreach ($data as $line) {
            $ruleParts = explode('.', $line);
            $this->buildArray($publicSuffixListArray, $ruleParts);
        }
        return $publicSuffixListArray;
    }

    public function buildArray(array &$publicSuffixListArray, array $ruleParts)
    {
        $isDomain = true;
        $part = array_pop($ruleParts);
        $punycode = new punycodeWrapper();
        $part = $punycode->encode($part);
        if (strpos($part, '!') === 0) {
            $part = substr($part, 1);
            $isDomain = false;
        }
        if (!isset($publicSuffixListArray[$part])) {
            if ($isDomain) {
                $publicSuffixListArray[$part] = [];
            } else {
                $publicSuffixListArray[$part] = ['!' => ''];
            }
        }
        if ($isDomain && count($ruleParts) > 0) {
            $this->buildArray($publicSuffixListArray[$part], $ruleParts);
        }
    }

    public function writePhpCache(array $publicSuffixList): int
    {
        $data = '<?php' . PHP_EOL . ' return ' . var_export($publicSuffixList, true) . ';';
        return $this->write(PATH_PDP_PSL_PHP, $data);
    }

    protected function write($filename, $data): int
    {
        $data = trim($data);
        $filePath = $this->cacheDir . '/' . $filename;
        if (empty($data)) {
            throw new Exception("No data to write into '{$filePath}'");
        }
        $fp = @fopen($filePath, 'cb');
        $result = $fp && flock($fp, LOCK_EX) && ftruncate($fp, 0) && fwrite($fp, $data) !== false && fflush($fp);
        if (!$result) {
            $fp && fclose($fp);
            throw new Exception("Cannot write to '${filePath}'");
        }
        if ($fp) {
            flock($fp, LOCK_UN);
            fclose($fp);
        }
        return (int)$result;
    }

    public function getList($list = self::ALL_DOMAINS, bool $withStaticCache = true): publicSuffixList
    {
        static $LIST_STATIC = [];
        $basename = self::$domainList[$list] ?? PATH_PDP_PSL_PHP;
        $file = $this->cacheDir . '/' . $basename;
        if ($withStaticCache === false) {
            if (!file_exists($file)) {
                $this->refreshPublicSuffixList();
            }
            return new publicSuffixList($file);
        }
        $cacheKey = md5($file);
        if (isset($LIST_STATIC[$cacheKey])) {
            return $LIST_STATIC[$cacheKey];
        }
        if (!file_exists($file)) {
            $this->refreshPublicSuffixList();
        }
        if (!isset($LIST_STATIC[$cacheKey])) {
            $LIST_STATIC[$cacheKey] = new publicSuffixList($file);
        }
        return $LIST_STATIC[$cacheKey];
    }

    public function refreshPublicSuffixList()
    {
        $this->fetchListFromSource();
        $cacheFile = $this->cacheDir . '/' . PATH_PDP_PSL_TEXT;
        $publicSuffixListArray = $this->convertListToArray($cacheFile);
        foreach ($publicSuffixListArray as $domain => $data) {
            if (is_array($data) && !empty($data)) {
                $this->varExportToFile(self::$domainList[$domain], $data);
            }
        }
    }

    public function fetchListFromSource()
    {
        $publicSuffixList = $this->getHttpAdapter()->getContent($this->publicSuffixListUrl);
        if ($publicSuffixList === false) {
            return 0;
        }
        return $this->write(PATH_PDP_PSL_TEXT, $publicSuffixList);
    }

    public function getHttpAdapter(): httpAdapterInterface
    {
        if (!$this->httpAdapter instanceof httpAdapterInterface) {
            if (extension_loaded('curl')) {
                $this->httpAdapter = new HttpAdapter\curlHttpAdapter();
            } else {
                $this->httpAdapter = new HttpAdapter\phpHttpAdapter();
            }
        }
        return $this->httpAdapter;
    }

    public function setHttpAdapter(HttpAdapter\httpAdapterInterface $httpAdapter)
    {
        $this->httpAdapter = $httpAdapter;
    }

    protected function convertListToArray($textFile): array
    {
        $addDomain = [self::ICANN_DOMAINS => false, self::PRIVATE_DOMAINS => false,];
        $publicSuffixListArray = [self::ALL_DOMAINS => [], self::ICANN_DOMAINS => [], self::PRIVATE_DOMAINS => [],];
        $data = new SplFileObject($textFile);
        $data->setFlags(SplFileObject::DROP_NEW_LINE | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY);
        foreach ($data as $line) {
            $addDomain = $this->validateDomainAddition($line, $addDomain);
            if (strpos($line, '//') !== false) {
                continue;
            }
            $publicSuffixListArray = $this->convertLineToArray($line, $publicSuffixListArray, $addDomain);
        }
        return $publicSuffixListArray;
    }

    protected function validateDomainAddition($line, array $addDomain): array
    {
        foreach ($addDomain as $section => $status) {
            $addDomain[$section] = $this->isValidSection($status, $line, $section);
        }
        return $addDomain;
    }

    protected function isValidSection($previousStatus, $line, $section): bool
    {
        if (!$previousStatus && strpos($line, '// ===BEGIN ' . $section . ' DOMAINS===') === 0) {
            return true;
        }
        if ($previousStatus && strpos($line, '// ===END ' . $section . ' DOMAINS===') === 0) {
            return false;
        }
        return $previousStatus;
    }

    protected function convertLineToArray($textLine, array $publicSuffixListArray, array $addDomain): array
    {
        $ruleParts = explode('.', $textLine);
        $this->buildArray($publicSuffixListArray[self::ALL_DOMAINS], $ruleParts);
        $domainNames = array_keys(array_filter($addDomain));
        foreach ($domainNames as $domainName) {
            $this->buildArray($publicSuffixListArray[$domainName], $ruleParts);
        }
        return $publicSuffixListArray;
    }

    protected function varExportToFile($basename, array $input): int
    {
        $data = '<?php' . PHP_EOL . ' return ' . var_export($input, true) . ';';
        return $this->write($basename, $data);
    }

    public function getListFromFile($phpFile): publicSuffixList
    {
        $fp = @fopen($phpFile, 'rb');
        if (!$fp || !flock($fp, LOCK_SH)) {
            throw new Exception("Cannot read '${phpFile}'");
        }
        $list = new publicSuffixList(require $phpFile);
        flock($fp, LOCK_UN);
        fclose($fp);
        return $list;
    }
}