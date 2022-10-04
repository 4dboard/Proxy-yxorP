***

# AsciiSlugger

* Full name: `\Symfony\Component\String\Slugger\AsciiSlugger`
* This class implements:
  [`\Symfony\Component\String\Slugger\SluggerInterface`](./SluggerInterface.md)
  , [`\Symfony\Contracts\Translation\LocaleAwareInterface`](../../../Contracts/Translation/LocaleAwareInterface.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`LOCALE_TO_TRANSLITERATOR_ID`|private| |[&#039;am&#039; =&gt; &#039;Amharic-Latin&#039;, &#039;ar&#039; =&gt; &#039;Arabic-Latin&#039;, &#039;az&#039; =&gt; &#039;Azerbaijani-Latin&#039;, &#039;be&#039; =&gt; &#039;Belarusian-Latin&#039;, &#039;bg&#039; =&gt; &#039;Bulgarian-Latin&#039;, &#039;bn&#039; =&gt; &#039;Bengali-Latin&#039;, &#039;de&#039; =&gt; &#039;de-ASCII&#039;, &#039;el&#039; =&gt; &#039;Greek-Latin&#039;, &#039;fa&#039; =&gt; &#039;Persian-Latin&#039;, &#039;he&#039; =&gt; &#039;Hebrew-Latin&#039;, &#039;hy&#039; =&gt; &#039;Armenian-Latin&#039;, &#039;ka&#039; =&gt; &#039;Georgian-Latin&#039;, &#039;kk&#039; =&gt; &#039;Kazakh-Latin&#039;, &#039;ky&#039; =&gt; &#039;Kirghiz-Latin&#039;, &#039;ko&#039; =&gt; &#039;Korean-Latin&#039;, &#039;mk&#039; =&gt; &#039;Macedonian-Latin&#039;, &#039;mn&#039; =&gt; &#039;Mongolian-Latin&#039;, &#039;or&#039; =&gt; &#039;Oriya-Latin&#039;, &#039;ps&#039; =&gt; &#039;Pashto-Latin&#039;, &#039;ru&#039; =&gt; &#039;Russian-Latin&#039;, &#039;sr&#039; =&gt; &#039;Serbian-Latin&#039;, &#039;sr_Cyrl&#039; =&gt; &#039;Serbian-Latin&#039;, &#039;th&#039; =&gt; &#039;Thai-Latin&#039;, &#039;tk&#039; =&gt; &#039;Turkmen-Latin&#039;, &#039;uk&#039; =&gt; &#039;Ukrainian-Latin&#039;, &#039;uz&#039; =&gt; &#039;Uzbek-Latin&#039;, &#039;zh&#039; =&gt; &#039;Han-Latin&#039;]|

## Properties

### defaultLocale

```php
private ?string $defaultLocale
```

***

### symbolsMap

```php
private \Closure|array $symbolsMap
```

***

### transliterators

Cache of transliterators per locale.

```php
private array $transliterators
```

***

## Methods

### __construct

```php
public __construct(string $defaultLocale = null, array|\Closure $symbolsMap = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$defaultLocale` | **string** |  |
| `$symbolsMap` | **array&#124;\Closure** |  |

***

### setLocale

{@inheritdoc}

```php
public setLocale(string $locale): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### getLocale

{@inheritdoc}

```php
public getLocale(): string
```

***

### slug

Creates a slug for the given string and locale, using appropriate transliteration when needed.

```php
public slug(string $string, string $separator = &#039;-&#039;, string $locale = null): \Symfony\Component\String\AbstractUnicodeString
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |
| `$separator` | **string** |  |
| `$locale` | **string** |  |

***

### createTransliterator

```php
private createTransliterator(string $locale): ?\Transliterator
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### getParentLocale

```php
private static getParentLocale(?string $locale): ?string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **?string** |  |

***


***

