***

# UsesDescriptor

Descriptor representing the uses tag on any element.



* Full name: `\phpDocumentor\Descriptor\Tag\UsesDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../TagDescriptor.md)



## Properties


### reference



```php
protected string $reference
```






***

## Methods


### getReference

Returns the FQSEN to which this tag points.

```php
public getReference(): string
```











***

### setReference

Sets the FQSEN to which this tag points.

```php
public setReference(string $reference): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **string** |  |




***


## Inherited methods


### __construct

Initializes the tag by setting the name and errors,

```php
public __construct(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### setName

Sets the name for this tag.

```php
protected setName(string $name): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### getName

Returns the name for this tag.

```php
public getName(): string
```











***

### setDescription

Sets a description for this tab instance.

```php
public setDescription(string $description): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** |  |




***

### getDescription

Returns the description for this tag,

```php
public getDescription(): string
```











***

### setErrors

Sets a list of errors found on the usage of this tag.

```php
public setErrors(\phpDocumentor\Descriptor\Collection $errors): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errors` | **\phpDocumentor\Descriptor\Collection** |  |




***

### getErrors

Returns all errors associated with this tag.

```php
public getErrors(): \phpDocumentor\Descriptor\Collection
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
