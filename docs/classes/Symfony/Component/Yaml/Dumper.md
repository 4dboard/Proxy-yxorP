***

# Dumper

Dumper dumps PHP variables to YAML strings.

* Full name: `\Symfony\Component\Yaml\Dumper`

## Properties

### indentation

The amount of spaces to use for indentation of nested nodes.

```php
private int $indentation
```

***

## Methods

### __construct

```php
public __construct(int $indentation = 4): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$indentation` | **int** |  |

***

### dump

Dumps a PHP value to YAML.

```php
public dump(mixed $input, int $inline, int $indent, int $flags): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **mixed** | The PHP value |
| `$inline` | **int** | The level where you switch to inline YAML |
| `$indent` | **int** | The level of indentation (used internally) |
| `$flags` | **int** | A bit field of Yaml::DUMP_* constants to customize the dumped YAML string |

***


***

