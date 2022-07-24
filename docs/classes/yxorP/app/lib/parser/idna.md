***

# idna





* Full name: `\yxorP\app\lib\parser\idna`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`REGEXP_IDNA_PATTERN`|private| |&#039;/[^\\x20-\\x7f]/&#039;|
|`IDNA_DEFAULT`|public| |0|
|`IDNA_ALLOW_UNASSIGNED`|public| |1|
|`IDNA_USE_STD3_RULES`|public| |2|
|`IDNA_CHECK_BIDI`|public| |4|
|`IDNA_CHECK_CONTEXTJ`|public| |8|
|`IDNA_NONTRANSITIONAL_TO_ASCII`|public| |0x10|
|`IDNA_NONTRANSITIONAL_TO_UNICODE`|public| |0x20|
|`IDNA_CHECK_CONTEXTO`|public| |0x40|
|`ERROR_EMPTY_LABEL`|public| |1|
|`ERROR_LABEL_TOO_LONG`|public| |2|
|`ERROR_DOMAIN_NAME_TOO_LONG`|public| |4|
|`ERROR_LEADING_HYPHEN`|public| |8|
|`ERROR_TRAILING_HYPHEN`|public| |0x10|
|`ERROR_HYPHEN_3_4`|public| |0x20|
|`ERROR_LEADING_COMBINING_MARK`|public| |0x40|
|`ERROR_DISALLOWED`|public| |0x80|
|`ERROR_PUNYCODE`|public| |0x100|
|`ERROR_LABEL_HAS_DOT`|public| |0x200|
|`ERROR_INVALID_ACE_LABEL`|public| |0x400|
|`ERROR_BIDI`|public| |0x800|
|`ERROR_CONTEXTJ`|public| |0x1000|
|`ERROR_CONTEXTO_PUNCTUATION`|public| |0x2000|
|`ERROR_CONTEXTO_DIGITS`|public| |0x4000|
|`IDNA2008_ASCII`|public| |self::IDNA_NONTRANSITIONAL_TO_ASCII | self::IDNA_CHECK_BIDI | self::IDNA_USE_STD3_RULES | self::IDNA_CHECK_CONTEXTJ|
|`IDNA2008_UNICODE`|public| |self::IDNA_NONTRANSITIONAL_TO_UNICODE | self::IDNA_CHECK_BIDI | self::IDNA_USE_STD3_RULES | self::IDNA_CHECK_CONTEXTJ|
|`IDNA2003_ASCII`|public| |self::IDNA_DEFAULT|
|`IDNA2003_UNICODE`|public| |self::IDNA_DEFAULT|


## Methods


### toAscii



```php
public static toAscii(string $domain, int $options): \yxorP\app\lib\parser\idnaInfo
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |
| `$options` | **int** |  |




***

### supportsIdna



```php
private static supportsIdna(): void
```



* This method is **static**.







***

### toUnicode



```php
public static toUnicode(string $domain, int $options): \yxorP\app\lib\parser\idnaInfo
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$domain` | **string** |  |
| `$options` | **int** |  |




***


***
> Automatically generated from source code comments on 2022-07-24 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
