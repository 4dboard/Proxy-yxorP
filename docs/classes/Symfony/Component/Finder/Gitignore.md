***

# Gitignore

Gitignore matches against text.

* Full name: `\Symfony\Component\Finder\Gitignore`

## Methods

### toRegex

Returns a regexp which is the equivalent of the gitignore pattern.

```php
public static toRegex(string $gitignoreFileContent): string
```

Format specification: https://git-scm.com/docs/gitignore#_pattern_format

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gitignoreFileContent` | **string** |  |

***

### toRegexMatchingNegatedPatterns

```php
public static toRegexMatchingNegatedPatterns(string $gitignoreFileContent): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gitignoreFileContent` | **string** |  |

***

### buildRegex

```php
private static buildRegex(string $gitignoreFileContent, bool $inverted): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gitignoreFileContent` | **string** |  |
| `$inverted` | **bool** |  |

***

### lineToRegex

```php
private static lineToRegex(string $gitignoreLine): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$gitignoreLine` | **string** |  |

***


***

