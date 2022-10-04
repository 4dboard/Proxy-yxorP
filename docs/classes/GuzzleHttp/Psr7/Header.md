***

# Header





* Full name: `\GuzzleHttp\Psr7\Header`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**




## Methods


### parse

Parse an array of header values containing ";" separated data into an
array of associative arrays representing the header key value pair data
of the header. When a parameter does not contain a value, but just
contains a key, this function will inject a key with a '' string value.

```php
public static parse(string|array $header): array
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string&#124;array** | Header to parse into components. |




***

### normalize

Converts an array of header values that may contain comma separated
headers into an array of headers with no comma separated values.

```php
public static normalize(string|array $header): array
```



* This method is **static**.


* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **string&#124;array** | Header to normalize. |




***

### splitList

Splits a HTTP header defined to contain comma-separated list into
each individual value. Empty values will be removed.

```php
public static splitList(string|string[] $values): string[]
```

Example headers include 'accept', 'cache-control' and 'if-none-match'.

This method must not be used to parse headers that are not defined as
a list, such as 'user-agent' or 'set-cookie'.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **string&#124;string[]** | Header value as returned by MessageInterface::getHeader() |




***


***

