***

# GithubActionReporter

Utility class for Github actions.

* Full name: `\Symfony\Component\Console\CI\GithubActionReporter`

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ESCAPED_DATA`|private| |[&#039;%&#039; =&gt; &#039;%25&#039;, &quot;\r&quot; =&gt; &#039;%0D&#039;, &quot;\n&quot; =&gt; &#039;%0A&#039;]|
|`ESCAPED_PROPERTIES`|private| |[&#039;%&#039; =&gt; &#039;%25&#039;, &quot;\r&quot; =&gt; &#039;%0D&#039;, &quot;\n&quot; =&gt; &#039;%0A&#039;, &#039;:&#039; =&gt; &#039;%3A&#039;, &#039;,&#039; =&gt; &#039;%2C&#039;]|

## Properties

### output

```php
private $output
```

***

## Methods

### __construct

```php
public __construct(\Symfony\Component\Console\Output\OutputInterface $output): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$output` | **\Symfony\Component\Console\Output\OutputInterface** |  |

***

### isGithubActionEnvironment

```php
public static isGithubActionEnvironment(): bool
```

* This method is **static**.

***

### error

Output an error using the Github annotations format.

```php
public error(string $message, string $file = null, int $line = null, int $col = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$col` | **int** |  |

**See Also:**

* https://docs.github.com/en/free-pro-team@latest/actions/reference/workflow-commands-for-github-actions#setting-an-error-message
  -

***

### warning

Output a warning using the Github annotations format.

```php
public warning(string $message, string $file = null, int $line = null, int $col = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$col` | **int** |  |

**See Also:**

* https://docs.github.com/en/free-pro-team@latest/actions/reference/workflow-commands-for-github-actions#setting-a-warning-message
  -

***

### debug

Output a debug log using the Github annotations format.

```php
public debug(string $message, string $file = null, int $line = null, int $col = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$col` | **int** |  |

**See Also:**

* https://docs.github.com/en/free-pro-team@latest/actions/reference/workflow-commands-for-github-actions#setting-a-debug-message
  -

***

### log

```php
private log(string $type, string $message, string $file = null, int $line = null, int $col = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |
| `$message` | **string** |  |
| `$file` | **string** |  |
| `$line` | **int** |  |
| `$col` | **int** |  |

***


***

