***

# NamespaceNotFoundException

Represents an incorrect namespace typed in the console.

* Full name: `\Symfony\Component\Console\Exception\NamespaceNotFoundException`
* Parent class: [`\Symfony\Component\Console\Exception\CommandNotFoundException`](./CommandNotFoundException.md)

## Inherited methods

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

