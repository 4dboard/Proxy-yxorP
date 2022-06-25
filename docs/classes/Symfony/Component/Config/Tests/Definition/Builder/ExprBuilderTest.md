***

# ExprBuilderTest





* Full name: `\Symfony\Component\Config\Tests\Definition\Builder\ExprBuilderTest`
* Parent class: [`TestCase`](../../../../../../PHPUnit/Framework/TestCase.md)




## Methods


### testAlwaysExpression



```php
public testAlwaysExpression(): mixed
```











***

### testIfTrueExpression



```php
public testIfTrueExpression(): mixed
```











***

### testIfStringExpression



```php
public testIfStringExpression(): mixed
```











***

### testIfNullExpression



```php
public testIfNullExpression(): mixed
```











***

### testIfArrayExpression



```php
public testIfArrayExpression(): mixed
```











***

### testIfInArrayExpression



```php
public testIfInArrayExpression(): mixed
```











***

### testIfNotInArrayExpression



```php
public testIfNotInArrayExpression(): mixed
```











***

### testThenEmptyArrayExpression



```php
public testThenEmptyArrayExpression(): mixed
```











***

### testThenInvalid



```php
public testThenInvalid(): mixed
```











***

### testThenUnsetExpression



```php
public testThenUnsetExpression(): mixed
```











***

### testEndIfPartNotSpecified



```php
public testEndIfPartNotSpecified(): mixed
```











***

### testEndThenPartNotSpecified



```php
public testEndThenPartNotSpecified(): mixed
```











***

### getTestBuilder

Create a test treebuilder with a variable node, and init the validation.

```php
protected getTestBuilder(): \Symfony\Component\Config\Definition\Builder\TreeBuilder
```











***

### finalizeTestBuilder

Close the validation process and finalize with the given config.

```php
protected finalizeTestBuilder(\Symfony\Component\Config\Definition\Builder\TreeBuilder $testBuilder, array $config = null): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$testBuilder` | **\Symfony\Component\Config\Definition\Builder\TreeBuilder** | The tree builder to finalize |
| `$config` | **array** | The config you want to use for the finalization, if nothing provided<br />a simple array(&#039;key&#039;=&gt;&#039;value&#039;) will be used |


**Return Value:**

The finalized config values



***

### returnClosure

Return a closure that will return the given value.

```php
protected returnClosure(mixed $val): \Closure
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$val` | **mixed** | The value that the closure must return |




***

### assertFinalizedValueIs

Assert that the given test builder, will return the given value.

```php
protected assertFinalizedValueIs(mixed $value, \Symfony\Component\Config\Definition\Builder\TreeBuilder $treeBuilder, mixed $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | The value to test |
| `$treeBuilder` | **\Symfony\Component\Config\Definition\Builder\TreeBuilder** | The tree builder to finalize |
| `$config` | **mixed** | The config values that new to be finalized |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
