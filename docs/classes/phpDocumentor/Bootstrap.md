***

# Bootstrap

This class provides a bootstrap for all application who wish to interface with phpDocumentor.

The Bootstrapper is responsible for setting up the autoloader, profiling options and application, including dependency
injection container.

The simplest usage would be:

    $app = Bootstap::createInstance()->initialize();

This will setup the autoloader and application, including Service Container, and return an instance of the application
ready to be ran using the `run` command.

If you need more control you can do some of the steps manually:

    $bootstrap = Bootstap::createInstance();
    $autoloader = $bootstrap->createAutoloader();
    $app = new Application($autoloader)

* Full name: `\phpDocumentor\Bootstrap`

## Methods

### createInstance

Helper static function to get an instance of this class.

```php
public static createInstance(): \phpDocumentor\Bootstrap
```

Usually used to do a one-line initialization, such as:

\phpDocumentor\Bootstrap::createInstance()->initialize();

* This method is **static**.

***

### initialize

Convenience method that does the complete initialization for phpDocumentor.

```php
public initialize(): \phpDocumentor\Application
```

***

### registerProfiler

Sets up XHProf so that we can profile phpDocumentor using XHGUI.

```php
public registerProfiler(): self
```

***

### createAutoloader

Initializes and returns the autoloader.

```php
public createAutoloader(string|null $vendorDir = null): \Composer\Autoload\ClassLoader
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vendorDir` | **
string&#124;null** | A path (either absolute or relative to the current working directory) leading to<br />the vendor folder where composer installed the dependencies. |

***

### findVendorPath

Attempts to find the location of the vendor folder.

```php
public findVendorPath( $baseDir = __DIR__): string|null
```

This method tries to check for a composer.json in a directory 5 levels below the folder of this Bootstrap file. This is
the expected location if phpDocumentor is installed using composer because the current directory for this file is
expected to be 'vendor/phpdocumentor/phpdocumentor/src/phpDocumentor'.

If a composer.json is found we will try to extract the vendor folder name using the 'vendor-dir' configuration option of
composer or assume it is vendor if that option is not set.

If no custom composer.json can be found, then we assume that the vendor folder is that of phpDocumentor itself, which
is `../../vendor` starting from this folder.

If neither locations exist, then this method returns null because no vendor path could be found.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$baseDir` | **** | parameter for test purposes only. |

***

### getCustomVendorPathFromComposer

Retrieves the custom vendor-dir from the given composer.json or returns 'vendor'.

```php
protected getCustomVendorPathFromComposer(string $composerConfigurationPath): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$composerConfigurationPath` | **string** | the path pointing to the composer.json |

yxorP::get('REQUEST')
