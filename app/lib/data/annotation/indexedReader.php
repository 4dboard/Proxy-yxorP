<?php namespace yxorP\app\lib\annotation;


use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;
use function call_user_func_array;
use function get_class;

class indexedReader implements readerInterface
{
    private $delegate;

    public function __construct(readerInterface $reader)
    {
        $this->delegate = $reader;
    }

    public function getClassAnnotations(ReflectionClass $class)
    {
        $annotations = [];
        foreach ($this->delegate->getClassAnnotations($class) as $annot) {
            $annotations[get_class($annot)] = $annot;
        }
        return $annotations;
    }

    public function getClassAnnotation(ReflectionClass $class, $annotationName)
    {
        return $this->delegate->getClassAnnotation($class, $annotationName);
    }

    public function getMethodAnnotations(ReflectionMethod $method)
    {
        $annotations = [];
        foreach ($this->delegate->getMethodAnnotations($method) as $annot) {
            $annotations[get_class($annot)] = $annot;
        }
        return $annotations;
    }

    public function getMethodAnnotation(ReflectionMethod $method, $annotationName)
    {
        return $this->delegate->getMethodAnnotation($method, $annotationName);
    }

    public function getPropertyAnnotations(ReflectionProperty $property)
    {
        $annotations = [];
        foreach ($this->delegate->getPropertyAnnotations($property) as $annot) $annotations[get_class($annot)] = $annot;
        return $annotations;
    }

    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName)
    {
        return $this->delegate->getPropertyAnnotation($property, $annotationName);
    }

    public function __call($method, $args)
    {
        return call_user_func_array([$this->delegate, $method], $args);
    }
}
