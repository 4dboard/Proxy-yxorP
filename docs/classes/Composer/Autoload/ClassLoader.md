***

# ClassLoader

ClassLoader implements a PSR-0, PSR-4 and classmap class loader.

$loader = new \Composer\Autoload\ClassLoader();

    // register classes with namespaces
    $loader->add('Symfony\Component', __DIR__.'/component');
    $loader->add('Symfony',           __DIR__.'/framework');

    // activate the autoloader
    $loader->register();

    // to enable searching the include path (eg. for PEAR packages)
    $loader->setUseIncludePath(true);

In this example, if you try to use a class in the Symfony\Component
namespace or one of its children (Symfony\Component\Console for instance),
the autoloader will first look for the class under the component/
directory, and it will then fallback to the framework/ directory if not
found before giving up.

This class is loosely based on the Symfony UniversalClassLoader.

* Full name: `\Composer\Autoload\ClassLoader`

**See Also:**

* https://www.php-fig.org/psr/psr-0/ - 
* https://www.php-fig.org/psr/psr-4/ - 



## Properties


### prefixLengthsPsr4



```php
private $prefixLengthsPsr4
```






***

### prefixDirsPsr4



```php
private $prefixDirsPsr4
```






***

### fallbackDirsPsr4



```php
private $fallbackDirsPsr4
```






***

### prefixesPsr0



```php
private $prefixesPsr0
```






***

### fallbackDirsPsr0



```php
private $fallbackDirsPsr0
```






***

### useIncludePath



```php
private $useIncludePath
```






***

### classMap



```php
private $classMap
```






***

### classMapAuthoritative



```php
private $classMapAuthoritative
```






***

### missingClasses



```php
private $missingClasses
```






***

### apcuPrefix



```php
private $apcuPrefix
```






***

## Methods


### getPrefixes



```php
public getPrefixes(): mixed
```











***

### getPrefixesPsr4



```php
public getPrefixesPsr4(): mixed
```











***

### getFallbackDirs



```php
public getFallbackDirs(): mixed
```











***

### getFallbackDirsPsr4



```php
public getFallbackDirsPsr4(): mixed
```











***

### getClassMap



```php
public getClassMap(): mixed
```











***

### addClassMap



```php
public addClassMap(array $classMap): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classMap` | **array** | Class to filename map |




***

### add

Registers a set of PSR-0 directories for a given prefix, either
appending or prepending to the ones previously set for this prefix.

```php
public add(string $prefix, array|string $paths, bool $prepend = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix |
| `$paths` | **array&#124;string** | The PSR-0 root directories |
| `$prepend` | **bool** | Whether to prepend the directories |




***

### addPsr4

Registers a set of PSR-4 directories for a given namespace, either
appending or prepending to the ones previously set for this namespace.

```php
public addPsr4(string $prefix, array|string $paths, bool $prepend = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `$paths` | **array&#124;string** | The PSR-4 base directories |
| `$prepend` | **bool** | Whether to prepend the directories |




***

### set

Registers a set of PSR-0 directories for a given prefix,
replacing any others previously set for this prefix.

```php
public set(string $prefix, array|string $paths): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix |
| `$paths` | **array&#124;string** | The PSR-0 base directories |




***

### setPsr4

Registers a set of PSR-4 directories for a given namespace,
replacing any others previously set for this namespace.

```php
public setPsr4(string $prefix, array|string $paths): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `$paths` | **array&#124;string** | The PSR-4 base directories |




***

### setUseIncludePath

Turns on searching the include path for class files.

```php
public setUseIncludePath(bool $useIncludePath): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$useIncludePath` | **bool** |  |




***

### getUseIncludePath

Can be used to check if the autoloader uses the include path to check
for classes.

```php
public getUseIncludePath(): bool
```











***

### setClassMapAuthoritative

Turns off searching the prefix and fallback directories for classes
that have not been registered with the class map.

```php
public setClassMapAuthoritative(bool $classMapAuthoritative): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classMapAuthoritative` | **bool** |  |




***

### isClassMapAuthoritative

Should class lookup fail if not found in the current class map?

```php
public isClassMapAuthoritative(): bool
```











***

### setApcuPrefix

APCu prefix to use to cache found/not-found classes, if the extension is enabled.

```php
public setApcuPrefix(string|null $apcuPrefix): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$apcuPrefix` | **string&#124;null** |  |




***

### getApcuPrefix

The APCu prefix in use, or null if APCu caching is not enabled.

```php
public getApcuPrefix(): string|null
```











***

### register

Registers this instance as an autoloader.

```php
public register(bool $prepend = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prepend` | **bool** | Whether to prepend the autoloader or not |




***

### unregister

Unregisters this instance as an autoloader.

```php
public unregister(): mixed
```











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

True if loaded, null otherwise



***

### findFile

Finds the path to the file where the class is defined.

```php
public findFile(string $class): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** | The name of the class |


**Return Value:**

The path if found, false otherwise



***

### findFileWithExtension



```php
private findFileWithExtension(mixed $class, mixed $ext): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$ext` | **mixed** |  |




***


***

