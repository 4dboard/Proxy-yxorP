***

# KnownDirectives





* Full name: `\GraphQL\Validator\Rules\KnownDirectives`
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

### getASTVisitor



```php
public getASTVisitor(\GraphQL\Validator\ASTValidationContext $context): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\GraphQL\Validator\ASTValidationContext** |  |




***

### unknownDirectiveMessage



```php
public static unknownDirectiveMessage(mixed $directiveName): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directiveName` | **mixed** |  |




***

### getDirectiveLocationForASTPath



```php
private getDirectiveLocationForASTPath(\GraphQL\Language\AST\Node[]|\GraphQL\Language\AST\NodeList[] $ancestors): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ancestors` | **\GraphQL\Language\AST\Node[]&#124;\GraphQL\Language\AST\NodeList[]** | The type is actually (Node&amp;#124;NodeList)[] but this PSR-5 syntax is so far not supported by most of the tools |




***

### misplacedDirectiveMessage



```php
public static misplacedDirectiveMessage(mixed $directiveName, mixed $location): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$directiveName` | **mixed** |  |
| `$location` | **mixed** |  |




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

