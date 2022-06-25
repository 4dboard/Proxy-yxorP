***

# Minify





* Full name: `\yxorP\Build\Minify`
* This class is an **Abstract class**



## Properties


### data



```php
protected $data
```






***

### patterns



```php
protected $patterns
```






***

### extracted



```php
public $extracted
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### add



```php
public add(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### addFile



```php
public addFile(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### minify



```php
public minify(mixed $path = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### gzip



```php
public gzip(mixed $path = null, mixed $level = 9): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |
| `$level` | **mixed** |  |




***

### cache



```php
public cache(\Psr\Cache\CacheItemInterface $item): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$item` | **\Psr\Cache\CacheItemInterface** |  |




***

### execute



```php
public execute(mixed $path = null): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### load



```php
protected load(mixed $data): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** |  |




***

### save



```php
protected save(mixed $content, mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |
| `$path` | **mixed** |  |




***

### registerPattern



```php
protected registerPattern(mixed $pattern, mixed $replacement = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pattern` | **mixed** |  |
| `$replacement` | **mixed** |  |




***

### replace



```php
protected replace(mixed $content): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### executeReplacement



```php
protected executeReplacement(mixed $replacement, mixed $match): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **mixed** |  |
| `$match` | **mixed** |  |




***

### extractStrings



```php
protected extractStrings(mixed $chars = &#039;&#039;&quot;&#039;, mixed $placeholderPrefix = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **mixed** |  |
| `$placeholderPrefix` | **mixed** |  |




***

### restoreExtractedData



```php
protected restoreExtractedData(mixed $content): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **mixed** |  |




***

### canImportFile



```php
protected canImportFile(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### openFileForWriting



```php
protected openFileForWriting(mixed $path): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **mixed** |  |




***

### writeToFile



```php
protected writeToFile(mixed $handler, mixed $content, mixed $path = &#039;&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$handler` | **mixed** |  |
| `$content` | **mixed** |  |
| `$path` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
