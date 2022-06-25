***

# Reflection





* Full name: `\Zend\Stdlib\Hydrator\Reflection`
* Parent class: [`\Zend\Hydrator\Reflection`](../../Hydrator/Reflection.md)
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.
* This class implements:
[`\Zend\Stdlib\Hydrator\HydratorInterface`](./HydratorInterface.md)






## Inherited methods


### extract

Extract values from an object

```php
public extract(object $object): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **object** |  |




***

### hydrate

Hydrate $object with the provided $data.

```php
public hydrate(array $data, object $object): object
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$data` | **array** |  |
| `$object` | **object** |  |




***

### getReflProperties

Get a reflection properties from in-memory cache and lazy-load if
class has not been loaded.

```php
protected static getReflProperties(string|object $input): \ReflectionProperty[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$input` | **string&#124;object** |  |




***

### __construct

Initializes a new instance of this class.

```php
public __construct(): mixed
```











***

### getStrategy

Gets the strategy with the given name.

```php
public getStrategy(string $name): \Zend\Hydrator\Strategy\StrategyInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to get. |




***

### hasStrategy

Checks if the strategy with the given name exists.

```php
public hasStrategy(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to check for. |




***

### addStrategy

Adds the given strategy under the given name.

```php
public addStrategy(string $name, \Zend\Hydrator\Strategy\StrategyInterface $strategy): \Zend\Hydrator\HydratorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to register. |
| `$strategy` | **\Zend\Hydrator\Strategy\StrategyInterface** | The strategy to register. |




***

### removeStrategy

Removes the strategy with the given name.

```php
public removeStrategy(string $name): \Zend\Hydrator\HydratorInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to remove. |




***

### extractValue

Converts a value for extraction. If no strategy exists the plain value is returned.

```php
public extractValue(string $name, mixed $value, mixed $object = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$object` | **mixed** | The object is optionally provided as context. |




***

### hydrateValue

Converts a value for hydration. If no strategy exists the plain value is returned.

```php
public hydrateValue(string $name, mixed $value, array $data = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name of the strategy to use. |
| `$value` | **mixed** | The value that should be converted. |
| `$data` | **array** | The whole data is optionally provided as context. |




***

### extractName

Convert a name for extraction. If no naming strategy exists, the plain value is returned.

```php
public extractName(string $name, null $object = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$object` | **null** | The object is optionally provided as context. |




***

### hydrateName

Converts a value for hydration. If no naming strategy exists, the plain value is returned.

```php
public hydrateName(string $name, array $data = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | The name to convert. |
| `$data` | **array** | The whole data is optionally provided as context. |




***

### getFilter

Get the filter instance

```php
public getFilter(): \Zend\Hydrator\Filter\FilterComposite
```











***

### addFilter

Add a new filter to take care of what needs to be hydrated.

```php
public addFilter(string $name, callable|\Zend\Hydrator\Filter\FilterInterface $filter, int $condition = FilterFilterComposite::CONDITION_OR): \Zend\Hydrator\Filter\FilterComposite
```

To exclude e.g. the method getServiceLocator:

<code>
$composite->addFilter("servicelocator",
    function ($property) {
        list($class, $method) = explode('::', $property);
        if ($method === 'getServiceLocator') {
            return false;
        }
        return true;
    }, FilterComposite::CONDITION_AND
);
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |
| `$filter` | **callable&#124;\Zend\Hydrator\Filter\FilterInterface** |  |
| `$condition` | **int** |  |




***

### hasFilter

Check whether a specific filter exists at key $name or not

```php
public hasFilter(string $name): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** | Index in the composite |




***

### removeFilter

Remove a filter from the composition.

```php
public removeFilter( $name): \Zend\Hydrator\Filter\FilterComposite
```

To not extract "has" methods, you simply need to unregister it

<code>
$filterComposite->removeFilter('has');
</code>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **** |  |




***

### setNamingStrategy

Adds the given naming strategy

```php
public setNamingStrategy(\Zend\Hydrator\NamingStrategy\NamingStrategyInterface $strategy): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strategy` | **\Zend\Hydrator\NamingStrategy\NamingStrategyInterface** | The naming to register. |




***

### getNamingStrategy

Gets the naming strategy.

```php
public getNamingStrategy(): \Zend\Hydrator\NamingStrategy\NamingStrategyInterface
```











***

### hasNamingStrategy

Checks if a naming strategy exists.

```php
public hasNamingStrategy(): bool
```











***

### removeNamingStrategy

Removes the naming strategy

```php
public removeNamingStrategy(): self
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
