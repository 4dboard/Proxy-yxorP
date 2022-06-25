***

# MethodDescriptor

Base class for any tag descriptor and used when a tag has no specific descriptor.

* Full name: `\phpDocumentor\Descriptor\Tag\MethodDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../TagDescriptor.md)

## Properties

### methodName

```php
protected $methodName
```

***

### arguments

```php
protected $arguments
```

***

### response

```php
protected $response
```

***

### static

```php
protected bool $static
```

***

## Methods

### __construct

Initializes the tag by setting the name and errors,

```php
public __construct(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### setMethodName

```php
public setMethodName(string $methodName): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$methodName` | **string** |  |

***

### getMethodName

```php
public getMethodName(): string
```

***

### setArguments

```php
public setArguments(mixed $arguments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$arguments` | **mixed** |  |

***

### getArguments

```php
public getArguments(): mixed
```

***

### setResponse

```php
public setResponse(mixed $response): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **mixed** |  |

***

### getResponse

```php
public getResponse(): \phpDocumentor\Descriptor\Tag\ReturnDescriptor
```

***

### setStatic

```php
public setStatic(bool $static): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$static` | **bool** |  |

***

### isStatic

```php
public isStatic(): bool
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
