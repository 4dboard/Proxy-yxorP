***

# NumberOfParameterFilter

* Full name: `\Zend\Hydrator\Filter\NumberOfParameterFilter`
* This class implements:
  [`\Zend\Hydrator\Filter\FilterInterface`](./FilterInterface.md)

## Properties

### numberOfParameters

The number of parameters beeing accepted

```php
protected int $numberOfParameters
```

***

## Methods

### __construct

```php
public __construct(int $numberOfParameters): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$numberOfParameters` | **int** | Number of accepted parameters |

***

### filter

Should return true, if the given filter does not match

```php
public filter(string $property): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** | the name of the property |

yxorP::get('REQUEST')
