***

# FileLoader

ArrayLoader loads translations from a PHP array.



* Full name: `\Symfony\Component\Translation\Loader\FileLoader`
* Parent class: [`\Symfony\Component\Translation\Loader\ArrayLoader`](./ArrayLoader.md)
* This class is an **Abstract class**




## Methods


### load

Loads a locale.

```php
public load(mixed $resource, mixed $locale, mixed $domain = &#039;messages&#039;): \Symfony\Component\Translation\MessageCatalogue
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$locale` | **mixed** | A locale |
| `$domain` | **mixed** | The domain |


**Return Value:**

A MessageCatalogue instance



***

### loadResource



```php
protected loadResource(mixed $resource): mixed
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** |  |




***


## Inherited methods


### load

Loads a locale.

```php
public load(mixed $resource, mixed $locale, mixed $domain = &#039;messages&#039;): \Symfony\Component\Translation\MessageCatalogue
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$resource` | **mixed** | A resource |
| `$locale` | **mixed** | A locale |
| `$domain` | **mixed** | The domain |


**Return Value:**

A MessageCatalogue instance



***

### flatten

Flattens an nested array of translations.

```php
private flatten(array& $messages, array $subnode = null, string $path = null): mixed
```

The scheme used is:
  'key' => array('key2' => array('key3' => 'value'))
Becomes:
  'key.key2.key3' => 'value'

This function takes an array by reference and will modify it






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messages` | **array** | The array that will be flattened |
| `$subnode` | **array** | Current subnode being parsed, used internally for recursive calls |
| `$path` | **string** | Current path being parsed, used internally for recursive calls |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
