***

# clientInterface





* Full name: `\yxorP\app\lib\proxy\clientInterface`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;6.5.5&#039;|

## Methods


### send



```php
public send(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### sendAsync



```php
public sendAsync(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$options` | **array** |  |




***

### request



```php
public request(mixed $method, mixed $uri, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$options` | **array** |  |




***

### requestAsync



```php
public requestAsync(mixed $method, mixed $uri, array $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **mixed** |  |
| `$uri` | **mixed** |  |
| `$options` | **array** |  |




***

### getConfig



```php
public getConfig(mixed $option = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$option` | **mixed** |  |




***


***

