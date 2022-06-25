***

# Constant





* Full name: `\Zend\Config\Processor\Constant`
* Parent class: [`\Zend\Config\Processor\Token`](./Token.md)
* This class implements:
[`\Zend\Config\Processor\ProcessorInterface`](./ProcessorInterface.md)



## Properties


### userOnly

Replace only user-defined tokens

```php
protected bool $userOnly
```






***

## Methods


### __construct

Constant Processor walks through a Config structure and replaces all
PHP constants with their respective values

```php
public __construct(bool $userOnly = true, string $prefix = &#039;&#039;, string $suffix = &#039;&#039;): \Zend\Config\Processor\Constant
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$userOnly` | **bool** | True to process only user-defined constants, false to process all PHP constants |
| `$prefix` | **string** | Optional prefix |
| `$suffix` | **string** | Optional suffix |




***

### getUserOnly



```php
public getUserOnly(): bool
```











***

### setUserOnly

Should we use only user-defined constants?

```php
public setUserOnly(bool $userOnly): \Zend\Config\Processor\Constant
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$userOnly` | **bool** |  |




***

### loadConstants

Load all currently defined constants into parser.

```php
public loadConstants(): void
```











***

### getTokens

Get current token registry.

```php
public getTokens(): array
```











***


## Inherited methods


### __construct

Token Processor walks through a Config structure and replaces all
occurrences of tokens with supplied values.

```php
public __construct(array|\Zend\Config\Config|\Traversable $tokens = array(), string $prefix = &#039;&#039;, string $suffix = &#039;&#039;): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array&#124;\Zend\Config\Config&#124;\Traversable** | Associative array of TOKEN =&gt; value<br />to replace it with |
| `$prefix` | **string** |  |
| `$suffix` | **string** |  |




***

### setPrefix



```php
public setPrefix(string $prefix): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |




***

### getPrefix



```php
public getPrefix(): string
```











***

### setSuffix



```php
public setSuffix(string $suffix): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |




***

### getSuffix



```php
public getSuffix(): string
```











***

### setTokens

Set token registry.

```php
public setTokens(array|\Zend\Config\Config|\Traversable $tokens): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array&#124;\Zend\Config\Config&#124;\Traversable** | Associative array of TOKEN =&gt; value<br />to replace it with |




***

### getTokens

Get current token registry.

```php
public getTokens(): array
```











***

### addToken

Add new token.

```php
public addToken(string $token, mixed $value): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |
| `$value` | **mixed** |  |




***

### setToken

Add new token.

```php
public setToken(string $token, mixed $value): \Zend\Config\Processor\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$token` | **string** |  |
| `$value` | **mixed** |  |




***

### buildMap

Build replacement map

```php
protected buildMap(): array
```











***

### process

Process

```php
public process(\Zend\Config\Config $config): \Zend\Config\Config
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Zend\Config\Config** |  |




***

### processValue

Process a single value

```php
public processValue(mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### doProcess

Applies replacement map to the given value by modifying the value itself

```php
private doProcess(mixed $value, array $replacements): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |
| `$replacements` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
