***

# Theme

* Full name: `\App\Helper\Theme`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)

## Properties

### vars

```php
protected array $vars
```

***

### title

```php
protected ?string $title
```

***

### favicon

```php
protected ?string $favicon
```

***

### logo

```php
protected ?string $logo
```

***

### logoLarge

```php
protected ?string $logoLarge
```

***

### pageClass

```php
protected ?string $pageClass
```

***

## Methods

### initialize

```php
protected initialize(): mixed
```

***

### title

```php
public title(?string $newTitle = null): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$newTitle` | **?string** |  |

***

### favicon

```php
public favicon(?string $url = null, ?string $color = null): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **?string** |  |
| `$color` | **?string** |  |

***

### logoLarge

```php
public logoLarge(?string $url = null): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **?string** |  |

***

### logo

```php
public logo(?string $url = null): ?string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **?string** |  |

***

### theme

```php
public theme(): mixed
```

***

### assets

```php
public assets(array $assets = [], ?string $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assets` | **array** |  |
| `$context` | **?string** |  |

***

### pageClass

```php
public pageClass(?string $class = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **?string** |  |

***

### vars

```php
public vars(mixed $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **mixed** |  |

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

