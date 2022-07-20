***

# LiteDB

This file is part of the Cockpit project.

(c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

* Full name: `\LiteDB`
* Parent class: [`PDO`](./PDO.md)



## Properties


### log



```php
public $log
```






***

## Methods


### connect



```php
public static connect(mixed $dns = &quot;sqlite::memory:&quot;, mixed $user = null, mixed $password = null, mixed $options = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dns` | **mixed** |  |
| `$user` | **mixed** |  |
| `$password` | **mixed** |  |
| `$options` | **mixed** |  |




***

### fetch



```php
public fetch(mixed $sql): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **mixed** |  |




***

### fetchAll



```php
public fetchAll(mixed $sql): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sql` | **mixed** |  |




***

### __get



```php
public __get(mixed $table): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$table` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-20 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
