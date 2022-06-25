***

# RestApi

Class Controller

* Full name: `\Cockpit\Controller\RestApi`
* Parent class: [`\LimeExtra\Controller`](../../LimeExtra/Controller.md)

## Methods

### before

```php
protected before(): mixed
```

***

### authUser

```php
public authUser(): mixed
```

***

### refreshUserApiKey

```php
public refreshUserApiKey(): mixed
```

***

### saveUser

```php
public saveUser(): mixed
```

***

### listUsers

```php
public listUsers(): mixed
```

***

### image

```php
public image(): mixed
```

***

### assets

```php
public assets(): mixed
```

***

### asset

```php
public asset(mixed $id = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |

***

### addAssets

```php
public addAssets(): mixed
```

***

### updateAssets

```php
public updateAssets(): mixed
```

***

### removeAssets

```php
public removeAssets(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(mixed $app): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **mixed** |  |

***

### index

```php
public index(): string
```

***

### before

```php
protected before(): mixed
```

***

### render

```php
protected render( $view, array $params = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$view` | **** |  |
| `$params` | **array** |  |

***

### param

```php
protected param( $key, null $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$default` | **null** |  |

***

### module

```php
protected module( $module): null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **** |  |

***

### helper

```php
protected helper( $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |

***

### stop

```php
protected stop(mixed $data = false, mixed $status = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **mixed** |  |

***

### initialize

```php
public initialize(): mixed
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

yxorP::get('REQUEST')
