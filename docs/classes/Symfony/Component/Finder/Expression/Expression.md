***

# Expression





* Full name: `\Symfony\Component\Finder\Expression\Expression`
* This class implements:
[`\Symfony\Component\Finder\Expression\ValueInterface`](./ValueInterface.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TYPE_REGEX`|public| |1|
|`TYPE_GLOB`|public| |2|

## Properties


### value



```php
private \Symfony\Component\Finder\Expression\ValueInterface $value
```






***

## Methods


### create



```php
public static create(string $expr): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **string** |  |




***

### __construct



```php
public __construct(string $expr): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **string** |  |




***

### __toString



```php
public __toString(): string
```











***

### render

Renders string representation of expression.

```php
public render(): string
```











***

### renderPattern

Renders string representation of pattern.

```php
public renderPattern(): string
```











***

### isCaseSensitive

Returns value case sensitivity.

```php
public isCaseSensitive(): bool
```











***

### getType

Returns expression type.

```php
public getType(): int
```











***

### prepend



```php
public prepend(mixed $expr): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |




***

### append



```php
public append(mixed $expr): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |




***

### isRegex



```php
public isRegex(): bool
```











***

### isGlob



```php
public isGlob(): bool
```











***

### getGlob



```php
public getGlob(): \Symfony\Component\Finder\Expression\Glob
```











***

### getRegex



```php
public getRegex(): \Symfony\Component\Finder\Expression\Regex
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
