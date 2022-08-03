<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use SplFileInfo;
use yxorP\app\lib\openapi\annotations\openApi;
use yxorP\app\lib\openapi\logger\defaultLogger;
use yxorP\app\lib\psr\log\loggerInterface;

class Generator
{
    public const UNDEFINED = '@OA\Generator::UNDEFINED🙈';
    protected $aliases = null;
    protected $namespaces = null;
    protected $analyser;
    protected $processors = null;
    protected $logger = null;
    private $configStack;

    public function __construct(?loggerInterface $logger = null)
    {
        $this->logger = $logger;
        $this->configStack = new class() {
            private $defaultImports;
            private $whitelist;

            public function push(Generator $generator): void
            {
                $this->defaultImports = Analyser::$defaultImports;
                $this->whitelist = Analyser::$whitelist;
                Analyser::$defaultImports = $generator->getAliases();
                Analyser::$whitelist = $generator->getNamespaces();
            }

            public function pop(): void
            {
                Analyser::$defaultImports = $this->defaultImports;
                Analyser::$whitelist = $this->whitelist;
            }
        };
    }

    public function getAliases(): array
    {
        $aliases = null !== $this->aliases ? $this->aliases : Analyser::$defaultImports;
        $aliases['oa'] = 'OpenApi\\Annotations';
        return $aliases;
    }

    public function setAliases(?array $aliases): Generator
    {
        $this->aliases = $aliases;
        return $this;
    }

    public function getNamespaces(): array
    {
        $namespaces = null !== $this->namespaces ? $this->namespaces : Analyser::$whitelist;
        $namespaces = false !== $namespaces ? $namespaces : [];
        $namespaces[] = 'OpenApi\\Annotations\\';
        return $namespaces;
    }

    public function setNamespaces(?array $namespaces): Generator
    {
        $this->namespaces = $namespaces;
        return $this;
    }

    public static function scan(iterable $sources, array $options = []): OpenApi
    {
        $config = $options + ['aliases' => null, 'namespaces' => null, 'analyser' => null, 'analysis' => null, 'processors' => null, 'logger' => null, 'validate' => true,];
        return (new Generator($config['logger']))->setAliases($config['aliases'])->setNamespaces($config['namespaces'])->setAnalyser($config['analyser'])->setProcessors($config['processors'])->generate($sources, $config['analysis'], $config['validate']);
    }

    public function generate(iterable $sources, ?Analysis $analysis = null, bool $validate = true): OpenApi
    {
        $rootContext = new Context(['logger' => $this->getLogger()]);
        $analysis = $analysis ?: new Analysis([], $rootContext);
        $this->configStack->push($this);
        try {
            $this->scanSources($sources, $analysis, $rootContext);
            $analysis->process($this->getProcessors());
            if ($validate) {
                $analysis->validate();
            }
        } finally {
            $this->configStack->pop();
        }
        return $analysis->openapi;
    }

    #[Pure] public function getLogger(): ?loggerInterface
    {
        return $this->logger ?: new DefaultLogger();
    }

    protected function scanSources(iterable $sources, Analysis $analysis, Context $rootContext): void
    {
        $analyser = $this->getAnalyser();
        foreach ($sources as $source) {
            if (is_iterable($source)) {
                $this->scanSources($source, $analysis, $rootContext);
            } else {
                $resolvedSource = $source instanceof SplFileInfo ? $source->getPathname() : realpath($source);
                if (!$resolvedSource) {
                    $rootContext->logger->warning(sprintf('Skipping invalid source: %s', $source));
                    continue;
                }
                if (is_dir($resolvedSource)) {
                    $this->scanSources(Util::finder($resolvedSource), $analysis, $rootContext);
                } else {
                    $analysis->addAnalysis($analyser->fromFile($resolvedSource, $rootContext));
                }
            }
        }
    }

    #[Pure] public function getAnalyser(): StaticAnalyser
    {
        return $this->analyser ?: new StaticAnalyser();
    }

    public function setAnalyser(?StaticAnalyser $analyser): Generator
    {
        $this->analyser = $analyser;
        return $this;
    }

    public function getProcessors(): array
    {
        return null !== $this->processors ? $this->processors : Analysis::processors();
    }

    public function setProcessors(?array $processors): Generator
    {
        $this->processors = $processors;
        return $this;
    }

    public function addProcessor(callable $processor): Generator
    {
        $processors = $this->getProcessors();
        $processors[] = $processor;
        $this->setProcessors($processors);
        return $this;
    }

    public function removeProcessor(callable $processor, bool $silent = false): Generator
    {
        $processors = $this->getProcessors();
        if (false === ($key = array_search($processor, $processors, true))) {
            if ($silent) {
                return $this;
            }
            throw new InvalidArgumentException('Processor not found');
        }
        unset($processors[$key]);
        $this->setProcessors($processors);
        return $this;
    }

    public function updateProcessor(callable $processor, ?callable $matcher = null): Generator
    {
        if (!$matcher) {
            $matcher = $matcher ?: function ($other) use ($processor) {
                $otherClass = get_class($other);
                return $processor instanceof $otherClass;
            };
        }
        $processors = array_map(function ($other) use ($processor, $matcher) {
            return $matcher($other) ? $processor : $other;
        }, $this->getProcessors());
        $this->setProcessors($processors);
        return $this;
    }
}
