***

# Utils

Class Utils

* Full name: `\Lime\Helper\Utils`
* Parent class: [`\Lime\Helper`](../Helper.md)

## Methods

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
[
'a' => ['b', 'c'],
'b' => [],
'c' => ['b']
]

a depends on b and c, c depends on b, and b depends on nobody
in this case we would return ['b', 'c', 'a']

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |

***

### strToBool

Converts many english words that equate to true or false to boolean.

```php
public strToBool(string $string, bool $default = false): bool
```

Supports 'y', 'n', 'yes', 'no' and a few other variations.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to convert to boolean |
| `$default` | **bool** | The value to return if we can&#039;t match any<br />yes/no words |

***

### safeTruncate

Truncate a string to a specified length without cutting a word off.

```php
public safeTruncate(string $string, int $length, string $append = &#039;...&#039;): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** | The string to truncate |
| `$length` | **int** | The length to truncate the string to |
| `$append` | **string** | Text to append to the string IF it gets<br />truncated, defaults to &#039;...&#039; |

***

### urlGetContents

Get content from url source.

```php
public urlGetContents(string $url): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |

***

### buildTree

```php
public buildTree(array $elements, array $options = [], mixed $parentId = null): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$elements` | **array** |  |
| `$options` | **array** |  |
| `$parentId` | **mixed** |  |

***

### buildTreeList

```php
public buildTreeList(array $items, array $options = [], mixed $parent = null, mixed $result = null, int $depth, string $path = &#039;-&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$items` | **array** |  |
| `$options` | **array** |  |
| `$parent` | **mixed** |  |
| `$result` | **mixed** |  |
| `$depth` | **int** |  |
| `$path` | **string** |  |

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
public retry(int $times, callable $fn, int $delay): null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$times` | **int** |  |
| `$fn` | **callable** |  |
| `$delay` | **int** |  |

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
public __construct(\Lime\App $app, mixed $context = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$app` | **\Lime\App** |  |
| `$context` | **mixed** |  |

***

### initialize

```php
protected initialize(): mixed
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

