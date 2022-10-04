***

# ValidationContext

An instance of this class is passed as the "this" context to all validators,
allowing access to commonly useful contextual information from within a
validation rule.

* Full name: `\GraphQL\Validator\ValidationContext`
* Parent class: [`\GraphQL\Validator\ASTValidationContext`](./ASTValidationContext.md)

## Properties

### typeInfo

```php
private \GraphQL\Utils\TypeInfo $typeInfo
```

***

### fragments

```php
private \GraphQL\Language\AST\FragmentDefinitionNode[] $fragments
```

***

### fragmentSpreads

```php
private \SplObjectStorage $fragmentSpreads
```

***

### recursivelyReferencedFragments

```php
private \SplObjectStorage $recursivelyReferencedFragments
```

***

### variableUsages

```php
private \SplObjectStorage $variableUsages
```

***

### recursiveVariableUsages

```php
private \SplObjectStorage $recursiveVariableUsages
```

***

## Methods

### __construct

```php
public __construct(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\DocumentNode $ast, \GraphQL\Utils\TypeInfo $typeInfo): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$ast` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$typeInfo` | **\GraphQL\Utils\TypeInfo** |  |

***

### getRecursiveVariableUsages

```php
public getRecursiveVariableUsages(\GraphQL\Language\AST\OperationDefinitionNode $operation): array[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\GraphQL\Language\AST\OperationDefinitionNode** |  |

**Return Value:**

List of ['node' => VariableNode, 'type' => ?InputObjectType]



***

### getVariableUsages

```php
private getVariableUsages(\GraphQL\Language\AST\HasSelectionSet $node): array[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\HasSelectionSet** |  |

**Return Value:**

List of ['node' => VariableNode, 'type' => ?InputObjectType]



***

### getRecursivelyReferencedFragments

```php
public getRecursivelyReferencedFragments(\GraphQL\Language\AST\OperationDefinitionNode $operation): \GraphQL\Language\AST\FragmentDefinitionNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$operation` | **\GraphQL\Language\AST\OperationDefinitionNode** |  |

***

### getFragmentSpreads

```php
public getFragmentSpreads(\GraphQL\Language\AST\OperationDefinitionNode|\GraphQL\Language\AST\FragmentDefinitionNode $node): \GraphQL\Language\AST\FragmentSpreadNode[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\OperationDefinitionNode&#124;\GraphQL\Language\AST\FragmentDefinitionNode** |  |

***

### getFragment

```php
public getFragment(string $name): \GraphQL\Language\AST\FragmentDefinitionNode|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |

***

### getType

```php
public getType(): ?\GraphQL\Type\Definition\OutputType
```

***

### getParentType

```php
public getParentType(): ?\GraphQL\Type\Definition\CompositeType
```

***

### getInputType

```php
public getInputType(): ?\GraphQL\Type\Definition\InputType
```

***

### getParentInputType

```php
public getParentInputType(): (\GraphQL\Type\Definition\Type&amp;\GraphQL\Type\Definition\InputType)|null
```

***

### getFieldDef

```php
public getFieldDef(): \GraphQL\Type\Definition\FieldDefinition
```

***

### getDirective

```php
public getDirective(): mixed
```

***

### getArgument

```php
public getArgument(): mixed
```

***

## Inherited methods

### __construct

```php
public __construct(\GraphQL\Language\AST\DocumentNode $ast, ?\GraphQL\Type\Schema $schema = null): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ast` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$schema` | **?\GraphQL\Type\Schema** |  |

***

### reportError

```php
public reportError(\GraphQL\Error\Error $error): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\GraphQL\Error\Error** |  |

***

### getErrors

```php
public getErrors(): \GraphQL\Error\Error[]
```

***

### getDocument

```php
public getDocument(): \GraphQL\Language\AST\DocumentNode
```

***

### getSchema

```php
public getSchema(): ?\GraphQL\Type\Schema
```

***


***

