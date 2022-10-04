***

# StaticAnalyser

OpenApi\StaticAnalyser extracts swagger-php annotations from php code using static analysis.

* Full name: `\OpenApi\StaticAnalyser`

## Methods

### fromFile

Extract and process all doc-comments from a file.

```php
public fromFile(string $filename, \OpenApi\Context $context): \OpenApi\Analysis
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **string** | path to a php file |
| `$context` | **\OpenApi\Context** |  |

***

### fromCode

Extract and process all doc-comments from the contents.

```php
public fromCode(string $code, \OpenApi\Context $context): \OpenApi\Analysis
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | PHP code. (including &lt;?php tags) |
| `$context` | **\OpenApi\Context** | the original location of the contents |

***

### fromTokens

Shared implementation for parseFile() & parseContents().

```php
protected fromTokens(array $tokens, \OpenApi\Context $parseContext): \OpenApi\Analysis
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** | The result of a token_get_all() |
| `$parseContext` | **\OpenApi\Context** |  |

***

### analyseComment

Parse comment and add annotations to analysis.

```php
private analyseComment(\OpenApi\Analysis $analysis, \OpenApi\Analyser $analyser, string $comment, \OpenApi\Context $context): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |
| `$analyser` | **\OpenApi\Analyser** |  |
| `$comment` | **string** |  |
| `$context` | **\OpenApi\Context** |  |

***

### nextToken

The next non-whitespace, non-comment token.

```php
private nextToken(array& $tokens, \OpenApi\Context $context): array|string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$context` | **\OpenApi\Context** |  |

**Return Value:**

The next token (or false)



***

### parseAttribute

```php
private parseAttribute(array& $tokens, mixed& $token, \OpenApi\Context $parseContext): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$token` | **mixed** |  |
| `$parseContext` | **\OpenApi\Context** |  |

***

### php8NamespaceToken

```php
private php8NamespaceToken(): mixed
```

***

### parseNamespace

Parse namespaced string.

```php
private parseNamespace(array& $tokens, mixed& $token, \OpenApi\Context $parseContext): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$token` | **mixed** |  |
| `$parseContext` | **\OpenApi\Context** |  |

***

### parseNamespaceList

Parse comma separated list of namespaced strings.

```php
private parseNamespaceList(array& $tokens, mixed& $token, \OpenApi\Context $parseContext): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$token` | **mixed** |  |
| `$parseContext` | **\OpenApi\Context** |  |

***

### parseUseStatement

Parse a use statement.

```php
private parseUseStatement(array& $tokens, mixed& $token, \OpenApi\Context $parseContext): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$token` | **mixed** |  |
| `$parseContext` | **\OpenApi\Context** |  |

***

### parseTypeAndNextToken

Parse type of variable (if it exists).

```php
private parseTypeAndNextToken(array& $tokens, \OpenApi\Context $parseContext): array
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$tokens` | **array** |  |
| `$parseContext` | **\OpenApi\Context** |  |

***


***

