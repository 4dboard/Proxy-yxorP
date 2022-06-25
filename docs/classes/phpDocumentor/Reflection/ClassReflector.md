***

# ClassReflector

Provides static reflection for a class.

* Full name: `\phpDocumentor\Reflection\ClassReflector`
* Parent class: [`\phpDocumentor\Reflection\InterfaceReflector`](./InterfaceReflector.md)

**See Also:**

* http://phpdoc.org -

## Properties

### node

```php
protected \PhpParser\Node\Stmt\Class_ $node
```

***

### traits

```php
protected string[] $traits
```

***

## Methods

### parseSubElements

```php
public parseSubElements(): mixed
```

***

### isAbstract

Returns whether this is an abstract class.

```php
public isAbstract(): bool
```

***

### isFinal

Returns whether this class is final and thus cannot be extended.

```php
public isFinal(): bool
```

***

### getTraits

Returns a list of the names of traits used in this class.

```php
public getTraits(): string[]
```

***

### getParentClass

```php
public getParentClass(): mixed
```

***

### getInterfaces

BC Break: used to be getParentInterfaces

```php
public getInterfaces(): string[]
```

**Return Value:**

Names of interfaces the class implements.



***

## Inherited methods

### parseSubElements

```php
public parseSubElements(): mixed
```

***

### getParentInterfaces

```php
public getParentInterfaces(): mixed
```

***

### getConstants

```php
public getConstants(): \phpDocumentor\Reflection\ClassReflector\ConstantReflector[]
```

***

### getProperties

```php
public getProperties(): \phpDocumentor\Reflection\ClassReflector\PropertyReflector[]
```

***

### getMethods

```php
public getMethods(): \phpDocumentor\Reflection\ClassReflector\MethodReflector[]
```

***

### getMethod

```php
public getMethod(string $name): \phpDocumentor\Reflection\ClassReflector\MethodReflector|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | the method name |

***

### __construct

Initializes this reflector with the correct node as produced by PHP-Parser.

```php
public __construct(\PhpParser\NodeAbstract $node, \phpDocumentor\Reflection\DocBlock\Context $context): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\PhpParser\NodeAbstract** |  |
| `$context` | **\phpDocumentor\Reflection\DocBlock\Context** |  |

**See Also:**

* http://github.com/nikic/PHP-Parser -

***

### getNode

Returns the current PHP-Parser node that holds more detailed information about the reflected object. e.g. position in
the file and further attributes.

```php
public getNode(): \PhpParser\Node\Stmt|\PhpParser\NodeAbstract
```

***

### setNamespace

Sets the name for the namespace.

```php
public setNamespace(string $namespace): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |

***

### getDocBlock

Returns the parsed DocBlock.

```php
public getDocBlock(): \phpDocumentor\Reflection\DocBlock|null
```

***

### extractDocBlock

Extracts a parsed DocBlock from an object.

```php
protected extractDocBlock(object $node): \phpDocumentor\Reflection\DocBlock|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **object** | Any object with a &quot;getDocComment()&quot; method. |

***

### getName

Returns the name for this Reflector instance.

```php
public getName(): string
```

***

### getShortName

Returns the last component of a namespaced name as a short form.

```php
public getShortName(): string
```

***

### getLSEN

Gets the LSEN.

```php
public getLSEN(): string
```

Returns this element's Local Structural Element Name (LSEN). This name consistents of the element's short name, along
with punctuation that hints at the kind of structural element. If the structural element is part of a type (i.e. an
interface/trait/class' property/method/constant), it also contains the name of the owning type.









***

### getNamespace

Returns the namespace name for this object.

```php
public getNamespace(): string
```

If this object does not have a namespace then the word 'global' is returned to indicate a global namespace.









***

### getNamespaceAliases

Returns a listing of namespace aliases where the key represents the alias and the value the Fully Qualified Namespace
Name.

```php
public getNamespaceAliases(): string[]
```

***

### setNamespaceAliases

Sets a listing of namespace aliases.

```php
public setNamespaceAliases(string[] $aliases): void
```

The keys represents the alias name and the value the Fully Qualified Namespace Name (FQNN).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aliases` | **string[]** |  |

***

### setNamespaceAlias

Sets the Fully Qualified Namespace Name (FQNN) for an alias.

```php
public setNamespaceAlias(string $alias, string $fqnn): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** |  |
| `$fqnn` | **string** |  |

***

### getLinenumber

Returns the line number where this object starts.

```php
public getLinenumber(): int
```

***

### setDefaultPackageName

Sets the default package name for this object.

```php
public setDefaultPackageName(string $default_package_name): void
```

If the DocBlock contains a different package name then that overrides this package name.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default_package_name` | **string** | The name of the package as defined<br />in the PHPDoc Standard. |

***

### getDefaultPackageName

Returns the package name that is default for this element.

```php
public getDefaultPackageName(): string
```

This value may change after the DocBlock is interpreted. If that contains a package tag then that tag overrides the
Default package name.









***

### getRepresentationOfValue

Returns a simple human readable output for a value.

```php
protected getRepresentationOfValue(\PhpParser\Node\Expr $value = null): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\PhpParser\Node\Expr** | The value node as provided by<br />PHP-Parser. |

***

### log

Dispatches a logging request.

```php
public log(string $message, int $priority = 6): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |
| `$priority` | **int** | The logging priority, the lower,<br />the more important. Ranges from 1 to 7 |

***

### debug

Dispatches a logging request to log a debug message.

```php
public debug(string $message): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | The message to log. |

yxorP::get('REQUEST')
