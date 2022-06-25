***

# MemcachedResourceManager

This is a resource manager for memcached



* Full name: `\Zend\Cache\Storage\Adapter\MemcachedResourceManager`



## Properties


### resources

Registered resources

```php
protected array $resources
```






***

## Methods


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

### normalizeServer

Normalize one server into the following format:
array('host' => <host>, 'port' => <port>, 'weight' => <weight>)

```php
protected normalizeServer(string|array& $server): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **string&#124;array** |  |




***

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

Gets a memcached resource

```php
public getResource(string $id): \Memcached
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setResource

Set a resource

```php
public setResource(string $id, array|\Traversable|\Memcached $resource): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$resource` | **array&#124;\Traversable&#124;\Memcached** |  |


**Return Value:**

Fluent interface



***

### removeResource

Remove a resource

```php
public removeResource(string $id): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |


**Return Value:**

Fluent interface



***

### setPersistentId

Set the persistent id

```php
public setPersistentId(string $id, string $persistentId): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$persistentId` | **string** |  |


**Return Value:**

Fluent interface



***

### getPersistentId

Get the persistent id

```php
public getPersistentId(string $id): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### normalizePersistentId

Normalize the persistent id

```php
protected normalizePersistentId(string& $persistentId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$persistentId` | **string** |  |




***

### setLibOptions

Set Libmemcached options

```php
public setLibOptions(string $id, array $libOptions): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$libOptions` | **array** |  |


**Return Value:**

Fluent interface



***

### getLibOptions

Get Libmemcached options

```php
public getLibOptions(string $id): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




***

### setLibOption

Set one Libmemcached option

```php
public setLibOption(string $id, string|int $key, mixed $value): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$key` | **string&#124;int** |  |
| `$value` | **mixed** |  |


**Return Value:**

Fluent interface



***

### getLibOption

Get one Libmemcached option

```php
public getLibOption(string $id, string|int $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$key` | **string&#124;int** |  |




***

### normalizeLibOptions

Normalize libmemcached options

```php
protected normalizeLibOptions(array|\Traversable& $libOptions): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$libOptions` | **array&#124;\Traversable** |  |




***

### normalizeLibOptionKey

Convert option name into it's constant value

```php
protected normalizeLibOptionKey(string|int& $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string&#124;int** |  |




***

### setServers

Set servers

```php
public setServers(string $id, string|array $servers): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```

$servers can be an array list or a comma separated list of servers.
One server in the list can be descripted as follows:
- URI:   [tcp://]<host>[:<port>][?weight=<weight>]
- Assoc: array('host' => <host>[, 'port' => <port>][, 'weight' => <weight>])
- List:  array(<host>[, <port>][, <weight>])






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$servers` | **string&#124;array** |  |




***

### addServers

Add servers

```php
public addServers(string $id, string|array $servers): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
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
public addServer(string $id, string|array $server): \Zend\Cache\Storage\Adapter\MemcachedResourceManager
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$server` | **string&#124;array** |  |




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
