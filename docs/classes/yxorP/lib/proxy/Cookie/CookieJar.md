***

# CookieJar





* Full name: `\yxorP\lib\proxy\Cookie\CookieJar`
* This class implements:
[`\yxorP\lib\proxy\Cookie\CookieJarInterface`](./CookieJarInterface.md)



## Properties


### cookies



```php
private $cookies
```






***

### strictMode



```php
private $strictMode
```






***

## Methods


### __construct



```php
public __construct(mixed $strictMode = false, mixed $cookieArray = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strictMode` | **mixed** |  |
| `$cookieArray` | **mixed** |  |




***

### setCookie



```php
public setCookie(\yxorP\lib\proxy\Cookie\SetCookie $cookie): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\lib\proxy\Cookie\SetCookie** |  |




***

### removeCookieIfEmpty



```php
private removeCookieIfEmpty(\yxorP\lib\proxy\Cookie\SetCookie $cookie): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\lib\proxy\Cookie\SetCookie** |  |




***

### clear



```php
public clear(mixed $domain = null, mixed $path = null, mixed $name = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **mixed** |  |
| `$path` | **mixed** |  |
| `$name` | **mixed** |  |




***

### fromArray



```php
public static fromArray(array $cookies, mixed $domain): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookies` | **array** |  |
| `$domain` | **mixed** |  |




***

### getCookieValue



```php
public static getCookieValue(mixed $value): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### shouldPersist



```php
public static shouldPersist(\yxorP\lib\proxy\Cookie\SetCookie $cookie, mixed $allowSessionCookies = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\lib\proxy\Cookie\SetCookie** |  |
| `$allowSessionCookies` | **mixed** |  |




***

### getCookieByName



```php
public getCookieByName(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### toArray



```php
public toArray(): mixed
```











***

### getIterator



```php
public getIterator(): mixed
```











***

### clearSessionCookies



```php
public clearSessionCookies(): mixed
```











***

### count



```php
public count(): mixed
```











***

### extractCookies



```php
public extractCookies(\yxorP\inc\Psr\Http\Message\RequestInterface $request, \yxorP\inc\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\inc\Psr\Http\Message\ResponseInterface** |  |




***

### getCookiePathFromRequest



```php
private getCookiePathFromRequest(\yxorP\inc\Psr\Http\Message\RequestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |




***

### withCookieHeader



```php
public withCookieHeader(\yxorP\inc\Psr\Http\Message\RequestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\inc\Psr\Http\Message\RequestInterface** |  |




***


***

