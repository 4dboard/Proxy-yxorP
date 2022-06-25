***

# SeeDescriptor

Base class for any tag descriptor and used when a tag has no specific descriptor.

* Full name: `\phpDocumentor\Descriptor\Tag\SeeDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../TagDescriptor.md)

## Properties

### reference

```php
protected \phpDocumentor\Descriptor\DescriptorAbstract|string $reference
```

***

## Methods

### setReference

```php
public setReference(\phpDocumentor\Descriptor\DescriptorAbstract|string $reference): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$reference` | **\phpDocumentor\Descriptor\DescriptorAbstract&#124;string** |  |

***

### getReference

```php
public getReference(): \phpDocumentor\Descriptor\DescriptorAbstract|string
```

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

yxorP::get('REQUEST')
