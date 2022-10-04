***

# Generator

OpenApi spec generator.

Scans PHP source code and generates OpenApi specifications from the found OpenApi annotations.

This is an object oriented alternative to using the now deprecated `\OpenApi\scan()` function and
static class properties of the `Analyzer` and `Analysis` classes.

The `aliases` property supersedes the `Analyser::$defaultImports`; `namespaces` maps to `Analysis::$whitelist`.

* Full name: `\OpenApi\Generator`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`UNDEFINED`|public|string|&#039;@OA\\Generator::UNDEFINED🙈&#039;|

## Properties

### aliases

```php
protected array $aliases
```

***

### namespaces

```php
protected array $namespaces
```

***

### analyser

```php
protected \OpenApi\StaticAnalyser $analyser
```

***

### processors

```php
protected null|callable[] $processors
```

***

### logger

```php
protected null|\Psr\Log\LoggerInterface $logger
```

***

### configStack

```php
private $configStack
```

***

## Methods

### __construct

```php
public __construct(?\Psr\Log\LoggerInterface $logger = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **?\Psr\Log\LoggerInterface** |  |

***

### getAliases

```php
public getAliases(): array
```

***

### setAliases

```php
public setAliases(?array $aliases): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$aliases` | **?array** |  |

***

### getNamespaces

```php
public getNamespaces(): array
```

***

### setNamespaces

```php
public setNamespaces(?array $namespaces): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaces` | **?array** |  |

***

### getAnalyser

```php
public getAnalyser(): \OpenApi\StaticAnalyser
```

***

### setAnalyser

```php
public setAnalyser(?\OpenApi\StaticAnalyser $analyser): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analyser` | **?\OpenApi\StaticAnalyser** |  |

***

### getProcessors

```php
public getProcessors(): callable[]
```

***

### setProcessors

```php
public setProcessors(null|callable[] $processors): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processors` | **null&#124;callable[]** |  |

***

### addProcessor

```php
public addProcessor(callable $processor): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **callable** |  |

***

### removeProcessor

```php
public removeProcessor(callable $processor, bool $silent = false): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **callable** |  |
| `$silent` | **bool** |  |

***

### updateProcessor

Update/replace an existing processor with a new one.

```php
public updateProcessor(callable $processor, null|callable $matcher = null): \OpenApi\Generator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$processor` | **callable** | the new processor |
| `$matcher` | **null&#124;callable** | Optional matcher callable to identify the processor to replace.<br />If none given, matching is based on the processors class. |

***

### getLogger

```php
public getLogger(): ?\Psr\Log\LoggerInterface
```

***

### scan

Static wrapper around `Generator::generate()`.

```php
public static scan(iterable $sources, array $options = []): \OpenApi\Annotations\OpenApi
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sources` | **iterable** | PHP source files to scan.<br />Supported sources:<br />* string<br />* \SplFileInfo<br />* \Symfony\Component\Finder\Finder |
| `$options` | **array** | aliases:    null&amp;#124;array                    Defaults to `Analyser::$defaultImports`.<br />namespaces: null&amp;#124;array                    Defaults to `Analyser::$whitelist`.<br />analyser:   null&amp;#124;StaticAnalyser           Defaults to a new `StaticAnalyser`.<br />analysis:   null&amp;#124;Analysis                 Defaults to a new `Analysis`.<br />processors: null&amp;#124;array                    Defaults to `Analysis::processors()`.<br />logger:     null&amp;#124;\Psr\Log\LoggerInterface If not set logging will use \OpenApi\Logger as before.<br />validate:   bool                          Defaults to `true`. |

***

### generate

Generate OpenAPI spec by scanning the given source files.

```php
public generate(iterable $sources, null|\OpenApi\Analysis $analysis = null, bool $validate = true): \OpenApi\Annotations\OpenApi
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sources` | **iterable** | PHP source files to scan.<br />Supported sources:<br />* string - file / directory name<br />* \SplFileInfo<br />* \Symfony\Component\Finder\Finder |
| `$analysis` | **null&#124;\OpenApi\Analysis** | custom analysis instance |
| `$validate` | **bool** | flag to enable/disable validation of the returned spec |

***

### scanSources

```php
protected scanSources(iterable $sources, \OpenApi\Analysis $analysis, \OpenApi\Context $rootContext): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sources` | **iterable** |  |
| `$analysis` | **\OpenApi\Analysis** |  |
| `$rootContext` | **\OpenApi\Context** |  |

***


***

