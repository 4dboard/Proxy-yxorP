***

# Cache

* Full name: `\yxorP\cache\Cache`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`OPTIONS`|public| |&#039;.attr&#039;|

## Properties

### instance

```php
private static $instance
```

* This property is **static**.

***

### attr_instance

```php
private \yxorP\cache\Cache $attr_instance
```

***

### options

```php
private $options
```

***

## Methods

### __construct

```php
private __construct(mixed $is_super = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$is_super` | **mixed** |  |

***

### cache

```php
public static cache(): mixed
```

* This method is **static**.

***

### clearAll

```php
public static clearAll(): void
```

* This method is **static**.

***

### get

```php
public get(): mixed
```

***

### isValid

```php
public isValid(): bool
```

***

### set

```php
public set(mixed $val): \yxorP\cache\Cache
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$val` | **mixed** |  |

***

### isExists

```php
private isExists(): bool
```

yxorP::get('REQUEST')
