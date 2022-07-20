***

# Installer





* Full name: `\PackageVersions\Installer`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Composer\Plugin\PluginInterface`](../Composer/Plugin/PluginInterface.md), [`\Composer\EventDispatcher\EventSubscriberInterface`](../Composer/EventDispatcher/EventSubscriberInterface.md)
* This class is a **Final class**



## Properties


### generatedClassTemplate



```php
private static $generatedClassTemplate
```



* This property is **static**.


***

## Methods


### getSubscribedEvents

{@inheritDoc}

```php
public static getSubscribedEvents(): array
```



* This method is **static**.







***

### dumpVersionsClass



```php
public static dumpVersionsClass(\Composer\Script\Event $composerEvent): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composerEvent` | **\Composer\Script\Event** |  |




***

### getVersions



```php
private static getVersions(\Composer\Package\Locker $locker, \Composer\Package\RootPackageInterface $rootPackage): \Generator&amp;string[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locker` | **\Composer\Package\Locker** |  |
| `$rootPackage` | **\Composer\Package\RootPackageInterface** |  |




***

### generateVersionsClass



```php
private static generateVersionsClass(string $rootPackageName, string[] $versions): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rootPackageName` | **string** |  |
| `$versions` | **string[]** |  |




***

### writeVersionClassToFile



```php
private static writeVersionClassToFile(string $versionClassSource, \Composer\Composer $composer, \Composer\IO\IOInterface $io): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$versionClassSource` | **string** |  |
| `$composer` | **\Composer\Composer** |  |
| `$io` | **\Composer\IO\IOInterface** |  |




***

### locateRootPackageInstallPath



```php
private static locateRootPackageInstallPath(\Composer\Config $composerConfig, \Composer\Package\RootPackageInterface $rootPackage): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composerConfig` | **\Composer\Config** |  |
| `$rootPackage` | **\Composer\Package\RootPackageInterface** |  |




***

### getRootPackageAlias



```php
private static getRootPackageAlias(\Composer\Package\RootPackageInterface $rootPackage): \Composer\Package\PackageInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rootPackage` | **\Composer\Package\RootPackageInterface** |  |




***

### activate



```php
public activate(\Composer\Composer $composer, \Composer\IO\IOInterface $io): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composer` | **\Composer\Composer** |  |
| `$io` | **\Composer\IO\IOInterface** |  |




***

### deactivate



```php
public deactivate(\Composer\Composer $composer, \Composer\IO\IOInterface $io): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composer` | **\Composer\Composer** |  |
| `$io` | **\Composer\IO\IOInterface** |  |




***

### uninstall



```php
public uninstall(\Composer\Composer $composer, \Composer\IO\IOInterface $io): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composer` | **\Composer\Composer** |  |
| `$io` | **\Composer\IO\IOInterface** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
