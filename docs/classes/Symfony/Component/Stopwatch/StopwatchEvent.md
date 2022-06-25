***

# StopwatchEvent

Represents an Event managed by Stopwatch.

* Full name: `\Symfony\Component\Stopwatch\StopwatchEvent`

## Properties

### periods

```php
private \Symfony\Component\Stopwatch\StopwatchPeriod[] $periods
```

***

### origin

```php
private float $origin
```

***

### category

```php
private string $category
```

***

### started

```php
private float[] $started
```

***

## Methods

### __construct

```php
public __construct(float $origin, string|null $category = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$origin` | **float** | The origin time in milliseconds |
| `$category` | **string&#124;null** | The event category or null to use the default |

***

### getCategory

Gets the category.

```php
public getCategory(): string
```

**Return Value:**

The category



***

### getOrigin

Gets the origin.

```php
public getOrigin(): float
```

**Return Value:**

The origin in milliseconds



***

### start

Starts a new event period.

```php
public start(): $this
```

***

### stop

Stops the last started event period.

```php
public stop(): $this
```

***

### isStarted

Checks if the event was started.

```php
public isStarted(): bool
```

***

### lap

Stops the current period and then starts a new one.

```php
public lap(): $this
```

***

### ensureStopped

Stops all non already stopped periods.

```php
public ensureStopped(): mixed
```

***

### getPeriods

Gets all event periods.

```php
public getPeriods(): \Symfony\Component\Stopwatch\StopwatchPeriod[]
```

**Return Value:**

An array of StopwatchPeriod instances



***

### getStartTime

Gets the relative time of the start of the first period.

```php
public getStartTime(): int
```

**Return Value:**

The time (in milliseconds)



***

### getEndTime

Gets the relative time of the end of the last period.

```php
public getEndTime(): int
```

**Return Value:**

The time (in milliseconds)



***

### getDuration

Gets the duration of the events (including all periods).

```php
public getDuration(): int
```

**Return Value:**

The duration (in milliseconds)



***

### getMemory

Gets the max memory usage of all periods.

```php
public getMemory(): int
```

**Return Value:**

The memory usage (in bytes)



***

### getNow

Return the current time relative to origin.

```php
protected getNow(): float
```

**Return Value:**

Time in ms



***

### formatTime

Formats a time.

```php
private formatTime(int|float $time): float
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$time` | **int&#124;float** | A raw time |

**Return Value:**

The formatted time



***

### __toString

```php
public __toString(): string
```

yxorP::get('REQUEST')
