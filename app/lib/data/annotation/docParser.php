<?php namespace yxorP\app\lib\data\annotation;


use ReflectionClass;
use ReflectionProperty;
use RuntimeException;
use stdClass;
use Throwable;
use yxorP\app\lib\data\annotation\attribute\attribute;
use yxorP\app\lib\data\annotation\attribute\attributes;
use yxorP\app\lib\data\annotation\attribute\enum;
use yxorP\app\lib\data\annotation\attribute\namedArgumentConstructor;
use yxorP\app\lib\data\annotation\attribute\target;
use function array_keys;
use function array_map;
use function array_pop;
use function array_values;
use function class_exists;
use function constant;
use function count;
use function defined;
use function explode;
use function gettype;
use function implode;
use function in_array;
use function interface_exists;
use function is_array;
use function is_object;
use function json_encode;
use function ltrim;
use function preg_match;
use function reset;
use function rtrim;
use function sprintf;
use function stripos;
use function strlen;
use function strpos;
use function strrpos;
use function strtolower;
use function substr;
use function trim;
use const PHP_VERSION_ID;

final class docParser
{
    private static $classIdentifiers = [docLexer::T_IDENTIFIER, docLexer::T_TRUE, docLexer::T_FALSE, docLexer::T_NULL,];
    private static $metadataParser;
    private static $annotationMetadata = [Annotation\Target::class => ['is_annotation' => true, 'has_constructor' => true, 'has_named_argument_constructor' => false, 'properties' => [], 'targets_literal' => 'ANNOTATION_CLASS', 'targets' => target::TARGET_CLASS, 'default_property' => 'value', 'attribute_types' => ['value' => ['required' => false, 'type' => 'array', 'array_type' => 'string', 'value' => 'array<string>',],],], Annotation\Attribute::class => ['is_annotation' => true, 'has_constructor' => false, 'has_named_argument_constructor' => false, 'targets_literal' => 'ANNOTATION_ANNOTATION', 'targets' => target::TARGET_ANNOTATION, 'default_property' => 'name', 'properties' => ['name' => 'name', 'type' => 'type', 'required' => 'required',], 'attribute_types' => ['value' => ['required' => true, 'type' => 'string', 'value' => 'string',], 'type' => ['required' => true, 'type' => 'string', 'value' => 'string',], 'required' => ['required' => false, 'type' => 'boolean', 'value' => 'boolean',],],], Annotation\Attributes::class => ['is_annotation' => true, 'has_constructor' => false, 'has_named_argument_constructor' => false, 'targets_literal' => 'ANNOTATION_CLASS', 'targets' => target::TARGET_CLASS, 'default_property' => 'value', 'properties' => ['value' => 'value'], 'attribute_types' => ['value' => ['type' => 'array', 'required' => true, 'array_type' => Annotation\Attribute::class, 'value' => 'array<' . Annotation\Attribute::class . '>',],],], Annotation\Enum::class => ['is_annotation' => true, 'has_constructor' => true, 'has_named_argument_constructor' => false, 'targets_literal' => 'ANNOTATION_PROPERTY', 'targets' => target::TARGET_PROPERTY, 'default_property' => 'value', 'properties' => ['value' => 'value'], 'attribute_types' => ['value' => ['type' => 'array', 'required' => true,], 'literal' => ['type' => 'array', 'required' => false,],],], Annotation\NamedArgumentConstructor::class => ['is_annotation' => true, 'has_constructor' => false, 'has_named_argument_constructor' => false, 'targets_literal' => 'ANNOTATION_CLASS', 'targets' => target::TARGET_CLASS, 'default_property' => null, 'properties' => [], 'attribute_types' => [],],];
    private static $typeMap = ['float' => 'double', 'bool' => 'boolean', 'Boolean' => 'boolean', 'int' => 'integer',];
    private $lexer;
    private $target;
    private $isNestedAnnotation = false;
    private $imports = [];
    private $classExists = [];
    private $ignoreNotImportedAnnotations = false;
    private $namespaces = [];
    private $ignoredAnnotationNames = [];
    private $ignoredAnnotationNamespaces = [];
    private $context = '';

    public function __construct()
    {
        $this->lexer = new docLexer();
    }

    public function setIgnoredAnnotationNamespaces($ignoredAnnotationNamespaces)
    {
        $this->ignoredAnnotationNamespaces = $ignoredAnnotationNamespaces;
    }

    public function addNamespace($namespace)
    {
        if ($this->imports) {
            throw new RuntimeException('You must either use addNamespace(), or setImports(), but not both.');
        }
        $this->namespaces[] = $namespace;
    }

    private function collectAnnotationMetadata(string $name): void
    {
        if (self::$metadataParser === null) {
            self::$metadataParser = new self();
            self::$metadataParser->setIgnoreNotImportedAnnotations(true);
            self::$metadataParser->setIgnoredAnnotationNames($this->ignoredAnnotationNames);
            self::$metadataParser->setImports(['enum' => enum::class, 'target' => target::class, 'attribute' => attribute::class, 'attributes' => attributes::class, 'namedargumentconstructor' => namedArgumentConstructor::class,]);
            class_exists(enum::class);
            class_exists(target::class);
            class_exists(attribute::class);
            class_exists(attributes::class);
            class_exists(namedArgumentConstructor::class);
        }
        $class = new ReflectionClass($name);
        $docComment = $class->getDocComment();
        $constructor = $class->getConstructor();
        $metadata = ['default_property' => null, 'has_constructor' => $constructor !== null && $constructor->getNumberOfParameters() > 0, 'constructor_args' => [], 'properties' => [], 'property_types' => [], 'attribute_types' => [], 'targets_literal' => null, 'targets' => target::TARGET_ALL, 'is_annotation' => strpos($docComment, '@Annotation') !== false,];
        $metadata['has_named_argument_constructor'] = $metadata['has_constructor'] && $class->implementsInterface(namedArgumentConstructorAnnotationInterface::class);
        if ($metadata['is_annotation']) {
            self::$metadataParser->setTarget(target::TARGET_CLASS);
            foreach (self::$metadataParser->parse($docComment, 'class @' . $name) as $annotation) {
                if ($annotation instanceof target) {
                    $metadata['targets'] = $annotation->targets;
                    $metadata['targets_literal'] = $annotation->literal;
                    continue;
                }
                if ($annotation instanceof namedArgumentConstructor) {
                    $metadata['has_named_argument_constructor'] = $metadata['has_constructor'];
                    if ($metadata['has_named_argument_constructor']) {
                        $metadata['default_property'] = $constructor->getParameters()[0]->getName();
                    }
                }
                if (!($annotation instanceof attributes)) {
                    continue;
                }
                foreach ($annotation->value as $attribute) {
                    $this->collectAttributeTypeMetadata($metadata, $attribute);
                }
            }
            if ($metadata['has_constructor'] === false) {
                foreach ($class->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
                    $metadata['properties'][$property->name] = $property->name;
                    $propertyComment = $property->getDocComment();
                    if ($propertyComment === false) {
                        continue;
                    }
                    $attribute = new attribute();
                    $attribute->required = (strpos($propertyComment, '@Required') !== false);
                    $attribute->name = $property->name;
                    $attribute->type = (strpos($propertyComment, '@var') !== false && preg_match('/@var\s+([^\s]+)/', $propertyComment, $matches)) ? $matches[1] : 'mixed';
                    $this->collectAttributeTypeMetadata($metadata, $attribute);
                    if (strpos($propertyComment, '@Enum') === false) {
                        continue;
                    }
                    $context = 'property ' . $class->name . '::$' . $property->name;
                    self::$metadataParser->setTarget(target::TARGET_PROPERTY);
                    foreach (self::$metadataParser->parse($propertyComment, $context) as $annotation) {
                        if (!$annotation instanceof enum) {
                            continue;
                        }
                        $metadata['enum'][$property->name]['value'] = $annotation->value;
                        $metadata['enum'][$property->name]['literal'] = (!empty($annotation->literal)) ? $annotation->literal : $annotation->value;
                    }
                }
                $metadata['default_property'] = reset($metadata['properties']);
            } elseif ($metadata['has_named_argument_constructor']) {
                foreach ($constructor->getParameters() as $parameter) {
                    $metadata['constructor_args'][$parameter->getName()] = ['position' => $parameter->getPosition(), 'default' => $parameter->isOptional() ? $parameter->getDefaultValue() : null,];
                }
            }
        }
        self::$annotationMetadata[$name] = $metadata;
    }

    public function setIgnoreNotImportedAnnotations($bool)
    {
        $this->ignoreNotImportedAnnotations = (bool)$bool;
    }

    public function setIgnoredAnnotationNames(array $names)
    {
        $this->ignoredAnnotationNames = $names;
    }

    public function setImports(array $imports)
    {
        if ($this->namespaces) {
            throw new RuntimeException('You must either use addNamespace(), or setImports(), but not both.');
        }
        $this->imports = $imports;
    }

    public function setTarget($target)
    {
        $this->target = $target;
    }

    public function parse($input, $context = '')
    {
        $pos = $this->findInitialTokenPosition($input);
        if ($pos === null) {
            return [];
        }
        $this->context = $context;
        $this->lexer->setInput(trim(substr($input, $pos), '* /'));
        $this->lexer->moveNext();
        return $this->Annotations();
    }

    private function findInitialTokenPosition($input): ?int
    {
        $pos = 0;
        while (($pos = strpos($input, '@', $pos)) !== false) {
            $preceding = substr($input, $pos - 1, 1);
            if ($pos === 0 || $preceding === ' ' || $preceding === '*' || $preceding === "\t") {
                return $pos;
            }
            $pos++;
        }
        return null;
    }

    private function Annotations(): array
    {
        $annotations = [];
        while ($this->lexer->lookahead !== null) {
            if ($this->lexer->lookahead['type'] !== docLexer::T_AT) {
                $this->lexer->moveNext();
                continue;
            }
            if ($this->lexer->token !== null && $this->lexer->lookahead['position'] === $this->lexer->token['position'] + strlen($this->lexer->token['value'])) {
                $this->lexer->moveNext();
                continue;
            }
            $peek = $this->lexer->glimpse();
            if (($peek === null) || ($peek['type'] !== docLexer::T_NAMESPACE_SEPARATOR && !in_array($peek['type'], self::$classIdentifiers, true)) || $peek['position'] !== $this->lexer->lookahead['position'] + 1) {
                $this->lexer->moveNext();
                continue;
            }
            $this->isNestedAnnotation = false;
            $annot = $this->Annotation();
            if ($annot === false) {
                continue;
            }
            $annotations[] = $annot;
        }
        return $annotations;
    }

    private function Annotation()
    {
        $this->match(docLexer::T_AT);
        $name = $this->Identifier();
        if ($this->lexer->isNextToken(docLexer::T_MINUS) && $this->lexer->nextTokenIsAdjacent()) {
            return false;
        }
        $originalName = $name;
        if ($name[0] !== '\\') {
            $pos = strpos($name, '\\');
            $alias = ($pos === false) ? $name : substr($name, 0, $pos);
            $found = false;
            $loweredAlias = strtolower($alias);
            if ($this->namespaces) {
                foreach ($this->namespaces as $namespace) {
                    if ($this->classExists($namespace . '\\' . $name)) {
                        $name = $namespace . '\\' . $name;
                        $found = true;
                        break;
                    }
                }
            } elseif (isset($this->imports[$loweredAlias])) {
                $namespace = ltrim($this->imports[$loweredAlias], '\\');
                $name = ($pos !== false) ? $namespace . substr($name, $pos) : $namespace;
                $found = $this->classExists($name);
            } elseif (!isset($this->ignoredAnnotationNames[$name]) && isset($this->imports['__NAMESPACE__']) && $this->classExists($this->imports['__NAMESPACE__'] . '\\' . $name)) {
                $name = $this->imports['__NAMESPACE__'] . '\\' . $name;
                $found = true;
            } elseif (!isset($this->ignoredAnnotationNames[$name]) && $this->classExists($name)) {
                $found = true;
            }
            if (!$found) {
                if ($this->isIgnoredAnnotation($name)) {
                    return false;
                }
                throw annotationException::semanticalError(sprintf(<<<S
The annotation "@%s" in %s was never imported. Did you maybe forget to add a "use" statement for this annotation?
S
                ));
            }
        }
        $name = ltrim($name, '\\');
        if (!$this->classExists($name)) {
            throw annotationException::semanticalError(sprintf('The annotation "@%s" in %s does not exist, or could not be auto-loaded.', $name, $this->context));
        }
        if (!isset(self::$annotationMetadata[$name])) {
            $this->collectAnnotationMetadata($name);
        }
        if (self::$annotationMetadata[$name]['is_annotation'] === false) {
            if ($this->isIgnoredAnnotation($originalName) || $this->isIgnoredAnnotation($name)) {
                return false;
            }
            throw annotationException::semanticalError(sprintf(<<<S
The class "%s" is not annotated with @Annotation.
Are you sure this class can be used as annotation?
If so, then you need to add @Annotation to the _class_ doc comment of "%s".
If it is indeed no annotation, then you need to add @IgnoreAnnotation("%s") to the _class_ doc comment of %s.
S
            ));
        }
        $target = $this->isNestedAnnotation ? target::TARGET_ANNOTATION : $this->target;
        $this->isNestedAnnotation = true;
        if ((self::$annotationMetadata[$name]['targets'] & $target) === 0 && $target) {
            throw annotationException::semanticalError(sprintf(<<<S
Annotation @%s is not allowed to be declared on %s. You may only use this annotation on these code elements: %s.
S
            ));
        }
        $arguments = $this->MethodCall();
        $values = $this->resolvePositionalValues($arguments, $name);
        if (isset(self::$annotationMetadata[$name]['enum'])) {
            foreach (self::$annotationMetadata[$name]['enum'] as $property => $enum) {
                if (isset($values[$property]) && !in_array($values[$property], $enum['value'])) {
                    throw annotationException::enumeratorError($property, $name, $this->context, $enum['literal'], $values[$property]);
                }
            }
        }
        foreach (self::$annotationMetadata[$name]['attribute_types'] as $property => $type) {
            if ($property === self::$annotationMetadata[$name]['default_property'] && !isset($values[$property]) && isset($values['value'])) {
                $property = 'value';
            }
            if (!isset($values[$property])) {
                if ($type['required']) {
                    throw annotationException::requiredError($property, $originalName, $this->context, 'a(n) ' . $type['value']);
                }
                continue;
            }
            if ($type['type'] === 'array') {
                if (!is_array($values[$property])) {
                    $values[$property] = [$values[$property]];
                }
                if (isset($type['array_type'])) {
                    foreach ($values[$property] as $item) {
                        if (gettype($item) !== $type['array_type'] && !$item instanceof $type['array_type']) {
                            throw annotationException::attributeTypeError($property, $originalName, $this->context, 'either a(n) ' . $type['array_type'] . ', or an array of ' . $type['array_type'] . 's', $item);
                        }
                    }
                }
            } elseif (gettype($values[$property]) !== $type['type'] && !$values[$property] instanceof $type['type']) {
                throw annotationException::attributeTypeError($property, $originalName, $this->context, 'a(n) ' . $type['value'], $values[$property]);
            }
        }
        if (self::$annotationMetadata[$name]['has_named_argument_constructor']) {
            if (PHP_VERSION_ID >= 80000) {
                return $this->instantiateAnnotiation($originalName, $this->context, $name, $values);
            }
            $positionalValues = [];
            foreach (self::$annotationMetadata[$name]['constructor_args'] as $property => $parameter) {
                $positionalValues[$parameter['position']] = $parameter['default'];
            }
            foreach ($values as $property => $value) {
                if (!isset(self::$annotationMetadata[$name]['constructor_args'][$property])) {
                    throw annotationException::creationError(sprintf(<<<S
The annotation @%s declared on %s does not have a property named "%s"
that can be set through its named arguments constructor.
Available named arguments: %s
S
                    ));
                }
                $positionalValues[self::$annotationMetadata[$name]['constructor_args'][$property]['position']] = $value;
            }
            return $this->instantiateAnnotiation($originalName, $this->context, $name, $positionalValues);
        }
        if (self::$annotationMetadata[$name]['has_constructor'] === true) {
            return $this->instantiateAnnotiation($originalName, $this->context, $name, [$values]);
        }
        $instance = $this->instantiateAnnotiation($originalName, $this->context, $name, []);
        foreach ($values as $property => $value) {
            if (!isset(self::$annotationMetadata[$name]['properties'][$property])) {
                if ($property !== 'value') {
                    throw annotationException::creationError(sprintf(<<<S
The annotation @%s declared on %s does not have a property named "%s".
Available properties: %s
S
                    ));
                }
                $property = self::$annotationMetadata[$name]['default_property'];
                if (!$property) {
                    throw annotationException::creationError(sprintf('The annotation @%s declared on %s does not accept any values, but got %s.', $originalName, $this->context, json_encode($values)));
                }
            }
            $instance->{$property} = $value;
        }
        return $instance;
    }

    private function match(int $token): bool
    {
        if (!$this->lexer->isNextToken($token)) {
            throw $this->syntaxError($this->lexer->getLiteral($token));
        }
        return $this->lexer->moveNext();
    }

    private function syntaxError(string $expected, ?array $token = null): annotationException
    {
        if ($token === null) {
            $token = $this->lexer->lookahead;
        }
        $message = sprintf('Expected %s, got ', $expected);
        $message .= $this->lexer->lookahead === null ? 'end of string' : sprintf("'%s' at position %s", $token['value'], $token['position']);
        if (strlen($this->context)) {
            $message .= ' in ' . $this->context;
        }
        $message .= '.';
        return annotationException::syntaxError($message);
    }

    private function Identifier(): string
    {
        if (!$this->lexer->isNextTokenAny(self::$classIdentifiers)) {
            throw $this->syntaxError('namespace separator or identifier');
        }
        $this->lexer->moveNext();
        $className = $this->lexer->token['value'];
        while ($this->lexer->lookahead !== null && $this->lexer->lookahead['position'] === ($this->lexer->token['position'] + strlen($this->lexer->token['value'])) && $this->lexer->isNextToken(docLexer::T_NAMESPACE_SEPARATOR)) {
            $this->match(docLexer::T_NAMESPACE_SEPARATOR);
            $this->matchAny(self::$classIdentifiers);
            $className .= '\\' . $this->lexer->token['value'];
        }
        return $className;
    }

    private function matchAny(array $tokens): bool
    {
        if (!$this->lexer->isNextTokenAny($tokens)) {
            throw $this->syntaxError(implode(' or ', array_map([$this->lexer, 'getLiteral'], $tokens)));
        }
        return $this->lexer->moveNext();
    }

    private function classExists(string $fqcn): bool
    {
        if (isset($this->classExists[$fqcn])) {
            return $this->classExists[$fqcn];
        }
        if (class_exists($fqcn, false)) {
            return $this->classExists[$fqcn] = true;
        }
        return $this->classExists[$fqcn] = annotationRegistry::loadAnnotationClass($fqcn);
    }

    private function isIgnoredAnnotation(string $name): bool
    {
        if ($this->ignoreNotImportedAnnotations || isset($this->ignoredAnnotationNames[$name])) {
            return true;
        }
        foreach (array_keys($this->ignoredAnnotationNamespaces) as $ignoredAnnotationNamespace) {
            $ignoredAnnotationNamespace = rtrim($ignoredAnnotationNamespace, '\\') . '\\';
            if (stripos(rtrim($name, '\\') . '\\', $ignoredAnnotationNamespace) === 0) {
                return true;
            }
        }
        return false;
    }

    private function MethodCall(): array
    {
        $values = [];
        if (!$this->lexer->isNextToken(docLexer::T_OPEN_PARENTHESIS)) {
            return $values;
        }
        $this->match(docLexer::T_OPEN_PARENTHESIS);
        if (!$this->lexer->isNextToken(docLexer::T_CLOSE_PARENTHESIS)) {
            $values = $this->Values();
        }
        $this->match(docLexer::T_CLOSE_PARENTHESIS);
        return $values;
    }

    private function Values(): array
    {
        $values = [$this->Value()];
        while ($this->lexer->isNextToken(docLexer::T_COMMA)) {
            $this->match(docLexer::T_COMMA);
            if ($this->lexer->isNextToken(docLexer::T_CLOSE_PARENTHESIS)) {
                break;
            }
            $token = $this->lexer->lookahead;
            $value = $this->Value();
            $values[] = $value;
        }
        $namedArguments = [];
        $positionalArguments = [];
        foreach ($values as $k => $value) {
            if (is_object($value) && $value instanceof stdClass) {
                $namedArguments[$value->name] = $value->value;
            } else {
                $positionalArguments[$k] = $value;
            }
        }
        return ['named_arguments' => $namedArguments, 'positional_arguments' => $positionalArguments];
    }

    private function Value()
    {
        $peek = $this->lexer->glimpse();
        if ($peek['type'] === docLexer::T_EQUALS) {
            return $this->FieldAssignment();
        }
        return $this->PlainValue();
    }

    private function FieldAssignment(): stdClass
    {
        $this->match(docLexer::T_IDENTIFIER);
        $fieldName = $this->lexer->token['value'];
        $this->match(docLexer::T_EQUALS);
        $item = new stdClass();
        $item->name = $fieldName;
        $item->value = $this->PlainValue();
        return $item;
    }

    private function PlainValue()
    {
        if ($this->lexer->isNextToken(docLexer::T_OPEN_CURLY_BRACES)) {
            return $this->Arrayx();
        }
        if ($this->lexer->isNextToken(docLexer::T_AT)) {
            return $this->Annotation();
        }
        if ($this->lexer->isNextToken(docLexer::T_IDENTIFIER)) {
            return $this->Constant();
        }
        switch ($this->lexer->lookahead['type']) {
            case docLexer::T_STRING:
                $this->match(docLexer::T_STRING);
                return $this->lexer->token['value'];
            case docLexer::T_INTEGER:
                $this->match(docLexer::T_INTEGER);
                return (int)$this->lexer->token['value'];
            case docLexer::T_FLOAT:
                $this->match(docLexer::T_FLOAT);
                return (float)$this->lexer->token['value'];
            case docLexer::T_TRUE:
                $this->match(docLexer::T_TRUE);
                return true;
            case docLexer::T_FALSE:
                $this->match(docLexer::T_FALSE);
                return false;
            case docLexer::T_NULL:
                $this->match(docLexer::T_NULL);
                return null;
            default:
                throw $this->syntaxError('PlainValue');
        }
    }

    private function Arrayx(): array
    {
        $array = $values = [];
        $this->match(docLexer::T_OPEN_CURLY_BRACES);
        if ($this->lexer->isNextToken(docLexer::T_CLOSE_CURLY_BRACES)) {
            $this->match(docLexer::T_CLOSE_CURLY_BRACES);
            return $array;
        }
        $values[] = $this->ArrayEntry();
        while ($this->lexer->isNextToken(docLexer::T_COMMA)) {
            $this->match(docLexer::T_COMMA);
            if ($this->lexer->isNextToken(docLexer::T_CLOSE_CURLY_BRACES)) {
                break;
            }
            $values[] = $this->ArrayEntry();
        }
        $this->match(docLexer::T_CLOSE_CURLY_BRACES);
        foreach ($values as $value) {
            [$key, $val] = $value;
            if ($key !== null) {
                $array[$key] = $val;
            } else {
                $array[] = $val;
            }
        }
        return $array;
    }

    private function ArrayEntry(): array
    {
        $peek = $this->lexer->glimpse();
        if ($peek['type'] === docLexer::T_EQUALS || $peek['type'] === docLexer::T_COLON) {
            if ($this->lexer->isNextToken(docLexer::T_IDENTIFIER)) {
                $key = $this->Constant();
            } else {
                $this->matchAny([docLexer::T_INTEGER, docLexer::T_STRING]);
                $key = $this->lexer->token['value'];
            }
            $this->matchAny([docLexer::T_EQUALS, docLexer::T_COLON]);
            return [$key, $this->PlainValue()];
        }
        return [null, $this->Value()];
    }

    private function Constant()
    {
        $identifier = $this->Identifier();
        if (!defined($identifier) && strpos($identifier, '::') !== false && $identifier[0] !== '\\') {
            [$className, $const] = explode('::', $identifier);
            $pos = strpos($className, '\\');
            $alias = ($pos === false) ? $className : substr($className, 0, $pos);
            $found = false;
            $loweredAlias = strtolower($alias);
            switch (true) {
                case!empty($this->namespaces):
                    foreach ($this->namespaces as $ns) {
                        if (class_exists($ns . '\\' . $className) || interface_exists($ns . '\\' . $className)) {
                            $className = $ns . '\\' . $className;
                            $found = true;
                            break;
                        }
                    }
                    break;
                case isset($this->imports[$loweredAlias]):
                    $found = true;
                    $className = ($pos !== false) ? $this->imports[$loweredAlias] . substr($className, $pos) : $this->imports[$loweredAlias];
                    break;
                default:
                    if (isset($this->imports['__NAMESPACE__'])) {
                        $ns = $this->imports['__NAMESPACE__'];
                        if (class_exists($ns . '\\' . $className) || interface_exists($ns . '\\' . $className)) {
                            $className = $ns . '\\' . $className;
                            $found = true;
                        }
                    }
                    break;
            }
            if ($found) {
                $identifier = $className . '::' . $const;
            }
        }
        if ($this->identifierEndsWithClassConstant($identifier) && !$this->identifierStartsWithBackslash($identifier)) {
            return substr($identifier, 0, $this->getClassConstantPositionInIdentifier($identifier));
        }
        if ($this->identifierEndsWithClassConstant($identifier) && $this->identifierStartsWithBackslash($identifier)) {
            return substr($identifier, 1, $this->getClassConstantPositionInIdentifier($identifier) - 1);
        }
        if (!defined($identifier)) {
            throw annotationException::semanticalErrorConstants($identifier, $this->context);
        }
        return constant($identifier);
    }

    private function identifierEndsWithClassConstant(string $identifier): bool
    {
        return $this->getClassConstantPositionInIdentifier($identifier) === strlen($identifier) - strlen('::class');
    }

    private function getClassConstantPositionInIdentifier(string $identifier)
    {
        return stripos($identifier, '::class');
    }

    private function identifierStartsWithBackslash(string $identifier): bool
    {
        return $identifier[0] === '\\';
    }

    private function resolvePositionalValues(array $arguments, string $name): array
    {
        $positionalArguments = $arguments['positional_arguments'] ?? [];
        $values = $arguments['named_arguments'] ?? [];
        if (self::$annotationMetadata[$name]['has_named_argument_constructor'] && self::$annotationMetadata[$name]['default_property'] !== null) {
            $positions = array_keys($positionalArguments);
            $lastPosition = null;
            foreach ($positions as $position) {
                if (($lastPosition === null && $position !== 0) || ($lastPosition !== null && $position !== $lastPosition + 1)) {
                    throw $this->syntaxError('Positional arguments after named arguments is not allowed');
                }
                $lastPosition = $position;
            }
            foreach (self::$annotationMetadata[$name]['constructor_args'] as $property => $parameter) {
                $position = $parameter['position'];
                if (isset($values[$property]) || !isset($positionalArguments[$position])) {
                    continue;
                }
                $values[$property] = $positionalArguments[$position];
            }
        } else {
            if (count($positionalArguments) > 0 && !isset($values['value'])) {
                if (count($positionalArguments) === 1) {
                    $value = array_pop($positionalArguments);
                } else {
                    $value = array_values($positionalArguments);
                }
                $values['value'] = $value;
            }
        }
        return $values;
    }

    private function instantiateAnnotiation(string $originalName, string $context, string $name, array $arguments)
    {
        try {
            return new $name(...$arguments);
        } catch (Throwable $exception) {
            throw annotationException::creationError(sprintf('An error occurred while instantiating the annotation @%s declared on %s: "%s".', $originalName, $context, $exception->getMessage()), $exception);
        }
    }

    private function collectAttributeTypeMetadata(array &$metadata, attribute $attribute): void
    {
        $type = self::$typeMap[$attribute->type] ?? $attribute->type;
        if ($type === 'mixed') {
            return;
        }
        $pos = strpos($type, '<');
        if ($pos !== false) {
            $arrayType = substr($type, $pos + 1, -1);
            $type = 'array';
            if (isset(self::$typeMap[$arrayType])) {
                $arrayType = self::$typeMap[$arrayType];
            }
            $metadata['attribute_types'][$attribute->name]['array_type'] = $arrayType;
        } else {
            $pos = strrpos($type, '[');
            if ($pos !== false) {
                $arrayType = substr($type, 0, $pos);
                $type = 'array';
                if (isset(self::$typeMap[$arrayType])) {
                    $arrayType = self::$typeMap[$arrayType];
                }
                $metadata['attribute_types'][$attribute->name]['array_type'] = $arrayType;
            }
        }
        $metadata['attribute_types'][$attribute->name]['type'] = $type;
        $metadata['attribute_types'][$attribute->name]['value'] = $attribute->type;
        $metadata['attribute_types'][$attribute->name]['required'] = $attribute->required;
    }
}
