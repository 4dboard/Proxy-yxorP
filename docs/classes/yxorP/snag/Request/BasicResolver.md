***

# BasicResolver





* Full name: `\yxorP\snag\Request\BasicResolver`
* This class implements:
[`\yxorP\snag\Request\ResolverInterface`](./ResolverInterface.md)




## Methods


### resolve



```php
public resolve(): \yxorP\snag\Request\NullRequest|\yxorP\snag\Request\ConsoleRequest|\yxorP\snag\Request\PhpRequest
```











***

### getInputParams



```php
protected static getInputParams(array $server, array $params, mixed $fallbackToInput = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **array** |  |
| `$params` | **array** |  |
| `$fallbackToInput` | **mixed** |  |




***

### parseInput



```php
protected static parseInput(array $server, mixed $input): ?array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **array** |  |
| `$input` | **mixed** |  |




***

### readInput



```php
protected static readInput(): bool|string
```



* This method is **static**.







***

### getRequestHeaders



```php
protected static getRequestHeaders(array $server): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$server` | **array** |  |




***


***

