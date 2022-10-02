***

# SyntaxError

Describes an Error found during the parse, validate, or
execute phases of performing a GraphQL operation. In addition to a message
and stack trace, it also includes information about the locations in a
GraphQL document and/or execution result that correspond to the Error.

When the error was caused by an exception thrown in resolver, original exception
is available via `getPrevious()`.

Also read related docs on [error handling](error-handling.md)

Class extends standard PHP `\Exception`, so all standard methods of base `\Exception` class
are available in addition to those listed below.

* Full name: `\GraphQL\Error\SyntaxError`
* Parent class: [`\GraphQL\Error\Error`](./Error.md)

## Methods

### __construct

```php
public __construct(\GraphQL\Language\Source $source, int $position, string $description): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source** |  |
| `$position` | **int** |  |
| `$description` | **string** |  |

***

## Inherited methods

### __construct

```php
public __construct(string $message = &#039;&#039;, \GraphQL\Language\AST\Node|\GraphQL\Language\AST\Node[]|\Traversable|null $nodes = null, ?\GraphQL\Language\Source $source = null, array $positions = [], array|null $path = null, \Throwable $previous = null, array $extensions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$nodes` | **\GraphQL\Language\AST\Node&#124;\GraphQL\Language\AST\Node[]&#124;\Traversable&#124;null** |  |
| `$source` | **?\GraphQL\Language\Source** |  |
| `$positions` | **array** |  |
| `$path` | **array&#124;null** |  |
| `$previous` | **\Throwable** |  |
| `$extensions` | **array** |  |

***

### createLocatedError

Given an arbitrary Error, presumably thrown while attempting to execute a
GraphQL operation, produce a new GraphQLError aware of the location in the
document responsible for the original Error.

```php
public static createLocatedError(mixed $error, \GraphQL\Language\AST\Node[]|null $nodes = null, array|null $path = null): \GraphQL\Error\Error
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **mixed** |  |
| `$nodes` | **\GraphQL\Language\AST\Node[]&#124;null** |  |
| `$path` | **array&#124;null** |  |

***

### formatError

```php
public static formatError(\GraphQL\Error\Error $error): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\GraphQL\Error\Error** |  |

***

### isClientSafe

Returns true when exception message is safe to be displayed to a client.

```php
public isClientSafe(): bool
```

***

### getCategory

Returns string describing a category of the error.

```php
public getCategory(): string
```

***

### getSource

```php
public getSource(): ?\GraphQL\Language\Source
```

***

### getPositions

```php
public getPositions(): int[]
```

***

### getLocations

An array of locations within the source GraphQL document which correspond to this error.

```php
public getLocations(): \GraphQL\Language\SourceLocation[]
```

Each entry has information about `line` and `column` within source GraphQL document:
$location->line;
$location->column;

Errors during validation often contain multiple locations, for example to
point out to field mentioned in multiple fragments. Errors during execution include a
single location, the field which produced the error.









***

### getNodes

```php
public getNodes(): \GraphQL\Language\AST\Node[]|null
```

***

### getPath

Returns an array describing the path from the root value to the field which produced this error.

```php
public getPath(): array|null
```

Only included for execution errors.









***

### getExtensions

```php
public getExtensions(): array
```

***

### toSerializableArray

Returns array representation of error suitable for serialization

```php
public toSerializableArray(): array
```

* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### jsonSerialize

Specify data which should be serialized to JSON

```php
public jsonSerialize(): mixed
```

**Return Value:**

data which can be serialized by <b>json_encode</b>,
which is a value of any type other than a resource.

**See Also:**

* http://php.net/manual/en/jsonserializable.jsonserialize.php -

***

### __toString

```php
public __toString(): string
```

***


***

