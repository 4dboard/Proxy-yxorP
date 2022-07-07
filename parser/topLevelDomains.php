<?php declare(strict_types=1);

namespace Pdp;

use DateTimeImmutable;
use Iterator;
use SplTempFileObject;
use TypeError;
use function count;
use function gettype;
use function in_array;
use function is_object;
use function is_string;
use function method_exists;
use function preg_match;
use function strpos;
use function trim;

final class topLevelDomains implements topLevelDomainList
{
    private const IANA_DATE_FORMAT = 'D M d H:i:s Y e';
    private const REGEXP_HEADER_LINE = '/^\# Version (?<version>\d+), Last Updated (?<date>.*?)$/';
    private array $records;
    private string $version;
    private DateTimeImmutable $lastUpdated;

    private function __construct(array $records, string $version, DateTimeImmutable $lastUpdated)
    {
        $this->records = $records;
        $this->version = $version;
        $this->lastUpdated = $lastUpdated;
    }

    public static function fromPath(string $path, $context = null): self
    {
        return self::fromString(stream::getContentAsString($path, $context));
    }

    public static function fromString($content): self
    {
        if (is_object($content) && method_exists($content, '__toString')) {
            $content = (string)$content;
        }
        if (!is_string($content)) {
            throw new TypeError('The content to be converted should be a string or a Stringable object, `' . gettype($content) . '` given.');
        }
        $data = self::parse($content);
        return new self($data['records'], $data['version'], $data['lastUpdated']);
    }

    public static function parse(string $content): array
    {
        $data = [];
        $file = new SplTempFileObject();
        $file->fwrite($content);
        $file->setFlags(SplTempFileObject::DROP_NEW_LINE | SplTempFileObject::READ_AHEAD | SplTempFileObject::SKIP_EMPTY);
        foreach ($file as $line) {
            $line = trim($line);
            if ([] === $data) {
                $data = self::extractHeader($line);
                continue;
            }
            if (false === strpos($line, '#')) {
                $data['records'] = $data['records'] ?? [];
                $data['records'][self::extractRootZone($line)] = 1;
                continue;
            }
            throw unableToLoadTopLevelDomainList::dueToInvalidLine($line);
        }
        if (isset($data['version'], $data['lastUpdated'], $data['records'])) {
            return $data;
        }
        throw unableToLoadTopLevelDomainList::dueToFailedConversion();
    }

    public static function __set_state(array $properties): self
    {
        return new self($properties['records'], $properties['version'], $properties['lastUpdated']);
    }

    private static function extractHeader(string $content): array
    {
        if (1 !== preg_match(self::REGEXP_HEADER_LINE, $content, $matches)) {
            throw unableToLoadTopLevelDomainList::dueToInvalidVersionLine($content);
        }
        $date = DateTimeImmutable::createFromFormat(self::IANA_DATE_FORMAT, $matches['date']);
        return ['version' => $matches['version'], 'lastUpdated' => $date,];
    }

    private static function extractRootZone(string $content): string
    {
        try {
            $tld = suffix::fromIANA($content);
        } catch (cannotProcessHost $exception) {
            throw unableToLoadTopLevelDomainList::dueToInvalidTopLevelDomain($content, $exception);
        }
        return $tld->toAscii()->toString();
    }

    public function version(): string
    {
        return $this->version;
    }

    public function lastUpdated(): DateTimeImmutable
    {
        return $this->lastUpdated;
    }

    public function count(): int
    {
        return count($this->records);
    }

    public function isEmpty(): bool
    {
        return [] === $this->records;
    }

    public function getIterator(): Iterator
    {
        foreach ($this->records as $tld => $_) {
            yield $tld;
        }
    }

    public function resolve($host): resolvedDomainName
    {
        try {
            $domain = $this->validateDomain($host);
            if ($this->containsTopLevelDomain($domain)) {
                return resolvedDomain::fromIANA($domain);
            }
            return resolvedDomain::fromUnknown($domain);
        } catch (unableToResolveDomain $exception) {
            return resolvedDomain::fromUnknown($exception->domain());
        } catch (syntaxError $exception) {
            return resolvedDomain::fromUnknown(null);
        }
    }

    public function getIANADomain($host): resolvedDomainName
    {
        $domain = $this->validateDomain($host);
        if (!$this->containsTopLevelDomain($domain)) {
            throw unableToResolveDomain::dueToMissingSuffix($domain, 'IANA');
        }
        return resolvedDomain::fromIANA($domain);
    }

    private function validateDomain($domain): domainName
    {
        if ($domain instanceof domainNameProvider) {
            $domain = $domain->domain();
        }
        if (!$domain instanceof domainName) {
            $domain = domain::fromIDNA2008($domain);
        }
        $label = $domain->label(0);
        if (in_array($label, [null, ''], true)) {
            throw unableToResolveDomain::dueToUnresolvableDomain($domain);
        }
        return $domain;
    }

    private function containsTopLevelDomain(domainName $domain): bool
    {
        return isset($this->records[$domain->toAscii()->label(0)]);
    }
}