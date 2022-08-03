<?php namespace yxorP\app\lib\data\annotation;

use ReflectionClass;
use ReflectionFunction;
use ReflectionMethod;
use ReflectionProperty;
use yxorP\app\lib\data\annotation\attribute\ignoreAnnotation;
use yxorP\app\lib\data\annotation\attribute\target;
use function array_merge;
use function class_exists;
use function extension_loaded;
use function ini_get;

class annotationReader
{
    private static array $globalImports = ['ignoreannotation' => Annotation\IgnoreAnnotation::class,];
    private static array $globalIgnoredNames = implicitlyIgnoredAnnotationNames::LIST;
    private static array $globalIgnoredNamespaces = [];
    private docParser $parser;
    private docParser $preParser;
    private phpParser $phpParser;
    private array $imports = [];
    private array $ignoredAnnotationNames = [];

    /**
     * @throws annotationException
     */
    public function __construct(?docParser $parser = null)
    {
        if (extension_loaded('Zend Optimizer+') && (ini_get('zend_optimizerplus.save_comments') === '0' || ini_get('opcache.save_comments') === '0')) {
            throw annotationException::optimizerPlusSaveComments();
        }
        if (extension_loaded('Zend OPcache') && ini_get('opcache.save_comments') == 0) {
            throw annotationException::optimizerPlusSaveComments();
        }
        class_exists(ignoreAnnotation::class);
        $this->parser = $parser ?: new docParser();
        $this->preParser = new docParser();
        $this->preParser->setImports(self::$globalImports);
        $this->preParser->setIgnoreNotImportedAnnotations(true);
        $this->preParser->setIgnoredAnnotationNames(self::$globalIgnoredNames);
        $this->phpParser = new phpParser();
    }

    public static function addGlobalIgnoredName($name)
    {
        self::$globalIgnoredNames[$name] = true;
    }

    public static function addGlobalIgnoredNamespace($namespace)
    {
        self::$globalIgnoredNamespaces[$namespace] = true;
    }

    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        $annotations = $this->getClassAnnotations($class);
        foreach ($annotations as $annotation) {
            if ($annotation instanceof $annotationName) {
                return $annotation;
            }
        }
        return null;
    }

    public function getClassAnnotations(ReflectionClass $class): array
    {
        $this->parser->setTarget(target::TARGET_CLASS);
        $this->parser->setImports($this->getImports($class));
        $this->parser->setIgnoredAnnotationNames($this->getIgnoredAnnotationNames($class));
        $this->parser->setIgnoredAnnotationNamespaces(self::$globalIgnoredNamespaces);
        return $this->parser->parse($class->getDocComment(), 'class ' . $class->getName());
    }

    private function getImports($reflection): array
    {
        $type = $reflection instanceof ReflectionClass ? 'class' : 'function';
        $name = $reflection->getName();
        if (isset($this->imports[$type][$name])) {
            return $this->imports[$type][$name];
        }
        $this->collectParsingMetadata($reflection);
        return $this->imports[$type][$name];
    }

    private function collectParsingMetadata($reflection): void
    {
        $type = $reflection instanceof ReflectionClass ? 'class' : 'function';
        $name = $reflection->getName();
        $ignoredAnnotationNames = self::$globalIgnoredNames;
        $annotations = $this->preParser->parse($reflection->getDocComment(), $type . ' ' . $name);
        foreach ($annotations as $annotation) {
            if (!($annotation instanceof ignoreAnnotation)) {
                continue;
            }
            foreach ($annotation->names as $annot) {
                $ignoredAnnotationNames[$annot] = true;
            }
        }
        $this->imports[$type][$name] = array_merge(self::$globalImports, $this->phpParser->parseUseStatements($reflection), ['__NAMESPACE__' => $reflection->getNamespaceName(), 'self' => $name,]);
        $this->ignoredAnnotationNames[$type][$name] = $ignoredAnnotationNames;
    }

    private function getIgnoredAnnotationNames($reflection): array
    {
        $type = $reflection instanceof ReflectionClass ? 'class' : 'function';
        $name = $reflection->getName();
        if (isset($this->ignoredAnnotationNames[$type][$name])) {
            return $this->ignoredAnnotationNames[$type][$name];
        }
        $this->collectParsingMetadata($reflection);
        return $this->ignoredAnnotationNames[$type][$name];
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        $annotations = $this->getPropertyAnnotations($property);
        foreach ($annotations as $annotation) {
            if ($annotation instanceof $annotationName) {
                return $annotation;
            }
        }
        return null;
    }

    public function getPropertyAnnotations(ReflectionProperty $property): array
    {
        $class = $property->getDeclaringClass();
        $context = 'property ' . $class->getName() . '::$' . $property->getName();
        $this->parser->setTarget(target::TARGET_PROPERTY);
        $this->parser->setImports($this->getPropertyImports($property));
        $this->parser->setIgnoredAnnotationNames($this->getIgnoredAnnotationNames($class));
        $this->parser->setIgnoredAnnotationNamespaces(self::$globalIgnoredNamespaces);
        return $this->parser->parse($property->getDocComment(), $context);
    }

    private function getPropertyImports(ReflectionProperty $property): array
    {
        $class = $property->getDeclaringClass();
        $classImports = $this->getImports($class);
        $traitImports = [];
        foreach ($class->getTraits() as $trait) {
            if (!$trait->hasProperty($property->getName())) {
                continue;
            }
            $traitImports = array_merge($traitImports, $this->phpParser->parseUseStatements($trait));
        }
        return array_merge($classImports, $traitImports);
    }

    public function getMethodAnnotation(ReflectionMethod $method, $annotationName)
    {
        $annotations = $this->getMethodAnnotations($method);
        foreach ($annotations as $annotation) {
            if ($annotation instanceof $annotationName) {
                return $annotation;
            }
        }
        return null;
    }

    public function getMethodAnnotations(ReflectionMethod $method): array
    {
        $class = $method->getDeclaringClass();
        $context = 'method ' . $class->getName() . '::' . $method->getName() . '()';
        $this->parser->setTarget(target::TARGET_METHOD);
        $this->parser->setImports($this->getMethodImports($method));
        $this->parser->setIgnoredAnnotationNames($this->getIgnoredAnnotationNames($class));
        $this->parser->setIgnoredAnnotationNamespaces(self::$globalIgnoredNamespaces);
        return $this->parser->parse($method->getDocComment(), $context);
    }

    private function getMethodImports(ReflectionMethod $method): array
    {
        $class = $method->getDeclaringClass();
        $classImports = $this->getImports($class);
        $traitImports = [];
        foreach ($class->getTraits() as $trait) {
            if (!$trait->hasMethod($method->getName()) || $trait->getFileName() !== $method->getFileName()) {
                continue;
            }
            $traitImports = array_merge($traitImports, $this->phpParser->parseUseStatements($trait));
        }
        return array_merge($classImports, $traitImports);
    }

    public function getFunctionAnnotation(ReflectionFunction $function, string $annotationName)
    {
        $annotations = $this->getFunctionAnnotations($function);
        foreach ($annotations as $annotation) {
            if ($annotation instanceof $annotationName) {
                return $annotation;
            }
        }
        return null;
    }

    public function getFunctionAnnotations(ReflectionFunction $function): array
    {
        $context = 'function ' . $function->getName();
        $this->parser->setTarget(target::TARGET_FUNCTION);
        $this->parser->setImports($this->getImports($function));
        $this->parser->setIgnoredAnnotationNames($this->getIgnoredAnnotationNames($function));
        $this->parser->setIgnoredAnnotationNamespaces(self::$globalIgnoredNamespaces);
        return $this->parser->parse($function->getDocComment(), $context);
    }
}
