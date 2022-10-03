***

# AbstractAdapter

Base adapter implementation to handle image manipulation.



* Full name: `\ColorThief\Image\Adapter\AbstractAdapter`
* This class implements:
[`\ColorThief\Image\Adapter\AdapterInterface`](./AdapterInterface.md)
* This class is an **Abstract class**



## Properties


### resource



```php
protected object|resource|null $resource
```






***

## Methods


### __construct

Creates new instance of the image adapter.

```php
public __construct(): mixed
```











***

### load

Loads an image resource.

```php
public load(mixed $resource): \ColorThief\Image\Adapter\AdapterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***

### loadFromUrl

Loads an image from given URL.

```php
public loadFromUrl(string $url): \ColorThief\Image\Adapter\AdapterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** |  |




***

### destroy

Destroys the image.

```php
public destroy(): void
```











***

### getResource

Get the raw resource.

```php
public getResource(): resource|object|null
```











***


***

