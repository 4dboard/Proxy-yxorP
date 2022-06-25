***

# YamlFileLoader

Loads validation metadata from a YAML file.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\YamlFileLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\FileLoader`](./FileLoader.md)



## Properties


### classes

An array of YAML class descriptions.

```php
protected array $classes
```






***

### yamlParser

Caches the used YAML parser.

```php
private \Symfony\Component\Yaml\Parser $yamlParser
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

### parseNodes

Parses a collection of YAML nodes.

```php
protected parseNodes(array $nodes): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nodes` | **array** | The YAML nodes |


**Return Value:**

An array of values or Constraint instances



***

### parseFile

Loads the YAML class descriptions from the given file.

```php
private parseFile(string $path): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | The path of the YAML file |


**Return Value:**

The class descriptions



***

### loadClassMetadataFromYaml

Loads the validation metadata from the given YAML class description.

```php
private loadClassMetadataFromYaml(\Symfony\Component\Validator\Mapping\ClassMetadata $metadata, array $classDescription): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metadata` | **\Symfony\Component\Validator\Mapping\ClassMetadata** | The metadata to load |
| `$classDescription` | **array** | The YAML class description |




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

The namespace alias can be used to reference constraints from specific
namespaces in {@link}:

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
| `$name` | **string** | The constraint name. Either a constraint relative<br />to the default constraint namespace, or a fully<br />qualified class name. Alternatively, the constraint<br />may be preceded by a namespace alias and a colon.<br />The namespace alias must have been defined using<br />{@link}. |
| `$options` | **mixed** | The constraint options |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
