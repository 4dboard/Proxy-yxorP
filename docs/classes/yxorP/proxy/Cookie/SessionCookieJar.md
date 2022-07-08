***

# SessionCookieJar





* Full name: `\yxorP\proxy\Cookie\SessionCookieJar`
* Parent class: [`\yxorP\proxy\Cookie\CookieJar`](./CookieJar.md)



## Properties


### sessionKey



```php
private $sessionKey
```






***

### storeSessionCookies



```php
private mixed $storeSessionCookies
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

### load



```php
protected load(): mixed
```











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

### setCookie



```php
public setCookie(\yxorP\proxy\Cookie\SetCookie $cookie): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\proxy\Cookie\SetCookie** |  |




***

### removeCookieIfEmpty



```php
private removeCookieIfEmpty(\yxorP\proxy\Cookie\SetCookie $cookie): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\proxy\Cookie\SetCookie** |  |




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
public static fromArray(array $cookies, mixed $domain): \yxorP\proxy\Cookie\CookieJar
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
public static shouldPersist(\yxorP\proxy\Cookie\SetCookie $cookie, mixed $allowSessionCookies = false): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cookie` | **\yxorP\proxy\Cookie\SetCookie** |  |
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
public toArray(): array
```











***

### getIterator



```php
public getIterator(): \ArrayIterator
```











***

### clearSessionCookies



```php
public clearSessionCookies(): mixed
```











***

### count



```php
public count(): int
```











***

### extractCookies



```php
public extractCookies(\yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |




***

### getCookiePathFromRequest



```php
private getCookiePathFromRequest(\yxorP\psr\Http\Message\RequestInterface $request): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |




***

### withCookieHeader



```php
public withCookieHeader(\yxorP\psr\Http\Message\RequestInterface $request): \yxorP\psr\Http\Message\RequestInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |




***


***
> Automatically generated from source code comments on 2022-07-08 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
