***

# Inflector

Filter chain for string inflection



* Full name: `\Zend\Filter\Inflector`
* Parent class: [`\Zend\Filter\AbstractFilter`](./AbstractFilter.md)



## Properties


### pluginManager



```php
protected \Zend\Filter\FilterPluginManager $pluginManager
```






***

### target



```php
protected string $target
```






***

### throwTargetExceptionsOn



```php
protected bool $throwTargetExceptionsOn
```






***

### targetReplacementIdentifier



```php
protected string $targetReplacementIdentifier
```






***

### rules



```php
protected array $rules
```






***

## Methods


### __construct

Constructor

```php
public __construct(string|array|\Traversable $options = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **string&#124;array&#124;\Traversable** | Options to set |




***

### getPluginManager

Retrieve plugin manager

```php
public getPluginManager(): \Zend\Filter\FilterPluginManager
```











***

### setPluginManager

Set plugin manager

```php
public setPluginManager(\Zend\Filter\FilterPluginManager $manager): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$manager` | **\Zend\Filter\FilterPluginManager** |  |




***

### setOptions

Set options

```php
public setOptions(array|\Traversable $options): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array&#124;\Traversable** |  |




***

### setThrowTargetExceptionsOn

Set Whether or not the inflector should throw an exception when a replacement
identifier is still found within an inflected target.

```php
public setThrowTargetExceptionsOn(bool $throwTargetExceptionsOn): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$throwTargetExceptionsOn` | **bool** |  |




***

### isThrowTargetExceptionsOn

Will exceptions be thrown?

```php
public isThrowTargetExceptionsOn(): bool
```











***

### setTargetReplacementIdentifier

Set the Target Replacement Identifier, by default ':'

```php
public setTargetReplacementIdentifier(string $targetReplacementIdentifier): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$targetReplacementIdentifier` | **string** |  |




***

### getTargetReplacementIdentifier

Get Target Replacement Identifier

```php
public getTargetReplacementIdentifier(): string
```











***

### setTarget

Set a Target
ex: 'scripts/:controller/:action.:suffix'

```php
public setTarget(string $target): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |




***

### getTarget

Retrieve target

```php
public getTarget(): string
```











***

### setTargetReference

Set Target Reference

```php
public setTargetReference(string& $target): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$target` | **string** |  |




***

### setRules

Is the same as calling addRules() with the exception that it
clears the rules before adding them.

```php
public setRules(array $rules): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rules` | **array** |  |




***

### addRules

Multi-call to setting filter rules.

```php
public addRules(array $rules): self
```

If prefixed with a ":" (colon), a filter rule will be added.  If not
prefixed, a static replacement will be added.

ex:
array(
    ':controller' => array('CamelCaseToUnderscore', 'StringToLower'),
    ':action'     => array('CamelCaseToUnderscore', 'StringToLower'),
    'suffix'      => 'phtml'
    );






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rules` | **array** |  |




***

### getRules

Get rules

```php
public getRules(string $spec = null): array|false
```

By default, returns all rules. If a $spec is provided, will return those
rules if found, false otherwise.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string** |  |




***

### getRule

Returns a rule set by setFilterRule(), a numeric index must be provided

```php
public getRule(string $spec, int $index): \Zend\Filter\FilterInterface|false
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string** |  |
| `$index` | **int** |  |




***

### clearRules

Clears the rules currently in the inflector

```php
public clearRules(): self
```











***

### setFilterRule

Set a filtering rule for a spec.  $ruleSet can be a string, Filter object
or an array of strings or filter objects.

```php
public setFilterRule(string $spec, array|string|\Zend\Filter\FilterInterface $ruleSet): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string** |  |
| `$ruleSet` | **array&#124;string&#124;\Zend\Filter\FilterInterface** |  |




***

### addFilterRule

Add a filter rule for a spec

```php
public addFilterRule(mixed $spec, mixed $ruleSet): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **mixed** |  |
| `$ruleSet` | **mixed** |  |




***

### setStaticRule

Set a static rule for a spec.  This is a single string value

```php
public setStaticRule(string $name, string $value): self
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **string** |  |




***

### setStaticRuleReference

Set Static Rule Reference.

```php
public setStaticRuleReference(string $name, mixed& $reference): self
```

This allows a consuming class to pass a property or variable
in to be referenced when its time to build the output string from the
target.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$reference` | **mixed** |  |




***

### filter

Inflect

```php
public filter(string|array $source): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **string&#124;array** |  |




***

### _normalizeSpec

Normalize spec string

```php
protected _normalizeSpec(string $spec): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$spec` | **string** |  |




***

### _getRule

Resolve named filters and convert them to filter objects.

```php
protected _getRule(string $rule): \Zend\Filter\FilterInterface
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rule` | **string** |  |




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




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
