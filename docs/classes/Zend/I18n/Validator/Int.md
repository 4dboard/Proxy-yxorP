***

# Int

Stub class for backwards compatibility.

Since PHP 7 adds "int" as a reserved keyword, we can no longer have a class named that and retain PHP 7 compatibility.
The original class has been renamed to "IsInt", and this class is now an extension of it. It raises an E_USER_DEPRECATED
to warn users to migrate.

* Full name: `\Zend\I18n\Validator\Int`
* Parent class: [`\Zend\I18n\Validator\IsInt`](./IsInt.md)
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
public getLocale(): mixed
```

***

### setLocale

Sets the locale to use

```php
public setLocale(string $locale): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$locale` | **string** |  |

***

### isValid

Returns true if and only if $value is a valid integer

```php
public isValid(string|int $value): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;int** |  |

yxorP::get('REQUEST')
