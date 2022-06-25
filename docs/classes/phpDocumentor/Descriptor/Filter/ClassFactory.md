***

# ClassFactory

Retrieves a series of filters to manipulate a specific Descriptor with during building.

* Full name: `\phpDocumentor\Descriptor\Filter\ClassFactory`

## Properties

### chains

```php
protected \Zend\Filter\FilterChain[] $chains
```

***

## Methods

### getChainFor

Retrieves the filters for a class with a given FQCN.

```php
public getChainFor(string $fqcn): \Zend\Filter\FilterChain
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fqcn` | **string** |  |

yxorP::get('REQUEST')
