<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use Exception;
use stdClass;
use yxorP\app\lib\openapi\annotations as OA;

class Serializer
{
    private static array $VALID_ANNOTATIONS = [OA\AdditionalProperties::class, OA\Attachable::class, OA\Components::class, OA\Contact::class, OA\Delete::class, OA\Discriminator::class, OA\Examples::class, OA\ExternalDocumentation::class, OA\Flow::class, OA\Get::class, OA\Head::class, OA\Header::class, OA\Info::class, OA\Items::class, OA\JsonContent::class, OA\License::class, OA\Link::class, OA\MediaType::class, OA\OpenApi::class, OA\Operation::class, OA\Options::class, OA\Parameter::class, OA\Patch::class, OA\PathItem::class, OA\Post::class, OA\Property::class, OA\Put::class, OA\RequestBody::class, OA\Response::class, OA\Schema::class, OA\SecurityScheme::class, OA\Server::class, OA\ServerVariable::class, OA\Tag::class, OA\Trace::class, OA\Xml::class, OA\XmlContent::class,];

    public function serialize(OA\AbstractAnnotation $annotation)
    {
        return json_encode($annotation);
    }

    /**
     * @throws \Exception
     */
    public function deserialize(string $jsonString, string $className)
    {
        if (!$this->isValidAnnotationClass($className)) {
            throw new Exception($className . ' is not defined in OpenApi PHP Annotations');
        }
        return $this->doDeserialize(json_decode($jsonString), $className);
    }

    public static function isValidAnnotationClass($className)
    {
        return in_array($className, static::$VALID_ANNOTATIONS);
    }

    protected function doDeserialize(stdClass $c, string $class)
    {
        $annotation = new $class(['_context' => new Context(['generated' => true])]);
        foreach ((array)$c as $property => $value) {
            if ($property === '$ref') {
                $property = 'ref';
            }
            if (str_starts_with($property, 'x-')) {
                if ($annotation->x === Generator::UNDEFINED) {
                    $annotation->x = [];
                }
                $custom = substr($property, 2);
                $annotation->x[$custom] = $value;
            } else {
                $annotation->$property = $this->doDeserializeProperty($annotation, $property, $value);
            }
        }
        return $annotation;
    }

    protected function doDeserializeProperty(OA\AbstractAnnotation $annotation, string $property, $value)
    {
        if (array_key_exists($property, $annotation::$_types)) {
            return $this->doDeserializeBaseProperty($annotation::$_types[$property], $value);
        }
        foreach ($annotation::$_nested as $nestedClass => $declaration) {
            if (is_string($declaration) && $declaration === $property) {
                if (is_object($value)) {
                    return $this->doDeserialize($value, $nestedClass);
                } else {
                    return $value;
                }
            }
            if (is_array($declaration) && count($declaration) === 1 && $declaration[0] === $property) {
                $annotationArr = [];
                foreach ($value as $v) {
                    $annotationArr[] = $this->doDeserialize($v, $nestedClass);
                }
                return $annotationArr;
            }
            if (is_array($declaration) && count($declaration) === 2 && $declaration[0] === $property) {
                $key = $declaration[1];
                $annotationHash = [];
                foreach ($value as $k => $v) {
                    $annotation = $this->doDeserialize($v, $nestedClass);
                    $annotation->$key = $k;
                    $annotationHash[$k] = $annotation;
                }
                return $annotationHash;
            }
        }
        return $value;
    }

    protected function doDeserializeBaseProperty($type, $value)
    {
        $isAnnotationClass = is_string($type) && is_subclass_of(trim($type, '[]'), OA\AbstractAnnotation::class);
        if ($isAnnotationClass) {
            $isArray = str_starts_with($type, '[') && str_ends_with($type, ']');
            if ($isArray) {
                $annotationArr = [];
                $class = trim($type, '[]');
                foreach ($value as $v) {
                    $annotationArr[] = $this->doDeserialize($v, $class);
                }
                return $annotationArr;
            }
            return $this->doDeserialize($value, $type);
        }
        return $value;
    }

    /**
     * @throws \Exception
     */
    public function deserializeFile(string $filename, string $className = OA\OpenApi::class)
    {
        if (!$this->isValidAnnotationClass($className)) {
            throw new Exception($className . ' is not defined in OpenApi PHP Annotations');
        }
        return $this->doDeserialize(json_decode(file_get_contents($filename)), $className);
    }
}
