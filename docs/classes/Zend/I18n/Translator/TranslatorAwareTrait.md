***

# TranslatorAwareTrait





* Full name: `\Zend\I18n\Translator\TranslatorAwareTrait`



## Properties


### translator



```php
protected \Zend\I18n\Translator\TranslatorInterface $translator
```






***

### translatorEnabled



```php
protected bool $translatorEnabled
```






***

### translatorTextDomain



```php
protected string $translatorTextDomain
```






***

## Methods


### setTranslator

Sets translator to use in helper

```php
public setTranslator(\Zend\I18n\Translator\TranslatorInterface $translator = null, string $textDomain = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **\Zend\I18n\Translator\TranslatorInterface** |  |
| `$textDomain` | **string** |  |




***

### getTranslator

Returns translator used in object

```php
public getTranslator(): \Zend\I18n\Translator\TranslatorInterface
```











***

### hasTranslator

Checks if the object has a translator

```php
public hasTranslator(): bool
```











***

### setTranslatorEnabled

Sets whether translator is enabled and should be used

```php
public setTranslatorEnabled(bool $enabled = true): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enabled` | **bool** |  |




***

### isTranslatorEnabled

Returns whether translator is enabled and should be used

```php
public isTranslatorEnabled(): bool
```











***

### setTranslatorTextDomain

Set translation text domain

```php
public setTranslatorTextDomain(string $textDomain = &#039;default&#039;): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **string** |  |




***

### getTranslatorTextDomain

Return the translation text domain

```php
public getTranslatorTextDomain(): string
```











***

***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)

