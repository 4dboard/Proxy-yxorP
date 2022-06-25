***

# Twig_Profiler_Profile

* Full name: `\Twig_Profiler_Profile`
* Parent class: [`\Twig\Profiler\Profile`](./Twig/Profiler/Profile.md)

## Inherited methods

### __construct

```php
public __construct(mixed $template = &#039;main&#039;, mixed $type = self::ROOT, mixed $name = &#039;main&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |
| `$type` | **mixed** |  |
| `$name` | **mixed** |  |

***

### getTemplate

```php
public getTemplate(): mixed
```

***

### getType

```php
public getType(): mixed
```

***

### getName

```php
public getName(): mixed
```

***

### isRoot

```php
public isRoot(): mixed
```

***

### isTemplate

```php
public isTemplate(): mixed
```

***

### isBlock

```php
public isBlock(): mixed
```

***

### isMacro

```php
public isMacro(): mixed
```

***

### getProfiles

```php
public getProfiles(): mixed
```

***

### addProfile

```php
public addProfile(self $profile): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$profile` | **self** |  |

***

### getDuration

Returns the duration in microseconds.

```php
public getDuration(): float
```

***

### getMemoryUsage

Returns the memory usage in bytes.

```php
public getMemoryUsage(): int
```

***

### getPeakMemoryUsage

Returns the peak memory usage in bytes.

```php
public getPeakMemoryUsage(): int
```

***

### enter

Starts the profiling.

```php
public enter(): mixed
```

***

### leave

Stops the profiling.

```php
public leave(): mixed
```

***

### reset

```php
public reset(): mixed
```

***

### getIterator

```php
public getIterator(): \Traversable
```

***

### serialize

```php
public serialize(): string
```

***

### unserialize

```php
public unserialize(mixed $data): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |

yxorP::get('REQUEST')
