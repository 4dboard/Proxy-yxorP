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


### vendorDir



```php
private ?string $vendorDir
```






***

### prefixLengthsPsr4



```php
private array[] $prefixLengthsPsr4
```






***

### prefixDirsPsr4



```php
private array[] $prefixDirsPsr4
```






***

### fallbackDirsPsr4



```php
private array[] $fallbackDirsPsr4
```






***

### prefixesPsr0



```php
private array[] $prefixesPsr0
```






***

### fallbackDirsPsr0



```php
private array[] $fallbackDirsPsr0
```






***

### useIncludePath



```php
private bool $useIncludePath
```






***

### classMap



```php
private string[] $classMap
```






***

### classMapAuthoritative



```php
private bool $classMapAuthoritative
```






***

### missingClasses



```php
private bool[] $missingClasses
```






***

### apcuPrefix



```php
private ?string $apcuPrefix
```






***

### registeredLoaders



```php
private static self[] $registeredLoaders
```



* This property is **static**.


***

## Methods


### __construct



```php
public __construct(?string $vendorDir = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vendorDir` | **?string** |  |




***

### getPrefixes



```php
public getPrefixes(): string[]
```











***

### getPrefixesPsr4



```php
public getPrefixesPsr4(): array[]
```











***

### getFallbackDirs



```php
public getFallbackDirs(): array[]
```











***

### getFallbackDirsPsr4



```php
public getFallbackDirsPsr4(): array[]
```











***

### getClassMap



```php
public getClassMap(): string[]
```









**Return Value:**

Array of classname => path



***

### addClassMap



```php
public addClassMap(string[] $classMap): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$classMap` | **string[]** | Class to filename map |




***

### add

Registers a set of PSR-0 directories for a given prefix, either
appending or prepending to the ones previously set for this prefix.

```php
public add(string $prefix, string[]|string $paths, bool $prepend = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix |
| `$paths` | **string[]&#124;string** | The PSR-0 root directories |
| `$prepend` | **bool** | Whether to prepend the directories |




***

### addPsr4

Registers a set of PSR-4 directories for a given namespace, either
appending or prepending to the ones previously set for this namespace.

```php
public addPsr4(string $prefix, string[]|string $paths, bool $prepend = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `$paths` | **string[]&#124;string** | The PSR-4 base directories |
| `$prepend` | **bool** | Whether to prepend the directories |




***

### set

Registers a set of PSR-0 directories for a given prefix,
replacing any others previously set for this prefix.

```php
public set(string $prefix, string[]|string $paths): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix |
| `$paths` | **string[]&#124;string** | The PSR-0 base directories |




***

### setPsr4

Registers a set of PSR-4 directories for a given namespace,
replacing any others previously set for this namespace.

```php
public setPsr4(string $prefix, string[]|string $paths): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** | The prefix/namespace, with trailing &#039;\\&#039; |
| `$paths` | **string[]&#124;string** | The PSR-4 base directories |




***

### setUseIncludePath

Turns on searching the include path for class files.

```php
public setUseIncludePath(bool $useIncludePath): void
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
public setClassMapAuthoritative(bool $classMapAuthoritative): void
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
public setApcuPrefix(string|null $apcuPrefix): void
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
public register(bool $prepend = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prepend` | **bool** | Whether to prepend the autoloader or not |




***

### unregister

Unregisters this instance as an autoloader.

```php
public unregister(): void
```











***

### loadClass

Loads the given class or interface.

```php
public loadClass(string $class): true|null
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

### getRegisteredLoaders

Returns the currently registered loaders indexed by their corresponding vendor directories.

```php
public static getRegisteredLoaders(): self[]
```



* This method is **static**.







***

### findFileWithExtension



```php
private findFileWithExtension(string $class, string $ext): string|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$ext` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
