***

# Query

* Full name: `\GuzzleHttp\Psr7\Query`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Methods

### parse

Parse a query string into an associative array.

```php
public static parse(string $str, int|bool $urlEncoding = true): array
```

If multiple values are found for the same key, the value of that key
value pair will become an array. This function does not parse nested
PHP style arrays into an associative array (e.g., `foo[a]=1&foo[b]=2`
will be parsed into `['foo[a]' => '1', 'foo[b]' => '2'])`.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** | Query string to parse |
| `$urlEncoding` | **int&#124;bool** | How the query string is encoded |

***

### build

Build a query string from an array of key value pairs.

```php
public static build(array $params, int|false $encoding = PHP_QUERY_RFC3986): string
```

This function can use the return value of `parse()` to build a query
string. This function does not modify the provided keys when an array is
encountered (like `http_build_query()` would).

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **array** | Query string parameters. |
| `$encoding` | **int&#124;false** | Set to false to not encode, PHP_QUERY_RFC3986<br />to encode using RFC3986, or PHP_QUERY_RFC1738<br />to encode using RFC1738. |

***


***

