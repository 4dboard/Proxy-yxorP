<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use Exception;
use SplObjectStorage;
use stdClass;
use yxorP\app\lib\openapi\annotations\abstractAnnotation;
use yxorP\app\lib\openapi\annotations\openApi;
use yxorP\app\lib\openapi\annotations\schema;
use yxorP\app\lib\openapi\processors\augmentParameters;
use yxorP\app\lib\openapi\processors\augmentProperties;
use yxorP\app\lib\openapi\processors\augmentSchemas;
use yxorP\app\lib\openapi\processors\buildPaths;
use yxorP\app\lib\openapi\processors\cleanUnmerged;
use yxorP\app\lib\openapi\processors\docBlockDescriptions;
use yxorP\app\lib\openapi\processors\expandClasses;
use yxorP\app\lib\openapi\processors\expandInterfaces;
use yxorP\app\lib\openapi\processors\expandTraits;
use yxorP\app\lib\openapi\processors\mergeIntoComponents;
use yxorP\app\lib\openapi\processors\mergeIntoOpenApi;
use yxorP\app\lib\openapi\processors\mergeJsonContent;
use yxorP\app\lib\openapi\processors\mergeXmlContent;
use yxorP\app\lib\openapi\processors\operationId;

class Analysis
{
    private static $processors;
    public SplObjectStorage $annotations;
    public array $classes = [];
    public array $traits = [];
    public array $interfaces = [];
    public $openapi;
    public ?Context $context;

    public function __construct(array $annotations = [], Context $context = null)
    {
        $this->annotations = new SplObjectStorage();
        $this->context = $context;
        $this->addAnnotations($annotations, $context);
    }

    public function addAnnotations(array $annotations, ?Context $context): void
    {
        foreach ($annotations as $annotation) {
            $this->addAnnotation($annotation, $context);
        }
    }

    public function addAnnotation($annotation, ?Context $context): void
    {
        if ($this->annotations->contains($annotation)) {
            return;
        }
        if ($annotation instanceof AbstractAnnotation) {
            $context = $annotation->_context ?: $this->context;
            if ($this->openapi === null && $annotation instanceof OpenApi) {
                $this->openapi = $annotation;
            }
        } else {
            if ($context->is('annotations') === false) {
                $context->annotations = [];
            }
            if (in_array($annotation, $context->annotations, true) === false) {
                $context->annotations[] = $annotation;
            }
        }
        $this->annotations->attach($annotation, $context);
        $blacklist = property_exists($annotation, '_blacklist') ? $annotation::$_blacklist : [];
        foreach ($annotation as $property => $value) {
            if (in_array($property, $blacklist)) {
                if ($property === '_unmerged') {
                    foreach ($value as $item) {
                        $this->addAnnotation($item, $context);
                    }
                }
            } elseif (is_array($value)) {
                foreach ($value as $item) {
                    if ($item instanceof AbstractAnnotation) {
                        $this->addAnnotation($item, $context);
                    }
                }
            } elseif ($value instanceof AbstractAnnotation) {
                $this->addAnnotation($value, $context);
            }
        }
    }

    public static function registerProcessor($processor): void
    {
        self::processors()[] = $processor;
    }

    public static function &processors(): array
    {
        if (!self::$processors) {
            self::$processors = [new DocBlockDescriptions(), new MergeIntoOpenApi(), new MergeIntoComponents(), new ExpandClasses(), new ExpandInterfaces(), new ExpandTraits(), new AugmentSchemas(), new AugmentProperties(), new BuildPaths(), new AugmentParameters(), new MergeJsonContent(), new MergeXmlContent(), new OperationId(), new CleanUnmerged(),];
        }
        return self::$processors;
    }

    /**
     * @throws Exception
     */
    public static function unregisterProcessor($processor): void
    {
        $processors =& self::processors();
        $key = array_search($processor, $processors, true);
        if ($key === false) {
            throw new Exception('Given processor was not registered');
        }
        unset($processors[$key]);
    }

    public function addClassDefinition(array $definition): void
    {
        $class = $definition['context']->fullyQualifiedName($definition['class']);
        $this->classes[$class] = $definition;
    }

    public function addInterfaceDefinition(array $definition): void
    {
        $interface = $definition['context']->fullyQualifiedName($definition['interface']);
        $this->interfaces[$interface] = $definition;
    }

    public function addTraitDefinition(array $definition): void
    {
        $trait = $definition['context']->fullyQualifiedName($definition['trait']);
        $this->traits[$trait] = $definition;
    }

    public function addAnalysis(Analysis $analysis): void
    {
        foreach ($analysis->annotations as $annotation) {
            $this->addAnnotation($annotation, $analysis->annotations[$annotation]);
        }
        $this->classes = array_merge($this->classes, $analysis->classes);
        $this->interfaces = array_merge($this->interfaces, $analysis->interfaces);
        $this->traits = array_merge($this->traits, $analysis->traits);
        if ($this->openapi === null && $analysis->openapi !== null) {
            $this->openapi = $analysis->openapi;
        }
    }

    public function getSubClasses(string $parent): array
    {
        $definitions = [];
        foreach ($this->classes as $class => $classDefinition) {
            if ($classDefinition['extends'] === $parent) {
                $definitions[$class] = $classDefinition;
                $definitions = array_merge($definitions, $this->getSubClasses($class));
            }
        }
        return $definitions;
    }

    public function getInterfacesOfClass(string $class, bool $direct = false): array
    {
        $classes = $direct ? [] : array_keys($this->getSuperClasses($class));
        $classes[] = $class;
        $definitions = [];
        foreach ($classes as $clazz) {
            if (isset($this->classes[$clazz])) {
                $definition = $this->classes[$clazz];
                if (isset($definition['implements'])) {
                    foreach ($definition['implements'] as $interface) {
                        if (array_key_exists($interface, $this->interfaces)) {
                            $definitions[$interface] = $this->interfaces[$interface];
                        }
                    }
                }
            }
        }
        if (!$direct) {
            $collect = function ($interfaces, $cb) use (&$definitions) {
                foreach ($interfaces as $interface) {
                    if (isset($this->interfaces[$interface]['extends'])) {
                        $cb($this->interfaces[$interface]['extends'], $cb);
                        foreach ($this->interfaces[$interface]['extends'] as $fqdn) {
                            $definitions[$fqdn] = $this->interfaces[$fqdn];
                        }
                    }
                }
            };
            $collect(array_keys($definitions), $collect);
        }
        return $definitions;
    }

    public function getSuperClasses(string $class, bool $direct = false): array
    {
        $classDefinition = $this->classes[$class] ?? null;
        if (!$classDefinition || empty($classDefinition['extends'])) {
            return [];
        }
        $extends = $classDefinition['extends'];
        $extendsDefinition = $this->classes[$extends] ?? null;
        if (!$extendsDefinition) {
            return [];
        }
        $parentDetails = [$extends => $extendsDefinition];
        if ($direct) {
            return $parentDetails;
        }
        return array_merge($parentDetails, $this->getSuperClasses($extends));
    }

    public function getTraitsOfClass(string $source, bool $direct = false): array
    {
        $sources = $direct ? [] : array_keys($this->getSuperClasses($source));
        $sources[] = $source;
        $definitions = [];
        foreach ($sources as $sourze) {
            if (isset($this->classes[$sourze]) || isset($this->traits[$sourze])) {
                $definition = $this->classes[$sourze] ?? $this->traits[$sourze];
                if (isset($definition['traits'])) {
                    foreach ($definition['traits'] as $trait) {
                        if (array_key_exists($trait, $this->traits)) {
                            $definitions[$trait] = $this->traits[$trait];
                        }
                    }
                }
            }
        }
        if (!$direct) {
            $collect = function ($traits, $cb) use (&$definitions) {
                foreach ($traits as $trait) {
                    if (isset($this->traits[$trait]['traits'])) {
                        $cb($this->traits[$trait]['traits'], $cb);
                        foreach ($this->traits[$trait]['traits'] as $fqdn) {
                            $definitions[$fqdn] = $this->traits[$fqdn];
                        }
                    }
                }
            };
            $collect(array_keys($definitions), $collect);
        }
        return $definitions;
    }

    public function getAnnotationsOfType(string $class, bool $strict = false): array
    {
        $annotations = [];
        if ($strict) {
            foreach ($this->annotations as $annotation) {
                if (get_class($annotation) === $class) {
                    $annotations[] = $annotation;
                }
            }
        } else {
            foreach ($this->annotations as $annotation) {
                if ($annotation instanceof $class) {
                    $annotations[] = $annotation;
                }
            }
        }
        return $annotations;
    }

    public function getSchemaForSource(string $fqdn): ?Schema
    {
        $sourceDefinitions = [$this->classes, $this->interfaces, $this->traits,];
        foreach ($sourceDefinitions as $definitions) {
            if (array_key_exists($fqdn, $definitions)) {
                $definition = $definitions[$fqdn];
                if (is_iterable($definition['context']->annotations)) {
                    foreach ($definition['context']->annotations as $annotation) {
                        if (get_class($annotation) === Schema::class) {
                            return $annotation;
                        }
                    }
                }
            }
        }
        return null;
    }

    /**
     * @throws Exception
     */
    public function getContext($annotation): Context
    {
        if ($annotation instanceof AbstractAnnotation) {
            return $annotation->_context;
        }
        if ($this->annotations->contains($annotation) === false) {
            throw new Exception('Annotation not found');
        }
        $context = $this->annotations[$annotation];
        if ($context instanceof Context) {
            return $context;
        }
        throw new Exception('Annotation has no context');
    }

    public function unmerged(): Analysis
    {
        return $this->split()->unmerged;
    }

    /**
     * @throws Exception
     */
    public function split(): stdClass
    {
        $result = new stdClass();
        $result->merged = $this->merged();
        $result->unmerged = new Analysis([], $this->context);
        foreach ($this->annotations as $annotation) {
            if ($result->merged->annotations->contains($annotation) === false) {
                $result->unmerged->annotations->attach($annotation, $this->annotations[$annotation]);
            }
        }
        return $result;
    }

    /**
     * @throws Exception
     */
    public function merged(): Analysis
    {
        if ($this->openapi === null) {
            throw new Exception('No openapi target set. Run the MergeIntoOpenApi processor');
        }
        $unmerged = $this->openapi->_unmerged;
        $this->openapi->_unmerged = [];
        $analysis = new Analysis([$this->openapi], $this->context);
        $this->openapi->_unmerged = $unmerged;
        return $analysis;
    }

    public function process($processors = null): void
    {
        if ($processors === null) {
            $processors = self::processors();
        }
        if (is_array($processors) === false && is_callable($processors)) {
            $processors = [$processors];
        }
        foreach ($processors as $processor) {
            $processor($this);
        }
    }

    public function validate(): bool
    {
        if ($this->openapi !== null) {
            return $this->openapi->validate();
        }
        $this->context->logger->warning('No openapi target set. Run the MergeIntoOpenApi processor before validate()');
        return false;
    }
}
