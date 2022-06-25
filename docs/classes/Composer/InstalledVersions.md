***

# InstalledVersions

This class is copied in every Composer installed project and available to all

See also https://getcomposer.org/doc/07-runtime.md#installed-versions

To require its presence, you can require `composer-runtime-api ^2.0`

* Full name: `\Composer\InstalledVersions`

## Properties

### installed

```php
private static array|null $installed
```

* This property is **static**.

***

### canGetVendors

```php
private static bool|null $canGetVendors
```

* This property is **static**.

***

### installedByVendor

```php
private static array[] $installedByVendor
```

* This property is **static**.

***

## Methods

### getInstalledPackages

Returns a list of all package names which are present, either by being installed, replaced or provided

```php
public static getInstalledPackages(): string[]
```

* This method is **static**.

***

### getInstalledPackagesByType

Returns a list of all package names with a specific type e.g. 'library'

```php
public static getInstalledPackagesByType(string $type): string[]
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |

***

### isInstalled

Checks whether the given package is installed

```php
public static isInstalled(string $packageName, bool $includeDevRequirements = true): bool
```

This also returns true if the package name is provided or replaced by another package

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |
| `$includeDevRequirements` | **bool** |  |

***

### satisfies

Checks whether the given package satisfies a version constraint

```php
public static satisfies(\Composer\Semver\VersionParser $parser, string $packageName, string|null $constraint): bool
```

e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:

Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parser` | **
\Composer\Semver\VersionParser** | Install composer/semver to have access to this class and functionality |
| `$packageName` | **string** |  |
| `$constraint` | **
string&#124;null** | A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package |

***

### getVersionRanges

Returns a version constraint representing all the range(s) which are installed for a given package

```php
public static getVersionRanges(string $packageName): string
```

It is easier to use this via isInstalled() with the $constraint argument if you need to check whether a given version of
a package is installed, and not just whether it exists

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |

**Return Value:**

Version constraint usable with composer/semver



***

### getVersion

```php
public static getVersion(string $packageName): string|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use
satisfies or getVersionRanges if you need to know if a given version is present



***

### getPrettyVersion

```php
public static getPrettyVersion(string $packageName): string|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as version, use
satisfies or getVersionRanges if you need to know if a given version is present



***

### getReference

```php
public static getReference(string $packageName): string|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as reference



***

### getInstallPath

```php
public static getInstallPath(string $packageName): string|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$packageName` | **string** |  |

**Return Value:**

If the package is being replaced or provided but is not really installed, null will be returned as install path.
Packages of type metapackages also have a null install path.



***

### getRootPackage

```php
public static getRootPackage(): array
```

* This method is **static**.

***

### getRawData

Returns the raw installed.php data for custom implementations

```php
public static getRawData(): array[]
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### getAllRawData

Returns the raw data of all installed.php which are currently loaded for custom implementations

```php
public static getAllRawData(): array[]
```

* This method is **static**.

***

### reload

Lets you reload the static array from another file

```php
public static reload(array[] $data): void
```

This is only useful for complex integrations in which a project needs to use this class but then also needs to execute
another project's autoloader in process, and wants to ensure both projects have access to their version of
installed.php.

A typical case would be PHPUnit, where it would need to make sure it reads all the data it needs from this class, then
call reload() with
`require $CWD/vendor/composer/installed.php` (or similar) as input to make sure the project in which it runs can then
also use this class safely, without interference between PHPUnit's dependencies and the project's dependencies.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array[]** | A vendor/composer/installed.php data set |

***

### getInstalled

```php
private static getInstalled(): array[]
```

* This method is **static**.

yxorP::get('REQUEST')
