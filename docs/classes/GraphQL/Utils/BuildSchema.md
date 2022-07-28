***

# BuildSchema

Build instance of `GraphQL\Type\Schema` out of type language definition (string or parsed AST)
See [section in docs](type-system/type-language.md) for details.



* Full name: `\GraphQL\Utils\BuildSchema`



## Properties


### ast



```php
private \GraphQL\Language\AST\DocumentNode $ast
```






***

### nodeMap



```php
private array&lt;string,\GraphQL\Language\AST\TypeDefinitionNode&gt; $nodeMap
```






***

### typeConfigDecorator



```php
private callable|null $typeConfigDecorator
```






***

### options



```php
private array&lt;string,bool&gt; $options
```






***

## Methods


### __construct



```php
public __construct(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array&lt;string,bool&gt; $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$typeConfigDecorator` | **?callable** |  |
| `$options` | **array<string,bool>** |  |




***

### build

A helper function to build a GraphQLSchema directly from a source
document.

```php
public static build(\GraphQL\Language\AST\DocumentNode|\GraphQL\Language\Source|string $source, ?callable $typeConfigDecorator = null, array&lt;string,bool&gt; $options = []): \GraphQL\Type\Schema
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\AST\DocumentNode&#124;\GraphQL\Language\Source&#124;string** |  |
| `$typeConfigDecorator` | **?callable** |  |
| `$options` | **array<string,bool>** |  |




***

### buildAST

This takes the ast of a schema document produced by the parse function in
GraphQL\Language\Parser.

```php
public static buildAST(\GraphQL\Language\AST\DocumentNode $ast, ?callable $typeConfigDecorator = null, array&lt;string,bool&gt; $options = []): \GraphQL\Type\Schema
```

If no schema definition is provided, then it will look for types named Query
and Mutation.

Given that AST it constructs a GraphQL\Type\Schema. The resulting schema
has no resolve methods, so execution will use default resolvers.

Accepts options as a third argument:

   - commentDescriptions:
       Provide true to use preceding comments as the description.
       This option is provided to ease adoption and will be removed in v16.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$typeConfigDecorator` | **?callable** |  |
| `$options` | **array<string,bool>** |  |




***

### buildSchema



```php
public buildSchema(): mixed
```











***

### getOperationTypes



```php
private getOperationTypes(\GraphQL\Language\AST\SchemaDefinitionNode $schemaDef): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaDef` | **\GraphQL\Language\AST\SchemaDefinitionNode** |  |




***


***

