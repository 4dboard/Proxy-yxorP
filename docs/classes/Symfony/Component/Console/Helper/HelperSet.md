***

# HelperSet

HelperSet represents a set of helpers to be used with a command.



* Full name: `\Symfony\Component\Console\Helper\HelperSet`
* This class implements:
[`\IteratorAggregate`](../../../../IteratorAggregate.md)



## Properties


### helpers



```php
private array&lt;string,\Symfony\Component\Console\Helper\Helper&gt; $helpers
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
public __construct(\Symfony\Component\Console\Helper\Helper[] $helpers = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helpers` | **\Symfony\Component\Console\Helper\Helper[]** | An array of helper |




***

### set



```php
public set(\Symfony\Component\Console\Helper\HelperInterface $helper, string $alias = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **\Symfony\Component\Console\Helper\HelperInterface** |  |
| `$alias` | **string** |  |




***

### has

Returns true if the helper if defined.

```php
public has(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### get

Gets a helper value.

```php
public get(string $name): \Symfony\Component\Console\Helper\HelperInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### setCommand



```php
public setCommand(\Symfony\Component\Console\Command\Command $command = null): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



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






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.






***

### getIterator



```php
public getIterator(): \Traversable&lt;string,\Symfony\Component\Console\Helper\Helper&gt;
```











***


***

