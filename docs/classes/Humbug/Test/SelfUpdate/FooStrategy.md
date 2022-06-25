***

# FooStrategy





* Full name: `\Humbug\Test\SelfUpdate\FooStrategy`
* This class implements:
[`\Humbug\SelfUpdate\Strategy\StrategyInterface`](../../SelfUpdate/Strategy/StrategyInterface.md)




## Methods


### download

Download the remote Phar file.

```php
public download(\Humbug\SelfUpdate\Updater $updater): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |




***

### getCurrentRemoteVersion

Retrieve the current version available remotely.

```php
public getCurrentRemoteVersion(\Humbug\SelfUpdate\Updater $updater): string|bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |




***

### getCurrentLocalVersion

Retrieve the current version of the local phar file.

```php
public getCurrentLocalVersion(\Humbug\SelfUpdate\Updater $updater): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$updater` | **\Humbug\SelfUpdate\Updater** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
