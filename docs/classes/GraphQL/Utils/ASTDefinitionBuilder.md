***

# ASTDefinitionBuilder





* Full name: `\GraphQL\Utils\ASTDefinitionBuilder`



## Properties


### typeDefinitionsMap



```php
private array&lt;string,\GraphQL\Language\AST\Node&amp;\GraphQL\Language\AST\TypeDefinitionNode&gt; $typeDefinitionsMap
```






***

### typeConfigDecorator



```php
private callable $typeConfigDecorator
```






***

### options



```php
private array&lt;string,bool&gt; $options
```






***

### resolveType



```php
private callable $resolveType
```






***

### cache



```php
private array&lt;string,\GraphQL\Type\Definition\Type&gt; $cache
```






***

## Methods


### __construct

code sniffer doesn't understand this syntax. Pr with a fix here: waiting on https://github.com/squizlabs/PHP_CodeSniffer/pull/2919
phpcs:disable Squiz.Commenting.FunctionComment.SpacingAfterParamType

```php
public __construct(array&lt;string,\GraphQL\Language\AST\Node&amp;\GraphQL\Language\AST\TypeDefinitionNode&gt; $typeDefinitionsMap, array&lt;string,bool&gt; $options, callable $resolveType, ?callable $typeConfigDecorator = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeDefinitionsMap` | **array<string,\GraphQL\Language\AST\Node&\GraphQL\Language\AST\TypeDefinitionNode>** |  |
| `$options` | **array<string,bool>** |  |
| `$resolveType` | **callable** |  |
| `$typeConfigDecorator` | **?callable** |  |




***

### buildDirective



```php
public buildDirective(\GraphQL\Language\AST\DirectiveDefinitionNode $directiveNode): \GraphQL\Type\Definition\Directive
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directiveNode` | **\GraphQL\Language\AST\DirectiveDefinitionNode** |  |




***

### getDescription

Given an ast node, returns its string description.

```php
private getDescription(\GraphQL\Language\AST\Node $node): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |




***

### getLeadingCommentBlock



```php
private getLeadingCommentBlock(\GraphQL\Language\AST\Node $node): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |




***

### makeInputValues



```php
private makeInputValues(\GraphQL\Language\AST\NodeList $values): array&lt;string,array&lt;string,mixed&gt;&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **\GraphQL\Language\AST\NodeList** |  |




***

### buildWrappedType



```php
private buildWrappedType(\GraphQL\Language\AST\TypeNode $typeNode): \GraphQL\Type\Definition\Type
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeNode` | **\GraphQL\Language\AST\TypeNode** |  |




***

### buildType



```php
public buildType(mixed $ref): \GraphQL\Type\Definition\Type
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ref` | **mixed** |  |




***

### internalBuildType



```php
private internalBuildType(string $typeName, ?\GraphQL\Language\AST\Node $typeNode = null): \GraphQL\Type\Definition\Type
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeName` | **string** |  |
| `$typeNode` | **?\GraphQL\Language\AST\Node** |  |




***

### makeSchemaDef



```php
private makeSchemaDef(\GraphQL\Language\AST\ObjectTypeDefinitionNode|\GraphQL\Language\AST\InterfaceTypeDefinitionNode|\GraphQL\Language\AST\EnumTypeDefinitionNode|\GraphQL\Language\AST\ScalarTypeDefinitionNode|\GraphQL\Language\AST\InputObjectTypeDefinitionNode|\GraphQL\Language\AST\UnionTypeDefinitionNode $def): \GraphQL\Type\Definition\CustomScalarType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\UnionType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\ObjectTypeDefinitionNode&#124;\GraphQL\Language\AST\InterfaceTypeDefinitionNode&#124;\GraphQL\Language\AST\EnumTypeDefinitionNode&#124;\GraphQL\Language\AST\ScalarTypeDefinitionNode&#124;\GraphQL\Language\AST\InputObjectTypeDefinitionNode&#124;\GraphQL\Language\AST\UnionTypeDefinitionNode** |  |




***

### makeTypeDef



```php
private makeTypeDef(\GraphQL\Language\AST\ObjectTypeDefinitionNode $def): \GraphQL\Type\Definition\ObjectType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\ObjectTypeDefinitionNode** |  |




***

### makeFieldDefMap



```php
private makeFieldDefMap(\GraphQL\Language\AST\ObjectTypeDefinitionNode|\GraphQL\Language\AST\InterfaceTypeDefinitionNode $def): array&lt;string,array&lt;string,mixed&gt;&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\ObjectTypeDefinitionNode&#124;\GraphQL\Language\AST\InterfaceTypeDefinitionNode** |  |




***

### buildField



```php
public buildField(\GraphQL\Language\AST\FieldDefinitionNode $field): array&lt;string,mixed&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$field` | **\GraphQL\Language\AST\FieldDefinitionNode** |  |




***

### getDeprecationReason

Given a collection of directives, returns the string value for the
deprecation reason.

```php
private getDeprecationReason(\GraphQL\Language\AST\EnumValueDefinitionNode|\GraphQL\Language\AST\FieldDefinitionNode $node): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\EnumValueDefinitionNode&#124;\GraphQL\Language\AST\FieldDefinitionNode** |  |




***

### makeImplementedInterfaces



```php
private makeImplementedInterfaces(\GraphQL\Language\AST\ObjectTypeDefinitionNode|\GraphQL\Language\AST\InterfaceTypeDefinitionNode $def): array&lt;int,\GraphQL\Type\Definition\Type&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\ObjectTypeDefinitionNode&#124;\GraphQL\Language\AST\InterfaceTypeDefinitionNode** |  |




***

### makeInterfaceDef



```php
private makeInterfaceDef(\GraphQL\Language\AST\InterfaceTypeDefinitionNode $def): \GraphQL\Type\Definition\InterfaceType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\InterfaceTypeDefinitionNode** |  |




***

### makeEnumDef



```php
private makeEnumDef(\GraphQL\Language\AST\EnumTypeDefinitionNode $def): \GraphQL\Type\Definition\EnumType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\EnumTypeDefinitionNode** |  |




***

### makeUnionDef



```php
private makeUnionDef(\GraphQL\Language\AST\UnionTypeDefinitionNode $def): \GraphQL\Type\Definition\UnionType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\UnionTypeDefinitionNode** |  |




***

### makeScalarDef



```php
private makeScalarDef(\GraphQL\Language\AST\ScalarTypeDefinitionNode $def): \GraphQL\Type\Definition\CustomScalarType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\ScalarTypeDefinitionNode** |  |




***

### makeInputObjectDef



```php
private makeInputObjectDef(\GraphQL\Language\AST\InputObjectTypeDefinitionNode $def): \GraphQL\Type\Definition\InputObjectType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\InputObjectTypeDefinitionNode** |  |




***

### makeSchemaDefFromConfig



```php
private makeSchemaDefFromConfig(\GraphQL\Language\AST\Node $def, array&lt;string,mixed&gt; $config): \GraphQL\Type\Definition\CustomScalarType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\UnionType
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Language\AST\Node** |  |
| `$config` | **array<string,mixed>** |  |




***

### buildInputField



```php
public buildInputField(\GraphQL\Language\AST\InputValueDefinitionNode $value): array&lt;string,mixed&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\GraphQL\Language\AST\InputValueDefinitionNode** |  |




***

### buildEnumValue



```php
public buildEnumValue(\GraphQL\Language\AST\EnumValueDefinitionNode $value): array&lt;string,mixed&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\GraphQL\Language\AST\EnumValueDefinitionNode** |  |




***


***

