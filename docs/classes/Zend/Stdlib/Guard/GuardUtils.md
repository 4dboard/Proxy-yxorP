***

# GuardUtils

Static guard helper class

Bridges the gap for allowing refactoring until traits can be used by default.

* Full name: `\Zend\Stdlib\Guard\GuardUtils`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class is an **Abstract class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_EXCEPTION_CLASS`|public| |&#039;Zend\\Stdlib\\Exception\\InvalidArgumentException&#039;|


## Methods


### guardForArrayOrTraversable

Verifies that the data is an array or Traversable

```php
public static guardForArrayOrTraversable(mixed $data, string $dataName = &#039;Argument&#039;, string $exceptionClass = self::DEFAULT_EXCEPTION_CLASS): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | the data to verify |
| `$dataName` | **string** | the data name |
| `$exceptionClass` | **string** | FQCN for the exception |




***

### guardAgainstEmpty

Verify that the data is not empty

```php
public static guardAgainstEmpty(mixed $data, string $dataName = &#039;Argument&#039;, string $exceptionClass = self::DEFAULT_EXCEPTION_CLASS): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | the data to verify |
| `$dataName` | **string** | the data name |
| `$exceptionClass` | **string** | FQCN for the exception |




***

### guardAgainstNull

Verify that the data is not null

```php
public static guardAgainstNull(mixed $data, string $dataName = &#039;Argument&#039;, string $exceptionClass = self::DEFAULT_EXCEPTION_CLASS): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **mixed** | the data to verify |
| `$dataName` | **string** | the data name |
| `$exceptionClass` | **string** | FQCN for the exception |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
