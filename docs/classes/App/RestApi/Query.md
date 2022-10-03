***

# Query





* Full name: `\App\RestApi\Query`
* Parent class: [`\Lime\AppAware`](../../Lime/AppAware.md)



## Properties


### endpoints



```php
protected array $endpoints
```






***

### initialized



```php
protected bool $initialized
```






***

## Methods


### init



```php
public init(): mixed
```











***

### process



```php
public process(string $path, string $method = &#039;GET&#039;, ?string $apiKey = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$method` | **string** |  |
| `$apiKey` | **?string** |  |




***

### addEndPoint



```php
public addEndPoint(string $path, array $methods = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$methods` | **array** |  |




***

### isPathMatching



```php
protected isPathMatching(mixed $path, mixed $pattern, mixed& $params = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$pattern` | **mixed** |  |
| `$params` | **mixed** |  |




***

### getRegex



```php
protected getRegex(mixed $pattern): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **mixed** |  |




***


## Inherited methods


### __construct



```php
public __construct(\Lime\App $app, mixed $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |




***

### initialize



```php
protected initialize(): mixed
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

