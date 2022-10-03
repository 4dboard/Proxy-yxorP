***

# ProvidedRequiredArgumentsOnDirectives

Provided required arguments on directives

A directive is only valid if all required (non-null without a
default value) field arguments have been provided.

* Full name: `\GraphQL\Validator\Rules\ProvidedRequiredArgumentsOnDirectives`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)




## Methods


### missingDirectiveArgMessage



```php
public static missingDirectiveArgMessage(string $directiveName, string $argName, string $type): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directiveName` | **string** |  |
| `$argName` | **string** |  |
| `$type` | **string** |  |




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




***

### getASTVisitor



```php
public getASTVisitor(\GraphQL\Validator\ASTValidationContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ASTValidationContext** |  |




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

