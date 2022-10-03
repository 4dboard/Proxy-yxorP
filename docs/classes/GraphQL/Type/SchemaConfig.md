***

# SchemaConfig

Schema configuration class.

Could be passed directly to schema constructor. List of options accepted by **create** method is
[described in docs](type-system/schema.md#configuration-options).

Usage example:

    $config = SchemaConfig::create()
        ->setQuery($myQueryType)
        ->setTypeLoader($myTypeLoader);

    $schema = new Schema($config);

* Full name: `\GraphQL\Type\SchemaConfig`



## Properties


### query



```php
public \GraphQL\Type\Definition\ObjectType|null $query
```






***

### mutation



```php
public \GraphQL\Type\Definition\ObjectType|null $mutation
```






***

### subscription



```php
public \GraphQL\Type\Definition\ObjectType|null $subscription
```






***

### types



```php
public \GraphQL\Type\Definition\Type[]|callable $types
```






***

### directives



```php
public \GraphQL\Type\Definition\Directive[]|null $directives
```






***

### typeLoader



```php
public callable|null $typeLoader
```






***

### astNode



```php
public \GraphQL\Language\AST\SchemaDefinitionNode|null $astNode
```






***

### assumeValid



```php
public bool $assumeValid
```






***

### extensionASTNodes



```php
public \GraphQL\Language\AST\SchemaTypeExtensionNode[] $extensionASTNodes
```






***

## Methods


### create

Converts an array of options to instance of SchemaConfig
(or just returns empty config when array is not passed).

```php
public static create(array $options = []): \GraphQL\Type\SchemaConfig
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$options` | **array** |  |




***

### getAstNode



```php
public getAstNode(): \GraphQL\Language\AST\SchemaDefinitionNode|null
```











***

### setAstNode



```php
public setAstNode(\GraphQL\Language\AST\SchemaDefinitionNode $astNode): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$astNode` | **\GraphQL\Language\AST\SchemaDefinitionNode** |  |




***

### getQuery



```php
public getQuery(): \GraphQL\Type\Definition\ObjectType|null
```











***

### setQuery



```php
public setQuery(\GraphQL\Type\Definition\ObjectType|null $query): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$query` | **\GraphQL\Type\Definition\ObjectType&#124;null** |  |




***

### getMutation



```php
public getMutation(): \GraphQL\Type\Definition\ObjectType|null
```











***

### setMutation



```php
public setMutation(\GraphQL\Type\Definition\ObjectType|null $mutation): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mutation` | **\GraphQL\Type\Definition\ObjectType&#124;null** |  |




***

### getSubscription



```php
public getSubscription(): \GraphQL\Type\Definition\ObjectType|null
```











***

### setSubscription



```php
public setSubscription(\GraphQL\Type\Definition\ObjectType|null $subscription): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subscription` | **\GraphQL\Type\Definition\ObjectType&#124;null** |  |




***

### getTypes



```php
public getTypes(): \GraphQL\Type\Definition\Type[]|callable
```











***

### setTypes



```php
public setTypes(\GraphQL\Type\Definition\Type[]|callable $types): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$types` | **\GraphQL\Type\Definition\Type[]&#124;callable** |  |




***

### getDirectives



```php
public getDirectives(): \GraphQL\Type\Definition\Directive[]|null
```











***

### setDirectives



```php
public setDirectives(\GraphQL\Type\Definition\Directive[] $directives): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directives` | **\GraphQL\Type\Definition\Directive[]** |  |




***

### getTypeLoader



```php
public getTypeLoader(): callable|null
```











***

### setTypeLoader



```php
public setTypeLoader(callable $typeLoader): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeLoader` | **callable** |  |




***

### getAssumeValid



```php
public getAssumeValid(): bool
```











***

### setAssumeValid



```php
public setAssumeValid(bool $assumeValid): \GraphQL\Type\SchemaConfig
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$assumeValid` | **bool** |  |




***

### getExtensionASTNodes



```php
public getExtensionASTNodes(): \GraphQL\Language\AST\SchemaTypeExtensionNode[]
```











***

### setExtensionASTNodes



```php
public setExtensionASTNodes(\GraphQL\Language\AST\SchemaTypeExtensionNode[] $extensionASTNodes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extensionASTNodes` | **\GraphQL\Language\AST\SchemaTypeExtensionNode[]** |  |




***


***

