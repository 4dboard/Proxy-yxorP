***

# Utils

Class Utils



* Full name: `\LimeExtra\Helper\Utils`
* Parent class: [`\Lime\Helper`](../../Lime/Helper.md)




## Methods


### gravatar



```php
public gravatar( $email, int $size = 40): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **** |  |
| `$size` | **int** |  |




***

### formatSize



```php
public formatSize( $size): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **** |  |




***

### getMaxUploadSize

Return max upload size

```php
public getMaxUploadSize(): int
```











***

### parseSize

Parse size string

```php
public parseSize(string $size): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$size` | **string** |  |




***

### fixRelativeUrls



```php
public fixRelativeUrls( $content, string $base = &#039;/&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$content` | **** |  |
| `$base` | **string** |  |




***

### sluggify



```php
public sluggify( $string, string $replacement = &#039;-&#039;, bool|true $tolower = true): mixed|string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **** |  |
| `$replacement` | **string** |  |
| `$tolower` | **bool&#124;true** |  |




***

### resolveDependencies

resolves complicated dependencies to determine what order something can run in

```php
public resolveDependencies(array $data): array
```

start with an array like:
array(
    'a' => array('b', 'c'),
    'b' => array(),
    'c' => array('b')
)

a depends on b and c, c depends on b, and b depends on nobody
in this case we would return array('b', 'c', 'a')






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |




***

### str_to_bool

Converts many english words that equate to true or false to boolean.

```php
public str_to_bool(string $string, bool $default = false): bool
```

Supports 'y', 'n', 'yes', 'no' and a few other variations.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to convert to boolean |
| `$default` | **bool** | The value to return if we can&#039;t match any<br />yes/no words |




***

### safe_truncate

Truncate a string to a specified length without cutting a word off.

```php
public safe_truncate(string $string, int $length, string $append = &#039;...&#039;): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to truncate |
| `$length` | **int** | The length to truncate the string to |
| `$append` | **string** | Text to append to the string IF it gets<br />truncated, defaults to &#039;...&#039; |




***

### url_get_contents

Get content from url source.

```php
public url_get_contents(string $url): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |




***

### buildTree



```php
public buildTree(array $elements, mixed $options = [], mixed $parentId = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |
| `$options` | **mixed** |  |
| `$parentId` | **mixed** |  |




***

### buildTreeList



```php
public buildTreeList(mixed $items, mixed $options = [], mixed $parent = null, mixed $result = null, mixed $depth, mixed $path = &#039;-&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **mixed** |  |
| `$options` | **mixed** |  |
| `$parent` | **mixed** |  |
| `$result` | **mixed** |  |
| `$depth` | **mixed** |  |
| `$path` | **mixed** |  |




***

### getBearerToken

get access token from header

```php
public getBearerToken(): mixed
```











***

### isEmail

Check if string is valid email

```php
public isEmail(string $email): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |




***

### fixStringBooleanValues

Cast boolean string values to boolean

```php
public fixStringBooleanValues(mixed& $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### fixStringNumericValues

Cast numeric string values to numbers

```php
public fixStringNumericValues(mixed& $input): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** |  |




***

### retry

Execute callable with retry if it fails

```php
public retry(int $times, callable $fn): null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$times` | **int** |  |
| `$fn` | **callable** |  |




***

### var_export

var_export with bracket array notation
source: https://www.php.net/manual/en/function.var-export.php#122853

```php
public var_export(mixed $expr, bool $return = false): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$expr` | **mixed** |  |
| `$return` | **bool** |  |




***


## Inherited methods


### __construct



```php
public __construct(mixed $app): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **mixed** |  |




***

### initialize



```php
public initialize(): mixed
```











***

### __call



```php
public __call(mixed $name, mixed $arguments): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |
| `$arguments` | **mixed** |  |




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

### __get



```php
public __get(mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
