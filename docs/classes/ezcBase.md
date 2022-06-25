***

# ezcBase

Base class implements the methods needed to use the eZ components.

* Full name: `\ezcBase`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEP_PHP_EXTENSION`|public| |&quot;extension&quot;|
|`DEP_PHP_VERSION`|public| |&quot;version&quot;|
|`MODE_PRODUCTION`|public| |0|
|`MODE_DEVELOPMENT`|public| |1|

## Properties

### libraryMode

Indirectly it determines the path where the autoloads are stored.

```php
private static string $libraryMode
```

* This property is **static**.

***

### currentWorkingDirectory

Contains the current working directory, which is used when the $libraryMode is set to "custom".

```php
private static string $currentWorkingDirectory
```

* This property is **static**.

***

### packageDir

The full path to the autoload directory.

```php
protected static string $packageDir
```

* This property is **static**.

***

### runMode

Contains which development mode is used. It's "development" by default, because of backwards compatibility reasons.

```php
private static $runMode
```

* This property is **static**.

***

### repositoryDirs

Stores info with additional paths where autoload files and classes for autoloading could be found. Each item of
$repositoryDirs looks like array( autoloadFileDir, baseDir ). The array key is the prefix belonging to classes within
that repository - if provided when calling addClassRepository(), or an autoincrement integer otherwise.

```php
protected static $repositoryDirs
```

* This property is **static**.

***

### autoloadArray

This variable stores all the elements from the autoload arrays. When a new autoload file is loaded, their files are
added to this array.

```php
protected static $autoloadArray
```

* This property is **static**.

***

### externalAutoloadArray

This variable stores all the elements from the autoload arrays for external repositories. When a new autoload file is
loaded, their files are added to this array.

```php
protected static $externalAutoloadArray
```

* This property is **static**.

***

### options

Options for the ezcBase class.

```php
private static \ezcBaseOptions $options
```

* This property is **static**.

***

## Methods

### setOptions

Associates an option object with this static class.

```php
public static setOptions(\ezcBaseAutoloadOptions $options): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **\ezcBaseAutoloadOptions** |  |

***

### autoload

Tries to autoload the given className. If the className could be found this method returns true, otherwise false.

```php
public static autoload(string $className): bool
```

This class caches the requested class names (including the ones who failed to load).

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$className` | **string** | The name of the class that should be loaded. |

***

### setWorkingDirectory

Sets the current working directory to $directory.

```php
public static setWorkingDirectory(string $directory): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directory` | **string** |  |

***

### setPackageDir

Figures out the base path of the Zeta Components installation.

```php
protected static setPackageDir(): mixed
```

It stores the path that it finds in a static member variable. The path depends on the installation method of the Zeta
Components. The SVN version has a different path than the PEAR installed version.

* This method is **static**.

***

### requireFile

Tries to load the autoload array and, if loaded correctly, includes the class.

```php
protected static requireFile(string $fileName, string $className, string $prefix): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fileName` | **string** | Name of the autoload file. |
| `$className` | **string** | Name of the class that should be autoloaded. |
| `$prefix` | **string** | The prefix of the class repository. |

**Return Value:**

True is returned when the file is correctly loaded. Otherwise false is returned.



***

### loadFile

Loads, require(), the given file name. If we are in development mode,
"/src/" is inserted into the path.

```php
protected static loadFile(string $file): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The name of the file that should be loaded. |

***

### loadExternalFile

Loads, require(), the given file name from an external package.

```php
protected static loadExternalFile(string $file): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **string** | The name of the file that should be loaded. |

***

### checkDependency

Checks for dependencies on PHP versions or extensions

```php
public static checkDependency(string $component, int $type, mixed $value): mixed
```

The function as called by the $component component checks for the $type dependency. The dependency $type is compared
against the $value. The function aborts the script if the dependency is not matched.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$component` | **string** |  |
| `$type` | **int** |  |
| `$value` | **mixed** |  |

***

### getRepositoryDirectories

Return the list of directories that contain class repositories.

```php
public static getRepositoryDirectories(): mixed
```

The path to the eZ components directory is always included in the result array. Each element in the returned array has
the format of:
packageDirectory => ezcBaseRepositoryDirectory

* This method is **static**.

***

### addClassRepository

Adds an additional class repository.

```php
public static addClassRepository(string $basePath, string $autoloadDirPath = null, string $prefix = null): mixed
```

Used for adding class repositoryies outside the eZ components to be loaded by the autoload system.

This function takes two arguments: $basePath is the base path for the whole class repository and $autoloadDirPath the
path where autoload files for this repository are found. The paths in the autoload files are relative to the package
directory as specified by the $basePath argument. I.e. class definition file will be searched at location $basePath +
path to the class definition file as stored in the autoload file.

addClassRepository() should be called somewhere in code before external classes are used.

Example:
Take the following facts:
<ul>
<li>there is a class repository stored in the directory "./repos"</li>
<li>autoload files for that repository are stored in "./repos/autoloads"</li>
<li>there are two components in this repository: "Me" and "You"</li>
<li>the "Me" component has the classes "erMyClass1" and "erMyClass2"</li>
<li>the "You" component has the classes "erYourClass1" and "erYourClass2"</li>
</ul>

In this case you would need to create the following files in
"./repos/autoloads". Please note that the part before _autoload.php in the filename is the first part of the <b>
classname</b>, not considering the all lower-case letter prefix.

"my_autoload.php":
<code>
<?php
    return array (
      'erMyClass1' => 'Me/myclass1.php',
      'erMyClass2' => 'Me/myclass2.php',
    );
?>
</code>

"your_autoload.php":
<code>
<?php
    return array (
      'erYourClass1' => 'You/yourclass1.php',
      'erYourClass2' => 'You/yourclass2.php',
    );
?>
</code>

The directory structure for the external repository is then:
<code>
./repos/autoloads/my_autoload.php ./repos/autoloads/you_autoload.php ./repos/Me/myclass1.php ./repos/Me/myclass2.php
./repos/You/yourclass1.php ./repos/You/yourclass2.php
</code>

To use this repository with the autoload mechanism you have to use the following code:
<code>
<?php
ezcBase::addClassRepository( './repos', './repos/autoloads' );
$myVar = new erMyClass2();
?>
</code>

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$basePath` | **string** |  |
| `$autoloadDirPath` | **string** |  |
| `$prefix` | **string** |  |

***

### getInstallationPath

Returns the base path of the Zeta Components installation

```php
public static getInstallationPath(): string
```

This method returns the base path, including a trailing directory separator.

* This method is **static**.

***

### setRunMode

Sets the development mode to the one specified.

```php
public static setRunMode(int $runMode): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$runMode` | **int** |  |

***

### getRunMode

Returns the current development mode.

```php
public static getRunMode(): int
```

* This method is **static**.

***

### inDevMode

Returns true when we are in development mode.

```php
public static inDevMode(): bool
```

* This method is **static**.

***

### getInstallMethod

Returns the installation method

```php
public static getInstallMethod(): string
```

Possible return values are 'custom', 'devel', 'tarball' and 'pear'. Only
'tarball' and 'pear' are returned for user-installed versions.

* This method is **static**.

yxorP::get('REQUEST')
