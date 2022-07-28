***

# MessageFormatter





* Full name: `\yxorP\app\lib\proxy\MessageFormatter`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`CLF`|public| |&quot;{hostname} {req_header_User-Agent} - [{date_common_log}] \&quot;{method} {target} HTTP/{version}\&quot; {code} {res_header_Content-Length}&quot;|
|`DEBUG`|public| |&quot;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;\n{request}\n&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;\n{response}\n--------\n{error}&quot;|
|`SHORT`|public| |&#039;[{ts}] &quot;{method} {target} HTTP/{version}&quot; {code}&#039;|

## Properties


### template



```php
private $template
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
public format(\yxorP\app\lib\Psr\Http\Message\RequestInterface $request, \yxorP\app\lib\Psr\Http\Message\ResponseInterface $response = null, \Exception $error = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$request` | **\yxorP\app\lib\Psr\Http\Message\RequestInterface** |  |
| `$response` | **\yxorP\app\lib\Psr\Http\Message\ResponseInterface** |  |
| `$error` | **\Exception** |  |




***

### headers



```php
private headers(\yxorP\app\lib\Psr\Http\Message\MessageInterface $message): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$message` | **\yxorP\app\lib\Psr\Http\Message\MessageInterface** |  |




***


***

