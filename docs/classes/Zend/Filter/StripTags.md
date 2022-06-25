***

# StripTags

* Full name: `\Zend\Filter\StripTags`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`UNIQUE_ID_PREFIX`|public| |&#039;__Zend_Filter_StripTags__&#039;|

## Properties

### tagsAllowed

Array of allowed tags and allowed attributes for each allowed tag

```php
protected array $tagsAllowed
```

Tags are stored in the array keys, and the array values are themselves arrays of the attributes allowed for the
corresponding tag.




***

### attributesAllowed

Array of allowed attributes for all allowed tags

```php
protected array $attributesAllowed
```

Attributes stored here are allowed for all of the allowed tags.




***

## Methods

### __construct

Sets the filter options Allowed options are
'allowTags' => Tags which are allowed
'allowAttribs' => Attributes which are allowed
'allowComments' => Are comments allowed ?

```php
public __construct(string|array|\Traversable $options = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** |  |

***

### getTagsAllowed

Returns the tagsAllowed option

```php
public getTagsAllowed(): array
```

***

### setTagsAllowed

Sets the tagsAllowed option

```php
public setTagsAllowed(array|string $tagsAllowed): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tagsAllowed` | **array&#124;string** |  |

**Return Value:**

Provides a fluent interface



***

### getAttributesAllowed

Returns the attributesAllowed option

```php
public getAttributesAllowed(): array
```

***

### setAttributesAllowed

Sets the attributesAllowed option

```php
public setAttributesAllowed(array|string $attributesAllowed): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$attributesAllowed` | **array&#124;string** |  |

**Return Value:**

Provides a fluent interface



***

### filter

Defined by Zend\Filter\FilterInterface

```php
public filter(string $value): string|mixed
```

If the value provided is non-scalar, the value will remain unfiltered

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |

***

### _filterTag

Filters a single tag against the current option settings

```php
protected _filterTag(string $tag): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tag` | **string** |  |

***

## Inherited methods

### hasPcreUnicodeSupport

```php
public static hasPcreUnicodeSupport(): bool
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

***

### setOptions

```php
public setOptions(array|\Traversable $options): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |

***

### getOptions

Retrieve options representing object state

```php
public getOptions(): array
```

***

### __invoke

Invoke filter as a command

```php
public __invoke(mixed $value): mixed
```

Proxies to {@link}

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** |  |

***

### isOptions

```php
protected static isOptions(mixed $options): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **mixed** |  |

yxorP::get('REQUEST')
