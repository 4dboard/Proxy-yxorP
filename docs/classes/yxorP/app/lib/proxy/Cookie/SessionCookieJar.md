***

# SessionCookieJar





* Full name: `\yxorP\app\lib\proxy\Cookie\SessionCookieJar`
* Parent class: [`\yxorP\app\lib\proxy\Cookie\CookieJar`](./CookieJar.md)



## Properties


### sessionKey



```php
private $sessionKey
```






***

### storeSessionCookies



```php
private $storeSessionCookies
```






***

## Methods


### __construct



```php
public __construct(mixed $sessionKey, mixed $storeSessionCookies = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionKey` | **mixed** |  |
| `$storeSessionCookies` | **mixed** |  |




***

### __destruct



```php
public __destruct(): mixed
```











***

### save



```php
public save(): mixed
```











***

### load



```php
protected load(): mixed
```











***


## Inherited methods


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
public static shouldPersist(\yxorP\app\lib\proxy\Cookie\SetCookie $cookie, mixed $allowSessionCookies = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\app\lib\proxy\Cookie\SetCookie** |  |
| `$allowSessionCookies` | **mixed** |  |




***

### setCookie



```php
public setCookie(\yxorP\app\lib\proxy\Cookie\SetCookie $cookie): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\app\lib\proxy\Cookie\SetCookie** |  |




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
public extractCookies(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |




***

### withCookieHeader



```php
public withCookieHeader(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |




***

### removeCookieIfEmpty



```php
private removeCookieIfEmpty(\yxorP\app\lib\proxy\Cookie\SetCookie $cookie): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\app\lib\proxy\Cookie\SetCookie** |  |




***

### getCookiePathFromRequest



```php
private getCookiePathFromRequest(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |




***


***

