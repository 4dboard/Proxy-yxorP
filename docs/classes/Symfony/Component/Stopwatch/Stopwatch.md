***

# Stopwatch

Stopwatch provides a way to profile code.

* Full name: `\Symfony\Component\Stopwatch\Stopwatch`

## Properties

### sections

```php
private \Symfony\Component\Stopwatch\Section[] $sections
```

***

### activeSections

```php
private \Symfony\Component\Stopwatch\Section[] $activeSections
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### getSections

```php
public getSections(): \Symfony\Component\Stopwatch\Section[]
```

***

### openSection

Creates a new section or re-opens an existing section.

```php
public openSection(string|null $id = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string&#124;null** | The id of the session to re-open, null to create a new one |

***

### stopSection

Stops the last started section.

```php
public stopSection(string $id): mixed
```

The id parameter is used to retrieve the events from this section.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | The identifier of the section |

**See Also:**

* \Symfony\Component\Stopwatch\getSectionEvents() -

***

### start

Starts an event.

```php
public start(string $name, string $category = null): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |
| `$category` | **string** | The event category |

***

### isStarted

Checks if the event was started.

```php
public isStarted(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

***

### stop

Stops an event.

```php
public stop(string $name): \Symfony\Component\Stopwatch\StopwatchEvent
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The event name |

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

***

### getSectionEvents

Gets all events for a given section.

```php
public getSectionEvents(string $id): \Symfony\Component\Stopwatch\StopwatchEvent[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** | A section identifier |

yxorP::get('REQUEST')
