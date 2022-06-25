***

# Filter

* Full name: `\Zend\Config\Processor\Filter`
* This class implements:
  [`\Zend\Config\Processor\ProcessorInterface`](./ProcessorInterface.md)

## Properties

### filter

```php
protected \Zend\Filter\FilterInterface $filter
```

***

## Methods

### __construct

Filter all config values using the supplied Zend\Filter

```php
public __construct(\Zend\Filter\FilterInterface $filter): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\Zend\Filter\FilterInterface** |  |

***

### setFilter

```php
public setFilter(\Zend\Filter\FilterInterface $filter): \Zend\Config\Processor\Filter
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filter` | **\Zend\Filter\FilterInterface** |  |

***

### getFilter

```php
public getFilter(): \Zend\Filter\FilterInterface
```

***

### process

Process

```php
public process(\Zend\Config\Config $config): \Zend\Config\Config
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Zend\Config\Config** |  |

***

### processValue

Process a single value

```php
public processValue(mixed $value): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

yxorP::get('REQUEST')
