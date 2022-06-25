***

# TextDomain

Text domain.

* Full name: `\Zend\I18n\Translator\TextDomain`
* Parent class: [`ArrayObject`](../../../ArrayObject.md)

## Properties

### pluralRule

Plural rule.

```php
protected \Zend\I18n\Translator\Plural\Rule $pluralRule
```

***

### defaultPluralRule

Default plural rule shared between instances.

```php
protected static \Zend\I18n\Translator\Plural\Rule $defaultPluralRule
```

* This property is **static**.

***

## Methods

### setPluralRule

Set the plural rule

```php
public setPluralRule(\Zend\I18n\Translator\Plural\Rule $rule): \Zend\I18n\Translator\TextDomain
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rule` | **\Zend\I18n\Translator\Plural\Rule** |  |

***

### getPluralRule

Get the plural rule.

```php
public getPluralRule(bool $fallbackToDefaultRule = true): \Zend\I18n\Translator\Plural\Rule|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fallbackToDefaultRule` | **bool** |  |

***

### hasPluralRule

Checks whether the text domain has a plural rule.

```php
public hasPluralRule(): bool
```

***

### getDefaultPluralRule

Returns a shared default plural rule.

```php
public static getDefaultPluralRule(): \Zend\I18n\Translator\Plural\Rule
```

* This method is **static**.

***

### merge

Merge another text domain with the current one.

```php
public merge(\Zend\I18n\Translator\TextDomain $textDomain): \Zend\I18n\Translator\TextDomain
```

The plural rule of both text domains must be compatible for a successful merge. We are only validating the number of
plural forms though, as the same rule could be made up with different expression.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$textDomain` | **\Zend\I18n\Translator\TextDomain** |  |

yxorP::get('REQUEST')
