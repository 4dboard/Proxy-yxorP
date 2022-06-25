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
public __construct(string $message, array $alternatives = array(), int $code, \Symfony\Component\Console\Exception\Exception $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** | Exception message to throw |
| `$alternatives` | **array** | List of similar defined names |
| `$code` | **int** | Exception code |
| `$previous` | **
\Symfony\Component\Console\Exception\Exception** | previous exception used for the exception chaining |

***

### getAlternatives

```php
public getAlternatives(): array
```

**Return Value:**

A list of similar defined names yxorP::get('REQUEST')
