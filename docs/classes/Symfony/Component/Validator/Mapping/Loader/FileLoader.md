***

# FileLoader

Base loader for loading validation metadata from a file.



* Full name: `\Symfony\Component\Validator\Mapping\Loader\FileLoader`
* Parent class: [`\Symfony\Component\Validator\Mapping\Loader\AbstractLoader`](./AbstractLoader.md)
* This class is an **Abstract class**

**See Also:**

* \Symfony\Component\Validator\Mapping\Loader\YamlFileLoader - 
* \Symfony\Component\Validator\Mapping\Loader\XmlFileLoader - 



## Properties


### file



```php
protected $file
```






***

## Methods


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


## Inherited methods


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
