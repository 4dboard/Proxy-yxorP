***

# FileGetContents

This is largely extracted from the Composer Installer where originally implemented.



* Full name: `\Humbug\FileGetContents`



## Properties


### options



```php
protected $options
```






***

### lastResponseHeaders



```php
protected static $lastResponseHeaders
```



* This property is **static**.


***

### nextRequestHeaders



```php
protected static $nextRequestHeaders
```



* This property is **static**.


***

## Methods


### __construct



```php
public __construct(): mixed
```











***

### get



```php
public get(mixed $filename, mixed $context = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$filename` | **mixed** |  |
| `$context` | **mixed** |  |




***

### setLastResponseHeaders



```php
public static setLastResponseHeaders(mixed $headers): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **mixed** |  |




***

### getLastResponseHeaders



```php
public static getLastResponseHeaders(): mixed
```



* This method is **static**.







***

### setNextRequestHeaders



```php
public static setNextRequestHeaders(array $headers): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$headers` | **array** |  |




***

### hasNextRequestHeaders



```php
public static hasNextRequestHeaders(): mixed
```



* This method is **static**.







***

### getNextRequestHeaders



```php
public static getNextRequestHeaders(): mixed
```



* This method is **static**.







***

### setHttpHeaders



```php
public static setHttpHeaders(mixed $context): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **mixed** |  |




***

### checkConfig



```php
protected checkConfig(): mixed
```











***

### getStreamContext



```php
protected getStreamContext(mixed $url): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **mixed** |  |




***

### getTlsStreamContextDefaults



```php
protected getTlsStreamContextDefaults(mixed $cafile): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cafile` | **mixed** |  |




***

### getMergedStreamContext

function copied from Composer\Util\StreamContextFactory::getContext

```php
protected getMergedStreamContext(string $url): resource
```

This function is part of Composer.

(c) Nils Adermann <naderman@naderman.de>
    Jordi Boggiano <j.boggiano@seld.be>






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$url` | **string** | URL the context is to be used for |


**Return Value:**

Default context



***

### getSystemCaRootBundlePath

This method was adapted from Sslurp.

```php
public static getSystemCaRootBundlePath(): mixed
```

https://github.com/EvanDotPro/Sslurp

(c) Evan Coury <me@evancoury.com>

For the full copyright and license information, please see below:

Copyright (c) 2013, Evan Coury
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.

    * Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

* This method is **static**.







***

### validateCaFile



```php
protected static validateCaFile(mixed $contents): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$contents` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
