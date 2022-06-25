***

# Xml

* Full name: `\Zend\Config\Writer\Xml`
* Parent class: [`\Zend\Config\Writer\AbstractWriter`](./AbstractWriter.md)

## Methods

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

### addBranch

Add a branch to an XML object recursively.

```php
protected addBranch(string $branchName, array $config, \XMLWriter $writer): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$branchName` | **string** |  |
| `$config` | **array** |  |
| `$writer` | **\XMLWriter** |  |

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
