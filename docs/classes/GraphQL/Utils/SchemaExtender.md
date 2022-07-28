***

# SchemaExtender





* Full name: `\GraphQL\Utils\SchemaExtender`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SCHEMA_EXTENSION`|public| |&#039;SchemaExtension&#039;|

## Properties


### extendTypeCache



```php
protected static \GraphQL\Type\Definition\Type[] $extendTypeCache
```



* This property is **static**.


***

### typeExtensionsMap



```php
protected static array $typeExtensionsMap
```



* This property is **static**.


***

### astBuilder



```php
protected static \GraphQL\Utils\ASTDefinitionBuilder $astBuilder
```



* This property is **static**.


***

## Methods


### getExtensionASTNodes



```php
protected static getExtensionASTNodes(\GraphQL\Type\Definition\NamedType $type): \GraphQL\Language\AST\TypeExtensionNode[]|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\NamedType** |  |




***

### checkExtensionNode



```php
protected static checkExtensionNode(\GraphQL\Type\Definition\Type $type, \GraphQL\Language\AST\Node $node): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$node` | **\GraphQL\Language\AST\Node** |  |




***

### extendScalarType



```php
protected static extendScalarType(\GraphQL\Type\Definition\ScalarType $type): \GraphQL\Type\Definition\CustomScalarType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ScalarType** |  |




***

### extendUnionType



```php
protected static extendUnionType(\GraphQL\Type\Definition\UnionType $type): \GraphQL\Type\Definition\UnionType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\UnionType** |  |




***

### extendEnumType



```php
protected static extendEnumType(\GraphQL\Type\Definition\EnumType $type): \GraphQL\Type\Definition\EnumType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\EnumType** |  |




***

### extendInputObjectType



```php
protected static extendInputObjectType(\GraphQL\Type\Definition\InputObjectType $type): \GraphQL\Type\Definition\InputObjectType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InputObjectType** |  |




***

### extendInputFieldMap



```php
protected static extendInputFieldMap(\GraphQL\Type\Definition\InputObjectType $type): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InputObjectType** |  |




***

### extendValueMap



```php
protected static extendValueMap(\GraphQL\Type\Definition\EnumType $type): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\EnumType** |  |




***

### extendPossibleTypes



```php
protected static extendPossibleTypes(\GraphQL\Type\Definition\UnionType $type): \GraphQL\Type\Definition\ObjectType[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\UnionType** |  |




***

### extendImplementedInterfaces



```php
protected static extendImplementedInterfaces(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type): array&lt;int,\GraphQL\Type\Definition\InterfaceType&gt;
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |




***

### extendType



```php
protected static extendType(mixed $typeDef): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeDef` | **mixed** |  |




***

### extendArgs



```php
protected static extendArgs(\GraphQL\Type\Definition\FieldArgument[] $args): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$args` | **\GraphQL\Type\Definition\FieldArgument[]** |  |




***

### extendFieldMap



```php
protected static extendFieldMap(\GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\ObjectType $type): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\ObjectType** |  |




***

### extendObjectType



```php
protected static extendObjectType(\GraphQL\Type\Definition\ObjectType $type): \GraphQL\Type\Definition\ObjectType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType** |  |




***

### extendInterfaceType



```php
protected static extendInterfaceType(\GraphQL\Type\Definition\InterfaceType $type): \GraphQL\Type\Definition\InterfaceType
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\InterfaceType** |  |




***

### isSpecifiedScalarType



```php
protected static isSpecifiedScalarType(\GraphQL\Type\Definition\Type $type): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |




***

### extendNamedType



```php
protected static extendNamedType(\GraphQL\Type\Definition\Type $type): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |




***

### extendMaybeNamedType



```php
protected static extendMaybeNamedType(?\GraphQL\Type\Definition\NamedType $type = null): mixed|null
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **?\GraphQL\Type\Definition\NamedType** |  |




***

### getMergedDirectives



```php
protected static getMergedDirectives(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DirectiveDefinitionNode[] $directiveDefinitions): \GraphQL\Type\Definition\Directive[]
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$directiveDefinitions` | **\GraphQL\Language\AST\DirectiveDefinitionNode[]** |  |




***

### extendDirective



```php
protected static extendDirective(\GraphQL\Type\Definition\Directive $directive): \GraphQL\Type\Definition\Directive
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |




***

### extend



```php
public static extend(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $documentAST, array&lt;string,bool&gt; $options = [], ?callable $typeConfigDecorator = null): \GraphQL\Type\Schema
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$documentAST` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$options` | **array<string,bool>** |  |
| `$typeConfigDecorator` | **?callable** |  |




***


***

