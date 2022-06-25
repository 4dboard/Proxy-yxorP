***

# ezcBaseMetaDataTarballReader

Base class implements ways of fetching information about the installed eZ Components when installed as tarball.

* Full name: `\ezcBaseMetaDataTarballReader`

## Properties

### xml

Contains the handler to the XML file containing the release information.

```php
private \SimpleXmlElement $xml
```

***

## Methods

### __construct

Creates the reader object and opens the release-info file.

```php
public __construct(): mixed
```

***

### getBundleVersion

Returns the version string for the installed eZ Components bundle.

```php
public getBundleVersion(): string
```

A version string such as "2008.2.2" is returned.









***

### getRequiredPhpVersion

Returns a PHP version string that describes the required PHP version for this installed eZ Components bundle.

```php
public getRequiredPhpVersion(): string
```

***

### isComponentInstalled

Returns whether $componentName is installed

```php
public isComponentInstalled(mixed $componentName): bool
```

Returns true for every component that exists (because all of them are then available).

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |

***

### getComponentVersion

Returns the version string of the available $componentName or false when the component is not installed.

```php
public getComponentVersion(mixed $componentName): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |

***

### getComponentDependencies

Returns a list of components that $componentName depends on.

```php
public getComponentDependencies(mixed $componentName = null): mixed
```

If $componentName is left empty, all installed components are returned.

The returned array has as keys the component names, and as values the version of the components. It returns null of the
$componentName is not found.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |

yxorP::get('REQUEST')
