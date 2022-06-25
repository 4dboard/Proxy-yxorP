***

# Json

JSON config reader.

* Full name: `\Zend\Config\Reader\Json`
* This class implements:
  [`\Zend\Config\Reader\ReaderInterface`](./ReaderInterface.md)

## Properties

### directory

Directory of the JSON file

```php
protected string $directory
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

Process the array for @include

```php
protected process(array $data): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |

yxorP::get('REQUEST')
