***

# Lexy

Lexy class. Simple on the fly template parser class

based on: https://github.com/laravel/framework/blob/master/src/Illuminate/View/Compilers/BladeCompiler.php

* Full name: `\Lexy`



## Properties


### cachePath



```php
protected $cachePath
```






***

### srcinfo



```php
protected $srcinfo
```






***

### compilers



```php
protected $compilers
```






***

### extensions



```php
protected $extensions
```






***

### allowed_calls

[$allowed_calls description]

```php
protected array $allowed_calls
```






***

## Methods


### render

[render description]

```php
public static render(mixed $content, mixed $params = array(), mixed $sandbox = false, mixed $srcinfo = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$params` | **mixed** |  |
| `$sandbox` | **mixed** |  |
| `$srcinfo` | **mixed** |  |




***

### render_file

[render_file description]

```php
public static render_file(mixed $file, array $params = array(), bool $sandbox = false): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$params` | **array** | [description] |
| `$sandbox` | **bool** | [description] |




***

### setCachePath

[setcachePath description]

```php
public setCachePath(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### execute

[execute description]

```php
public execute(mixed $content, array $params = array(), bool $sandbox = false, mixed $srcinfo = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$params` | **array** | [description] |
| `$sandbox` | **bool** | [description] |
| `$srcinfo` | **mixed** |  |




***

### file

[file description]

```php
public file(mixed $file, array $params = array(), bool $sandbox = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$params` | **array** | [description] |
| `$sandbox` | **bool** | [description] |




***

### get_cached_file



```php
protected get_cached_file(mixed $file, mixed $sandbox): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$sandbox` | **mixed** |  |




***

### cache_file



```php
protected cache_file(mixed $file, mixed $cachedfile, mixed $filemtime = null, mixed $sandbox = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$cachedfile` | **mixed** |  |
| `$filemtime` | **mixed** |  |
| `$sandbox` | **mixed** |  |




***

### parse

[parse description]

```php
public parse(mixed $text, bool $sandbox = false, mixed $srcinfo = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$sandbox` | **bool** | [description] |
| `$srcinfo` | **mixed** |  |




***

### compile

[compile description]

```php
protected compile(mixed $text, bool $sandbox = false): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **mixed** |  |
| `$sandbox` | **bool** | [description] |




***

### allowCall



```php
public allowCall(mixed $call): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$call` | **mixed** |  |




***

### extend



```php
public extend(mixed $compiler): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compiler` | **mixed** |  |




***

### check_security

[check_security description]

```php
protected check_security(mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### check_syntax

[check_syntax description]

```php
protected check_syntax(mixed $code): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **mixed** |  |




***

### compile_comments

Rewrites Lexi's comments into PHP comments.

```php
protected compile_comments(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_unescape_echos

Rewrites Lexi's escaped statements.

```php
protected compile_unescape_echos(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_echos

Rewrites Lexi's echo statements into PHP echo statements.

```php
protected compile_echos(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_default_structures

Rewrites Lexi's structure openings into PHP structure openings.

```php
protected compile_default_structures(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_else

Rewrites Lexi's else statements into PHP else statements.

```php
protected compile_else(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_unless

Rewrites Lexi's "unless" statements into valid PHP.

```php
protected compile_unless(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_php_tags

Rewrites Lexi's php tags.

```php
protected compile_php_tags(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### compile_extensions

Execute user defined compilers.

```php
protected compile_extensions(string $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-07-10 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
