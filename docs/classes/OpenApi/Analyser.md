***

# Analyser

Extract swagger-php annotations from a [PHPDoc](http://en.wikipedia.org/wiki/PHPDoc) using Doctrine's DocParser.



* Full name: `\OpenApi\Analyser`



## Properties


### whitelist

List of namespaces that should be detected by the doctrine annotation parser.

```php
public static array|false $whitelist
```

Set to false to load all detected classes.

* This property is **static**.
* **Warning:** this property is **deprecated**. This means that this property will likely be removed in a future version.



***

### defaultImports

Use @OA\* for OpenAPI annotations (unless overwritten by a use statement).

```php
public static $defaultImports
```



* This property is **static**.
* **Warning:** this property is **deprecated**. This means that this property will likely be removed in a future version.



***

### context

Allows Annotation classes to know the context of the annotation that is being processed.

```php
public static null|\OpenApi\Context $context
```



* This property is **static**.


***

### docParser



```php
public \Doctrine\Common\Annotations\DocParser $docParser
```






***

## Methods


### __construct



```php
public __construct(?\Doctrine\Common\Annotations\DocParser $docParser = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$docParser` | **?\Doctrine\Common\Annotations\DocParser** |  |




***

### fromComment

Use doctrine to parse the comment block and return the detected annotations.

```php
public fromComment(string $comment, \OpenApi\Context $context): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comment` | **string** | a T_DOC_COMMENT |
| `$context` | **\OpenApi\Context** |  |


**Return Value:**

Annotations



***


***

