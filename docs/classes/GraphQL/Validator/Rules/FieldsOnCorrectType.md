***

# FieldsOnCorrectType





* Full name: `\GraphQL\Validator\Rules\FieldsOnCorrectType`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)




## Methods


### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |




***

### getSuggestedTypeNames

Go through all of the implementations of type, as well as the interfaces
that they implement. If any of those types include the provided field,
suggest them, sorted by how often the type is referenced, starting
with Interfaces.

```php
private getSuggestedTypeNames(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |




***

### getSuggestedFieldNames

For the field name provided, determine if there are any similar field names
that may be the result of a typo.

```php
private getSuggestedFieldNames(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\ObjectType|\GraphQL\Type\Definition\InterfaceType $type, string $fieldName): array|string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$type` | **\GraphQL\Type\Definition\ObjectType&#124;\GraphQL\Type\Definition\InterfaceType** |  |
| `$fieldName` | **string** |  |




***

### undefinedFieldMessage



```php
public static undefinedFieldMessage(string $fieldName, string $type, string[] $suggestedTypeNames, string[] $suggestedFieldNames): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fieldName` | **string** |  |
| `$type` | **string** |  |
| `$suggestedTypeNames` | **string[]** |  |
| `$suggestedFieldNames` | **string[]** |  |




***


## Inherited methods


### getName



```php
public getName(): mixed
```











***

### __invoke



```php
public __invoke(\GraphQL\Validator\ValidationContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |




***

### getVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getVisitor(\GraphQL\Validator\ValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***

### getSDLVisitor

Returns structure suitable for GraphQL\Language\Visitor

```php
public getSDLVisitor(\GraphQL\Validator\SDLValidationContext $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\SDLValidationContext** |  |



**See Also:**

* \GraphQL\Language\Visitor - 

***


***

