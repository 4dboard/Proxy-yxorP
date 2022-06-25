***

# PluralizationRules

Returns the plural rules for a given locale.



* Full name: `\Symfony\Component\Translation\PluralizationRules`



## Properties


### rules



```php
private static $rules
```



* This property is **static**.


***

## Methods


### get

Returns the plural position to use for the given locale and number.

```php
public static get(int $number, string $locale): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$number` | **int** | The number |
| `$locale` | **string** | The locale |


**Return Value:**

The plural position



***

### set

Overrides the default plural rule for a given locale.

```php
public static set(callable $rule, string $locale): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rule` | **callable** | A PHP callable |
| `$locale` | **string** | The locale |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
