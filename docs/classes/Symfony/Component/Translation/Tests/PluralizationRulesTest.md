***

# PluralizationRulesTest

Test should cover all languages mentioned on http://translate.sourceforge.net/wiki/l10n/pluralforms
and Plural forms mentioned on http://www.gnu.org/software/gettext/manual/gettext.html#Plural-forms.

See also https://developer.mozilla.org/en/Localization_and_Plurals which mentions 15 rules having a maximum of 6 forms.
The mozilla code is also interesting to check for.

As mentioned by chx http://drupal.org/node/1273968 we can cover all by testing number from 0 to 199

The goal to cover all languages is to far fetched so this test case is smaller.

* Full name: `\Symfony\Component\Translation\Tests\PluralizationRulesTest`
* Parent class: [`PHPUnit_Framework_TestCase`](../../../../PHPUnit_Framework_TestCase.md)

## Methods

### testFailedLangcodes

We test failed langcode here.

```php
public testFailedLangcodes(mixed $nplural, mixed $langCodes): mixed
```

TODO: The languages mentioned in the data provide need to get fixed somehow within PluralizationRules.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nplural` | **mixed** |  |
| `$langCodes` | **mixed** |  |

***

### testLangcodes

```php
public testLangcodes(mixed $nplural, mixed $langCodes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nplural` | **mixed** |  |
| `$langCodes` | **mixed** |  |

***

### successLangcodes

This array should contain all currently known langcodes.

```php
public successLangcodes(): array
```

As it is impossible to have this ever complete we should try as hard as possible to have it almost complete.









***

### failingLangcodes

This array should be at least empty within the near future.

```php
public failingLangcodes(): array
```

This both depends on a complete list trying to add above as understanding the plural rules of the current failing
languages.

**Return Value:**

with nplural together with langcodes



***

### validateMatrix

We validate only on the plural coverage. Thus the real rules is not tested.

```php
protected validateMatrix(string $nplural, array $matrix, bool $expectSuccess = true): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$nplural` | **string** | plural expected |
| `$matrix` | **array** | containing langcodes and their plural index values |
| `$expectSuccess` | **bool** |  |

***

### generateTestData

```php
protected generateTestData(mixed $langCodes): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$langCodes` | **mixed** |  |

yxorP::get('REQUEST')
