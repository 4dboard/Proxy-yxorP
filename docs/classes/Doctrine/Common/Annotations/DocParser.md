***

# DocParser

A parser for docblock annotations.

It is strongly discouraged to change the default annotation parsing process.

* Full name: `\Doctrine\Common\Annotations\DocParser`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### classIdentifiers

An array of all valid tokens for a class name.

```php
private static $classIdentifiers
```

* This property is **static**.

***

### lexer

The lexer.

```php
private \Doctrine\Common\Annotations\DocLexer $lexer
```

***

### target

Current target context.

```php
private int $target
```

***

### metadataParser

Doc parser used to collect annotation target.

```php
private static \Doctrine\Common\Annotations\DocParser $metadataParser
```

* This property is **static**.

***

### isNestedAnnotation

Flag to control if the current annotation is nested or not.

```php
private bool $isNestedAnnotation
```

***

### imports

Hashmap containing all use-statements that are to be used when parsing the given doc block.

```php
private array&lt;string,class-string&gt; $imports
```

***

### classExists

This hashmap is used internally to cache results of class_exists()
look-ups.

```php
private array&lt;class-string,bool&gt; $classExists
```

***

### ignoreNotImportedAnnotations

Whether annotations that have not been imported should be ignored.

```php
private bool $ignoreNotImportedAnnotations
```

***

### namespaces

An array of default namespaces if operating in simple mode.

```php
private string[] $namespaces
```

***

### ignoredAnnotationNames

A list with annotations that are not causing exceptions when not resolved to an annotation class.

```php
private bool[] $ignoredAnnotationNames
```

The names must be the raw names as used in the class, not the fully qualified




***

### ignoredAnnotationNamespaces

A list with annotations in namespaced format that are not causing exceptions when not resolved to an annotation class.

```php
private bool[] $ignoredAnnotationNamespaces
```

***

### context

```php
private string $context
```

***

### annotationMetadata

Hash-map for caching annotation metadata.

```php
private static array&lt;class-string,array&gt; $annotationMetadata
```

* This property is **static**.

***

### typeMap

Hash-map for handle types declaration.

```php
private static array&lt;string,string&gt; $typeMap
```

* This property is **static**.

***

## Methods

### __construct

Constructs a new DocParser.

```php
public __construct(): mixed
```

***

### setIgnoredAnnotationNames

Sets the annotation names that are ignored during the parsing process.

```php
public setIgnoredAnnotationNames(bool[] $names): void
```

The names are supposed to be the raw names as used in the class, not the fully qualified class names.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$names` | **bool[]** | indexed by annotation name |

***

### setIgnoredAnnotationNamespaces

Sets the annotation namespaces that are ignored during the parsing process.

```php
public setIgnoredAnnotationNamespaces(bool[] $ignoredAnnotationNamespaces): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoredAnnotationNamespaces` | **bool[]** | indexed by annotation namespace name |

***

### setIgnoreNotImportedAnnotations

Sets ignore on not-imported annotations.

```php
public setIgnoreNotImportedAnnotations(bool $bool): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bool` | **bool** |  |

***

### addNamespace

Sets the default namespaces.

```php
public addNamespace(string $namespace): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### setImports

Sets the imports.

```php
public setImports(array&lt;string,class-string&gt; $imports): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$imports` | **array<string,class-string>** |  |

***

### setTarget

Sets current target context as bitmask.

```php
public setTarget(int $target): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **int** |  |

***

### parse

Parses the given docblock string for annotations.

```php
public parse(string $input, string $context = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | The docblock string to parse. |
| `$context` | **string** | The parsing context. |

***

### findInitialTokenPosition

Finds the first valid annotation

```php
private findInitialTokenPosition(string $input): ?int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | The docblock string to parse |

***

### match

Attempts to match the given token with the current lookahead token.

```php
private match(int $token): bool
```

If they match, updates the lookahead token; otherwise raises a syntax error.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **int** | Type of token. |

**Return Value:**

True if tokens match; false otherwise.



***

### matchAny

Attempts to match the current lookahead token with any of the given tokens.

```php
private matchAny(array $tokens): bool
```

If any of them matches, this method updates the lookahead token; otherwise a syntax error is raised.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |

***

### syntaxError

Generates a new syntax error.

```php
private syntaxError(string $expected, array|null $token = null): \Doctrine\Common\Annotations\AnnotationException
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expected` | **string** | Expected string. |
| `$token` | **array&#124;null** | Optional token. |

***

### classExists

Attempts to check if a class exists or not. This never goes through the PHP autoloading mechanism but uses the {@link
AnnotationRegistry} to load classes.

```php
private classExists(class-string $fqcn): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **class-string** |  |

***

### collectAnnotationMetadata

Collects parsing metadata for a given annotation class

```php
private collectAnnotationMetadata(class-string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **class-string** | The annotation name |

***

### collectAttributeTypeMetadata

Collects parsing metadata for a given attribute.

```php
private collectAttributeTypeMetadata(array& $metadata, \Doctrine\Common\Annotations\Annotation\Attribute $attribute): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **array** |  |
| `$attribute` | **\Doctrine\Common\Annotations\Annotation\Attribute** |  |

***

### Annotations

Annotations ::= Annotation {[ "*" ]* [Annotation]}*

```php
private Annotations(): array
```

***

### Annotation

Annotation     ::= "@" AnnotationName MethodCall AnnotationName ::= QualifiedName | SimpleName QualifiedName  ::=
NameSpacePart "\" {NameSpacePart "\"}* SimpleName NameSpacePart  ::= identifier | null | false | true SimpleName     ::=
identifier | null | false | true

```php
private Annotation(): object|false
```

**Return Value:**

False if it is not a valid annotation.



***

### MethodCall

MethodCall ::= ["(" [Values] ")"]

```php
private MethodCall(): array
```

***

### Values

Values ::= Array | Value {"," Value}* [","]

```php
private Values(): array
```

***

### Constant

Constant ::= integer | string | float | boolean

```php
private Constant(): mixed
```

***

### identifierStartsWithBackslash

```php
private identifierStartsWithBackslash(string $identifier): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |

***

### identifierEndsWithClassConstant

```php
private identifierEndsWithClassConstant(string $identifier): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |

***

### getClassConstantPositionInIdentifier

```php
private getClassConstantPositionInIdentifier(string $identifier): int|false
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |

***

### Identifier

Identifier ::= string

```php
private Identifier(): string
```

***

### Value

Value ::= PlainValue | FieldAssignment

```php
private Value(): mixed
```

***

### PlainValue

PlainValue ::= integer | string | float | boolean | Array | Annotation

```php
private PlainValue(): mixed
```

***

### FieldAssignment

FieldAssignment ::= FieldName "=" PlainValue FieldName ::= identifier

```php
private FieldAssignment(): \stdClass
```

***

### Arrayx

Array ::= "{" ArrayEntry {"," ArrayEntry}* [","] "}"

```php
private Arrayx(): array
```

***

### ArrayEntry

ArrayEntry ::= Value | KeyValuePair KeyValuePair ::= Key ("=" | ":") PlainValue | Constant Key ::= string | integer |
Constant

```php
private ArrayEntry(): array
```

***

### isIgnoredAnnotation

Checks whether the given $name matches any ignored annotation name or namespace

```php
private isIgnoredAnnotation(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### resolvePositionalValues

Resolve positional arguments (without name) to named ones

```php
private resolvePositionalValues(array&lt;string,mixed&gt; $arguments, string $name): array&lt;string,mixed&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **array<string,mixed>** |  |
| `$name` | **string** |  |

yxorP::get('REQUEST')
