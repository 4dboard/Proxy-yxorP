***

# MessageFormatter





* Full name: `\yxorP\proxy\MessageFormatter`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CLF`|public| |&quot;{hostname} {req_header_User-Agent} - [{date_common_log}] \&quot;{method} {target} HTTP/{version}\&quot; {code} {res_header_Content-Length}&quot;|
|`DEBUG`|public| |&quot;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;\n{request}\n&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;\n{response}\n--------\n{error}&quot;|
|`SHORT`|public| |&#039;[{ts}] &quot;{method} {target} HTTP/{version}&quot; {code}&#039;|

## Properties


### template



```php
private mixed $template
```






***

## Methods


### __construct



```php
public __construct(mixed $template = self::CLF): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$template` | **mixed** |  |




***

### format



```php
public format(\yxorP\psr\Http\Message\RequestInterface $request, \yxorP\psr\Http\Message\ResponseInterface $response = null, \Exception $error = null): array|string|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\psr\Http\Message\ResponseInterface** |  |
| `$error` | **\Exception** |  |




***

### headers



```php
private headers(\yxorP\psr\Http\Message\MessageInterface $message): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\yxorP\psr\Http\Message\MessageInterface** |  |




***


***

