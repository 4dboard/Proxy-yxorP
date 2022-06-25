***

# ezcBaseMetaDataPearReader

Base class implements ways of fetching information about the installed
eZ Components when installed as tarball.

Note: there are lots of @ used here, because PEAR still lives in the stone
age with their PHP 3 code and general liberal use of throwing warnings and
notices.

* Full name: `\ezcBaseMetaDataPearReader`



## Properties


### registry

Stores the PEAR_Registry to query for information

```php
private \PEAR_Registry $registry
```






***

## Methods


### __construct

Creates the reader object and initialized the registry for querying

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

Returns a PHP version string that describes the required PHP version for
this installed eZ Components bundle.

```php
public getRequiredPhpVersion(): string
```











***

### isComponentInstalled

Returns whether $componentName is installed

```php
public isComponentInstalled(mixed $componentName): bool
```

Checks the PEAR registry whether the component is there.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |




***

### getComponentVersion

Returns the version string of the available $componentName or false when
the component is not installed.

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
public getComponentDependencies(mixed $componentName = &#039;ezcomponents&#039;): mixed
```

If $componentName is left empty, all installed components are returned.

The returned array has as keys the component names, and as values the
version of the components.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$componentName` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
