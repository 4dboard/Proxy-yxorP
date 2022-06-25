***

# Twig_Compiler

Compiles a node to PHP code.



* Full name: `\Twig_Compiler`
* Parent class: [`\Twig\Compiler`](./Twig/Compiler.md)






## Inherited methods


### __construct



```php
public __construct(\Twig\Environment $env): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$env` | **\Twig\Environment** |  |




***

### getFilename



```php
public getFilename(): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getEnvironment

Returns the environment instance related to this compiler.

```php
public getEnvironment(): \Twig\Environment
```











***

### getSource

Gets the current PHP code after compilation.

```php
public getSource(): string
```









**Return Value:**

The PHP code



***

### compile

Compiles a node.

```php
public compile(\Twig_NodeInterface $node, int $indentation): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$indentation` | **int** | The current indentation |




***

### subcompile



```php
public subcompile(\Twig_NodeInterface $node, mixed $raw = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |
| `$raw` | **mixed** |  |




***

### raw

Adds a raw string to the compiled code.

```php
public raw(string $string): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string |




***

### write

Writes a string to the compiled code by adding indentation.

```php
public write(): $this
```











***

### addIndentation

Appends an indentation to the current PHP code after compilation.

```php
public addIndentation(): $this
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### string

Adds a quoted string to the compiled code.

```php
public string(string $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** | The string |




***

### repr

Returns a PHP representation of a given value.

```php
public repr(mixed $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to convert |




***

### addDebugInfo

Adds debugging information.

```php
public addDebugInfo(\Twig_NodeInterface $node): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Twig_NodeInterface** |  |




***

### getDebugInfo



```php
public getDebugInfo(): mixed
```











***

### indent

Indents the generated code.

```php
public indent(int $step = 1): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | The number of indentation to add |




***

### outdent

Outdents the generated code.

```php
public outdent(int $step = 1): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$step` | **int** | The number of indentation to remove |




***

### getVarName



```php
public getVarName(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
