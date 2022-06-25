***

# Settings

Contains the Settings for the current Project.



* Full name: `\phpDocumentor\Descriptor\ProjectDescriptor\Settings`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VISIBILITY_PUBLIC`|public| |1|
|`VISIBILITY_PROTECTED`|public| |2|
|`VISIBILITY_PRIVATE`|public| |4|
|`VISIBILITY_INTERNAL`|public| |8|
|`VISIBILITY_DEFAULT`|public|int|7|

## Properties


### isModified



```php
protected bool $isModified
```






***

### visibility



```php
protected int $visibility
```






***

### includeSource



```php
protected bool $includeSource
```






***

## Methods


### setVisibility

Stores the visibilities that are allowed to be executed as a bitflag.

```php
public setVisibility(int $visibilityFlag): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$visibilityFlag` | **int** | A bitflag combining the VISIBILITY_* constants. |




***

### getVisibility

Returns the bit flag representing which visibilities are allowed.

```php
public getVisibility(): int
```










**See Also:**

* \phpDocumentor\Descriptor\ProjectDescriptor\self::isVisibilityAllowed() - for a convenience method to easily check against a specific visibility.

***

### isModified

Returns whether one of the values of this object was modified.

```php
public isModified(): bool
```











***

### clearModifiedFlag

Resets the flag indicating whether the settings have changed.

```php
public clearModifiedFlag(): void
```











***

### setValueAndCheckIfModified

Sets a property's value and if it differs from the previous then mark these settings as modified.

```php
protected setValueAndCheckIfModified(mixed $propertyName, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$propertyName` | **mixed** |  |
| `$value` | **mixed** |  |




***

### includeSource



```php
public includeSource(): mixed
```











***

### excludeSource



```php
public excludeSource(): mixed
```











***

### shouldIncludeSource



```php
public shouldIncludeSource(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
