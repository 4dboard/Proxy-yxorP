***

# AST

Various utilities dealing with AST

* Full name: `\GraphQL\Utils\AST`

## Methods

### fromArray

Convert representation of AST as an associative array to instance of GraphQL\Language\AST\Node.

```php
public static fromArray(array $node): \GraphQL\Language\AST\Node
```

For example:

```php
AST::fromArray([
    'kind' => 'ListValue',
    'values' => [
        ['kind' => 'StringValue', 'value' => 'my str'],
        ['kind' => 'StringValue', 'value' => 'my other str']
    ],
    'loc' => ['start' => 21, 'end' => 25]
]);
```

Will produce instance of `ListValueNode` where `values` prop is a lazily-evaluated `NodeList`
returning instances of `StringValueNode` on access.

This is a reverse operation for AST::toArray($node)

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **array** |  |

***

### toArray

Convert AST node to serializable array

```php
public static toArray(\GraphQL\Language\AST\Node $node): array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **\GraphQL\Language\AST\Node** |  |

***

### astFromValue

Produces a GraphQL Value AST given a PHP value.

```php
public static astFromValue(\GraphQL\Type\Definition\Type|mixed|null $value, \GraphQL\Type\Definition\InputType $type): \GraphQL\Language\AST\ObjectValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\NullValueNode|null
```

Optionally, a GraphQL type may be provided, which will be used to
disambiguate between value primitives.

| PHP Value     | GraphQL Value        |
| ------------- | -------------------- |
| Object        | Input Object         |
| Assoc Array   | Input Object         |
| Array         | List                 |
| Boolean       | Boolean              |
| String        | String / Enum Value  |
| Int           | Int                  |
| Float         | Int / Float          |
| Mixed         | Enum Value           |
| null          | NullValue            |

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **\GraphQL\Type\Definition\Type&#124;mixed&#124;null** |  |
| `$type` | **\GraphQL\Type\Definition\InputType** |  |

***

### valueFromAST

Produces a PHP value given a GraphQL Value AST.

```php
public static valueFromAST(\GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\NullValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode|null $valueNode, \GraphQL\Type\Definition\Type $type, array|null $variables = null): array|\stdClass|null
```

A GraphQL type must be provided, which will be used to interpret different
GraphQL Value literals.

Returns `null` when the value could not be validly coerced according to
the provided type.

| GraphQL Value        | PHP Value     |
| -------------------- | ------------- |
| Input Object         | Assoc Array   |
| List                 | Array         |
| Boolean              | Boolean       |
| String               | String        |
| Int / Float          | Int / Float   |
| Enum Value           | Mixed         |
| Null Value           | null          |

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueNode` | **\GraphQL\Language\AST\VariableNode&#124;\GraphQL\Language\AST\NullValueNode&#124;\GraphQL\Language\AST\IntValueNode&#124;\GraphQL\Language\AST\FloatValueNode&#124;\GraphQL\Language\AST\StringValueNode&#124;\GraphQL\Language\AST\BooleanValueNode&#124;\GraphQL\Language\AST\EnumValueNode&#124;\GraphQL\Language\AST\ListValueNode&#124;\GraphQL\Language\AST\ObjectValueNode&#124;null** |  |
| `$type` | **\GraphQL\Type\Definition\Type** |  |
| `$variables` | **array&#124;null** |  |

***

### isMissingVariable

Returns true if the provided valueNode is a variable which is not defined
in the set of variables.

```php
private static isMissingVariable(\GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\NullValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode $valueNode, array $variables): bool
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueNode` | **\GraphQL\Language\AST\VariableNode&#124;\GraphQL\Language\AST\NullValueNode&#124;\GraphQL\Language\AST\IntValueNode&#124;\GraphQL\Language\AST\FloatValueNode&#124;\GraphQL\Language\AST\StringValueNode&#124;\GraphQL\Language\AST\BooleanValueNode&#124;\GraphQL\Language\AST\EnumValueNode&#124;\GraphQL\Language\AST\ListValueNode&#124;\GraphQL\Language\AST\ObjectValueNode** |  |
| `$variables` | **array** |  |

***

### valueFromASTUntyped

Produces a PHP value given a GraphQL Value AST.

```php
public static valueFromASTUntyped(\GraphQL\Language\AST\Node $valueNode, array|null $variables = null): mixed
```

Unlike `valueFromAST()`, no type is provided. The resulting PHP value
will reflect the provided GraphQL value AST.

| GraphQL Value        | PHP Value     |
| -------------------- | ------------- |
| Input Object         | Assoc Array   |
| List                 | Array         |
| Boolean              | Boolean       |
| String               | String        |
| Int / Float          | Int / Float   |
| Enum                 | Mixed         |
| Null                 | null          |

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueNode` | **\GraphQL\Language\AST\Node** |  |
| `$variables` | **array&#124;null** |  |

***

### typeFromAST

Returns type definition for given AST Type node

```php
public static typeFromAST(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NonNullTypeNode $inputTypeNode): \GraphQL\Type\Definition\Type|null
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$inputTypeNode` | **\GraphQL\Language\AST\NamedTypeNode&#124;\GraphQL\Language\AST\ListTypeNode&#124;\GraphQL\Language\AST\NonNullTypeNode** |  |

***

### getOperation

```php
public static getOperation(\GraphQL\Language\AST\DocumentNode $document, string $operationName = null): bool|string
```

* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$operationName` | **string** |  |

***

### getOperationAST

Returns the operation within a document by name.

```php
public static getOperationAST(\GraphQL\Language\AST\DocumentNode $document, ?string $operationName = null): ?\GraphQL\Language\AST\OperationDefinitionNode
```

If a name is not provided, an operation is only returned if the document has exactly one.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$document` | **\GraphQL\Language\AST\DocumentNode** |  |
| `$operationName` | **?string** |  |

***


***

