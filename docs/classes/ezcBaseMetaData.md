***

# ezcBaseMetaData

Base class implements ways of fetching information about the installed eZ Components. It knows whether to use the PEAR
registry or the bundled XML file, depending on how eZ Components is installed.

* Full name: `\ezcBaseMetaData`

## Methods

### __construct

Creates a ezcBaseMetaData object

```php
public __construct(string $installMethod = NULL): mixed
```

The sole parameter $installMethod should only be used if you are really sure that you need to use it. It is mostly there
to make testing at least slightly possible. Again, do not set it unless instructed.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$installMethod` | **string** |  |

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

If installed with PEAR, it checks the PEAR registry whether the component is there. In case the tarball installation
method is used, it will return true for every component that exists (because all of them are then available).

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

The returned array has as keys the component names, and as values the version of the components.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |

yxorP::get('REQUEST')
