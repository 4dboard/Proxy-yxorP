***

# Loop

* Full name: `\MongoDB\Tests\UnifiedSpecTests\Loop`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### allowIteration

```php
private static bool $allowIteration
```

* This property is **static**.

***

### sleepUsecBetweenIterations

```php
private static int $sleepUsecBetweenIterations
```

* This property is **static**.

***

### context

```php
private \MongoDB\Tests\UnifiedSpecTests\Context $context
```

***

### operations

```php
private array $operations
```

***

### errorList

```php
private \MongoDB\Model\BSONArray $errorList
```

***

### failureList

```php
private \MongoDB\Model\BSONArray $failureList
```

***

### numSuccessfulOperationsEntityId

```php
private string $numSuccessfulOperationsEntityId
```

***

### numIterationsEntityId

```php
private string $numIterationsEntityId
```

***

## Methods

### __construct

```php
public __construct(array $operations, \MongoDB\Tests\UnifiedSpecTests\Context $context, array $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operations` | **array** |  |
| `$context` | **\MongoDB\Tests\UnifiedSpecTests\Context** |  |
| `$options` | **array** |  |

***

### execute

```php
public execute(): void
```

***

### allowIteration

Allow or prohibit loop operations from starting a new iteration.

```php
public static allowIteration(bool $allowIteration = true): void
```

This function is primarily used by the Atlas testing workload executor.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allowIteration` | **bool** |  |

***

### setSleepUsecBetweenIterations

Set time to sleep between iterations.

```php
public static setSleepUsecBetweenIterations(int $usec): void
```

This can be used to limit CPU usage during workload execution.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$usec` | **int** |  |

***

### handleErrorOrFailure

```php
private handleErrorOrFailure(\Throwable $e): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$e` | **\Throwable** |  |

***

### initializeListEntity

```php
private initializeListEntity(string $id): \MongoDB\Model\BSONArray
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |

***


***

