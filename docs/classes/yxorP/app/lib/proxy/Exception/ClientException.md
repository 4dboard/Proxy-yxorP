***

# clientException





* Full name: `\yxorP\lib\proxy\exception\clientException`
* Parent class: [`\yxorP\lib\proxy\exception\badResponseException`](./badResponseException.md)






## Inherited methods


### __construct



```php
public __construct(mixed $message, \yxorP\lib\psr\http\message\requestInterface $request, \yxorP\lib\psr\http\message\responseInterface $response = null, \Exception $previous = null, array $handlerContext = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **mixed** |  |
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |
| `$previous` | **\Exception** |  |
| `$handlerContext` | **array** |  |




***

### wrapException



```php
public static wrapException(\yxorP\lib\psr\http\message\requestInterface $request, \Exception $e): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$e` | **\Exception** |  |




***

### create



```php
public static create(\yxorP\lib\psr\http\message\requestInterface $request, \yxorP\lib\psr\http\message\responseInterface $response = null, \Exception $previous = null, array $ctx = []): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\lib\psr\http\message\requestInterface** |  |
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |
| `$previous` | **\Exception** |  |
| `$ctx` | **array** |  |




***

### obfuscateUri



```php
private static obfuscateUri(\yxorP\lib\psr\http\message\uriInterface $uri): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$uri` | **\yxorP\lib\psr\http\message\uriInterface** |  |




***

### getResponseBodySummary



```php
public static getResponseBodySummary(\yxorP\lib\psr\http\message\responseInterface $response): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$response` | **\yxorP\lib\psr\http\message\responseInterface** |  |




***

### getRequest



```php
public getRequest(): mixed
```











***

### getResponse



```php
public getResponse(): mixed
```











***

### hasResponse



```php
public hasResponse(): mixed
```











***

### getHandlerContext



```php
public getHandlerContext(): mixed
```











***


***

