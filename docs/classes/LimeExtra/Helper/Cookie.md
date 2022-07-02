***

# Cookie





* Full name: `\LimeExtra\Helper\Cookie`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)



## Properties


### _cookies



```php
protected array $_cookies
```






***

### _deleted_cookies



```php
protected array $_deleted_cookies
```






***

## Methods


### set

sets a cookie

```php
public set(string $name, string $value = &quot;&quot;, mixed $ttl = 86400, string $path = &#039;/&#039;, string $domain = &#039;&#039;, bool $secure = false, bool $http_only = false, (string|null) $same_site = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **string** |  |
| `$ttl` | **mixed** |  |
| `$path` | **string** |  |
| `$domain` | **string** |  |
| `$secure` | **bool** |  |
| `$http_only` | **bool** |  |
| `$same_site` | **(string&#124;null)** |  |




***

### get

gets a cookie

```php
public get(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### delete

deletes a cookie

```php
public delete(string $name, mixed $path = &#039;/&#039;, mixed $domain = &#039;&#039;, mixed $secure = false, mixed $http_only = false, mixed $same_site = null): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$path` | **mixed** |  |
| `$domain` | **mixed** |  |
| `$secure` | **mixed** |  |
| `$http_only` | **mixed** |  |
| `$same_site` | **mixed** |  |




***

### getAndDelete

gets a cookie and eats it

```php
public getAndDelete(string $name, mixed $path = &#039;/&#039;, mixed $domain = &#039;&#039;, mixed $secure = false, mixed $http_only = false, mixed $same_site = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$path` | **mixed** |  |
| `$domain` | **mixed** |  |
| `$secure` | **mixed** |  |
| `$http_only` | **mixed** |  |
| `$same_site` | **mixed** |  |




***


## Inherited methods


### __construct



```php
public __construct(mixed $app): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **mixed** |  |




***

### initialize



```php
public initialize(): mixed
```











***

### __call



```php
public __call(mixed $name, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |




***

### __invoke



```php
public __invoke(mixed $helper): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |




***

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***
> yxorP Documentation
