***

# Parser

Parses string containing GraphQL query or [type definition](type-system/type-language.md) to Abstract Syntax Tree.

Those magic functions allow partial parsing:

* Full name: `\GraphQL\Language\Parser`



## Properties


### lexer



```php
private \GraphQL\Language\Lexer $lexer
```






***

## Methods


### parse

Given a GraphQL source, parses it into a `GraphQL\Language\AST\DocumentNode`.

```php
public static parse(\GraphQL\Language\Source|string $source, bool[] $options = []): \GraphQL\Language\AST\DocumentNode
```

Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.

Available options:

noLocation: boolean,
  (By default, the parser creates AST nodes that know the location
  in the source that they correspond to. This configuration flag
  disables that behavior for performance or testing.)

allowLegacySDLEmptyFields: boolean
  If enabled, the parser will parse empty fields sets in the Schema
  Definition Language. Otherwise, the parser will follow the current
  specification.

  This option is provided to ease adoption of the final SDL specification
  and will be removed in a future major release.

allowLegacySDLImplementsInterfaces: boolean
  If enabled, the parser will parse implemented interfaces with no `&`
  character between each interface. Otherwise, the parser will follow the
  current specification.

  This option is provided to ease adoption of the final SDL specification
  and will be removed in a future major release.

experimentalFragmentVariables: boolean,
  (If enabled, the parser will understand and parse variable definitions
  contained in a fragment definition. They'll be represented in the
  `variableDefinitions` field of the FragmentDefinitionNode.

  The syntax is identical to normal, query-defined variables. For example:

    fragment A($var: Boolean = false) on T  {
      ...
    }

  Note: this feature is experimental and may change or be removed in the
  future.)

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source&#124;string** |  |
| `$options` | **bool[]** |  |




***

### parseValue

Given a string containing a GraphQL value (ex. `[42]`), parse the AST for
that value.

```php
public static parseValue(\GraphQL\Language\Source|string $source, bool[] $options = []): \GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\VariableNode
```

Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.

This is useful within tools that operate upon GraphQL Values directly and
in isolation of complete GraphQL documents.

Consider providing the results to the utility function: `GraphQL\Utils\AST::valueFromAST()`.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source&#124;string** |  |
| `$options` | **bool[]** |  |




***

### parseType

Given a string containing a GraphQL Type (ex. `[Int!]`), parse the AST for
that type.

```php
public static parseType(\GraphQL\Language\Source|string $source, bool[] $options = []): \GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\NonNullTypeNode
```

Throws `GraphQL\Error\SyntaxError` if a syntax error is encountered.

This is useful within tools that operate upon GraphQL Types directly and
in isolation of complete GraphQL documents.

Consider providing the results to the utility function: `GraphQL\Utils\AST::typeFromAST()`.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source&#124;string** |  |
| `$options` | **bool[]** |  |




***

### __callStatic

Parse partial source by delegating calls to the internal parseX methods.

```php
public static __callStatic(string $name, bool[] $arguments): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$arguments` | **bool[]** |  |




***

### __construct



```php
public __construct(\GraphQL\Language\Source|string $source, bool[] $options = []): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$source` | **\GraphQL\Language\Source&#124;string** |  |
| `$options` | **bool[]** |  |




***

### loc

Returns a location object, used to identify the place in
the source that created a given parsed object.

```php
private loc(\GraphQL\Language\Token $startToken): ?\GraphQL\Language\AST\Location
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$startToken` | **\GraphQL\Language\Token** |  |




***

### peek

Determines if the next token is of a given kind

```php
private peek(string $kind): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** |  |




***

### skip

If the next token is of the given kind, return true after advancing
the parser. Otherwise, do not change the parser state and return false.

```php
private skip(string $kind): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** |  |




***

### expect

If the next token is of the given kind, return that token after advancing
the parser. Otherwise, do not change the parser state and return false.

```php
private expect(string $kind): \GraphQL\Language\Token
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$kind` | **string** |  |




***

### expectKeyword

If the next token is a keyword with the given value, advance the lexer.

```php
private expectKeyword(string $value): void
```

Otherwise, throw an error.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### expectOptionalKeyword

If the next token is a given keyword, return "true" after advancing
the lexer. Otherwise, do not change the parser state and return "false".

```php
private expectOptionalKeyword(string $value): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **string** |  |




***

### unexpected



```php
private unexpected(?\GraphQL\Language\Token $atToken = null): \GraphQL\Error\SyntaxError
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$atToken` | **?\GraphQL\Language\Token** |  |




***

### any

Returns a possibly empty list of parse nodes, determined by
the parseFn. This list begins with a lex token of openKind
and ends with a lex token of closeKind. Advances the parser
to the next lex token after the closing token.

```php
private any(string $openKind, callable $parseFn, string $closeKind): \GraphQL\Language\AST\NodeList
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$openKind` | **string** |  |
| `$parseFn` | **callable** |  |
| `$closeKind` | **string** |  |




***

### many

Returns a non-empty list of parse nodes, determined by
the parseFn. This list begins with a lex token of openKind
and ends with a lex token of closeKind. Advances the parser
to the next lex token after the closing token.

```php
private many(string $openKind, callable $parseFn, string $closeKind): \GraphQL\Language\AST\NodeList
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$openKind` | **string** |  |
| `$parseFn` | **callable** |  |
| `$closeKind` | **string** |  |




***

### parseName

Converts a name lex token into a name parse node.

```php
private parseName(): \GraphQL\Language\AST\NameNode
```











***

### parseDocument

Implements the parsing rules in the Document section.

```php
private parseDocument(): \GraphQL\Language\AST\DocumentNode
```











***

### parseDefinition



```php
private parseDefinition(): \GraphQL\Language\AST\ExecutableDefinitionNode|\GraphQL\Language\AST\TypeSystemDefinitionNode
```











***

### parseExecutableDefinition



```php
private parseExecutableDefinition(): \GraphQL\Language\AST\ExecutableDefinitionNode
```











***

### parseOperationDefinition



```php
private parseOperationDefinition(): \GraphQL\Language\AST\OperationDefinitionNode
```











***

### parseOperationType



```php
private parseOperationType(): string
```











***

### parseVariableDefinitions



```php
private parseVariableDefinitions(): \GraphQL\Language\AST\NodeList
```











***

### parseVariableDefinition



```php
private parseVariableDefinition(): \GraphQL\Language\AST\VariableDefinitionNode
```











***

### parseVariable



```php
private parseVariable(): \GraphQL\Language\AST\VariableNode
```











***

### parseSelectionSet



```php
private parseSelectionSet(): \GraphQL\Language\AST\SelectionSetNode
```











***

### parseSelection

Selection :
  - Field
  - FragmentSpread
  - InlineFragment

```php
private parseSelection(): \GraphQL\Language\AST\SelectionNode
```











***

### parseField



```php
private parseField(): \GraphQL\Language\AST\FieldNode
```











***

### parseArguments



```php
private parseArguments(bool $isConst): \GraphQL\Language\AST\NodeList
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseArgument



```php
private parseArgument(): \GraphQL\Language\AST\ArgumentNode
```











***

### parseConstArgument



```php
private parseConstArgument(): \GraphQL\Language\AST\ArgumentNode
```











***

### parseFragment



```php
private parseFragment(): \GraphQL\Language\AST\FragmentSpreadNode|\GraphQL\Language\AST\InlineFragmentNode
```











***

### parseFragmentDefinition



```php
private parseFragmentDefinition(): \GraphQL\Language\AST\FragmentDefinitionNode
```











***

### parseFragmentName



```php
private parseFragmentName(): \GraphQL\Language\AST\NameNode
```











***

### parseValueLiteral

Value[Const] :
  - [~Const] Variable
  - IntValue
  - FloatValue
  - StringValue
  - BooleanValue
  - NullValue
  - EnumValue
  - ListValue[?Const]
  - ObjectValue[?Const]

```php
private parseValueLiteral(bool $isConst): \GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\VariableNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode|\GraphQL\Language\AST\NullValueNode
```

BooleanValue : one of `true` `false`

NullValue : `null`

EnumValue : Name but not `true`, `false` or `null`






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseStringLiteral



```php
private parseStringLiteral(): \GraphQL\Language\AST\StringValueNode
```











***

### parseConstValue



```php
private parseConstValue(): \GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\VariableNode
```











***

### parseVariableValue



```php
private parseVariableValue(): \GraphQL\Language\AST\BooleanValueNode|\GraphQL\Language\AST\EnumValueNode|\GraphQL\Language\AST\FloatValueNode|\GraphQL\Language\AST\IntValueNode|\GraphQL\Language\AST\ListValueNode|\GraphQL\Language\AST\ObjectValueNode|\GraphQL\Language\AST\StringValueNode|\GraphQL\Language\AST\VariableNode
```











***

### parseArray



```php
private parseArray(bool $isConst): \GraphQL\Language\AST\ListValueNode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseObject



```php
private parseObject(bool $isConst): \GraphQL\Language\AST\ObjectValueNode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseObjectField



```php
private parseObjectField(bool $isConst): \GraphQL\Language\AST\ObjectFieldNode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseDirectives



```php
private parseDirectives(bool $isConst): \GraphQL\Language\AST\NodeList
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseDirective



```php
private parseDirective(bool $isConst): \GraphQL\Language\AST\DirectiveNode
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$isConst` | **bool** |  |




***

### parseTypeReference

Handles the Type: TypeName, ListType, and NonNullType parsing rules.

```php
private parseTypeReference(): \GraphQL\Language\AST\ListTypeNode|\GraphQL\Language\AST\NamedTypeNode|\GraphQL\Language\AST\NonNullTypeNode
```











***

### parseNamedType



```php
private parseNamedType(): \GraphQL\Language\AST\NamedTypeNode
```











***

### parseTypeSystemDefinition

TypeSystemDefinition :
  - SchemaDefinition
  - TypeDefinition
  - TypeExtension
  - DirectiveDefinition

```php
private parseTypeSystemDefinition(): \GraphQL\Language\AST\TypeSystemDefinitionNode
```

TypeDefinition :
- ScalarTypeDefinition
- ObjectTypeDefinition
- InterfaceTypeDefinition
- UnionTypeDefinition
- EnumTypeDefinition
- InputObjectTypeDefinition









***

### peekDescription



```php
private peekDescription(): bool
```











***

### parseDescription



```php
private parseDescription(): ?\GraphQL\Language\AST\StringValueNode
```











***

### parseSchemaDefinition



```php
private parseSchemaDefinition(): \GraphQL\Language\AST\SchemaDefinitionNode
```











***

### parseOperationTypeDefinition



```php
private parseOperationTypeDefinition(): \GraphQL\Language\AST\OperationTypeDefinitionNode
```











***

### parseScalarTypeDefinition



```php
private parseScalarTypeDefinition(): \GraphQL\Language\AST\ScalarTypeDefinitionNode
```











***

### parseObjectTypeDefinition



```php
private parseObjectTypeDefinition(): \GraphQL\Language\AST\ObjectTypeDefinitionNode
```











***

### parseImplementsInterfaces

ImplementsInterfaces :
  - implements `&`? NamedType
  - ImplementsInterfaces & NamedType

```php
private parseImplementsInterfaces(): \GraphQL\Language\AST\NodeList
```











***

### parseFieldsDefinition



```php
private parseFieldsDefinition(): \GraphQL\Language\AST\NodeList
```











***

### parseFieldDefinition



```php
private parseFieldDefinition(): \GraphQL\Language\AST\FieldDefinitionNode
```











***

### parseArgumentsDefinition



```php
private parseArgumentsDefinition(): \GraphQL\Language\AST\NodeList
```











***

### parseInputValueDefinition



```php
private parseInputValueDefinition(): \GraphQL\Language\AST\InputValueDefinitionNode
```











***

### parseInterfaceTypeDefinition



```php
private parseInterfaceTypeDefinition(): \GraphQL\Language\AST\InterfaceTypeDefinitionNode
```











***

### parseUnionTypeDefinition

UnionTypeDefinition :
  - Description? union Name Directives[Const]? UnionMemberTypes?

```php
private parseUnionTypeDefinition(): \GraphQL\Language\AST\UnionTypeDefinitionNode
```











***

### parseUnionMemberTypes

UnionMemberTypes :
  - = `|`? NamedType
  - UnionMemberTypes | NamedType

```php
private parseUnionMemberTypes(): \GraphQL\Language\AST\NodeList
```











***

### parseEnumTypeDefinition



```php
private parseEnumTypeDefinition(): \GraphQL\Language\AST\EnumTypeDefinitionNode
```











***

### parseEnumValuesDefinition



```php
private parseEnumValuesDefinition(): \GraphQL\Language\AST\NodeList
```











***

### parseEnumValueDefinition



```php
private parseEnumValueDefinition(): \GraphQL\Language\AST\EnumValueDefinitionNode
```











***

### parseInputObjectTypeDefinition



```php
private parseInputObjectTypeDefinition(): \GraphQL\Language\AST\InputObjectTypeDefinitionNode
```











***

### parseInputFieldsDefinition



```php
private parseInputFieldsDefinition(): \GraphQL\Language\AST\NodeList
```











***

### parseTypeExtension

TypeExtension :
  - ScalarTypeExtension
  - ObjectTypeExtension
  - InterfaceTypeExtension
  - UnionTypeExtension
  - EnumTypeExtension
  - InputObjectTypeDefinition

```php
private parseTypeExtension(): \GraphQL\Language\AST\TypeExtensionNode
```











***

### parseSchemaTypeExtension



```php
private parseSchemaTypeExtension(): \GraphQL\Language\AST\SchemaTypeExtensionNode
```











***

### parseScalarTypeExtension



```php
private parseScalarTypeExtension(): \GraphQL\Language\AST\ScalarTypeExtensionNode
```











***

### parseObjectTypeExtension



```php
private parseObjectTypeExtension(): \GraphQL\Language\AST\ObjectTypeExtensionNode
```











***

### parseInterfaceTypeExtension



```php
private parseInterfaceTypeExtension(): \GraphQL\Language\AST\InterfaceTypeExtensionNode
```











***

### parseUnionTypeExtension

UnionTypeExtension :
  - extend union Name Directives[Const]? UnionMemberTypes
  - extend union Name Directives[Const]

```php
private parseUnionTypeExtension(): \GraphQL\Language\AST\UnionTypeExtensionNode
```











***

### parseEnumTypeExtension



```php
private parseEnumTypeExtension(): \GraphQL\Language\AST\EnumTypeExtensionNode
```











***

### parseInputObjectTypeExtension



```php
private parseInputObjectTypeExtension(): \GraphQL\Language\AST\InputObjectTypeExtensionNode
```











***

### parseDirectiveDefinition

DirectiveDefinition :
  - Description? directive @ Name ArgumentsDefinition? `repeatable`? on DirectiveLocations

```php
private parseDirectiveDefinition(): \GraphQL\Language\AST\DirectiveDefinitionNode
```











***

### parseDirectiveLocations



```php
private parseDirectiveLocations(): \GraphQL\Language\AST\NodeList
```











***

### parseDirectiveLocation



```php
private parseDirectiveLocation(): \GraphQL\Language\AST\NameNode
```











***


***

