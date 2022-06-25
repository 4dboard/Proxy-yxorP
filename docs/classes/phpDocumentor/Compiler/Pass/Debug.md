***

# Debug

This class is responsible for sending statistical information to the log.

For debugging purposes it can be convenient to send statistical information about the ProjectDescriptor to the log of
phpDocumentor.

* Full name: `\phpDocumentor\Compiler\Pass\Debug`
* This class implements:
  [`\phpDocumentor\Compiler\CompilerPassInterface`](../CompilerPassInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`COMPILER_PRIORITY`|public| |1000|

## Properties

### log

```php
protected \Psr\Log\LoggerInterface $log
```

***

### analyzer

```php
protected \phpDocumentor\Descriptor\ProjectAnalyzer $analyzer
```

***

## Methods

### __construct

Registers the logger with this Compiler Pass.

```php
public __construct(\Psr\Log\LoggerInterface $log, \phpDocumentor\Descriptor\ProjectAnalyzer $analyzer): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$log` | **\Psr\Log\LoggerInterface** |  |
| `$analyzer` | **\phpDocumentor\Descriptor\ProjectAnalyzer** |  |

***

### getDescription

Returns a textual description of what this pass does for output purposes.

```php
public getDescription(): string
```

***

### execute

Analyzes the given project and returns the results to the logger.

```php
public execute(\phpDocumentor\Descriptor\ProjectDescriptor $project): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project` | **\phpDocumentor\Descriptor\ProjectDescriptor** |  |

yxorP::get('REQUEST')
