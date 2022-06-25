***

# DebugClassLoader

Autoloader checking if the class is really defined in the file found.

The ClassLoader will wrap all registered autoloaders and will throw an exception if a file is found but does not declare
the class.

* Full name: `\Symfony\Component\Debug\DebugClassLoader`

## Properties

### classLoader

```php
private $classLoader
```

***

### isFinder

```php
private $isFinder
```

***

### caseCheck

```php
private static $caseCheck
```

* This property is **static**.

***

### deprecated

```php
private static $deprecated
```

* This property is **static**.

***

### php7Reserved

```php
private static $php7Reserved
```

* This property is **static**.

***

### darwinCache

```php
private static $darwinCache
```

* This property is **static**.

***

## Methods

### __construct

Constructor.

```php
public __construct(callable $classLoader): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classLoader` | **callable** | A class loader |

***

### getClassLoader

Gets the wrapped class loader.

```php
public getClassLoader(): callable
```

**Return Value:**

The wrapped class loader



***

### enable

Wraps all autoloaders.

```php
public static enable(): mixed
```

* This method is **static**.

***

### disable

Disables the wrapping.

```php
public static disable(): mixed
```

* This method is **static**.

***

### loadClass

Loads the given class or interface.

```php
public loadClass(string $class): bool|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The name of the class |

**Return Value:**

True, if loaded yxorP::get('REQUEST')
