***

# Cache

Zend\Json\Server\Cache: cache Zend\Json\Server\Server server definition and SMD



* Full name: `\Zend\Json\Server\Cache`
* Parent class: [`Cache`](../../Server/Cache.md)




## Methods


### saveSmd

Cache a service map description (SMD) to a file

```php
public static saveSmd(string $filename, \Zend\Json\Server\Server $server): bool
```

Returns true on success, false on failure

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |
| `$server` | **\Zend\Json\Server\Server** |  |




***

### getSmd

Retrieve a cached SMD

```php
public static getSmd(string $filename): string|false
```

On success, returns the cached SMD (a JSON string); a failure, returns
boolean false.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***

### deleteSmd

Delete a file containing a cached SMD

```php
public static deleteSmd(string $filename): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
