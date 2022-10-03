***

# ASTValidationContext





* Full name: `\GraphQL\Validator\ASTValidationContext`
* This class is an **Abstract class**



## Properties


### ast



```php
protected \GraphQL\Language\AST\DocumentNode $ast
```






***

### errors



```php
protected \GraphQL\Error\Error[] $errors
```






***

### schema



```php
protected \GraphQL\Type\Schema $schema
```






***

## Methods


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

