***

# DeprecatedDescriptor

Descriptor representing the deprecated tag with a descriptor.

* Full name: `\phpDocumentor\Descriptor\Tag\DeprecatedDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../TagDescriptor.md)

## Properties

### version

```php
protected string $version
```

***

## Methods

### getVersion

Returns the version since when the associated element was deprecated.

```php
public getVersion(): string
```

***

### setVersion

Sets the version since when the associated element was deprecated.

```php
public setVersion(string $version): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** |  |

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
