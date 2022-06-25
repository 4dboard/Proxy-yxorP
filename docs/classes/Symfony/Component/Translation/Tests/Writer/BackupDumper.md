***

# BackupDumper





* Full name: `\Symfony\Component\Translation\Tests\Writer\BackupDumper`
* This class implements:
[`\Symfony\Component\Translation\Dumper\DumperInterface`](../../Dumper/DumperInterface.md)



## Properties


### backup



```php
public $backup
```






***

## Methods


### dump

Dumps the message catalogue.

```php
public dump(\Symfony\Component\Translation\MessageCatalogue $messages, mixed $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **\Symfony\Component\Translation\MessageCatalogue** | The message catalogue |
| `$options` | **mixed** | Options that are used by the dumper |




***

### setBackup



```php
public setBackup(mixed $backup): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$backup` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
