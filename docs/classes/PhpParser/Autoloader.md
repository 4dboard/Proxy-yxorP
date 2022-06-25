***

# Autoloader

* Full name: `\PhpParser\Autoloader`

## Properties

### registered

```php
private static bool $registered
```

* This property is **static**.

***

### runningOnPhp7

```php
private static bool $runningOnPhp7
```

* This property is **static**.

***

### php7AliasesOldToNew

```php
private static $php7AliasesOldToNew
```

* This property is **static**.

***

### php7AliasesNewToOld

```php
private static $php7AliasesNewToOld
```

* This property is **static**.

***

### nonNamespacedAliases

```php
private static $nonNamespacedAliases
```

* This property is **static**.

***

## Methods

### register

Registers PhpParser\Autoloader as an SPL autoloader.

```php
public static register(bool $prepend = false): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prepend` | **bool** | Whether to prepend the autoloader instead of appending |

***

### autoload

Handles autoloading of classes.

```php
public static autoload(string $class): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | A class name. |

***

### registerNonNamespacedAliases

```php
private static registerNonNamespacedAliases(): mixed
```

* This method is **static**.

yxorP::get('REQUEST')
