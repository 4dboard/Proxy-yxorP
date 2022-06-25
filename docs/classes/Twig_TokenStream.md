***

# Twig_TokenStream

Represents a token stream.



* Full name: `\Twig_TokenStream`
* Parent class: [`\Twig\TokenStream`](./Twig/TokenStream.md)






## Inherited methods


### __construct



```php
public __construct(array $tokens, string|null $name = null, string|null $source = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** | An array of tokens |
| `$name` | **string&#124;null** | The name of the template which tokens are associated with |
| `$source` | **string&#124;null** | The source code associated with the tokens |




***

### __toString



```php
public __toString(): mixed
```











***

### injectTokens



```php
public injectTokens(array $tokens): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |




***

### next

Sets the pointer to the next token and returns the old one.

```php
public next(): \Twig\Token
```











***

### nextIf

Tests a token, sets the pointer to the next one and returns it or throws a syntax error.

```php
public nextIf(mixed $primary, mixed $secondary = null): \Twig\Token|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$primary` | **mixed** |  |
| `$secondary` | **mixed** |  |


**Return Value:**

The next token if the condition is true, null otherwise



***

### expect

Tests a token and returns it or throws a syntax error.

```php
public expect(mixed $type, mixed $value = null, mixed $message = null): \Twig\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |
| `$value` | **mixed** |  |
| `$message` | **mixed** |  |




***

### look

Looks at the next token.

```php
public look(int $number = 1): \Twig\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** |  |




***

### test

Tests the current token.

```php
public test(mixed $primary, mixed $secondary = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$primary` | **mixed** |  |
| `$secondary` | **mixed** |  |




***

### isEOF

Checks if end of stream was reached.

```php
public isEOF(): bool
```











***

### getCurrent



```php
public getCurrent(): \Twig\Token
```











***

### getFilename

Gets the name associated with this stream (null if not defined).

```php
public getFilename(): string|null
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
