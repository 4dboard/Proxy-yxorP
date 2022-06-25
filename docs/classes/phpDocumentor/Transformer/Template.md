***

# Template

Model representing a template.



* Full name: `\phpDocumentor\Transformer\Template`
* This class implements:
[`\ArrayAccess`](../../ArrayAccess.md), [`\Countable`](../../Countable.md), [`\Iterator`](../../Iterator.md)



## Properties


### name



```php
protected string $name
```






***

### author



```php
protected string $author
```






***

### version



```php
protected string $version
```






***

### copyright



```php
protected string $copyright
```






***

### description



```php
protected string $description
```






***

### transformations



```php
protected \phpDocumentor\Transformer\Transformation[] $transformations
```






***

### parameters



```php
protected \phpDocumentor\Transformer\Template\Parameter[] $parameters
```






***

## Methods


### __construct

Initializes this object with a name and optionally with contents.

```php
public __construct(string $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Name for this template. |




***

### getName

Name for this template.

```php
public getName(): string
```











***

### setAuthor

The name of the author of this template (optionally including mail
address).

```php
public setAuthor(string $author): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$author` | **string** | Name of the author optionally including mail address<br />between angle brackets. |




***

### getAuthor

Returns the name and/or mail address of the author.

```php
public getAuthor(): string
```











***

### setCopyright

Sets the copyright string for this template.

```php
public setCopyright(string $copyright): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$copyright` | **string** | Free-form copyright notice. |




***

### getCopyright

Returns the copyright string for this template.

```php
public getCopyright(): string
```











***

### setVersion

Sets the version number for this template.

```php
public setVersion(string $version): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$version` | **string** | Semantic version number in this format: 1.0.0 |




***

### getVersion

Returns the version number for this template.

```php
public getVersion(): string
```











***

### setDescription

Sets the description for this template.

```php
public setDescription(string $description): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$description` | **string** | An unconstrained text field where the user can provide additional information<br />regarding details of the template. |




***

### getDescription

Returns the description for this template.

```php
public getDescription(): string
```











***

### offsetSet

Sets a transformation at the given offset.

```php
public offsetSet(int|string $offset, \phpDocumentor\Transformer\Transformation $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** | The offset to place the value at. |
| `$value` | **\phpDocumentor\Transformer\Transformation** | The transformation to add to this template. |




***

### offsetGet

Gets the transformation at the given offset.

```php
public offsetGet(int|string $offset): \phpDocumentor\Transformer\Transformation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** | The offset to retrieve from. |




***

### offsetUnset

Offset to unset.

```php
public offsetUnset(int|string $offset): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int&#124;string** | Index of item to unset. |



**See Also:**

* http://php.net/manual/en/arrayaccess.offsetunset.php - 

***

### offsetExists

Whether a offset exists.

```php
public offsetExists(mixed $offset): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **mixed** | An offset to check for. |


**Return Value:**

Returns true on success or false on failure.


**See Also:**

* http://php.net/manual/en/arrayaccess.offsetexists.php - 

***

### count

Count the number of transformations.

```php
public count(): int
```









**Return Value:**

The count as an integer.


**See Also:**

* http://php.net/manual/en/countable.count.php - 

***

### rewind

Rewind the Iterator to the first element

```php
public rewind(): void
```










**See Also:**

* http://php.net/manual/en/iterator.rewind.php - 

***

### valid

Checks if current position is valid.

```php
public valid(): bool
```









**Return Value:**

Returns true on success or false on failure.


**See Also:**

* http://php.net/manual/en/iterator.valid.php - 

***

### key

Return the key of the current element.

```php
public key(): int|string
```









**Return Value:**

scalar on success, integer 0 on failure.


**See Also:**

* http://php.net/manual/en/iterator.key.php - 

***

### next

Move forward to next element.

```php
public next(): void
```









**Return Value:**

Any returned value is ignored.


**See Also:**

* http://php.net/manual/en/iterator.next.php - 

***

### current

Return the current element.

```php
public current(): \phpDocumentor\Transformer\Transformation
```










**See Also:**

* http://php.net/manual/en/iterator.current.php - 

***

### getParameters

Returns the parameters associated with this template.

```php
public getParameters(): \phpDocumentor\Transformer\Template\Parameter[]
```











***

### setParameter

Sets a new parameter in the collection.

```php
public setParameter(string|int $key, \phpDocumentor\Transformer\Template\Parameter $value): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string&#124;int** |  |
| `$value` | **\phpDocumentor\Transformer\Template\Parameter** |  |




***

### propagateParameters

Pushes the parameters of this template into the transformations.

```php
public propagateParameters(): void
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
