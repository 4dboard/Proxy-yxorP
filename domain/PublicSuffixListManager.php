<?php

declare(strict_types=1);

/**
 * PHP Domain Parser: Public Suffix List based URL parsing.
 *
 * @see       http://github.com/jeremykendall/php-domain-parser for the canonical source repository
 *
 * @copyright Copyright (c) 2014 Jeremy Kendall (http://about.me/jeremykendall)
 * @license   http://github.com/jeremykendall/php-domain-parser/blob/master/LICENSE MIT License
 */
namespace Pdp;

use Pdp\HttpAdapter\HttpAdapterInterface;

/**
 * Public Suffix List Manager.
 *
 * This class obtains, writes, caches, and returns text and PHP representations
 * of the Public Suffix List
 */
class PublicSuffixListManager
{
    const ALL_DOMAINS = 'ALL';

    const PDP_PSL_TEXT_FILE = 'public-suffix-list.txt';

    const PDP_PSL_PHP_FILE = 'public-suffix-list.php';

    const ICANN_DOMAINS = 'ICANN';

    const ICANN_PSL_PHP_FILE = 'icann-public-suffix-list.php';

    const PRIVATE_DOMAINS = 'PRIVATE';

    const PRIVATE_PSL_PHP_FILE = 'private-public-suffix-list.php';

    /**
     * @var string Public Suffix List URL
     */
    protected $publicSuffixListUrl = 'https://publicsuffix.org/list/effective_tld_names.dat';

    /**
     * @var string Directory where text and php versions of list will be cached
     */
    protected $cacheDir;

    /**
     * @var array<string,string> Public Suffix List
     */
    protected static $domainList = [
        self::ALL_DOMAINS     => self::PDP_PSL_PHP_FILE,
        self::ICANN_DOMAINS   => self::ICANN_PSL_PHP_FILE,
        self::PRIVATE_DOMAINS => self::PRIVATE_PSL_PHP_FILE,
    ];

    /**
     * @var HttpAdapterInterface Http adapter
     */
    protected $httpAdapter;

    /**
     * Public constructor.
     *
     * @param string|null $cacheDir Optional cache directory
     */
    public function __construct($cacheDir = null)
    {
        if ($cacheDir === null) {
            $cacheDir = \realpath(
                \dirname(__DIR__, 2) . \DIRECTORY_SEPARATOR . 'data'
            );
        }

        if ($cacheDir === false) {
            throw new \InvalidArgumentException('$cacheDir (' . $cacheDir . ') is not valid');
        }

        $this->cacheDir = $cacheDir;
    }

    /**
     * Downloads Public Suffix List and writes text cache and PHP cache. If these files
     * already exist, they will be overwritten.
     *
     * @return void
     */
    public function refreshPublicSuffixList()
    {
        $this->fetchListFromSource();
        $cacheFile = $this->cacheDir . '/' . self::PDP_PSL_TEXT_FILE;
        $publicSuffixListArray = $this->convertListToArray($cacheFile);
        foreach ($publicSuffixListArray as $domain => $data) {
            // do not empty existing PHP cache file if source TXT is empty
            if (
                \is_array($data)
                &&
                !empty($data)
            ) {
                $this->varExportToFile(self::$domainList[$domain], $data);
            }
        }
    }

    /**
     * Obtain Public Suffix List from its online source and write to cache dir.
     *
     * @return bool|int Number of bytes that were written to the file OR false in case of error
     */
    public function fetchListFromSource()
    {
        $publicSuffixList = $this->getHttpAdapter()->getContent($this->publicSuffixListUrl);

        if ($publicSuffixList === false) {
            return 0;
        }

        return $this->write(self::PDP_PSL_TEXT_FILE, $publicSuffixList);
    }

    /**
     * Parses text representation of list to associative, multidimensional array.
     *
     * This method is based heavily on the code found in generateEffectiveTLDs.php
     *
     * @see https://github.com/usrflo/registered-domain-libs/blob/master/generateEffectiveTLDs.php
     * A copy of the Apache License, Version 2.0, is provided with this
     * distribution
     *
     * @param string $textFile Public Suffix List text filename
     *
     * @throws \Exception Throws \Exception if unable to read file
     *
     * @return array Associative, multidimensional array representation of the
     *               public suffix list
     */
    public function parseListToArray($textFile): array
    {
        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        $fp = @\fopen($textFile, 'rb');
        if (!$fp || !\flock($fp, \LOCK_SH)) {
            throw new \Exception("Cannot read '${textFile}'");
        }

        $data = \file(
            $textFile,
            \FILE_IGNORE_NEW_LINES | \FILE_SKIP_EMPTY_LINES
        );

        \flock($fp, \LOCK_UN);
        \fclose($fp);

        if ($data === false) {
            return [];
        }

        $data = \array_filter(
            $data,
            static function ($line) {
                return \strpos($line, '//') === false;
            }
        );

        $publicSuffixListArray = [];

        foreach ($data as $line) {
            $ruleParts = \explode('.', $line);
            $this->buildArray($publicSuffixListArray, $ruleParts);
        }

        return $publicSuffixListArray;
    }

    /**
     * Recursive method to build the array representation of the Public Suffix List.
     *
     * This method is based heavily on the code found in generateEffectiveTLDs.php
     *
     * @see https://github.com/usrflo/registered-domain-libs/blob/master/generateEffectiveTLDs.php
     * A copy of the Apache License, Version 2.0, is provided with this
     * distribution
     *
     * @param array $publicSuffixListArray Initially an empty array, this eventually
     *                                     becomes the array representation of the Public Suffix List
     * @param array $ruleParts             One line (rule) from the Public Suffix List
     *                                     exploded on '.', or the remaining portion of that array during recursion
     *
     * @return void
     */
    public function buildArray(array &$publicSuffixListArray, array $ruleParts)
    {
        // init
        $isDomain = true;

        $part = \array_pop($ruleParts);

        // Adheres to canonicalization rule from the "Formal Algorithm" section
        // of https://publicsuffix.org/list/
        // "The domain and all rules must be canonicalized in the normal way
        // for hostnames - lower-case, Punycode (RFC 3492)."
        $punycode = new PunycodeWrapper();
        $part = $punycode->encode($part);

        if (\strpos($part, '!') === 0) {
            $part = \substr($part, 1);
            $isDomain = false;
        }

        if (!isset($publicSuffixListArray[$part])) {
            if ($isDomain) {
                $publicSuffixListArray[$part] = [];
            } else {
                $publicSuffixListArray[$part] = ['!' => ''];
            }
        }

        if ($isDomain && \count($ruleParts) > 0) {
            $this->buildArray($publicSuffixListArray[$part], $ruleParts);
        }
    }

    /**
     * Writes php array representation of the Public Suffix List to disk.
     *
     * @param array $publicSuffixList Array representation of the Public Suffix List
     *
     * @return int Number of bytes that were written to the file
     */
    public function writePhpCache(array $publicSuffixList): int
    {
        $data = '<?php' . \PHP_EOL . ' return ' . \var_export($publicSuffixList, true) . ';';

        return $this->write(self::PDP_PSL_PHP_FILE, $data);
    }

    /**
     * Gets Public Suffix List.
     *
     * @param string $list            the Public Suffix List type
     * @param bool   $withStaticCache
     *
     * @throws \Exception Throws \Exception if unable to read file
     *
     * @return PublicSuffixList Instance of Public Suffix List
     */
    public function getList($list = self::ALL_DOMAINS, bool $withStaticCache = true): PublicSuffixList
    {
        // init
        static $LIST_STATIC = [];

        $basename = self::$domainList[$list] ?? self::PDP_PSL_PHP_FILE;
        $file = $this->cacheDir . '/' . $basename;

        if ($withStaticCache === false) {
            if (!\file_exists($file)) {
                $this->refreshPublicSuffixList();
            }

            return new PublicSuffixList($file);
        }

        $cacheKey = \md5($file);

        if (isset($LIST_STATIC[$cacheKey])) {
            return $LIST_STATIC[$cacheKey];
        }

        if (!\file_exists($file)) {
            $this->refreshPublicSuffixList();
        }

        if (!isset($LIST_STATIC[$cacheKey])) {
            $LIST_STATIC[$cacheKey] = new PublicSuffixList($file);
        }

        return $LIST_STATIC[$cacheKey];
    }

    /**
     * Retrieves public suffix list from file after obtaining a shared lock.
     *
     * @param string $phpFile
     *
     * @throws \Exception Throws \Exception if unable to read file
     *
     * @return PublicSuffixList Instance of Public Suffix List
     */
    public function getListFromFile($phpFile): PublicSuffixList
    {
        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        $fp = @\fopen($phpFile, 'rb');
        if (!$fp || !\flock($fp, \LOCK_SH)) {
            throw new \Exception("Cannot read '${phpFile}'");
        }

        /** @noinspection PhpIncludeInspection */
        $list = new PublicSuffixList(
            require $phpFile
        );

        \flock($fp, \LOCK_UN);
        \fclose($fp);

        return $list;
    }

    /**
     * Returns http adapter. Returns default http adapter if one is not set.
     *
     * @return HttpAdapterInterface Http adapter
     */
    public function getHttpAdapter(): HttpAdapterInterface
    {
        if (!$this->httpAdapter instanceof HttpAdapterInterface) {
            if (\extension_loaded('curl')) {
                $this->httpAdapter = new HttpAdapter\CurlHttpAdapter();
            } else {
                $this->httpAdapter = new HttpAdapter\PhpHttpAdapter();
            }
        }

        return $this->httpAdapter;
    }

    /**
     * Sets http adapter.
     *
     * @param HttpAdapterInterface $httpAdapter
     *
     * @return void
     */
    public function setHttpAdapter(HttpAdapter\HttpAdapterInterface $httpAdapter)
    {
        $this->httpAdapter = $httpAdapter;
    }

    /**
     * Writes php array representation to disk.
     *
     * @param string $basename file path
     * @param array  $input    input data
     *
     * @return int Number of bytes that were written to the file
     */
    protected function varExportToFile($basename, array $input): int
    {
        $data = '<?php' . \PHP_EOL . ' return ' . \var_export($input, true) . ';';

        return $this->write($basename, $data);
    }

    /**
     * Parses text representation of list to associative, multidimensional array.
     *
     * @param string $textFile Public Suffix List text filename
     *
     * @return array Associative, multidimensional array representation of the
     *               public suffix list
     */
    protected function convertListToArray($textFile): array
    {
        $addDomain = [
            self::ICANN_DOMAINS   => false,
            self::PRIVATE_DOMAINS => false,
        ];

        $publicSuffixListArray = [
            self::ALL_DOMAINS     => [],
            self::ICANN_DOMAINS   => [],
            self::PRIVATE_DOMAINS => [],
        ];

        /** @var \SplFileObject<string> $data */
        $data = new \SplFileObject($textFile);
        $data->setFlags(\SplFileObject::DROP_NEW_LINE | \SplFileObject::READ_AHEAD | \SplFileObject::SKIP_EMPTY);
        foreach ($data as $line) {
            $addDomain = $this->validateDomainAddition($line, $addDomain);
            if (\strpos($line, '//') !== false) {
                continue;
            }
            $publicSuffixListArray = $this->convertLineToArray($line, $publicSuffixListArray, $addDomain);
        }

        return $publicSuffixListArray;
    }

    /**
     * Convert a line from the Public Suffix list.
     *
     * @param string $textLine              Public Suffix List text line
     * @param array  $publicSuffixListArray Associative, multidimensional array representation of the
     *                                      public suffix list
     * @param array  $addDomain             Tell which section should be converted
     *
     * @return array Associative, multidimensional array representation of the
     *               public suffix list
     */
    protected function convertLineToArray($textLine, array $publicSuffixListArray, array $addDomain): array
    {
        $ruleParts = \explode('.', $textLine);
        $this->buildArray($publicSuffixListArray[self::ALL_DOMAINS], $ruleParts);
        $domainNames = \array_keys(\array_filter($addDomain));
        foreach ($domainNames as $domainName) {
            $this->buildArray($publicSuffixListArray[$domainName], $ruleParts);
        }

        return $publicSuffixListArray;
    }

    /**
     * Update the addition status for a given line against the domain list (ICANN and PRIVATE).
     *
     * @param string $line      the current file line
     * @param array  $addDomain the domain addition status
     *
     * @return array
     */
    protected function validateDomainAddition($line, array $addDomain): array
    {
        foreach ($addDomain as $section => $status) {
            $addDomain[$section] = $this->isValidSection($status, $line, $section);
        }

        return $addDomain;
    }

    /**
     * Tell whether the line can be converted for a given domain.
     *
     * @param bool   $previousStatus the previous status
     * @param string $line           the current file line
     * @param string $section        the section to be considered
     *
     * @return bool
     */
    protected function isValidSection($previousStatus, $line, $section): bool
    {
        if (!$previousStatus && \strpos($line, '// ===BEGIN ' . $section . ' DOMAINS===') === 0) {
            return true;
        }

        if ($previousStatus && \strpos($line, '// ===END ' . $section . ' DOMAINS===') === 0) {
            return false;
        }

        return $previousStatus;
    }

    /**
     * Writes to file after obtaining an exclusive lock.
     *
     * @param string $filename Filename in cache dir where data will be written
     * @param mixed  $data     Data to write
     *
     * @throws \Exception <p>Throws \Exception if unable to write file.</p>
     *
     * @return int Number of bytes that were written to the file
     */
    protected function write($filename, $data): int
    {
        $data = \trim($data);
        $filePath = $this->cacheDir . '/' . $filename;

        if (empty($data)) {
            throw new \Exception("No data to write into '{$filePath}'");
        }

        // open with 'c' and truncate file only after obtaining a lock
        /** @noinspection PhpUsageOfSilenceOperatorInspection */
        $fp = @\fopen($filePath, 'cb');
        $result = $fp
                  && \flock($fp, \LOCK_EX)
                  && \ftruncate($fp, 0)
                  && \fwrite($fp, $data) !== false
                  && \fflush($fp);

        if (!$result) {
            $fp && \fclose($fp);

            throw new \Exception("Cannot write to '${filePath}'");
        }

        if ($fp) {
            \flock($fp, \LOCK_UN);
            \fclose($fp);
        }

        return (int) $result;
    }
}
