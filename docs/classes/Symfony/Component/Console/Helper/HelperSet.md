***

# HelperSet

HelperSet represents a set of helpers to be used with a command.



* Full name: `\Symfony\Component\Console\Helper\HelperSet`
* This class implements:
[`\IteratorAggregate`](../../../../IteratorAggregate.md)



## Properties


### helpers



```php
private \Symfony\Component\Console\Helper\Helper[] $helpers
```






***

### command



```php
private $command
```






***

## Methods


### __construct



```php
public __construct(\Symfony\Component\Console\Helper\Helper[] $helpers = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helpers` | **\Symfony\Component\Console\Helper\Helper[]** | An array of helper |




***

### set

Sets a helper.

```php
public set(\Symfony\Component\Console\Helper\HelperInterface $helper, string $alias = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **\Symfony\Component\Console\Helper\HelperInterface** | The helper instance |
| `$alias` | **string** | An alias |




***

### has

Returns true if the helper if defined.

```php
public has(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The helper name |


**Return Value:**

true if the helper is defined, false otherwise



***

### get

Gets a helper value.

```php
public get(string $name): \Symfony\Component\Console\Helper\HelperInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The helper name |


**Return Value:**

The helper instance



***

### setCommand



```php
public setCommand(\Symfony\Component\Console\Command\Command $command = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$command` | **\Symfony\Component\Console\Command\Command** |  |




***

### getCommand

Gets the command associated with this helper set.

```php
public getCommand(): \Symfony\Component\Console\Command\Command
```









**Return Value:**

A Command instance



***

### getIterator



```php
public getIterator(): \Symfony\Component\Console\Helper\Helper[]
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
