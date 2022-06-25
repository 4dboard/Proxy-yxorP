***

# FilterChain

FilterChain: intercepting filter manager

* Full name: `\Zend\EventManager\FilterChain`
* This class implements:
  [`\Zend\EventManager\Filter\FilterInterface`](./Filter/FilterInterface.md)

## Properties

### filters

```php
protected \Zend\EventManager\Filter\FilterIterator $filters
```

***

## Methods

### __construct

Constructor

```php
public __construct(): mixed
```

Initializes Filter\FilterIterator in which filters will be aggregated









***

### run

Apply the filters

```php
public run(mixed $context, mixed $argv = []): mixed
```

Begins iteration of the filters.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **mixed** | Object under observation |
| `$argv` | **mixed** | Associative array of arguments |

***

### attach

Connect a filter to the chain

```php
public attach(callable $callback, int $priority = 1): \Zend\Stdlib\CallbackHandler
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | PHP Callback |
| `$priority` | **int** | Priority in the queue at which to execute; defaults to 1 (higher numbers == higher priority) |

**Return Value:**

(to allow later unsubscribe)



***

### detach

Detach a filter from the chain

```php
public detach(\Zend\Stdlib\CallbackHandler $filter): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\Zend\Stdlib\CallbackHandler** |  |

**Return Value:**

Returns true if filter found and unsubscribed; returns false otherwise



***

### getFilters

Retrieve all filters

```php
public getFilters(): \Zend\EventManager\Filter\FilterIterator
```

***

### clearFilters

Clear all filters

```php
public clearFilters(): void
```

***

### getResponses

Return current responses

```php
public getResponses(): null|\Zend\EventManager\ResponseCollection
```

Only available while the chain is still being iterated. Returns the current ResponseCollection.

yxorP::get('REQUEST')
