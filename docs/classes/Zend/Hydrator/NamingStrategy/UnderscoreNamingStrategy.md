***

# UnderscoreNamingStrategy

* Full name: `\Zend\Hydrator\NamingStrategy\UnderscoreNamingStrategy`
* This class implements:
  [`\Zend\Hydrator\NamingStrategy\NamingStrategyInterface`](./NamingStrategyInterface.md)

## Properties

### camelCaseToUnderscoreFilter

```php
protected static \Zend\Filter\FilterChain|null $camelCaseToUnderscoreFilter
```

* This property is **static**.

***

### underscoreToStudlyCaseFilter

```php
protected static \Zend\Filter\FilterChain|null $underscoreToStudlyCaseFilter
```

* This property is **static**.

***

## Methods

### hydrate

Remove underscores and capitalize letters

```php
public hydrate(string $name): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### extract

Remove capitalized letters and prepend underscores.

```php
public extract(string $name): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getUnderscoreToStudlyCaseFilter

```php
protected getUnderscoreToStudlyCaseFilter(): \Zend\Filter\FilterChain
```

***

### getCamelCaseToUnderscoreFilter

```php
protected getCamelCaseToUnderscoreFilter(): \Zend\Filter\FilterChain
```

yxorP::get('REQUEST')
