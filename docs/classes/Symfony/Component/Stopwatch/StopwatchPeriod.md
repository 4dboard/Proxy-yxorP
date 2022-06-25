***

# StopwatchPeriod

Represents an Period for an Event.

* Full name: `\Symfony\Component\Stopwatch\StopwatchPeriod`

## Properties

### start

```php
private $start
```

***

### end

```php
private $end
```

***

### memory

```php
private $memory
```

***

## Methods

### __construct

```php
public __construct(int $start, int $end): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** | The relative time of the start of the period (in milliseconds) |
| `$end` | **int** | The relative time of the end of the period (in milliseconds) |

***

### getStartTime

Gets the relative time of the start of the period.

```php
public getStartTime(): int
```

**Return Value:**

The time (in milliseconds)



***

### getEndTime

Gets the relative time of the end of the period.

```php
public getEndTime(): int
```

**Return Value:**

The time (in milliseconds)



***

### getDuration

Gets the time spent in this period.

```php
public getDuration(): int
```

**Return Value:**

The period duration (in milliseconds)



***

### getMemory

Gets the memory usage.

```php
public getMemory(): int
```

**Return Value:**

The memory usage (in bytes)
yxorP::get('REQUEST')
