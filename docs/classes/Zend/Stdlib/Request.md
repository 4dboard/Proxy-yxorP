***

# Request





* Full name: `\Zend\Stdlib\Request`
* Parent class: [`\Zend\Stdlib\Message`](./Message.md)
* This class implements:
[`\Zend\Stdlib\RequestInterface`](./RequestInterface.md)






## Inherited methods


### setMetadata

Set message metadata

```php
public setMetadata(string|int|array|\Traversable $spec, mixed $value = null): \Zend\Stdlib\Message
```

Non-destructive setting of message metadata; always adds to the metadata, never overwrites
the entire metadata container.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string&#124;int&#124;array&#124;\Traversable** |  |
| `$value` | **mixed** |  |




***

### getMetadata

Retrieve all metadata or a single metadatum as specified by key

```php
public getMetadata(null|string|int $key = null, null|mixed $default = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **null&#124;string&#124;int** |  |
| `$default` | **null&#124;mixed** |  |




***

### setContent

Set message content

```php
public setContent(mixed $value): \Zend\Stdlib\Message
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***

### getContent

Get message content

```php
public getContent(): mixed
```











***

### toString



```php
public toString(): string
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
