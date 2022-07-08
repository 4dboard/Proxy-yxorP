***

# Stacktrace





* Full name: `\yxorP\snag\Stacktrace`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NUM_LINES`|public| |7|
|`MAX_LENGTH`|public| |200|

## Properties


### config



```php
private \yxorP\snag\Configuration $config
```






***

### frames



```php
private array $frames
```






***

## Methods


### __construct



```php
public __construct(\yxorP\snag\Configuration $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |




***

### generate



```php
public static generate(\yxorP\snag\Configuration $config): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |




***

### fromBacktrace



```php
public static fromBacktrace(\yxorP\snag\Configuration $config, array $backtrace, mixed $topFile, mixed $topLine): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$backtrace` | **array** |  |
| `$topFile` | **mixed** |  |
| `$topLine` | **mixed** |  |




***

### frameInsideSnag



```php
public static frameInsideSnag(array $frame): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$frame` | **array** |  |




***

### addFrame



```php
public addFrame(mixed $file, mixed $line, mixed $method, mixed $class = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |
| `$method` | **mixed** |  |
| `$class` | **mixed** |  |




***

### getCode



```php
protected getCode(mixed $path, mixed $line, mixed $numLines): ?array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$line` | **mixed** |  |
| `$numLines` | **mixed** |  |




***

### getBounds



```php
protected static getBounds(mixed $line, mixed $num, mixed $max): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$line` | **mixed** |  |
| `$num` | **mixed** |  |
| `$max` | **mixed** |  |




***

### fromFrame



```php
public static fromFrame(\yxorP\snag\Configuration $config, mixed $file, mixed $line): static
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\yxorP\snag\Configuration** |  |
| `$file` | **mixed** |  |
| `$line` | **mixed** |  |




***

### toArray



```php
public toArray(): array
```











***

### getFrames



```php
public getFrames(): array
```











***

### removeFrame



```php
public removeFrame(mixed $index): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
