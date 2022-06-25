***

# NumberOfParameterFilter

* Full name: `\Zend\Stdlib\Hydrator\Filter\NumberOfParameterFilter`
* Parent class: [`\Zend\Hydrator\Filter\NumberOfParameterFilter`](../../../Hydrator/Filter/NumberOfParameterFilter.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
  [`\Zend\Stdlib\Hydrator\Filter\FilterInterface`](./FilterInterface.md)

## Inherited methods

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
