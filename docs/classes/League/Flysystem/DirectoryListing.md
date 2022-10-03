***

# DirectoryListing





* Full name: `\League\Flysystem\DirectoryListing`
* This class implements:
[`\IteratorAggregate`](../../IteratorAggregate.md)



## Properties


### listing



```php
private iterable&lt;\League\Flysystem\T&gt; $listing
```






***

## Methods


### __construct



```php
public __construct(iterable&lt;\League\Flysystem\T&gt; $listing): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$listing` | **iterable<\League\Flysystem\T>** |  |




***

### filter



```php
public filter(callable $filter): \League\Flysystem\DirectoryListing
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **callable** |  |




***

### map



```php
public map(callable $mapper): \League\Flysystem\DirectoryListing
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mapper` | **callable** |  |




***

### sortByPath



```php
public sortByPath(): \League\Flysystem\DirectoryListing
```











***

### getIterator



```php
public getIterator(): \Traversable&lt;\League\Flysystem\T&gt;
```











***

### toArray



```php
public toArray(): \League\Flysystem\T[]
```











***


***

