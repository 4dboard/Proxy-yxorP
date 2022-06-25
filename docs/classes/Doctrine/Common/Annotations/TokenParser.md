***

# TokenParser

Parses a file for namespaces/use/class declarations.



* Full name: `\Doctrine\Common\Annotations\TokenParser`



## Properties


### tokens

The token list.

```php
private $tokens
```






***

### numTokens

The number of tokens.

```php
private int $numTokens
```






***

### pointer

The current array pointer.

```php
private int $pointer
```






***

## Methods


### __construct



```php
public __construct(string $contents): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **string** |  |




***

### next

Gets the next non whitespace and non comment token.

```php
public next(bool $docCommentIsComment = true): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docCommentIsComment` | **bool** | If TRUE then a doc comment is considered a comment and skipped.<br />If FALSE then only whitespace and normal comments are skipped. |


**Return Value:**

The token if exists, null otherwise.



***

### parseUseStatement

Parses a single use statement.

```php
public parseUseStatement(): array&lt;string,string&gt;
```









**Return Value:**

A list with all found class names for a use statement.



***

### parseUseStatements

Gets all use statements.

```php
public parseUseStatements(string $namespaceName): array&lt;string,string&gt;
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$namespaceName` | **string** | The namespace name of the reflected class. |


**Return Value:**

A list with all found use statements.



***

### parseNamespace

Gets the namespace.

```php
public parseNamespace(): string
```









**Return Value:**

The found namespace.



***

### parseClass

Gets the class name.

```php
public parseClass(): string
```









**Return Value:**

The found class name.



***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
