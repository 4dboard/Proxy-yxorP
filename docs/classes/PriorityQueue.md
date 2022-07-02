***

# PriorityQueue

This file is part of the Cockpit project.

(c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

* Full name: `\PriorityQueue`
* This class implements:
[`\Countable`](./Countable.md), [`\IteratorAggregate`](./IteratorAggregate.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EXTR_DATA`|public| |0x1|
|`EXTR_PRIORITY`|public| |0x2|
|`EXTR_BOTH`|public| |0x3|

## Properties


### queue



```php
protected $queue
```






***

### items



```php
protected $items
```






***

### extractMode



```php
protected $extractMode
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### count



```php
public count(): mixed
```











***

### isEmpty



```php
public isEmpty(): mixed
```











***

### setExtractFlags



```php
public setExtractFlags(mixed $flags): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flags` | **mixed** |  |




***

### insert



```php
public insert(mixed $item, mixed $priority): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **mixed** |  |
| `$priority` | **mixed** |  |




***

### contains



```php
public contains(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### hasPriority



```php
public hasPriority(mixed $priority): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$priority` | **mixed** |  |




***

### remove



```php
public remove(mixed $item): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **mixed** |  |




***

### toArray



```php
public toArray(mixed $flag = self::EXTR_DATA): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$flag` | **mixed** |  |




***

### top



```php
public top(): mixed
```











***

### extract



```php
public extract(): mixed
```











***

### getIterator



```php
public getIterator(): mixed
```











***

### __clone



```php
public __clone(): mixed
```











***


***
> yxorP Documentation
