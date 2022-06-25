***

# AbstractTranslatorHelper

* Full name: `\Zend\I18n\View\Helper\AbstractTranslatorHelper`
* Parent class: [`AbstractHelper`](../../../View/Helper/AbstractHelper.md)
* This class implements:
  [`\Zend\I18n\Translator\TranslatorAwareInterface`](../../Translator/TranslatorAwareInterface.md)
* This class is an **Abstract class**

## Properties

### translator

Translator (optional)

```php
protected \Zend\I18n\Translator\TranslatorInterface $translator
```

***

### translatorTextDomain

Translator text domain (optional)

```php
protected string $translatorTextDomain
```

***

### translatorEnabled

Whether translator should be used

```php
protected bool $translatorEnabled
```

***

## Methods

### setTranslator

Sets translator to use in helper

```php
public setTranslator(\Zend\I18n\Translator\TranslatorInterface $translator = null, string $textDomain = null): \Zend\I18n\View\Helper\AbstractTranslatorHelper
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$translator` | **
\Zend\I18n\Translator\TranslatorInterface** | [optional] translator.<br />Default is null, which sets no translator. |
| `$textDomain` | **string** | [optional] text domain<br />Default is null, which skips setTranslatorTextDomain |

***

### getTranslator

Returns translator used in helper

```php
public getTranslator(): \Zend\I18n\Translator\TranslatorInterface|null
```

***

### hasTranslator

Checks if the helper has a translator

```php
public hasTranslator(): bool
```

***

### setTranslatorEnabled

Sets whether translator is enabled and should be used

```php
public setTranslatorEnabled(bool $enabled = true): \Zend\I18n\View\Helper\AbstractTranslatorHelper
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
public setTranslatorTextDomain(string $textDomain = &#039;default&#039;): \Zend\I18n\View\Helper\AbstractTranslatorHelper
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

yxorP::get('REQUEST')
