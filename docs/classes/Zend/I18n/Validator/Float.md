***

# Float

Stub class for backwards compatibility.

Since PHP 7 adds "float" as a reserved keyword, we can no longer have a class named that and retain PHP 7 compatibility.
The original class has been renamed to "IsFloat", and this class is now an extension of it. It raises an
E_USER_DEPRECATED to warn users to migrate.

* Full name: `\Zend\I18n\Validator\Float`
* Parent class: [`\Zend\I18n\Validator\IsFloat`](./IsFloat.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.

## Methods

### __construct

Constructor for the integer validator

```php
public __construct(array|\Zend\I18n\Validator\Traversable $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Zend\I18n\Validator\Traversable** |  |

***

## Inherited methods

### __construct

Constructor for the integer validator

```php
public __construct(array|\Traversable $options = array()): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### getLocale

Returns the set locale

```php
public getLocale(): string
```

***

### setLocale

Sets the locale to use

```php
public setLocale(string|null $locale): float
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string&#124;null** |  |

***

### isValid

Returns true if and only if $value is a floating-point value. Uses the formal definition of a float as described in the
PHP manual: {@link http://www.php.net/float}

```php
public isValid(string $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

yxorP::get('REQUEST')
