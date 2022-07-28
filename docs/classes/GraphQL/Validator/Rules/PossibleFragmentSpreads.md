***

# PossibleFragmentSpreads





* Full name: `\GraphQL\Validator\Rules\PossibleFragmentSpreads`
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

### doTypesOverlap



```php
private doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $fragType, \GraphQL\Type\Definition\CompositeType $parentType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$fragType` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$parentType` | **\GraphQL\Type\Definition\CompositeType** |  |




***

### typeIncompatibleAnonSpreadMessage



```php
public static typeIncompatibleAnonSpreadMessage(mixed $parentType, mixed $fragType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$parentType` | **mixed** |  |
| `$fragType` | **mixed** |  |




***

### getFragmentType



```php
private getFragmentType(\GraphQL\Validator\ValidationContext $context, mixed $name): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ValidationContext** |  |
| `$name` | **mixed** |  |




***

### typeIncompatibleSpreadMessage



```php
public static typeIncompatibleSpreadMessage(mixed $fragName, mixed $parentType, mixed $fragType): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fragName` | **mixed** |  |
| `$parentType` | **mixed** |  |
| `$fragType` | **mixed** |  |




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

