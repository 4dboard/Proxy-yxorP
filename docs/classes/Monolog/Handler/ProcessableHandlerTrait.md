***

# ProcessableHandlerTrait

Helper trait for implementing ProcessableInterface

This trait is present in monolog 1.x to ease forward compatibility.

* Full name: `\Monolog\Handler\ProcessableHandlerTrait`

## Properties

### processors

```php
protected callable[] $processors
```

***

## Methods

### pushProcessor

{@inheritdoc}

```php
public pushProcessor(mixed $callback): \Monolog\Handler\HandlerInterface
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **mixed** |  |

***

### popProcessor

{@inheritdoc}

```php
public popProcessor(): callable
```

***

### processRecord

Processes a record.

```php
protected processRecord(array $record): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **array** |  |

***

### resetProcessors

```php
protected resetProcessors(): void
```

***

***


