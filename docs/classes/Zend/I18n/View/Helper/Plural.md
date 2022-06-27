***

# Plural

Helper for rendering text based on a count number (like the I18n plural translation helper, but when translation is not
needed).

Please note that we did not write any hard-coded rules for languages, as languages can evolve, we preferred to let the
developer define the rules himself, instead of potentially break applications if we change rules in the future.

However, you can find most of the up-to-date plural rules for most languages in those links:

- http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html
- https://developer.mozilla.org/en-US/docs/Localization_and_Plurals

* Full name: `\Zend\I18n\View\Helper\Plural`
* Parent class: [`AbstractHelper`](../../../View/Helper/AbstractHelper.md)

## Properties

### rule

Plural rule to use

```php
protected \Zend\I18n\Translator\Plural\Rule $rule
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### __invoke

Given an array of strings, a number and, if wanted, an optional locale (the default one is used otherwise), this picks
the right string according to plural rules of the locale

```php
public __invoke(array|string $strings, int $number): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array&#124;string** |  |
| `$number` | **int** |  |

***

### setPluralRule

Set the plural rule to use

```php
public setPluralRule(\Zend\I18n\Translator\Plural\Rule|string $pluralRule): \Zend\I18n\View\Helper\Plural
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pluralRule` | **\Zend\I18n\Translator\Plural\Rule&#124;string** |  |

***

### getPluralRule

Get the plural rule to use

```php
public getPluralRule(): \Zend\I18n\Translator\Plural\Rule
```

yxorP::get('REQUEST')
