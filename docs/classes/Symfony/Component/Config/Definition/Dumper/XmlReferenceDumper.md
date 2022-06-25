***

# XmlReferenceDumper

Dumps a XML reference configuration for the given configuration/node instance.



* Full name: `\Symfony\Component\Config\Definition\Dumper\XmlReferenceDumper`



## Properties


### reference



```php
private $reference
```






***

## Methods


### dump



```php
public dump(\Symfony\Component\Config\Definition\ConfigurationInterface $configuration, mixed $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\Symfony\Component\Config\Definition\ConfigurationInterface** |  |
| `$namespace` | **mixed** |  |




***

### dumpNode



```php
public dumpNode(\Symfony\Component\Config\Definition\NodeInterface $node, mixed $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |
| `$namespace` | **mixed** |  |




***

### writeNode



```php
private writeNode(\Symfony\Component\Config\Definition\NodeInterface $node, int $depth, bool $root = false, string $namespace = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |
| `$depth` | **int** |  |
| `$root` | **bool** | If the node is the root node |
| `$namespace` | **string** | The namespace of the node |




***

### writeLine

Outputs a single config reference line.

```php
private writeLine(string $text, int $indent): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |
| `$indent` | **int** |  |




***

### writeValue

Renders the string conversion of the value.

```php
private writeValue(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
