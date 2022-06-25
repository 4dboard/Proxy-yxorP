***

# TypedAbstract

Base descriptor for tags that have a type associated with them.

* Full name: `\phpDocumentor\Descriptor\Tag\BaseTypes\TypedAbstract`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../../TagDescriptor.md)
* This class is an **Abstract class**

## Properties

### types

```php
protected \phpDocumentor\Descriptor\Collection $types
```

***

## Methods

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
