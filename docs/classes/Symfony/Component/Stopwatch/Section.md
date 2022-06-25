***

# Section

Stopwatch section.

* Full name: `\Symfony\Component\Stopwatch\Section`

## Properties

### events

```php
private \Symfony\Component\Stopwatch\StopwatchEvent[] $events
```

***

### origin

```php
private float|null $origin
```

***

### id

```php
private string $id
```

***

### children

```php
private \Symfony\Component\Stopwatch\Section[] $children
```

***

## Methods

### __construct

```php
public __construct(float|null $origin = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$origin` | **
float&#124;null** | Set the origin of the events in this section, use null to set their origin to their start time |

***

### get

Returns the child section.

```php
public get(string $id): self|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The child section identifier |

**Return Value:**

The child section or null when none found



***

### open

Creates or re-opens a child section.

```php
public open(string|null $id): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;null** | Null to create a new section, the identifier to re-open an existing one |

***

### getId

```php
public getId(): string
```

**Return Value:**

The identifier of the section



***

### setId

Sets the session identifier.

```php
public setId(string $id): $this
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The session identifier |

***

### startEvent

Starts an event.

```php
public startEvent(string $name, string $category): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |
| `$category` | **string** | The event category |

**Return Value:**

The event



***

### isEventStarted

Checks if the event was started.

```php
public isEventStarted(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

***

### stopEvent

Stops an event.

```php
public stopEvent(string $name): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

**Return Value:**

The event



***

### lap

Stops then restarts an event.

```php
public lap(string $name): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

**Return Value:**

The event



***

### getEvent

Returns a specific event by name.

```php
public getEvent(string $name): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

**Return Value:**

The event



***

### getEvents

Returns the events from this section.

```php
public getEvents(): \Symfony\Component\Stopwatch\StopwatchEvent[]
```

**Return Value:**

An array of StopwatchEvent instances yxorP::get('REQUEST')
