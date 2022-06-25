***

# MemcacheResourceManager

This is a resource manager for memcache



* Full name: `\Zend\Cache\Storage\Adapter\MemcacheResourceManager`



## Properties


### resources

Registered resources

```php
protected array $resources
```






***

### serverDefaults

Default server values per resource

```php
protected array $serverDefaults
```






***

### failureCallbacks

Failure callback per resource

```php
protected callable[] $failureCallbacks
```






***

## Methods


### hasResource

Check if a resource exists

```php
public hasResource(string $id): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### getResource

Gets a memcache resource

```php
public getResource(string $id): \Memcache
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setResource

Set a resource

```php
public setResource(string $id, array|\Traversable|\Memcache $resource, callable $failureCallback = null, array|\Traversable $serverDefaults = []): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$resource` | **array&#124;\Traversable&#124;\Memcache** |  |
| `$failureCallback` | **callable** |  |
| `$serverDefaults` | **array&#124;\Traversable** |  |




***

### removeResource

Remove a resource

```php
public removeResource(string $id): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### normalizeAutoCompressThreshold

Normalize compress threshold options

```php
protected normalizeAutoCompressThreshold(int|string|array|\ArrayAccess& $threshold, float|string& $minSavings): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$threshold` | **int&#124;string&#124;array&#124;\ArrayAccess** |  |
| `$minSavings` | **float&#124;string** |  |




***

### setResourceAutoCompressThreshold

Set compress threshold on a Memcache resource

```php
protected setResourceAutoCompressThreshold(\Memcache $resource, int $threshold, float $minSavings): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **\Memcache** |  |
| `$threshold` | **int** |  |
| `$minSavings` | **float** |  |




***

### getAutoCompressThreshold

Get compress threshold

```php
public getAutoCompressThreshold(string $id): int|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setAutoCompressThreshold

Set compress threshold

```php
public setAutoCompressThreshold(string $id, int|string|array|\ArrayAccess|null $threshold, float|string|bool $minSavings = false): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$threshold` | **int&#124;string&#124;array&#124;\ArrayAccess&#124;null** |  |
| `$minSavings` | **float&#124;string&#124;bool** |  |




***

### getAutoCompressMinSavings

Get compress min savings

```php
public getAutoCompressMinSavings(string $id): float|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setAutoCompressMinSavings

Set compress min savings

```php
public setAutoCompressMinSavings(string $id, float|string|null $minSavings): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$minSavings` | **float&#124;string&#124;null** |  |




***

### setServerDefaults

Set default server values
array(
  'persistent' => <persistent>, 'weight' => <weight>,
  'timeout' => <timeout>, 'retry_interval' => <retryInterval>,
)

```php
public setServerDefaults(string $id, array $serverDefaults): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$serverDefaults` | **array** |  |




***

### getServerDefaults

Get default server values

```php
public getServerDefaults(string $id): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### normalizeServerDefaults



```php
protected normalizeServerDefaults(array& $serverDefaults): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverDefaults` | **array** |  |




***

### setFailureCallback

Set callback for server connection failures

```php
public setFailureCallback(string $id, callable|null $failureCallback): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$failureCallback` | **callable&#124;null** |  |




***

### getFailureCallback

Get callback for server connection failures

```php
public getFailureCallback(string $id): callable
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### getServers

Get servers

```php
public getServers(string $id): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |


**Return Value:**

array('host' => <host>, 'port' => <port>, 'weight' => <weight>)



***

### addServers

Add servers

```php
public addServers(string $id, string|array $servers): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$servers` | **string&#124;array** |  |




***

### addServer

Add one server

```php
public addServer(string $id, string|array $server): \Zend\Cache\Storage\Adapter\MemcacheResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$server` | **string&#124;array** |  |




***

### addServerToResource



```php
protected addServerToResource(\Memcache $resource, array $server, array $serverDefaults, callable|null $failureCallback): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **\Memcache** |  |
| `$server` | **array** |  |
| `$serverDefaults` | **array** |  |
| `$failureCallback` | **callable&#124;null** |  |




***

### normalizeServers

Normalize a list of servers into the following format:
array(array('host' => <host>, 'port' => <port>, 'weight' => <weight>)[, ...])

```php
protected normalizeServers(string|array& $servers): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$servers` | **string&#124;array** |  |




***

### normalizeServer

Normalize one server into the following format:
array(
  'host' => <host>, 'port' => <port>, 'weight' => <weight>,
  'status' => <status>, 'persistent' => <persistent>,
  'timeout' => <timeout>, 'retry_interval' => <retryInterval>,
)

```php
protected normalizeServer(string|array& $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string&#124;array** |  |




***

### compareServers

Compare 2 normalized server arrays
(Compares only the host and the port)

```php
protected compareServers(array $serverA, array $serverB): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$serverA` | **array** |  |
| `$serverB` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
