***

# CommandNotFoundException

Represents an incorrect command name typed in the console.

* Full name: `\Symfony\Component\Console\Exception\CommandNotFoundException`
* Parent class: [`InvalidArgumentException`](../../../../InvalidArgumentException.md)
* This class implements:
  [`\Symfony\Component\Console\Exception\ExceptionInterface`](./ExceptionInterface.md)

## Properties

### alternatives

```php
private $alternatives
```

***

## Methods

### __construct

```php
public __construct(string $message, string[] $alternatives = [], int $code, \Throwable|null $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Exception message to throw |
| `$alternatives` | **string[]** | List of similar defined names |
| `$code` | **int** | Exception code |
| `$previous` | **\Throwable&#124;null** | Previous exception used for the exception chaining |

***

### getAlternatives

```php
public getAlternatives(): string[]
```

***


***

