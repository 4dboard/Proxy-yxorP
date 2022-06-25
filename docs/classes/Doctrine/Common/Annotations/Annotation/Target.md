***

# Target

Annotation that can be used to signal to the parser to check the annotation target during the parsing process.

* Full name: `\Doctrine\Common\Annotations\Annotation\Target`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`TARGET_CLASS`|public| |1|
|`TARGET_METHOD`|public| |2|
|`TARGET_PROPERTY`|public| |4|
|`TARGET_ANNOTATION`|public| |8|
|`TARGET_FUNCTION`|public| |16|
|`TARGET_ALL`|public| |31|

## Properties

### map

```php
private static array&lt;string,int&gt; $map
```

* This property is **static**.

***

### value

```php
public $value
```

***

### targets

Targets as bitmask.

```php
public int $targets
```

***

### literal

Literal target declaration.

```php
public string $literal
```

***

## Methods

### __construct

```php
public __construct(array $values): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |

yxorP::get('REQUEST')
