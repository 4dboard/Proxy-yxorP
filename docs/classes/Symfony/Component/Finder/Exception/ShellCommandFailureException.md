***

# ShellCommandFailureException

Base exception for all adapter failures.

* Full name: `\Symfony\Component\Finder\Exception\ShellCommandFailureException`
* Parent class: [`\Symfony\Component\Finder\Exception\AdapterFailureException`](./AdapterFailureException.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Properties

### command

```php
private $command
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Finder\Adapter\AdapterInterface $adapter, \Symfony\Component\Finder\Shell\Command $command, \Exception $previous = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$adapter` | **\Symfony\Component\Finder\Adapter\AdapterInterface** |  |
| `$command` | **\Symfony\Component\Finder\Shell\Command** |  |
| `$previous` | **\Exception** |  |

***

### getCommand

```php
public getCommand(): \Symfony\Component\Finder\Shell\Command
```

***

## Inherited methods

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
