***

# MixedStore

Similar to PHP array, but allows any type of data to act as key (including arrays, objects, scalars)

Note: unfortunately when storing array as key - access and modification is O(N)
(yet this should rarely be the case and should be avoided when possible)

* Full name: `\GraphQL\Utils\MixedStore`
* This class implements:
[`\ArrayAccess`](../../ArrayAccess.md)



## Properties


### standardStore



```php
private \GraphQL\Type\Definition\EnumValueDefinition[] $standardStore
```






***

### floatStore



```php
private array $floatStore
```






***

### objectStore



```php
private \SplObjectStorage $objectStore
```






***

### arrayKeys



```php
private callable[] $arrayKeys
```






***

### arrayValues



```php
private \GraphQL\Type\Definition\EnumValueDefinition[] $arrayValues
```






***

### lastArrayKey



```php
private callable[] $lastArrayKey
```






***

### lastArrayValue



```php
private mixed $lastArrayValue
```






***

### nullValue



```php
private mixed $nullValue
```






***

### nullValueIsSet



```php
private bool $nullValueIsSet
```






***

### trueValue



```php
private mixed $trueValue
```






***

### trueValueIsSet



```php
private bool $trueValueIsSet
```






***

### falseValue



```php
private mixed $falseValue
```






***

### falseValueIsSet



```php
private bool $falseValueIsSet
```






***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### offsetExists

Whether a offset exists

```php
public offsetExists(mixed $offset): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | &lt;p&gt;<br />An offset to check for.<br />&lt;/p&gt; |


**Return Value:**

true on success or false on failure.
</p>
<p>
The return value will be casted to boolean if non-boolean was returned.


**See Also:**

* http://php.net/manual/en/arrayaccess.offsetexists.php - 

***

### offsetGet

Offset to retrieve

```php
public offsetGet(mixed $offset): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | &lt;p&gt;<br />The offset to retrieve.<br />&lt;/p&gt; |


**Return Value:**

Can return all value types.


**See Also:**

* http://php.net/manual/en/arrayaccess.offsetget.php - 

***

### offsetSet

Offset to set

```php
public offsetSet(mixed $offset, mixed $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | &lt;p&gt;<br />The offset to assign the value to.<br />&lt;/p&gt; |
| `$value` | **mixed** | &lt;p&gt;<br />The value to set.<br />&lt;/p&gt; |



**See Also:**

* http://php.net/manual/en/arrayaccess.offsetset.php - 

***

### offsetUnset

Offset to unset

```php
public offsetUnset(mixed $offset): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | &lt;p&gt;<br />The offset to unset.<br />&lt;/p&gt; |



**See Also:**

* http://php.net/manual/en/arrayaccess.offsetunset.php - 

***


***

