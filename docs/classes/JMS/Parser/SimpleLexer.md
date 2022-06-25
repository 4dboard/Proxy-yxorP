***

# SimpleLexer

The simple lexer is a fully usable lexer that does not require sub-classing.

* Full name: `\JMS\Parser\SimpleLexer`
* Parent class: [`\JMS\Parser\AbstractLexer`](./AbstractLexer.md)

## Properties

### regex

```php
private $regex
```

***

### callable

```php
private $callable
```

***

### tokenNames

```php
private $tokenNames
```

***

## Methods

### __construct

```php
public __construct(mixed $regex, array $tokenNames, mixed $typeCallable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regex` | **mixed** |  |
| `$tokenNames` | **array** |  |
| `$typeCallable` | **mixed** |  |

***

### getName

Returns the name of the given token.

```php
public getName(mixed $type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |

***

### getRegex

```php
protected getRegex(): string
```

***

### determineTypeAndValue

Determines the type of the given value.

```php
protected determineTypeAndValue(mixed $value): array
```

This method may also modify the passed value for example to cast them to a different PHP type where necessary.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

**Return Value:**

a tupel of type and normalized value



***

## Inherited methods

### getName

Returns the name of the given token.

```php
public getName(int $type): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### setInput

```php
public setInput(mixed $str): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |

***

### reset

```php
public reset(): mixed
```

***

### moveNext

Moves the pointer one token forward.

```php
public moveNext(): bool
```

**Return Value:**

if we have not yet reached the end of the input



***

### skipUntil

Skips the token stream until a token of the given type.

```php
public skipUntil(int $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### isNext

```php
public isNext(int $type): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |

***

### isNextAny

```php
public isNextAny(int[] $types): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **int[]** |  |

***

### peek

```php
public peek(): mixed
```

***

### getRegex

```php
protected getRegex(): string
```

* This method is **abstract**.

***

### determineTypeAndValue

Determines the type of the given value.

```php
protected determineTypeAndValue(string $value): array
```

This method may also modify the passed value for example to cast them to a different PHP type where necessary.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

**Return Value:**

a tupel of type and normalized value yxorP::get('REQUEST')
