***

# Pagination

This file is part of the Cockpit project.

(c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

* Full name: `\Pagination`



## Properties


### total



```php
protected $total
```






***

### limit



```php
protected $limit
```






***

### pages



```php
protected $pages
```






***

### current



```php
protected $current
```






***

### offset



```php
protected $offset
```






***

## Methods


### __construct



```php
public __construct(mixed $total, mixed $limit, mixed $current = 1): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$total` | **mixed** |  |
| `$limit` | **mixed** |  |
| `$current` | **mixed** |  |




***

### total



```php
public total(): mixed
```











***

### pages



```php
public pages(): mixed
```











***

### current



```php
public current(mixed $page = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$page` | **mixed** |  |




***

### offset



```php
public offset(): mixed
```











***

### limit



```php
public limit(): mixed
```











***

### first



```php
public first(): mixed
```











***

### last



```php
public last(): mixed
```











***

### range



```php
public range(mixed $range = 5): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$range` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
