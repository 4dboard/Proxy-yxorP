***

# BooleanValueNode

type Node = NameNode
| DocumentNode
| OperationDefinitionNode
| VariableDefinitionNode
| VariableNode
| SelectionSetNode
| FieldNode
| ArgumentNode
| FragmentSpreadNode
| InlineFragmentNode
| FragmentDefinitionNode
| IntValueNode
| FloatValueNode
| StringValueNode
| BooleanValueNode
| EnumValueNode
| ListValueNode
| ObjectValueNode
| ObjectFieldNode
| DirectiveNode
| ListTypeNode
| NonNullTypeNode

* Full name: `\GraphQL\Language\AST\BooleanValueNode`
* Parent class: [`\GraphQL\Language\AST\Node`](./Node.md)
* This class implements:
  [`\GraphQL\Language\AST\ValueNode`](./ValueNode.md)

## Properties

### kind

```php
public string $kind
```

***

### value

```php
public bool $value
```

***

## Inherited methods

### __construct

```php
public __construct((\GraphQL\Language\AST\NameNode|\GraphQL\Language\AST\NodeList|\GraphQL\Language\AST\SelectionSetNode|\GraphQL\Language\AST\Location|string|int|bool|float|null)[] $vars): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$vars` | **(\GraphQL\Language\AST\NameNode&#124;\GraphQL\Language\AST\NodeList&#124;\GraphQL\Language\AST\SelectionSetNode&#124;\GraphQL\Language\AST\Location&#124;string&#124;int&#124;bool&#124;float&#124;null)[]** |  |

***

### cloneDeep

```php
public cloneDeep(): self
```

***

### cloneValue

```php
private cloneValue(string|\GraphQL\Language\AST\NodeList|\GraphQL\Language\AST\Location|\GraphQL\Language\AST\Node|(\GraphQL\Language\AST\Node|\GraphQL\Language\AST\NodeList|\GraphQL\Language\AST\Location)[] $value): string|\GraphQL\Language\AST\NodeList|\GraphQL\Language\AST\Location|\GraphQL\Language\AST\Node
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string&#124;\GraphQL\Language\AST\NodeList&#124;\GraphQL\Language\AST\Location&#124;\GraphQL\Language\AST\Node&#124;(\GraphQL\Language\AST\Node&#124;\GraphQL\Language\AST\NodeList&#124;\GraphQL\Language\AST\Location)[]** |  |

***

### __toString

```php
public __toString(): string
```

***

### toArray

```php
public toArray(bool $recursive = false): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$recursive` | **bool** |  |

***

### recursiveToArray

```php
private recursiveToArray(\GraphQL\Language\AST\Node $node): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |

***


***

