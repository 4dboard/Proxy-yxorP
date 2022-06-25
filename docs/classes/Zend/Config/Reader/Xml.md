***

# Xml

XML config reader.

* Full name: `\Zend\Config\Reader\Xml`
* This class implements:
  [`\Zend\Config\Reader\ReaderInterface`](./ReaderInterface.md)

## Properties

### reader

XML Reader instance.

```php
protected \XMLReader $reader
```

***

### directory

Directory of the file to process.

```php
protected string $directory
```

***

### textNodes

Nodes to handle as plain text.

```php
protected array $textNodes
```

***

## Methods

### fromFile

fromFile(): defined by Reader interface.

```php
public fromFile(string $filename): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |

**See Also:**

* \Zend\Config\Reader\ReaderInterface::fromFile() -

***

### fromString

fromString(): defined by Reader interface.

```php
public fromString(string $string): array|bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

**See Also:**

* \Zend\Config\Reader\ReaderInterface::fromString() -

***

### process

Process data from the created XMLReader.

```php
protected process(): array
```

***

### processNextElement

Process the next inner element.

```php
protected processNextElement(): mixed
```

***

### getAttributes

Get all attributes on the current node.

```php
protected getAttributes(): array
```

yxorP::get('REQUEST')
