***

# App

* Full name: `\LimeExtra\App`
* Parent class: [`\Lime\App`](../Lime/App.md)

## Methods

### __construct

```php
public __construct(mixed $settings = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settings` | **mixed** |  |

***

### renderView

```php
public renderView(mixed $template, mixed $slots = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |
| `$slots` | **mixed** |  |

***

### view

```php
public view(mixed $template, mixed $slots = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |
| `$slots` | **mixed** |  |

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

## Inherited methods

### __construct

```php
public __construct(mixed $settings = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$settings` | **mixed** |  |

***

### retrieve

```php
public retrieve(mixed $key, mixed $default = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$default` | **mixed** |  |

***

### getRequestfromGlobals

```php
protected getRequestfromGlobals(): mixed
```

***

### instance

```php
public static instance(mixed $name): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### service

```php
public service(mixed $name, mixed $callable): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$callable` | **mixed** |  |

***

### isExit

```php
public isExit(): mixed
```

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

### baseUrl

```php
public baseUrl(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### pathToUrl

```php
public pathToUrl(mixed $path, mixed $full = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$full` | **mixed** |  |

***

### path

```php
public path(): mixed
```

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

### route

```php
public route(): mixed
```

***

### routeUrl

```php
public routeUrl(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### reroute

```php
public reroute(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### stop

```php
public stop(mixed $data = false, mixed $status = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$status` | **mixed** |  |

***

### set

```php
public set(mixed $key, mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |
| `$value` | **mixed** |  |

***

### paths

```php
public paths(mixed $namespace = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **mixed** |  |

***

### cache

```php
public cache(): mixed
```

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

### on

```php
public on(mixed $event, mixed $callback, mixed $priority): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **mixed** |  |
| `$callback` | **mixed** |  |
| `$priority` | **mixed** |  |

***

### render

```php
public render(mixed $____template, mixed $_____slots = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$____template` | **mixed** |  |
| `$_____slots` | **mixed** |  |

***

### trigger

```php
public trigger(mixed $event, mixed $params = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **mixed** |  |
| `$params` | **mixed** |  |

***

### start

```php
public start(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### end

```php
public end(mixed $name): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |

***

### block

```php
public block(mixed $name, mixed $options = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$options` | **mixed** |  |

***

### escape

```php
public escape(mixed $string, mixed $charset = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **mixed** |  |
| `$charset` | **mixed** |  |

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

### script

```php
public script(mixed $src, mixed $version = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$src` | **mixed** |  |
| `$version` | **mixed** |  |

***

### style

```php
public style(mixed $href, mixed $version = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$href` | **mixed** |  |
| `$version` | **mixed** |  |

***

### get

```php
public get(mixed $path, mixed $callback, mixed $condition = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$callback` | **mixed** |  |
| `$condition` | **mixed** |  |

***

### bind

```php
public bind(mixed $path, mixed $callback, mixed $condition = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$callback` | **mixed** |  |
| `$condition` | **mixed** |  |

***

### post

```php
public post(mixed $path, mixed $callback, mixed $condition = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$callback` | **mixed** |  |
| `$condition` | **mixed** |  |

***

### bindClass

```php
public bindClass(mixed $class, mixed $alias = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$alias` | **mixed** |  |

***

### invoke

```php
public invoke(mixed $class, mixed $action = &quot;index&quot;, mixed $params = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$class` | **mixed** |  |
| `$action` | **mixed** |  |
| `$params` | **mixed** |  |

***

### bindNamespace

```php
public bindNamespace(mixed $namespace, mixed $alias): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespace` | **mixed** |  |
| `$alias` | **mixed** |  |

***

### run

```php
public run(mixed $route = null, mixed $request = null, mixed $flush = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **mixed** |  |
| `$request` | **mixed** |  |
| `$flush` | **mixed** |  |

***

### dispatch

```php
public dispatch(mixed $path): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |

***

### render_route

```php
protected render_route(mixed $route, mixed $params = []): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$route` | **mixed** |  |
| `$params` | **mixed** |  |

***

### param

```php
public param(mixed $index = null, mixed $default = null, mixed $source = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **mixed** |  |
| `$default` | **mixed** |  |
| `$source` | **mixed** |  |

***

### req_is

```php
public req_is(mixed $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **mixed** |  |

***

### getClientIp

```php
public getClientIp(): mixed
```

***

### getClientLang

```php
public getClientLang(mixed $default = &quot;en&quot;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$default` | **mixed** |  |

***

### getSiteUrl

```php
public getSiteUrl(mixed $withpath = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$withpath` | **mixed** |  |

***

### hash

```php
public hash(mixed $text, mixed $algo = PASSWORD_BCRYPT): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$algo` | **mixed** |  |

***

### decode

```php
public decode(mixed $data, mixed $pwd): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$pwd` | **mixed** |  |

***

### encode

```php
public encode(mixed $data, mixed $pwd, mixed $base64encoded = false): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |
| `$pwd` | **mixed** |  |
| `$base64encoded` | **mixed** |  |

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


***

