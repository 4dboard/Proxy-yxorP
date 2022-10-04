***

# SchemaValidationContext

* Full name: `\GraphQL\Type\SchemaValidationContext`

## Properties

### errors

```php
private \GraphQL\Error\Error[] $errors
```

***

### schema

```php
private \GraphQL\Type\Schema $schema
```

***

### inputObjectCircularRefs

```php
private \GraphQL\Type\Validation\InputObjectCircularRefs $inputObjectCircularRefs
```

***

## Methods

### __construct

```php
public __construct(\GraphQL\Type\Schema $schema): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |

***

### getErrors

```php
public getErrors(): \GraphQL\Error\Error[]
```

***

### validateRootTypes

```php
public validateRootTypes(): void
```

***

### reportError

```php
public reportError(string $message, \GraphQL\Language\AST\Node[]|\GraphQL\Language\AST\Node|\GraphQL\Language\AST\TypeNode|\GraphQL\Language\AST\TypeDefinitionNode|null $nodes = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$nodes` | **\GraphQL\Language\AST\Node[]&#124;\GraphQL\Language\AST\Node&#124;\GraphQL\Language\AST\TypeNode&#124;\GraphQL\Language\AST\TypeDefinitionNode&#124;null** |  |

***

### addError

```php
private addError(\GraphQL\Error\Error $error): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\GraphQL\Error\Error** |  |

***

### getOperationTypeNode

```php
private getOperationTypeNode(\GraphQL\Type\Definition\Type $type, string $operation): \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode|\GraphQL\Language\AST\TypeDefinitionNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$operation` | **string** |  |

***

### validateDirectives

```php
public validateDirectives(): mixed
```

***

### validateDirectiveDefinitions

```php
public validateDirectiveDefinitions(): mixed
```

***

### validateName

```php
private validateName(\GraphQL\Type\Definition\Type|\GraphQL\Type\Definition\Directive|\GraphQL\Type\Definition\FieldDefinition|\GraphQL\Type\Definition\EnumValueDefinition|\GraphQL\Type\Definition\InputObjectField $node): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Type\Definition\Type&#124;\GraphQL\Type\Definition\Directive&#124;\GraphQL\Type\Definition\FieldDefinition&#124;\GraphQL\Type\Definition\EnumValueDefinition&#124;\GraphQL\Type\Definition\InputObjectField** |  |

***

### getAllDirectiveArgNodes

```php
private getAllDirectiveArgNodes(\GraphQL\Type\Definition\Directive $directive, string $argName): \GraphQL\Language\AST\InputValueDefinitionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |
| `$argName` | **string** |  |

***

### getDirectiveArgTypeNode

```php
private getDirectiveArgTypeNode(\GraphQL\Type\Definition\Directive $directive, string $argName): \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directive` | **\GraphQL\Type\Definition\Directive** |  |
| `$argName` | **string** |  |

***

### validateTypes

```php
public validateTypes(): void
```

***

### validateDirectivesAtLocation

```php
private validateDirectivesAtLocation(\GraphQL\Language\AST\NodeList&lt;\GraphQL\Language\AST\DirectiveNode&gt; $directives, string $location): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directives` | **\GraphQL\Language\AST\NodeList<\GraphQL\Language\AST\DirectiveNode>** |  |
| `$location` | **string** |  |

***

### validateFields

```php
private validateFields(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |

***

### getAllNodes

```php
private getAllNodes(\GraphQL\Type\Schema|\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\UnionType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\Directive $obj): \GraphQL\Language\AST\ObjectTypeDefinitionNode[]|\GraphQL\Language\AST\ObjectTypeExtensionNode[]|\GraphQL\Language\AST\InterfaceTypeDefinitionNode[]|\GraphQL\Language\AST\InterfaceTypeExtensionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **\GraphQL\Type\Schema&#124;\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\UnionType&#124;\GraphQL\Type\Definition\EnumType&#124;\GraphQL\Type\Definition\InputObjectType&#124;\GraphQL\Type\Definition\Directive** |  |

***

### getAllSubNodes

```php
private getAllSubNodes(\GraphQL\Type\Schema|\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType|\GraphQL\Type\Definition\UnionType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\Directive $obj, callable $getter): \GraphQL\Language\AST\NodeList
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$obj` | **\GraphQL\Type\Schema&#124;\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType&#124;\GraphQL\Type\Definition\UnionType&#124;\GraphQL\Type\Definition\EnumType&#124;\GraphQL\Type\Definition\Directive** |  |
| `$getter` | **callable** |  |

***

### getAllFieldNodes

```php
private getAllFieldNodes(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName): \GraphQL\Language\AST\FieldDefinitionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |

***

### getFieldTypeNode

```php
private getFieldTypeNode(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName): \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |

***

### getFieldNode

```php
private getFieldNode(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName): \GraphQL\Language\AST\FieldDefinitionNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |

***

### getAllFieldArgNodes

```php
private getAllFieldArgNodes(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName, string $argName): \GraphQL\Language\AST\InputValueDefinitionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |
| `$argName` | **string** |  |

***

### getFieldArgTypeNode

```php
private getFieldArgTypeNode(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName, string $argName): \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |
| `$argName` | **string** |  |

***

### getFieldArgNode

```php
private getFieldArgNode(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName, string $argName): \GraphQL\Language\AST\InputValueDefinitionNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |
| `$argName` | **string** |  |

***

### validateInterfaces

```php
private validateInterfaces(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |

***

### getDirectives

```php
private getDirectives(\GraphQL\Type\Schema|\GraphQL\Type\Definition\Type $object): \GraphQL\Language\AST\NodeList&lt;\GraphQL\Language\AST\DirectiveNode&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$object` | **\GraphQL\Type\Schema&#124;\GraphQL\Type\Definition\Type** |  |

***

### getImplementsInterfaceNode

```php
private getImplementsInterfaceNode(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, \GraphQL\Type\Definition\Type $shouldBeInterface): ?\GraphQL\Language\AST\NamedTypeNode
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$shouldBeInterface` | **\GraphQL\Type\Definition\Type** |  |

***

### getAllImplementsInterfaceNodes

```php
private getAllImplementsInterfaceNodes(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, \GraphQL\Type\Definition\Type $shouldBeInterface): array&lt;int,\GraphQL\Language\AST\NamedTypeNode&gt;
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$shouldBeInterface` | **\GraphQL\Type\Definition\Type** |  |

***

### validateTypeImplementsInterface

```php
private validateTypeImplementsInterface(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, \GraphQL\Type\Definition\InterfaceType $iface): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$iface` | **\GraphQL\Type\Definition\InterfaceType** |  |

***

### validateTypeImplementsAncestors

```php
private validateTypeImplementsAncestors(\GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, \GraphQL\Type\Definition\InterfaceType $iface): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$iface` | **\GraphQL\Type\Definition\InterfaceType** |  |

***

### validateUnionMembers

```php
private validateUnionMembers(\GraphQL\Type\Definition\UnionType $union): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$union` | **\GraphQL\Type\Definition\UnionType** |  |

***

### getUnionMemberTypeNodes

```php
private getUnionMemberTypeNodes(\GraphQL\Type\Definition\UnionType $union, string $typeName): \GraphQL\Language\AST\NamedTypeNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$union` | **\GraphQL\Type\Definition\UnionType** |  |
| `$typeName` | **string** |  |

***

### validateEnumValues

```php
private validateEnumValues(\GraphQL\Type\Definition\EnumType $enumType): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enumType` | **\GraphQL\Type\Definition\EnumType** |  |

***

### getEnumValueNodes

```php
private getEnumValueNodes(\GraphQL\Type\Definition\EnumType $enum, string $valueName): \GraphQL\Language\AST\EnumValueDefinitionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$enum` | **\GraphQL\Type\Definition\EnumType** |  |
| `$valueName` | **string** |  |

***

### validateInputFields

```php
private validateInputFields(\GraphQL\Type\Definition\InputObjectType $inputObj): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$inputObj` | **\GraphQL\Type\Definition\InputObjectType** |  |

***


***

