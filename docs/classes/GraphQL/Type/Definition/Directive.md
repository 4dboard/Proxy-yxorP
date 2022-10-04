***

# Directive





* Full name: `\GraphQL\Type\Definition\Directive`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`DEFAULT_DEPRECATION_REASON`|public| |&#039;No longer supported&#039;|
|`INCLUDE_NAME`|public| |&#039;include&#039;|
|`IF_ARGUMENT_NAME`|public| |&#039;if&#039;|
|`SKIP_NAME`|public| |&#039;skip&#039;|
|`DEPRECATED_NAME`|public| |&#039;deprecated&#039;|
|`REASON_ARGUMENT_NAME`|public| |&#039;reason&#039;|

## Properties


### internalDirectives



```php
public static \GraphQL\Type\Definition\Directive[]|null $internalDirectives
```



* This property is **static**.


***

### name



```php
public string $name
```






***

### description



```php
public string|null $description
```






***

### args



```php
public \GraphQL\Type\Definition\FieldArgument[] $args
```






***

### isRepeatable



```php
public bool $isRepeatable
```






***

### locations



```php
public string[] $locations
```






***

### astNode



```php
public \GraphQL\Language\AST\DirectiveDefinitionNode|null $astNode
```






***

### config



```php
public array $config
```






***

## Methods


### __construct



```php
public __construct(array $config): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **array** |  |




***

### includeDirective



```php
public static includeDirective(): \GraphQL\Type\Definition\Directive
```



* This method is **static**.







***

### getInternalDirectives



```php
public static getInternalDirectives(): \GraphQL\Type\Definition\Directive[]
```



* This method is **static**.







***

### skipDirective



```php
public static skipDirective(): \GraphQL\Type\Definition\Directive
```



* This method is **static**.







***

### deprecatedDirective



```php
public static deprecatedDirective(): \GraphQL\Type\Definition\Directive
```



* This method is **static**.







***

### isSpecifiedDirective



```php
public static isSpecifiedDirective(\GraphQL\Type\Definition\Directive $directive): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |




***


***

