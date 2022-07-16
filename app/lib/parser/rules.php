<?php

namespace yxorP\app\lib\parser;

use JetBrains\PhpStorm\Pure;
use SplFileObject;
use SplTempFileObject;
use TypeError;
use function array_pop;
use function explode;
use function gettype;
use function is_object;
use function is_string;
use function method_exists;
use function preg_match;
use function substr;

final class rules implements publicSuffixListInterface
{
    private const ICANN_DOMAINS = 'ICANN_DOMAINS';
    private const PRIVATE_DOMAINS = 'PRIVATE_DOMAINS';
    private const REGEX_PSL_SECTION = ',^// ===(?<point>BEGIN|END) (?<type>ICANN|PRIVATE) DOMAINS===,';
    private const PSL_SECTION = ['ICANN' => ['BEGIN' => self::ICANN_DOMAINS, 'END' => '',], 'PRIVATE' => ['BEGIN' => self::PRIVATE_DOMAINS, 'END' => '',],];
    private array $rules;

    private function __construct(array $rules)
    {
        $this->rules = $rules;
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
        return new self(self::parse($content));
    }

    #[Pure] public static function __set_state(array $properties): self
    {
        return new self($properties['rules']);
    }

    private static function parse(string $content): array
    {
        $rules = [self::ICANN_DOMAINS => [], self::PRIVATE_DOMAINS => []];
        $section = '';
        $file = new SplTempFileObject();
        $file->fwrite($content);
        $file->setFlags(SplFileObject::DROP_NEW_LINE | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY);
        foreach ($file as $line) {
            $section = self::getSection($section, $line);
            if (in_array($section, [self::PRIVATE_DOMAINS, self::ICANN_DOMAINS], true) && !str_contains($line, '//')) {
                $rules[$section] = self::addRule($rules[$section], explode('.', $line));
            }
        }
        return $rules;
    }

    private static function getSection(string $section, string $line): string
    {
        if (1 === preg_match(self::REGEX_PSL_SECTION, $line, $matches)) {
            return self::PSL_SECTION[$matches['type']][$matches['point']];
        }
        return $section;
    }

    private static function addRule(array $list, array $ruleParts): array
    {
        try {
            $line = array_pop($ruleParts);
            $rule = idna::toAscii($line, idna::IDNA2008_ASCII)->result();
        } catch (cannotProcessHostInterface $exception) {
            throw unableToLoadPublicSuffixList::dueToInvalidRule($line ?? null, $exception);
        }
        $isDomain = true;
        if (str_starts_with($rule, '!')) {
            $rule = substr($rule, 1);
            $isDomain = false;
        }
        $list[$rule] = $list[$rule] ?? ($isDomain ? [] : ['!' => '']);
        if ($isDomain && [] !== $ruleParts) {
            $tmpList = $list[$rule];
            $list[$rule] = self::addRule($tmpList, $ruleParts);
        }
        return $list;
    }

    public function resolve($host): mixed
    {
        try {
            return $this->getCookieDomain($host);
        } catch (unableToResolveDomain $exception) {
            return resolvedDomain::fromUnknown($exception->domain());
        } catch (syntaxError $exception) {
            return resolvedDomain::fromUnknown(domain::fromIDNA2008(null));
        }
    }

    public function getCookieDomain($host): resolvedDomainNameInterface
    {
        $domain = $this->validateDomain($host);
        [$suffixLength, $section] = $this->resolveSuffix($domain, '');
        if (self::ICANN_DOMAINS === $section) {
            return resolvedDomain::fromICANN($domain, $suffixLength);
        }
        if (self::PRIVATE_DOMAINS === $section) {
            return resolvedDomain::fromPrivate($domain, $suffixLength);
        }
        return resolvedDomain::fromUnknown($domain, $suffixLength);
    }

    public function getICANNDomain($host): resolvedDomainNameInterface
    {
        $domain = $this->validateDomain($host);
        [$suffixLength, $section] = $this->resolveSuffix($domain, self::ICANN_DOMAINS);
        if (self::ICANN_DOMAINS !== $section) {
            throw unableToResolveDomain::dueToMissingSuffix($domain, 'ICANN');
        }
        return resolvedDomain::fromICANN($domain, $suffixLength);
    }

    public function getPrivateDomain($host): resolvedDomainNameInterface
    {
        $domain = $this->validateDomain($host);
        [$suffixLength, $section] = $this->resolveSuffix($domain, self::PRIVATE_DOMAINS);
        if (self::PRIVATE_DOMAINS !== $section) {
            throw unableToResolveDomain::dueToMissingSuffix($domain, 'private');
        }
        return resolvedDomain::fromPrivate($domain, $suffixLength);
    }

    private function validateDomain($domain): nameInterface
    {
        if ($domain instanceof domainNameProviderInterface) {
            $domain = $domain->domain();
        }
        if (!$domain instanceof nameInterface) {
            $domain = domain::fromIDNA2008($domain);
        }
        if ('' === $domain->label(0)) {
            throw unableToResolveDomain::dueToUnresolvableDomain($domain);
        }
        return $domain;
    }

    private function resolveSuffix(nameInterface $domain, string $section): array
    {
        $icannSuffixLength = $this->getPublicSuffixLengthFromSection($domain, self::ICANN_DOMAINS);
        if (1 > $icannSuffixLength) {
            return [1, ''];
        }
        if (self::ICANN_DOMAINS === $section) {
            return [$icannSuffixLength, self::ICANN_DOMAINS];
        }
        $privateSuffixLength = $this->getPublicSuffixLengthFromSection($domain, self::PRIVATE_DOMAINS);
        if ($privateSuffixLength > $icannSuffixLength) {
            return [$privateSuffixLength, self::PRIVATE_DOMAINS];
        }
        return [$icannSuffixLength, self::ICANN_DOMAINS];
    }

    private function getPublicSuffixLengthFromSection(nameInterface $domain, string $section): int
    {
        $rules = $this->rules[$section];
        $labelCount = 0;
        foreach ($domain->toAscii() as $label) {
            if (isset($rules[$label]['!'])) {
                break;
            }
            if (array_key_exists('*', $rules)) {
                ++$labelCount;
                break;
            }
            if (!array_key_exists($label, $rules)) {
                if (self::PRIVATE_DOMAINS === $section && [] !== $rules) {
                    $labelCount = 0;
                }
                break;
            }
            ++$labelCount;
            $rules = $rules[$label];
        }
        return $labelCount;
    }
}