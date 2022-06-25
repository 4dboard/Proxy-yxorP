***

# IdentityTranslator

IdentityTranslator does not translate anything.



* Full name: `\Symfony\Component\Translation\IdentityTranslator`
* This class implements:
[`\Symfony\Component\Translation\TranslatorInterface`](./TranslatorInterface.md)



## Properties


### selector



```php
private $selector
```






***

### locale



```php
private $locale
```






***

## Methods


### __construct

Constructor.

```php
public __construct(\Symfony\Component\Translation\MessageSelector|null $selector = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$selector` | **\Symfony\Component\Translation\MessageSelector&#124;null** | The message selector for pluralization |




***

### setLocale

Sets the current locale.

```php
public setLocale(mixed $locale): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **mixed** | The locale |




***

### getLocale

Returns the current locale.

```php
public getLocale(): string
```









**Return Value:**

The locale



***

### trans

Translates the given message.

```php
public trans(mixed $id, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |


**Return Value:**

The translated string



***

### transChoice

Translates the given choice message by choosing a translation according to a number.

```php
public transChoice(mixed $id, mixed $number, array $parameters = array(), mixed $domain = null, mixed $locale = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** | The message id (may also be an object that can be cast to string) |
| `$number` | **mixed** | The number to use to find the indice of the message |
| `$parameters` | **array** | An array of parameters for the message |
| `$domain` | **mixed** | The domain for the message or null to use the default |
| `$locale` | **mixed** | The locale or null to use the default |


**Return Value:**

The translated string



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
