***

# ezcBaseFeatures

Provides methods needed to check for features.

Example:
<code>
<?php
echo "supports uid: " . ezcBaseFeatures::supportsUserId() . "\n";
echo "supports symlink: " . ezcBaseFeatures::supportsSymLink() . "\n";
echo "supports hardlink: " . ezcBaseFeatures::supportsLink() . "\n";
echo "has imagemagick identify: " . ezcBaseFeatures::hasImageIdentify() . "\n";
echo " identify path: " . ezcBaseFeatures::getImageIdentifyExecutable() . "\n";
echo "has imagemagick convert: " . ezcBaseFeatures::hasImageConvert() . "\n";
echo " convert path: " . ezcBaseFeatures::getImageConvertExecutable() . "\n";
echo "has gzip extension: " . ezcBaseFeatures::hasExtensionSupport( 'zlib' ) . "\n";
echo "has pdo_mysql 1.0.2: " . ezcBaseFeatures::hasExtensionSupport( 'pdo_mysql', '1.0.2' ) . "\n"
?>
</code>

* Full name: `\ezcBaseFeatures`



## Properties


### imageConvert

Used to store the path of the ImageMagick convert utility.

```php
private static string $imageConvert
```

It is initialized in the {@link} function.

* This property is **static**.


***

### imageIdentify

Used to store the path of the ImageMagick identify utility.

```php
private static string $imageIdentify
```

It is initialized in the {@link} function.

* This property is **static**.


***

### os

Used to store the operating system.

```php
private static string $os
```

It is initialized in the {@link} function.

* This property is **static**.


***

## Methods


### supportsLink

Determines if hardlinks are supported.

```php
public static supportsLink(): bool
```



* This method is **static**.







***

### supportsSymLink

Determines if symlinks are supported.

```php
public static supportsSymLink(): bool
```



* This method is **static**.







***

### supportsUserId

Determines if posix uids are supported.

```php
public static supportsUserId(): bool
```



* This method is **static**.







***

### hasImageConvert

Determines if the ImageMagick convert utility is installed.

```php
public static hasImageConvert(): bool
```



* This method is **static**.







***

### getImageConvertExecutable

Returns the path to the ImageMagick convert utility.

```php
public static getImageConvertExecutable(): string
```

On Linux, Unix,... it will return something like: /usr/bin/convert
On Windows it will return something like: C:\Windows\System32\convert.exe

* This method is **static**.







***

### hasImageIdentify

Determines if the ImageMagick identify utility is installed.

```php
public static hasImageIdentify(): bool
```



* This method is **static**.







***

### getImageIdentifyExecutable

Returns the path to the ImageMagick identify utility.

```php
public static getImageIdentifyExecutable(): string
```

On Linux, Unix,... it will return something like: /usr/bin/identify
On Windows it will return something like: C:\Windows\System32\identify.exe

* This method is **static**.







***

### hasExtensionSupport

Determines if the specified extension is loaded.

```php
public static hasExtensionSupport(string $extension, string $version = null): bool
```

If $version is specified, the specified extension will be tested also
against the version of the loaded extension.

Examples:
<code>
hasExtensionSupport( 'gzip' );
</code>
will return true if gzip extension is loaded.

<code>
hasExtensionSupport( 'pdo_mysql', '1.0.2' );
</code>
will return true if pdo_mysql extension is loaded and its version is at least 1.0.2.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** |  |
| `$version` | **string** |  |




***

### hasFunction

Determines if the specified function is available.

```php
public static hasFunction(string $functionName): bool
```

Examples:
<code>
ezcBaseFeatures::hasFunction( 'imagepstext' );
</code>
will return true if support for Type 1 fonts is available with your GD
extension.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$functionName` | **string** |  |




***

### classExists

Returns if a given class exists.

```php
public static classExists(string $className, bool $autoload = true): bool
```

Checks for a given class name and returns if this class exists or not.
Catches the ezcBaseAutoloadException and returns false, if it was thrown.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** | The class to check for. |
| `$autoload` | **bool** | True to use __autoload(), otherwise false. |


**Return Value:**

True if the class exists. Otherwise false.



***

### os

Returns the operating system on which PHP is running.

```php
public static os(): string
```

This method returns a sanitized form of the OS name, example
return values are "Windows", "Mac", "Linux" and "FreeBSD". In
all other cases it returns the value of the internal PHP constant
PHP_OS.

* This method is **static**.







***

### findExecutableInPath

Returns the path of the specified executable, if it can be found in the system's path.

```php
public static findExecutableInPath(string $fileName): string
```

It scans the PATH enviroment variable based on the OS to find the
$fileName. For Windows, the path is with \, not /.  If $fileName is not
found, it returns null.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileName` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
