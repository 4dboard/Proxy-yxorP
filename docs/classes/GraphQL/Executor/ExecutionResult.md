***

# ExecutionResult

Returned after [query execution](executing-queries.md).

Represents both - result of successful execution and of a failed one
(with errors collected in `errors` prop)

Could be converted to [spec-compliant](https://facebook.github.io/graphql/#sec-Response-Format)
serializable array using `toArray()`

* Full name: `\GraphQL\Executor\ExecutionResult`
* This class implements:
  [`\JsonSerializable`](../../JsonSerializable.md)

## Properties

### data

Data collected from resolvers during query execution

```php
public array $data
```

***

### errors

Errors registered during query execution.

```php
public \GraphQL\Error\Error[] $errors
```

If an error was caused by exception thrown in resolver, $error->getPrevious() would
contain original exception.




***

### extensions

User-defined serializable array of extensions included in serialized result.

```php
public array $extensions
```

Conforms to




***

### errorFormatter

```php
private callable $errorFormatter
```

***

### errorsHandler

```php
private callable $errorsHandler
```

***

## Methods

### __construct

```php
public __construct(array $data = null, \GraphQL\Error\Error[] $errors = [], array $extensions = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$errors` | **\GraphQL\Error\Error[]** |  |
| `$extensions` | **array** |  |

***

### setErrorFormatter

Define custom error formatting (must conform to http://facebook.github.io/graphql/#sec-Errors)

```php
public setErrorFormatter(callable $errorFormatter): self
```

Expected signature is: function (GraphQL\Error\Error $error): array

Default formatter is "GraphQL\Error\FormattedError::createFromException"

Expected returned value must be an array:
array(
'message' => 'errorMessage',
// ... other keys
);

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$errorFormatter` | **callable** |  |

***

### setErrorsHandler

Define custom logic for error handling (filtering, logging, etc).

```php
public setErrorsHandler(callable $handler): self
```

Expected handler signature is: function (array $errors, callable $formatter): array

Default handler is:
function (array $errors, callable $formatter) {
return array_map($formatter, $errors);
}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **callable** |  |

***

### jsonSerialize

```php
public jsonSerialize(): array
```

***

### toArray

Converts GraphQL query result to spec-compliant serializable array using provided
errors handler and formatter.

```php
public toArray(int $debug = DebugFlag::NONE): array
```

If debug argument is passed, output of error formatter is enriched which debugging information
("debugMessage", "trace" keys depending on flags).

$debug argument must sum of flags from @see \GraphQL\Error\DebugFlag

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$debug` | **int** |  |

***


***

