***

# ClassCache

* Full name: `\Zend\Cache\Pattern\ClassCache`
* Parent class: [`\Zend\Cache\Pattern\CallbackCache`](./CallbackCache.md)

## Methods

### setOptions

Set options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\ClassCache
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |

***

### call

Call and cache a class method

```php
public call(string $method, array $args = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method name to call |
| `$args` | **array** | Method arguments |

***

### generateKey

Generate a unique key in base of a key representing the callback part and a key representing the arguments part.

```php
public generateKey(string $method, array $args = []): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | The method |
| `$args` | **array** | Callback arguments |

***

### generateCallbackKey

Generate a unique key in base of a key representing the callback part and a key representing the arguments part.

```php
protected generateCallbackKey(callable $callback, array $args): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |

***

### __call

Calling a method of the entity.

```php
public __call(string $method, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string** | Method name to call |
| `$args` | **array** | Method arguments |

***

### __set

Set a static property

```php
public __set(string $name, mixed $value): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |

**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members -

***

### __get

Get a static property

```php
public __get(string $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

**See Also:**

* http://php.net/manual/language.oop5.overloading.php#language.oop5.overloading.members -

***

### __isset

Is a static property exists.

```php
public __isset(string $name): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### __unset

Unset a static property

```php
public __unset(string $name): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

## Inherited methods

### setOptions

Set pattern options

```php
public setOptions(\Zend\Cache\Pattern\PatternOptions $options): \Zend\Cache\Pattern\AbstractPattern
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\Zend\Cache\Pattern\PatternOptions** |  |

***

### call

Call the specified callback or get the result from cache

```php
public call(callable $callback, array $args = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |

**Return Value:**

Result



***

### __call

function call handler

```php
public __call(string $function, array $args): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$function` | **string** | Function name to call |
| `$args` | **array** | Function arguments |

***

### generateKey

Generate a unique key in base of a key representing the callback part and a key representing the arguments part.

```php
public generateKey(callable $callback, array $args = []): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |

***

### generateCallbackKey

Generate a unique key in base of a key representing the callback part and a key representing the arguments part.

```php
protected generateCallbackKey(callable $callback, array $args): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callback` | **callable** | A valid callback |
| `$args` | **array** | Callback arguments |

***

### generateArgumentsKey

Generate a unique key of the argument part.

```php
protected generateArgumentsKey(array $args): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **array** |  |

***

### getOptions

Get all pattern options

```php
public getOptions(): \Zend\Cache\Pattern\PatternOptions
```

yxorP::get('REQUEST')
