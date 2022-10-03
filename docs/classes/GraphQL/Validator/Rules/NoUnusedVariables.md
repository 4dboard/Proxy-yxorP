***

# NoUnusedVariables





* Full name: `\GraphQL\Validator\Rules\NoUnusedVariables`
* Parent class: [`\GraphQL\Validator\Rules\ValidationRule`](./ValidationRule.md)



## Properties


### variableDefs



```php
public \GraphQL\Language\AST\VariableDefinitionNode[] $variableDefs
```






***

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

### unusedVariableMessage



```php
public static unusedVariableMessage(mixed $varName, mixed $opName = null): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$varName` | **mixed** |  |
| `$opName` | **mixed** |  |




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

