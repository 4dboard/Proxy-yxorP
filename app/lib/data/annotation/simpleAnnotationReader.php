<?php namespace yxorP\app\lib\data\annotation;


use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

class simpleAnnotationReader implements readerInterface
{
    private $parser;

    public function __construct()
    {
        $this->parser = new docParser();
        $this->parser->setIgnoreNotImportedAnnotations(true);
    }

    public function addNamespace($namespace)
    {
        $this->parser->addNamespace($namespace);
    }

    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        foreach ($this->getClassAnnotations($class) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getClassAnnotations(ReflectionClass $class)
    {
        return $this->parser->parse($class->getDocComment(), 'class ' . $class->getName());
    }

    public function getMethodAnnotation(ReflectionMethod $method, $annotationName)
    {
        foreach ($this->getMethodAnnotations($method) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getMethodAnnotations(ReflectionMethod $method)
    {
        return $this->parser->parse($method->getDocComment(), 'method ' . $method->getDeclaringClass()->name . '::' . $method->getName() . '()');
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        foreach ($this->getPropertyAnnotations($property) as $annot) {
            if ($annot instanceof $annotationName) {
                return $annot;
            }
        }
        return null;
    }

    public function getPropertyAnnotations(ReflectionProperty $property)
    {
        return $this->parser->parse($property->getDocComment(), 'property ' . $property->getDeclaringClass()->name . '::$' . $property->getName());
    }
}
