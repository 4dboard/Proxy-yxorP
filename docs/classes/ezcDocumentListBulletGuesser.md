***

# ezcDocumentListBulletGuesser

Simple mapping class to guess bullet charachters from mark names.

* Full name: `\ezcDocumentListBulletGuesser`

## Properties

### docBookCharMap

Mapping of mark names to UTF-8 bullet characters.

```php
protected $docBookCharMap
```

***

## Methods

### markToChar

Returns a UTF-8 bullet character for the given $mark.

```php
public markToChar(string $mark, string $default = &#039;⚫&#039;): string
```

$mark can be a single character, in which case this character is returned. Otherwise, the given $mark string is tried to
be interpreted and an according UTF-8 char is returned, if found. If this match fails, the $default is returned.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mark` | **string** |  |
| `$default` | **string** |  |

yxorP::get('REQUEST')
