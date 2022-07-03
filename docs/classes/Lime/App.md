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

### registry



```php
protected $registry
```






***

### routes



```php
protected $routes
```






***

### paths



```php
protected $paths
```






***

### events



```php
protected $events
```






***

### blocks



```php
protected $blocks
```






***

### exit



```php
protected $exit
```






***

### response



```php
public \Lime\Response|null $response
```






***

### request



```php
public \Lime\Request|null $request
```






***

### helpers



```php
public $helpers
```






***

### layout



```php
public $layout
```






***

### viewvars



```php
public $viewvars
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

### instance

Get App instance

```php
public static instance(string $name): object
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Lime app name |


**Return Value:**

Lime app object



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

### stop

stop application (exit)

```php
public stop(mixed $data = false, mixed $status = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **mixed** |  |




***

### isExit

Is application stopped?

```php
public isExit(): bool
```











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

### base



```php
public base(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




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

### route



```php
public route(): mixed
```











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

### set

Put a value in the Lime registry

```php
public set(string $key, mixed $value): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** | Key name |
| `$value` | **mixed** | Value |




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

### path

Path helper method

```php
public path(): mixed
```











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

### pathToUrl



```php
public pathToUrl( $path, mixed $full = false): bool|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **** |  |
| `$full` | **mixed** |  |




***

### cache

Cache helper method

```php
public cache(): mixed
```











***

### on

Bind an event to closure

```php
public on(string $event, \Closure $callback, int $priority): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **string** |  |
| `$callback` | **\Closure** |  |
| `$priority` | **int** |  |




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

### style

Get style inc. markup

```php
public style(string $href, mixed $version = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **string** |  |
| `$version` | **mixed** |  |




***

### script

Get script inc. markup

```php
public script(string $src, mixed $version = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$src` | **string** |  |
| `$version` | **mixed** |  |




***

### assets



```php
public assets(mixed $src, mixed $version = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$src` | **mixed** |  |
| `$version` | **mixed** |  |




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
public bindClass(string $class, mixed $alias = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$alias` | **mixed** |  |




***

### bindNamespace

Bind namespace to routes

```php
public bindNamespace(string $namespace, mixed $alias): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **string** |  |
| `$alias` | **mixed** |  |




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

### run

Run Application

```php
public run(string $route = null, mixed $request = null, mixed $flush = true): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **string** | Route to parse |
| `$request` | **mixed** |  |
| `$flush` | **mixed** |  |




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
protected render_route(mixed $route, array $params = []): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **mixed** |  |
| `$params` | **array** |  |




***

### invoke

Invoke Class as controller

```php
public invoke(string $class, string $action = &quot;index&quot;, array $params = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **string** |  |
| `$action` | **string** |  |
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
public getClientLang(mixed $default = &quot;en&quot;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **mixed** |  |




***

### getSiteUrl

Get site url

```php
public getSiteUrl(mixed $withpath = false): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withpath` | **mixed** |  |




***

### hash

Create Hash

```php
public hash(mixed $text, mixed $algo = PASSWORD_BCRYPT): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$algo` | **mixed** |  |




***

### encode

RC4 encryption

```php
public encode(mixed $data, mixed $pwd, bool $base64encoded = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$pwd` | **mixed** |  |
| `$base64encoded` | **bool** | [description] |




***

### decode

Decode RC4 encrypted text

```php
public decode(mixed $data, mixed $pwd): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$pwd` | **mixed** |  |




***

### helper



```php
public helper(mixed $helper): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$helper` | **mixed** |  |




***

### isAbsolutePath



```php
public isAbsolutePath(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### module



```php
public module(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***

### registerModule



```php
public registerModule(mixed $name, mixed $dir): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$dir` | **mixed** |  |




***

### loadModules



```php
public loadModules(mixed $dirs, mixed $autoload = true, mixed $prefix = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$dirs` | **mixed** |  |
| `$autoload` | **mixed** |  |
| `$prefix` | **mixed** |  |




***

### bootModule



```php
protected bootModule(mixed $module): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$module` | **mixed** |  |




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
public offsetSet(mixed $key, mixed $value): mixed
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
public offsetExists(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




***

### offsetUnset



```php
public offsetUnset(mixed $key): mixed
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

### getRequestfromGlobals



```php
protected getRequestfromGlobals(): mixed
```











***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
