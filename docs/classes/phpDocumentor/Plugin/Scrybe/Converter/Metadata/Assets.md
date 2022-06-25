***

# Assets

This collection manages which assets were found during the discovery phase.

Each asset is represented by an entry containing the path to that asset relative to the project root.

* Full name: `\phpDocumentor\Plugin\Scrybe\Converter\Metadata\Assets`
* Parent class: [`ArrayObject`](../../../../../ArrayObject.md)

## Properties

### project_root

```php
protected string $project_root
```

***

### logger

```php
protected \Monolog\Logger $logger
```

***

## Methods

### setProjectRoot

Sets the project root for the given assets.

```php
public setProjectRoot(string $project_root): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$project_root` | **string** |  |

***

### getProjectRoot

Returns the project root for the given assets.

```php
public getProjectRoot(): string
```

***

### set

Sets an asset to be copied to the given destination path.

```php
public set(string $source_path, string $destination_path): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source_path` | **string** |  |
| `$destination_path` | **string** |  |

***

### setLogger

Sets a logger with which to record warnings.

```php
public setLogger(\Monolog\Logger $logger): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logger` | **\Monolog\Logger** |  |

***

### copyTo

Copies all assets in this collection to their given destination location.

```php
public copyTo(string $destination): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$destination` | **string** |  |

yxorP::get('REQUEST')
