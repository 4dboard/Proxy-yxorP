***

# Yaml

Yaml offers convenience methods to load and dump YAML.

* Full name: `\Symfony\Component\Yaml\Yaml`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DUMP_OBJECT`|public| |1|
|`PARSE_EXCEPTION_ON_INVALID_TYPE`|public| |2|
|`PARSE_OBJECT`|public| |4|
|`PARSE_OBJECT_FOR_MAP`|public| |8|
|`DUMP_EXCEPTION_ON_INVALID_TYPE`|public| |16|
|`PARSE_DATETIME`|public| |32|
|`DUMP_OBJECT_AS_MAP`|public| |64|
|`DUMP_MULTI_LINE_LITERAL_BLOCK`|public| |128|
|`PARSE_CONSTANT`|public| |256|
|`PARSE_CUSTOM_TAGS`|public| |512|
|`DUMP_EMPTY_ARRAY_AS_SEQUENCE`|public| |1024|
|`DUMP_NULL_AS_TILDE`|public| |2048|

## Methods

### parseFile

Parses a YAML file into a PHP value.

```php
public static parseFile(string $filename, int $flags): mixed
```

Usage:

$array = Yaml::parseFile('config.yml');
print_r($array);

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | The path to the YAML file to be parsed |
| `$flags` | **int** | A bit field of PARSE_* constants to customize the YAML parser behavior |

***

### parse

Parses YAML into a PHP value.

```php
public static parse(string $input, int $flags): mixed
```

Usage:
<code>
$array = Yaml::parse(file_get_contents('config.yml'));
print_r($array);
</code>

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string** | A string containing YAML |
| `$flags` | **int** | A bit field of PARSE_* constants to customize the YAML parser behavior |

***

### dump

Dumps a PHP value to a YAML string.

```php
public static dump(mixed $input, int $inline = 2, int $indent = 4, int $flags): string
```

The dump method, when supplied with an array, will do its best
to convert the array into friendly YAML.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** | The PHP value |
| `$inline` | **int** | The level where you switch to inline YAML |
| `$indent` | **int** | The amount of spaces to use for indentation of nested nodes |
| `$flags` | **int** | A bit field of DUMP_* constants to customize the dumped YAML string |

***


***

