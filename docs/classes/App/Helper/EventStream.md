***

# EventStream

* Full name: `\App\Helper\EventStream`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)

## Methods

### cleanup

```php
public cleanup(): mixed
```

***

### getEvents

```php
public getEvents(int $sinceTime): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sinceTime` | **int** |  |

***

### add

```php
public add(string $event, mixed $data, array $options): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$data` | **mixed** |  |
| `$options` | **array** |  |

***

## Inherited methods

### __construct

```php
public __construct(\Lime\App $app, mixed $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |

***

### initialize

```php
protected initialize(): mixed
```

***

### __call

```php
public __call(mixed $name, mixed $arguments): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |

***

### __invoke

```php
public __invoke(mixed $helper): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |

***

### __get

```php
public __get(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***


***

