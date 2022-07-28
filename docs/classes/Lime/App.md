***

# App





* Full name: `\Lime\App`
* This class implements:
[`\ArrayAccess`](../ArrayAccess.md)



## Properties


### apps



```php
protected static $apps
```



* This property is **static**.


***

### response



```php
public ?\Lime\Response $response
```






***

### request



```php
public ?\Lime\Request $request
```






***

### helpers



```php
public \ArrayObject $helpers
```






***

### layout



```php
public mixed $layout
```






***

### registry



```php
protected array $registry
```






***

### routes



```php
protected array $routes
```






***

### paths



```php
protected array $paths
```






***

### events



```php
protected array $events
```






***

### blocks



```php
protected array $blocks
```






***

## Methods


### __construct

Constructor

```php
public __construct(array $settings = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settings` | **array** | initial registry settings |




***

### retrieve

Get a value from the Lime registry

```php
public retrieve(string $key, mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$default` | **mixed** |  |




***

### instance

Get App instance

```php
public static instance(string $name, bool $clone = false): object
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Lime app name |
| `$clone` | **bool** |  |


**Return Value:**

Lime app object



***

### __clone

Object behavior on clone

```php
public __clone(): void
```











***

### service

Returns a closure that stores the result of the given closure

```php
public service(string $name, \Closure $callable): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$callable` | **\Closure** |  |




***

### base



```php
public base(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### baseUrl

Returns link based on the base url of the app

```php
public baseUrl(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | e.g. /js/myscript.js |


**Return Value:**

Link



***

### pathToUrl



```php
public pathToUrl( $path, bool $full = false): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |
| `$full` | **bool** |  |




***

### path

Path helper method

```php
public path(): mixed
```











***

### isAbsolutePath



```php
public isAbsolutePath(string $path): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### route



```php
public route(): void
```











***

### routeUrl

Returns link based on the route url of the app

```php
public routeUrl(string $path): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | e.g. /pages/home |


**Return Value:**

Link



***

### reroute

Redirect to path.

```php
public reroute(string $path): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** | Path redirect to. |




***

### stop

stop application (exit)

```php
public stop(mixed $data = null, ?int $status = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **?int** |  |




***

### trigger

Trigger event.

```php
public trigger(string $event, array $params = []): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$params` | **array** |  |




***

### set

Put a value in the Lime registry

```php
public set(string $key, mixed $value): \Lime\App
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Key name |
| `$value` | **mixed** | Value |




***

### paths



```php
public paths( $namespace = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **** |  |




***

### cache

Cache helper method

```php
public cache(): mixed
```











***

### helper



```php
public helper(string $helper): \Lime\Helper
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **string** |  |




***

### on

Bind an event to closure

```php
public on(string $event, \Closure $callback, int $priority): \Lime\App
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$callback` | **\Closure** |  |
| `$priority` | **int** |  |




***

### render

Render view.

```php
public render(string $____template, array $_____slots = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$____template` | **string** | Path to view |
| `$_____slots` | **array** | Passed variables |


**Return Value:**

Rendered view



***

### start

Start block

```php
public start(string $name): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### end

End block

```php
public end(string $name): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### block

Get block content

```php
public block(string $name, array $options = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$options` | **array** |  |




***

### escape

Escape string.

```php
public escape(string $string, string $charset = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$charset` | **string** |  |




***

### assets

Get assets inc. markup

```php
public assets(array|string $src, mixed $version = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$src` | **array&#124;string** |  |
| `$version` | **mixed** |  |




***

### script

Get script inc. markup

```php
public script(mixed $src, ?string $version = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$src` | **mixed** |  |
| `$version` | **?string** |  |




***

### style

Get style inc. markup

```php
public style(mixed $href, ?string $version = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **mixed** |  |
| `$version` | **?string** |  |




***

### get

Bind GET request to route

```php
public get(string $path, \Closure $callback, bool $condition = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$callback` | **\Closure** |  |
| `$condition` | **bool** |  |




***

### bind

Bind request to route

```php
public bind(string $path, \Closure $callback, bool $condition = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$callback` | **\Closure** |  |
| `$condition` | **bool** |  |




***

### post

Bind POST request to route

```php
public post(string $path, \Closure $callback, bool $condition = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |
| `$callback` | **\Closure** |  |
| `$condition` | **bool** |  |




***

### bindClass

Bind Class to routes

```php
public bindClass(string $class, ?string $alias = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$alias` | **?string** |  |




***

### invoke

Invoke Class as controller

```php
public invoke(string $class, string $action = &#039;index&#039;, array $params = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$action` | **string** |  |
| `$params` | **array** |  |




***

### bindNamespace

Bind namespace to routes

```php
public bindNamespace(string $namespace, ?string $alias = null): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |
| `$alias` | **?string** |  |




***

### run

Run Application request

```php
public run(string $route = null, ?\Lime\Request $request = null, bool $flush = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **string** | Route to parse |
| `$request` | **?\Lime\Request** |  |
| `$flush` | **bool** |  |




***

### getRequestfromGlobals



```php
protected getRequestfromGlobals(): \Lime\Request
```











***

### dispatch

Dispatch route

```php
public dispatch(string $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |




***

### render_route

Render dispatched route

```php
protected render_route(string $route, array $params = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **string** |  |
| `$params` | **array** |  |




***

### param

Get request variables

```php
public param(string $index = null, mixed $default = null, array $source = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **string** |  |
| `$default` | **mixed** |  |
| `$source` | **array** |  |




***

### req_is

Request helper function

```php
public req_is(string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |




***

### getClientIp

Get client ip.

```php
public getClientIp(): string
```











***

### getClientLang

Get client language

```php
public getClientLang(string $default = &quot;en&quot;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **string** |  |




***

### getSiteUrl

Get site url

```php
public getSiteUrl(bool $withpath = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withpath` | **bool** |  |




***

### hash

Create Hash

```php
public hash(string $text, mixed $algo = PASSWORD_BCRYPT): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |
| `$algo` | **mixed** |  |




***

### decode

Decode RC4 encrypted text

```php
public decode(string $data, string $pwd): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |
| `$pwd` | **string** |  |




***

### encode

RC4 encryption

```php
public encode(string $data, string $pwd, bool $base64encoded = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **string** |  |
| `$pwd` | **string** |  |
| `$base64encoded` | **bool** |  |




***

### module



```php
public module(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### loadModules



```php
public loadModules(mixed $dirs, bool $autoload = true, mixed $prefix = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **mixed** |  |
| `$autoload` | **bool** |  |
| `$prefix` | **mixed** |  |




***

### loadModule



```php
public loadModule(mixed $path, mixed $prefix = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$prefix` | **mixed** |  |




***

### registerModule



```php
public registerModule(string $name, string $dir): \Lime\Module
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$dir` | **string** |  |




***

### bootModule



```php
protected bootModule(\Lime\Module $module): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **\Lime\Module** |  |




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

### offsetSet



```php
public offsetSet(mixed $key, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |




***

### offsetGet



```php
public offsetGet(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetExists



```php
public offsetExists(mixed $key): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetUnset



```php
public offsetUnset(mixed $key): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




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


***

