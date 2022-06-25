***

# AnnotationRegistry

* Full name: `\Doctrine\Common\Annotations\AnnotationRegistry`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Properties

### autoloadNamespaces

A map of namespaces to use for autoloading purposes based on a PSR-0 convention.

```php
private static string[][]|string[]|null[] $autoloadNamespaces
```

Contains the namespace as key and an array of directories as value. If the value is NULL the include path is used for
checking for the corresponding file.

This autoloading mechanism does not utilize the PHP autoloading but implements autoloading on its own.

* This property is **static**.

***

### loaders

A map of autoloader callables.

```php
private static callable[] $loaders
```

* This property is **static**.

***

### failedToAutoload

An array of classes which cannot be found

```php
private static null[] $failedToAutoload
```

* This property is **static**.

***

### registerFileUsed

Whenever registerFile() was used. Disables use of standard autoloader.

```php
private static bool $registerFileUsed
```

* This property is **static**.

***

## Methods

### reset

```php
public static reset(): void
```

* This method is **static**.

***

### registerFile

Registers file.

```php
public static registerFile(string $file): void
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** |  |

***

### registerAutoloadNamespace

Adds a namespace with one or many directories to look for files or null for the include path.

```php
public static registerAutoloadNamespace(string $namespace, mixed $dirs = null): void
```

Loading of this namespaces will be done with a PSR-0 namespace loading algorithm.

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |
| `$dirs` | **mixed** |  |

***

### registerAutoloadNamespaces

Registers multiple namespaces.

```php
public static registerAutoloadNamespaces(string[][]|string[]|null[] $namespaces): void
```

Loading of this namespaces will be done with a PSR-0 namespace loading algorithm.

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaces` | **string[][]&#124;string[]&#124;null[]** | indexed by namespace name |

***

### registerLoader

Registers an autoloading callable for annotations, much like spl_autoload_register().

```php
public static registerLoader(callable $callable): void
```

NOTE: These class loaders HAVE to be silent when a class was not found!
IMPORTANT: Loaders have to return true if they loaded a class that could contain the searched annotation class.

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |

***

### registerUniqueLoader

Registers an autoloading callable for annotations, if it is not already registered

```php
public static registerUniqueLoader(callable $callable): void
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$callable` | **callable** |  |

***

### loadAnnotationClass

Autoloads an annotation class silently.

```php
public static loadAnnotationClass(string $class): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |

yxorP::get('REQUEST')
