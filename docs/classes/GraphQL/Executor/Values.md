***

# Values





* Full name: `\GraphQL\Executor\Values`




## Methods


### getVariableValues

Prepares an object map of variables of the correct type based on the provided
variable definitions and arbitrary input. If the input cannot be coerced
to match the variable definitions, a Error will be thrown.

```php
public static getVariableValues(\GraphQL\Type\Schema $schema, \GraphQL\Language\AST\VariableDefinitionNode[] $varDefNodes, array $inputs): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$varDefNodes` | **\GraphQL\Language\AST\VariableDefinitionNode[]** |  |
| `$inputs` | **array** |  |




***

### getDirectiveValues

Prepares an object map of argument values given a directive definition
and a AST node which may contain directives. Optionally also accepts a map
of variable values.

```php
public static getDirectiveValues(\GraphQL\Type\Definition\Directive $directiveDef, \GraphQL\Language\AST\FragmentSpreadNode|\GraphQL\Language\AST\FieldNode|\GraphQL\Language\AST\InlineFragmentNode|\GraphQL\Language\AST\EnumValueDefinitionNode|\GraphQL\Language\AST\FieldDefinitionNode $node, array|null $variableValues = null): array|null
```

If the directive does not exist on the node, returns undefined.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directiveDef` | **\GraphQL\Type\Definition\Directive** |  |
| `$node` | **\GraphQL\Language\AST\FragmentSpreadNode&#124;\GraphQL\Language\AST\FieldNode&#124;\GraphQL\Language\AST\InlineFragmentNode&#124;\GraphQL\Language\AST\EnumValueDefinitionNode&#124;\GraphQL\Language\AST\FieldDefinitionNode** |  |
| `$variableValues` | **array&#124;null** |  |




***

### getArgumentValues

Prepares an object map of argument values given a list of argument
definitions and list of argument AST nodes.

```php
public static getArgumentValues(\GraphQL\Type\Definition\FieldDefinition|\GraphQL\Type\Definition\Directive $def, \GraphQL\Language\AST\FieldNode|\GraphQL\Language\AST\DirectiveNode $node, array $variableValues = null): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$def` | **\GraphQL\Type\Definition\FieldDefinition&#124;\GraphQL\Type\Definition\Directive** |  |
| `$node` | **\GraphQL\Language\AST\FieldNode&#124;\GraphQL\Language\AST\DirectiveNode** |  |
| `$variableValues` | **array** |  |




***

### getArgumentValuesForMap



```php
public static getArgumentValuesForMap(\GraphQL\Type\Definition\FieldDefinition|\GraphQL\Type\Definition\Directive $fieldDefinition, \GraphQL\Language\AST\ArgumentNode[] $argumentValueMap, array $variableValues = null, \GraphQL\Language\AST\Node|null $referenceNode = null): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldDefinition` | **\GraphQL\Type\Definition\FieldDefinition&#124;\GraphQL\Type\Definition\Directive** |  |
| `$argumentValueMap` | **\GraphQL\Language\AST\ArgumentNode[]** |  |
| `$variableValues` | **array** |  |
| `$referenceNode` | **\GraphQL\Language\AST\Node&#124;null** |  |




***

### valueFromAST



```php
public static valueFromAST(\GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\NullValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode $valueNode, \GraphQL\Type\Definition\ScalarType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\ListOfType|\GraphQL\Type\Definition\NonNull $type, array|null $variables = null): array|\stdClass|null
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$valueNode` | **\GraphQL\Language\AST\VariableNode&#124;\GraphQL\Language\AST\NullValueNode&#124;\GraphQL\Language\AST\IntValueNode&#124;\GraphQL\Language\AST\FloatValueNode&#124;\GraphQL\Language\AST\StringValueNode&#124;\GraphQL\Language\AST\BooleanValueNode&#124;\GraphQL\Language\AST\EnumValueNode&#124;\GraphQL\Language\AST\ListValueNode&#124;\GraphQL\Language\AST\ObjectValueNode** |  |
| `$type` | **\GraphQL\Type\Definition\ScalarType&#124;\GraphQL\Type\Definition\EnumType&#124;\GraphQL\Type\Definition\InputObjectType&#124;\GraphQL\Type\Definition\ListOfType&#124;\GraphQL\Type\Definition\NonNull** |  |
| `$variables` | **array&#124;null** |  |




***

### isValidPHPValue



```php
public static isValidPHPValue(array $value, \GraphQL\Type\Definition\ScalarType|\GraphQL\Type\Definition\EnumType|\GraphQL\Type\Definition\InputObjectType|\GraphQL\Type\Definition\ListOfType|\GraphQL\Type\Definition\NonNull $type): string[]
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **array** |  |
| `$type` | **\GraphQL\Type\Definition\ScalarType&#124;\GraphQL\Type\Definition\EnumType&#124;\GraphQL\Type\Definition\InputObjectType&#124;\GraphQL\Type\Definition\ListOfType&#124;\GraphQL\Type\Definition\NonNull** |  |




***


***

