***

# ReferenceDumper

Dumps a Yaml reference configuration for the given configuration/node instance.

* Full name: `\Symfony\Component\Config\Definition\ReferenceDumper`
* Parent class: [`\Symfony\Component\Config\Definition\Dumper\YamlReferenceDumper`](./Dumper/YamlReferenceDumper.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Inherited methods

### dump

```php
public dump(\Symfony\Component\Config\Definition\ConfigurationInterface $configuration): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$configuration` | **\Symfony\Component\Config\Definition\ConfigurationInterface** |  |

***

### dumpNode

```php
public dumpNode(\Symfony\Component\Config\Definition\NodeInterface $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |

***

### writeNode

```php
private writeNode(\Symfony\Component\Config\Definition\NodeInterface $node, int $depth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\Symfony\Component\Config\Definition\NodeInterface** |  |
| `$depth` | **int** |  |

***

### writeLine

Outputs a single config reference line.

```php
private writeLine(string $text, int $indent): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$text` | **string** |  |
| `$indent` | **int** |  |

***

### writeArray

```php
private writeArray(array $array, mixed $depth): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$array` | **array** |  |
| `$depth` | **mixed** |  |

yxorP::get('REQUEST')
