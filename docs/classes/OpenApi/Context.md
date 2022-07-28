***

# Context

Context.

The context in which the annotation is parsed.
It includes useful metadata which the Processors can use to augment the annotations.

Context hierarchy:
- parseContext
  |- docBlockContext
  |- classContext
     |- docBlockContext
     |- propertyContext
     |- methodContext

* Full name: `\OpenApi\Context`



## Properties


### _parent

Prototypical inheritance for properties.

```php
private \OpenApi\Context $_parent
```






***

## Methods


### __construct



```php
public __construct(array $properties = [], \OpenApi\Context $parent = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$properties` | **array** | new properties for this context |
| `$parent` | **\OpenApi\Context** | The parent context |




***

### is

Check if a property is set directly on this context and not its parent context.

```php
public is(string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | Example: $c-&gt;is(&#039;method&#039;) or $c-&gt;is(&#039;class&#039;) |




***

### not

Check if a property is NOT set directly on this context and but its parent context.

```php
public not(string $type): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** | Example: $c-&gt;not(&#039;method&#039;) or $c-&gt;not(&#039;class&#039;) |




***

### with

Return the context containing the specified property.

```php
public with(string $property): ?\OpenApi\Context
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |




***

### getRootContext



```php
public getRootContext(): \OpenApi\Context
```











***

### getDebugLocation

Export location for debugging.

```php
public getDebugLocation(): string
```









**Return Value:**

Example: "file1.php on line 12"



***

### __get

Traverse the context tree to get the property value.

```php
public __get(string $property): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$property` | **string** |  |




***

### __toString



```php
public __toString(): mixed
```











***

### __debugInfo



```php
public __debugInfo(): mixed
```











***

### phpdocSummary

A short piece of text, usually one line, providing the basic function of the associated element.

```php
public phpdocSummary(): string
```











***

### phpdocDescription

An optional longer piece of text providing more details on the associated element’s function. This is very useful when working with a complex element.

```php
public phpdocDescription(): string
```











***

### phpdocContent

The text contents of the phpdoc comment (excl. tags).

```php
public phpdocContent(): string
```











***

### detect

Create a Context based on the debug_backtrace.

```php
public static detect(int $index): \OpenApi\Context
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$index` | **int** |  |




***

### fullyQualifiedName

Resolve the fully qualified name.

```php
public fullyQualifiedName(string $source): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string** | The source name (class/interface/trait) |




***


***

