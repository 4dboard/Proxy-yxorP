***

# Yaml

* Full name: `\Zend\Config\Writer\Yaml`
* Parent class: [`\Zend\Config\Writer\AbstractWriter`](./AbstractWriter.md)

## Properties

### yamlEncoder

YAML encoder callback

```php
protected callable $yamlEncoder
```

***

## Methods

### __construct

Constructor

```php
public __construct(callable|string|null $yamlEncoder = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yamlEncoder` | **callable&#124;string&#124;null** |  |

***

### getYamlEncoder

Get callback for decoding YAML

```php
public getYamlEncoder(): callable
```

***

### setYamlEncoder

Set callback for decoding YAML

```php
public setYamlEncoder(callable $yamlEncoder): \Zend\Config\Writer\Yaml
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$yamlEncoder` | **callable** | the decoder to set |

***

### processConfig

processConfig(): defined by AbstractWriter.

```php
public processConfig(array $config): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |

***

## Inherited methods

### toFile

toFile(): defined by Writer interface.

```php
public toFile(string $filename, mixed $config, bool $exclusiveLock = true): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$config` | **mixed** |  |
| `$exclusiveLock` | **bool** |  |

**See Also:**

* \Zend\Config\Writer\WriterInterface::toFile() -

***

### toString

toString(): defined by Writer interface.

```php
public toString(mixed $config): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **mixed** |  |

**See Also:**

* \Zend\Config\Writer\WriterInterface::toString() -

***

### processConfig

```php
protected processConfig(array $config): string
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |

yxorP::get('REQUEST')
