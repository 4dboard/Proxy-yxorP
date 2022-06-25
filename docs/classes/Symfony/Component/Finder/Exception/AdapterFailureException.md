***

# AdapterFailureException

Base exception for all adapter failures.

* Full name: `\Symfony\Component\Finder\Exception\AdapterFailureException`
* Parent class: [`RuntimeException`](../../../../RuntimeException.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Symfony\Component\Finder\Exception\ExceptionInterface`](./ExceptionInterface.md)

## Properties

### adapter

```php
private $adapter
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Finder\Adapter\AdapterInterface $adapter, string|null $message = null, \Exception|null $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Symfony\Component\Finder\Adapter\AdapterInterface** |  |
| `$message` | **string&#124;null** |  |
| `$previous` | **\Exception&#124;null** |  |

***

### getAdapter

```php
public getAdapter(): \Symfony\Component\Finder\Adapter\AdapterInterface
```

yxorP::get('REQUEST')
