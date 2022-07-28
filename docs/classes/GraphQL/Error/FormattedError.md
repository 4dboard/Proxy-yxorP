***

# FormattedError

This class is used for [default error formatting](error-handling.md).

It converts PHP exceptions to [spec-compliant errors](https://facebook.github.io/graphql/#sec-Errors)
and provides tools for error debugging.

* Full name: `\GraphQL\Error\FormattedError`



## Properties


### internalErrorMessage



```php
private static string $internalErrorMessage
```



* This property is **static**.


***

## Methods


### setInternalErrorMessage

Set default error message for internal errors formatted using createFormattedError().

```php
public static setInternalErrorMessage(string $msg): mixed
```

This value can be overridden by passing 3rd argument to `createFormattedError()`.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$msg` | **string** |  |




***

### printError

Prints a GraphQLError to a string, representing useful location information
about the error's position in the source.

```php
public static printError(\GraphQL\Error\Error $error): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\GraphQL\Error\Error** |  |




***

### highlightSourceAtLocation

Render a helpful description of the location of the error in the GraphQL
Source document.

```php
private static highlightSourceAtLocation(\GraphQL\Language\Source $source, \GraphQL\Language\SourceLocation $location): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source** |  |
| `$location` | **\GraphQL\Language\SourceLocation** |  |




***

### getColumnOffset



```php
private static getColumnOffset(\GraphQL\Language\Source $source, \GraphQL\Language\SourceLocation $location): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source** |  |
| `$location` | **\GraphQL\Language\SourceLocation** |  |




***

### whitespace



```php
private static whitespace(int $len): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$len` | **int** |  |




***

### lpad



```php
private static lpad(int $len, mixed $str): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$len` | **int** |  |
| `$str` | **mixed** |  |




***

### createFromException

Standard GraphQL error formatter. Converts any exception to array
conforming to GraphQL spec.

```php
public static createFromException(\Throwable $exception, int $debug = DebugFlag::NONE, string $internalErrorMessage = null): array
```

This method only exposes exception message when exception implements ClientAware interface
(or when debug flags are passed).

For a list of available debug flags @see \GraphQL\Error\DebugFlag constants.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$exception` | **\Throwable** |  |
| `$debug` | **int** |  |
| `$internalErrorMessage` | **string** |  |




***

### addDebugEntries

Decorates spec-compliant $formattedError with debug entries according to $debug flags
(@see \GraphQL\Error\DebugFlag for available flags)

```php
public static addDebugEntries(array $formattedError, \Throwable $e, int $debugFlag): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formattedError` | **array** |  |
| `$e` | **\Throwable** |  |
| `$debugFlag` | **int** |  |




***

### prepareFormatter

Prepares final error formatter taking in account $debug flags.

```php
public static prepareFormatter(?callable $formatter, int $debug): callable
```

If initial formatter is not set, FormattedError::createFromException is used

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$formatter` | **?callable** |  |
| `$debug` | **int** |  |




***

### toSafeTrace

Returns error trace as serializable array

```php
public static toSafeTrace(\Throwable $error): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Throwable** |  |




***

### printVar



```php
public static printVar(mixed $var): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$var` | **mixed** |  |




***

### create



```php
public static create(string $error, \GraphQL\Language\SourceLocation[] $locations = []): array
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **string** |  |
| `$locations` | **\GraphQL\Language\SourceLocation[]** |  |




***

### createFromPHPError



```php
public static createFromPHPError(\ErrorException $e): array
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\ErrorException** |  |




***


***

