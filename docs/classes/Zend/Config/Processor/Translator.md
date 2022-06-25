***

# Translator





* Full name: `\Zend\Config\Processor\Translator`
* This class implements:
[`\Zend\Config\Processor\ProcessorInterface`](./ProcessorInterface.md)



## Properties


### translator



```php
protected \Zend\I18n\Translator\Translator $translator
```






***

### locale



```php
protected string|null $locale
```






***

### textDomain



```php
protected string $textDomain
```






***

## Methods


### __construct

Translator uses the supplied Zend\I18n\Translator\Translator to find
and translate language strings in config.

```php
public __construct(\Zend\I18n\Translator\Translator $translator, string $textDomain = &#039;default&#039;, string|null $locale = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Zend\I18n\Translator\Translator** |  |
| `$textDomain` | **string** |  |
| `$locale` | **string&#124;null** |  |




***

### setTranslator



```php
public setTranslator(\Zend\I18n\Translator\Translator $translator): \Zend\Config\Processor\Translator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Zend\I18n\Translator\Translator** |  |




***

### getTranslator



```php
public getTranslator(): \Zend\I18n\Translator\Translator
```











***

### setLocale



```php
public setLocale(string|null $locale): \Zend\Config\Processor\Translator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |




***

### getLocale



```php
public getLocale(): string|null
```











***

### setTextDomain



```php
public setTextDomain(string $textDomain): \Zend\Config\Processor\Translator
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |




***

### getTextDomain



```php
public getTextDomain(): string
```











***

### process

Process

```php
public process(\Zend\Config\Config $config): \Zend\Config\Config
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Zend\Config\Config** |  |




***

### processValue

Process a single value

```php
public processValue(mixed $value): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
