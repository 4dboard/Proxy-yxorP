***

# TypedVariableAbstract

Abstract class for Descriptors with a type and variable name.



* Full name: `\phpDocumentor\Descriptor\Tag\BaseTypes\TypedVariableAbstract`
* Parent class: [`\phpDocumentor\Descriptor\Tag\BaseTypes\TypedAbstract`](./TypedAbstract.md)
* This class is an **Abstract class**



## Properties


### variableName



```php
protected string $variableName
```






***

## Methods


### getVariableName

Retrieves the variable name stored on this descriptor.

```php
public getVariableName(): string
```











***

### setVariableName

Sets the variable name on this descriptor.

```php
public setVariableName(string $variableName): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$variableName` | **string** |  |




***


## Inherited methods


### setTypes

Sets a list of types associated with this tag.

```php
public setTypes(\phpDocumentor\Descriptor\Collection $types): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **\phpDocumentor\Descriptor\Collection** |  |




***

### getTypes

Returns the list of types associated with this tag.

```php
public getTypes(): \phpDocumentor\Descriptor\Collection
```











***

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
