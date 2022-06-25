***

# XmlFileLoader

Loads validation metadata from an XML file.

* Full name: `\Symfony\Component\Validator\Mapping\Loader\XmlFileLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\FileLoader`](./FileLoader.md)

## Properties

### classes

The XML nodes of the mapping file.

```php
protected \SimpleXMLElement[]|null $classes
```

***

## Methods

### loadClassMetadata

{@inheritdoc}

```php
public loadClassMetadata(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |

***

### parseConstraints

Parses a collection of "constraint" XML nodes.

```php
protected parseConstraints(\SimpleXMLElement $nodes): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\SimpleXMLElement** | The XML nodes |

**Return Value:**

The Constraint instances



***

### parseValues

Parses a collection of "value" XML nodes.

```php
protected parseValues(\SimpleXMLElement $nodes): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\SimpleXMLElement** | The XML nodes |

**Return Value:**

The values



***

### parseOptions

Parses a collection of "option" XML nodes.

```php
protected parseOptions(\SimpleXMLElement $nodes): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **\SimpleXMLElement** | The XML nodes |

**Return Value:**

The options



***

### parseFile

Loads the XML class descriptions from the given file.

```php
protected parseFile(string $path): \SimpleXMLElement
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the XML file |

**Return Value:**

The class descriptions



***

### loadClassMetadataFromXml

```php
private loadClassMetadataFromXml(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata, \SimpleXMLElement $classDescription): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** |  |
| `$classDescription` | **\SimpleXMLElement** |  |

***

## Inherited methods

### __construct

Creates a new loader.

```php
public __construct(string $file): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The mapping file to load |

***

### addNamespaceAlias

Adds a namespace alias.

```php
protected addNamespaceAlias(string $alias, string $namespace): mixed
```

The namespace alias can be used to reference constraints from specific namespaces in {@link}:

    $this->addNamespaceAlias('mynamespace', '\\Acme\\Package\\Constraints\\');

    $constraint = $this->newConstraint('mynamespace:NotNull');

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alias` | **string** | The alias |
| `$namespace` | **string** | The PHP namespace |

***

### newConstraint

Creates a new constraint instance for the given constraint name.

```php
protected newConstraint(string $name, mixed $options = null): \Symfony\Component\Validator\Constraint
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **
string** | The constraint name. Either a constraint relative<br />to the default constraint namespace, or a fully<br />qualified class name. Alternatively, the constraint<br />may be preceded by a namespace alias and a colon.<br />The namespace alias must have been defined using<br />{@link}. |
| `$options` | **mixed** | The constraint options |

yxorP::get('REQUEST')
