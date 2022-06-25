***

# ExampleDescriptor

Descriptor representing the example tag with a descriptor.

* Full name: `\phpDocumentor\Descriptor\Tag\ExampleDescriptor`
* Parent class: [`\phpDocumentor\Descriptor\TagDescriptor`](../TagDescriptor.md)

## Properties

### filePath

```php
protected string $filePath
```

***

### lineCount

```php
protected int $lineCount
```

***

### startingLine

```php
protected int $startingLine
```

***

### example

```php
protected string $example
```

***

## Methods

### setFilePath

Sets the location where the example points to.

```php
public setFilePath(string $filePath): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filePath` | **string** |  |

***

### getFilePath

Returns the location where this example points to.

```php
public getFilePath(): string
```

***

### setStartingLine

Returns the location where this example points to.

```php
public setStartingLine(mixed $startingLine): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startingLine` | **mixed** |  |

***

### getStartingLine

Returns the location where this example points to.

```php
public getStartingLine(): int
```

***

### setLineCount

Returns the location where this example points to.

```php
public setLineCount(mixed $lineCount): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lineCount` | **mixed** |  |

***

### getLineCount

Returns the location where this example points to.

```php
public getLineCount(): int
```

***

### setExample

Returns the content of the example.

```php
public setExample(mixed $example): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$example` | **mixed** |  |

***

### getExample

Returns the content of the example.

```php
public getExample(): string
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
