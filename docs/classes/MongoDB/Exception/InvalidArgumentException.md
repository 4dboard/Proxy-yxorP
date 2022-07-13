***

# InvalidArgumentException

* Full name: `\MongoDB\Exception\InvalidArgumentException`
* Parent class: [`InvalidArgumentException`](../Driver/Exception/InvalidArgumentException.md)
* This class implements:
  [`\MongoDB\Exception\Exception`](./Exception.md)

## Methods

### invalidType

Thrown when an argument or option has an invalid type.

```php
public static invalidType(string $name, mixed $value, string|string[] $expectedType): self
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name of the argument or option |
| `$value` | **mixed** | Actual value (used to derive the type) |
| `$expectedType` | **string&#124;string[]** | Expected type |

***


***

