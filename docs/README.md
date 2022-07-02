# Documentation

## Table of Contents

| Method | Description |
|--------|-------------|
| [**attributesSimplifier**](#attributesSimplifier) |  |
| [attributesSimplifier::getReplacePatternData](#attributesSimplifiergetReplacePatternData) |  |
| [**blockListPluginAction**](#blockListPluginAction) |  |
| [blockListPluginAction::onBeforeRequest](#blockListPluginActiononBeforeRequest) |  |
| [blockListPluginAction::callable](#blockListPluginActioncallable) |  |
| [**bugsnagHandlerAction**](#bugsnagHandlerAction) |  |
| [bugsnagHandlerAction::onBuildException](#bugsnagHandlerActiononBuildException) |  |
| [**cache**](#cache) |  |
| [cache::clearAll](#cacheclearAll) |  |
| [cache::super](#cachesuper) |  |
| [cache::get](#cacheget) |  |
| [cache::isValid](#cacheisValid) |  |
| [cache::cache](#cachecache) |  |
| [cache::set](#cacheset) |  |
| [**cacheStoreAction**](#cacheStoreAction) |  |
| [cacheStoreAction::onCompleted](#cacheStoreActiononCompleted) |  |
| [**checkFilesAction**](#checkFilesAction) |  |
| [checkFilesAction::buildIncludes](#checkFilesActionbuildIncludes) |  |
| [**cookiePluginAction**](#cookiePluginAction) |  |
| [cookiePluginAction::onBeforeRequest](#cookiePluginActiononBeforeRequest) |  |
| [cookiePluginAction::beforeRequest](#cookiePluginActionbeforeRequest) |  |
| [cookiePluginAction::onHeadersReceived](#cookiePluginActiononHeadersReceived) |  |
| [cookiePluginAction::headersReceived](#cookiePluginActionheadersReceived) |  |
| [cookiePluginAction::Received](#cookiePluginActionReceived) |  |
| [**dailyMotionPluginAction**](#dailyMotionPluginAction) |  |
| [dailyMotionPluginAction::onCompleted](#dailyMotionPluginActiononCompleted) |  |
| [dailyMotionPluginAction::completed](#dailyMotionPluginActioncompleted) |  |
| [**debubEnablingAction**](#debubEnablingAction) |  |
| [debubEnablingAction::buildIncludes](#debubEnablingActionbuildIncludes) |  |
| [**debugHandlerAction**](#debugHandlerAction) |  |
| [debugHandlerAction::onBuildException](#debugHandlerActiononBuildException) |  |
| [**globalCollectionAction**](#globalCollectionAction) |  |
| [globalCollectionAction::onBuildContext](#globalCollectionActiononBuildContext) |  |
| [**guzzleClientAction**](#guzzleClientAction) |  |
| [guzzleClientAction::onBeforeRequest](#guzzleClientActiononBeforeRequest) |  |
| [**headerRewritePluginAction**](#headerRewritePluginAction) |  |
| [headerRewritePluginAction::onBeforeRequest](#headerRewritePluginActiononBeforeRequest) |  |
| [headerRewritePluginAction::onHeadersReceived](#headerRewritePluginActiononHeadersReceived) |  |
| [headerRewritePluginAction::headersReceived](#headerRewritePluginActionheadersReceived) |  |
| [**htmlCommentsRemover**](#htmlCommentsRemover) |  |
| [htmlCommentsRemover::getReplacePatternData](#htmlCommentsRemovergetReplacePatternData) |  |
| [**inlineCssMinifier**](#inlineCssMinifier) |  |
| [inlineCssMinifier::process](#inlineCssMinifierprocess) |  |
| [**inlineJavascriptMinifier**](#inlineJavascriptMinifier) |  |
| [inlineJavascriptMinifier::process](#inlineJavascriptMinifierprocess) |  |
| [**logPluginAction**](#logPluginAction) |  |
| [logPluginAction::onHeadersReceived](#logPluginActiononHeadersReceived) |  |
| [**mimeTypesAction**](#mimeTypesAction) |  |
| [mimeTypesAction::buildHeaders](#mimeTypesActionbuildHeaders) |  |
| [**minify**](#minify) |  |
| [minify::__construct](#minify__construct) |  |
| [minify::createDefault](#minifycreateDefault) |  |
| [minify::process](#minifyprocess) |  |
| [minify::addProcessor](#minifyaddProcessor) |  |
| [**overridePluginAction**](#overridePluginAction) |  |
| [overridePluginAction::onCompleted](#overridePluginActiononCompleted) |  |
| [overridePluginAction::REWRITE](#overridePluginActionREWRITE) |  |
| [**paramStore**](#paramStore) |  |
| [paramStore::__construct](#paramStore__construct) |  |
| [paramStore::replace](#paramStorereplace) |  |
| [paramStore::clear](#paramStoreclear) |  |
| [paramStore::set](#paramStoreset) |  |
| [paramStore::has](#paramStorehas) |  |
| [paramStore::remove](#paramStoreremove) |  |
| [paramStore::get](#paramStoreget) |  |
| [paramStore::all](#paramStoreall) |  |
| [paramStore::__toString](#paramStore__toString) |  |
| [**proxifyPluginAction**](#proxifyPluginAction) |  |
| [proxifyPluginAction::onBeforeRequest](#proxifyPluginActiononBeforeRequest) |  |
| [proxifyPluginAction::onCompleted](#proxifyPluginActiononCompleted) |  |
| [proxifyPluginAction::clean_content_type](#proxifyPluginActionclean_content_type) |  |
| [**quotesRemover**](#quotesRemover) |  |
| [quotesRemover::getReplacePatternData](#quotesRemovergetReplacePatternData) |  |
| [**readyCheckAction**](#readyCheckAction) |  |
| [readyCheckAction::onCheck](#readyCheckActiononCheck) |  |
| [**request**](#request) |  |
| [request::__construct](#request__construct) |  |
| [request::setUrl](#requestsetUrl) |  |
| [request::parseQuery](#requestparseQuery) |  |
| [request::setBody](#requestsetBody) |  |
| [request::prepare](#requestprepare) |  |
| [request::buildPostBody](#requestbuildPostBody) |  |
| [request::createFromGlobals](#requestcreateFromGlobals) |  |
| [request::getMethod](#requestgetMethod) |  |
| [request::setMethod](#requestsetMethod) |  |
| [request::getUrl](#requestgetUrl) |  |
| [request::getProtocolVersion](#requestgetProtocolVersion) |  |
| [request::getRawHeaders](#requestgetRawHeaders) |  |
| [request::getRawBody](#requestgetRawBody) |  |
| [request::getUri](#requestgetUri) |  |
| [**requestBodyAction**](#requestBodyAction) |  |
| [requestBodyAction::buildRequest](#requestBodyActionbuildRequest) |  |
| [**requestResponseAction**](#requestResponseAction) |  |
| [requestResponseAction::buildIncludes](#requestResponseActionbuildIncludes) |  |
| [**resourceHandlerAction**](#resourceHandlerAction) |  |
| [resourceHandlerAction::onBuildException](#resourceHandlerActiononBuildException) |  |
| [**response**](#response) |  |
| [response::__construct](#response__construct) |  |
| [response::setStatusCode](#responsesetStatusCode) |  |
| [response::getContent](#responsegetContent) |  |
| [response::setContent](#responsesetContent) |  |
| [response::printContent](#responseprintContent) |  |
| [response::sendHeaders](#responsesendHeaders) |  |
| [response::getStatusText](#responsegetStatusText) |  |
| [response::getStatusCode](#responsegetStatusCode) |  |
| [**setHeadersAction**](#setHeadersAction) |  |
| [setHeadersAction::buildHeaders](#setHeadersActionbuildHeaders) |  |
| [**siteCollectionAction**](#siteCollectionAction) |  |
| [siteCollectionAction::onBuildContext](#siteCollectionActiononBuildContext) |  |
| [**streamPluginAction**](#streamPluginAction) |  |
| [streamPluginAction::onHeadersReceived](#streamPluginActiononHeadersReceived) |  |
| [streamPluginAction::onCurlWrite](#streamPluginActiononCurlWrite) |  |
| [streamPluginAction::onCompleted](#streamPluginActiononCompleted) |  |
| [**twitterPluginAction**](#twitterPluginAction) |  |
| [twitterPluginAction::onCompleted](#twitterPluginActiononCompleted) |  |
| [**whitespacesRemover**](#whitespacesRemover) |  |
| [whitespacesRemover::process](#whitespacesRemoverprocess) |  |
| [**youtubePluginAction**](#youtubePluginAction) |  |
| [youtubePluginAction::onBeforeRequest](#youtubePluginActiononBeforeRequest) |  |
| [youtubePluginAction::onCompleted](#youtubePluginActiononCompleted) |  |

## attributesSimplifier

* Full name: \yxorP\minify\attributesSimplifier
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### attributesSimplifier::getReplacePatternData

```php
attributesSimplifier::getReplacePatternData(  ): array
```

**Return Value:**





---

## blockListPluginAction

* Full name: \blockListPluginAction
* Parent class: \yxorP\http\wrapper

### blockListPluginAction::onBeforeRequest

```php
blockListPluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### blockListPluginAction::callable

```php
blockListPluginAction::callable( mixed fnc_custom, mixed url ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fnc_custom` | **mixed** |  |
| `url` | **mixed** |  |

**Return Value:**





---

## bugsnagHandlerAction

* Full name: \bugsnagHandlerAction
* Parent class: \yxorP\http\wrapper

### bugsnagHandlerAction::onBuildException

```php
bugsnagHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## cache

* Full name: \yxorP\http\cache

### cache::clearAll

```php
cache::clearAll(  ): void
```

* This method is **static**.

**Return Value:**





---

### cache::super

```php
cache::super(  ): void
```

**Return Value:**





---

### cache::get

```php
cache::get(  ): void
```

**Return Value:**





---

### cache::isValid

```php
cache::isValid(  ): bool
```

**Return Value:**





---

### cache::cache

```php
cache::cache(  ): mixed
```

* This method is **static**.

**Return Value:**





---

### cache::set

```php
cache::set( mixed val ): \yxorP\http\cache
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `val` | **mixed** |  |

**Return Value:**





---

## cacheStoreAction

* Full name: \cacheStoreAction
* Parent class: \yxorP\http\wrapper

### cacheStoreAction::onCompleted

```php
cacheStoreAction::onCompleted(  ): void
```

**Return Value:**





---

## checkFilesAction

* Full name: \checkFilesAction
* Parent class: \yxorP\http\wrapper

### checkFilesAction::buildIncludes

```php
checkFilesAction::buildIncludes(  ): mixed
```

**Return Value:**





---

## cookiePluginAction

* Full name: \cookiePluginAction
* Parent class: \yxorP\http\wrapper

### cookiePluginAction::onBeforeRequest

```php
cookiePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### cookiePluginAction::beforeRequest

```php
cookiePluginAction::beforeRequest( mixed match ): mixed
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `match` | **mixed** |  |

**Return Value:**





---

### cookiePluginAction::onHeadersReceived

```php
cookiePluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### cookiePluginAction::headersReceived

```php
cookiePluginAction::headersReceived( mixed response, mixed set_cookie ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `set_cookie` | **mixed** |  |

**Return Value:**





---

### cookiePluginAction::Received

```php
cookiePluginAction::Received( mixed line ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `line` | **mixed** |  |

**Return Value:**





---

## dailyMotionPluginAction

* Full name: \dailyMotionPluginAction
* Parent class: \yxorP\http\wrapper

### dailyMotionPluginAction::onCompleted

```php
dailyMotionPluginAction::onCompleted(  ): void
```

**Return Value:**





---

### dailyMotionPluginAction::completed

```php
dailyMotionPluginAction::completed( mixed matches, mixed content ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `matches` | **mixed** |  |
| `content` | **mixed** |  |

**Return Value:**





---

## debubEnablingAction

* Full name: \debubEnablingAction
* Parent class: \yxorP\http\wrapper

### debubEnablingAction::buildIncludes

```php
debubEnablingAction::buildIncludes(  ): void
```

**Return Value:**





---

## debugHandlerAction

* Full name: \debugHandlerAction
* Parent class: \yxorP\http\wrapper

### debugHandlerAction::onBuildException

```php
debugHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## globalCollectionAction

* Full name: \globalCollectionAction
* Parent class: \yxorP\http\wrapper

### globalCollectionAction::onBuildContext

```php
globalCollectionAction::onBuildContext(  ): void
```

**Return Value:**





---

## guzzleClientAction

* Full name: \guzzleClientAction
* Parent class: \yxorP\http\wrapper

### guzzleClientAction::onBeforeRequest

```php
guzzleClientAction::onBeforeRequest(  ): void
```

**Return Value:**





---

## headerRewritePluginAction

* Full name: \headerRewritePluginAction
* Parent class: \yxorP\http\wrapper

### headerRewritePluginAction::onBeforeRequest

```php
headerRewritePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### headerRewritePluginAction::onHeadersReceived

```php
headerRewritePluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### headerRewritePluginAction::headersReceived

```php
headerRewritePluginAction::headersReceived( mixed response, mixed request_url ): void
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `response` | **mixed** |  |
| `request_url` | **mixed** |  |

**Return Value:**





---

## htmlCommentsRemover

* Full name: \yxorP\minify\htmlCommentsRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### htmlCommentsRemover::getReplacePatternData

```php
htmlCommentsRemover::getReplacePatternData(  ): array
```

**Return Value:**





---

## inlineCssMinifier

* Full name: \yxorP\minify\inlineCssMinifier
* This class implements: \yxorP\minify\minfyInterface

### inlineCssMinifier::process

```php
inlineCssMinifier::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## inlineJavascriptMinifier

* Full name: \yxorP\minify\inlineJavascriptMinifier
* This class implements: \yxorP\minify\minfyInterface

### inlineJavascriptMinifier::process

```php
inlineJavascriptMinifier::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## logPluginAction

* Full name: \logPluginAction
* Parent class: \yxorP\http\wrapper

### logPluginAction::onHeadersReceived

```php
logPluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

## mimeTypesAction

* Full name: \mimeTypesAction
* Parent class: \yxorP\http\wrapper

### mimeTypesAction::buildHeaders

```php
mimeTypesAction::buildHeaders(  ): void
```

**Return Value:**





---

## minify

* Full name: \yxorP\minify\minify
* This class implements: \yxorP\minify\minfyInterface

### minify::__construct

```php
minify::__construct( \yxorP\minify\minfyInterface processors ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processors` | **\yxorP\minify\minfyInterface** |  |

**Return Value:**





---

### minify::createDefault

```php
minify::createDefault(  ): self
```

* This method is **static**.

**Return Value:**





---

### minify::process

```php
minify::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

### minify::addProcessor

```php
minify::addProcessor( \yxorP\minify\minfyInterface processor ): self
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `processor` | **\yxorP\minify\minfyInterface** |  |

**Return Value:**





---

## overridePluginAction

* Full name: \overridePluginAction
* Parent class: \yxorP\http\wrapper

### overridePluginAction::onCompleted

```php
overridePluginAction::onCompleted(  ): mixed
```

**Return Value:**





---

### overridePluginAction::REWRITE

```php
overridePluginAction::REWRITE( mixed content ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |

**Return Value:**





---

## paramStore

* Full name: \yxorP\http\paramStore

### paramStore::__construct

```php
paramStore::__construct( mixed parameters = array(), mixed case_sensitive = false ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `parameters` | **mixed** |  |
| `case_sensitive` | **mixed** |  |

**Return Value:**





---

### paramStore::replace

```php
paramStore::replace( array data ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `data` | **array** |  |

**Return Value:**





---

### paramStore::clear

```php
paramStore::clear(  ): void
```

**Return Value:**





---

### paramStore::set

```php
paramStore::set( mixed key, mixed value, mixed replace = true ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `value` | **mixed** |  |
| `replace` | **mixed** |  |

**Return Value:**





---

### paramStore::has

```php
paramStore::has( mixed key ): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |

**Return Value:**





---

### paramStore::remove

```php
paramStore::remove( mixed key ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |

**Return Value:**





---

### paramStore::get

```php
paramStore::get( mixed key, mixed default = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `key` | **mixed** |  |
| `default` | **mixed** |  |

**Return Value:**





---

### paramStore::all

```php
paramStore::all(  ): array
```

**Return Value:**





---

### paramStore::__toString

```php
paramStore::__toString(  ): mixed
```

**Return Value:**





---

## proxifyPluginAction

* Full name: \proxifyPluginAction
* Parent class: \yxorP\http\wrapper

### proxifyPluginAction::onBeforeRequest

```php
proxifyPluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### proxifyPluginAction::onCompleted

```php
proxifyPluginAction::onCompleted(  ): void
```

**Return Value:**





---

### proxifyPluginAction::clean_content_type

```php
proxifyPluginAction::clean_content_type( mixed content_type ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content_type` | **mixed** |  |

**Return Value:**





---

## quotesRemover

* Full name: \yxorP\minify\quotesRemover
* Parent class: \yxorP\minify\areplacer
* This class implements: \yxorP\minify\minfyInterface

### quotesRemover::getReplacePatternData

```php
quotesRemover::getReplacePatternData(  ): array
```

**Return Value:**





---

## readyCheckAction

* Full name: \readyCheckAction
* Parent class: \yxorP\http\wrapper

### readyCheckAction::onCheck

```php
readyCheckAction::onCheck(  ): string
```

**Return Value:**





---

## request

* Full name: \yxorP\http\request

### request::__construct

```php
request::__construct( mixed method, mixed url, mixed body = null ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |
| `url` | **mixed** |  |
| `body` | **mixed** |  |

**Return Value:**





---

### request::setUrl

```php
request::setUrl( mixed url ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `url` | **mixed** |  |

**Return Value:**





---

### request::parseQuery

```php
request::parseQuery( mixed query ): array
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `query` | **mixed** |  |

**Return Value:**





---

### request::setBody

```php
request::setBody( mixed body, mixed content_type = false ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `body` | **mixed** |  |
| `content_type` | **mixed** |  |

**Return Value:**





---

### request::prepare

```php
request::prepare(  ): void
```

**Return Value:**





---

### request::buildPostBody

```php
request::buildPostBody( mixed fields, mixed files, mixed boundary = null ): string
```

* This method is **static**.
  **Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `fields` | **mixed** |  |
| `files` | **mixed** |  |
| `boundary` | **mixed** |  |

**Return Value:**





---

### request::createFromGlobals

```php
request::createFromGlobals(  ): \yxorP\http\request
```

* This method is **static**.

**Return Value:**





---

### request::getMethod

```php
request::getMethod(  ): string
```

**Return Value:**





---

### request::setMethod

```php
request::setMethod( mixed method ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `method` | **mixed** |  |

**Return Value:**





---

### request::getUrl

```php
request::getUrl(  ): string
```

**Return Value:**





---

### request::getProtocolVersion

```php
request::getProtocolVersion(  ): string
```

**Return Value:**





---

### request::getRawHeaders

```php
request::getRawHeaders(  ): string
```

**Return Value:**





---

### request::getRawBody

```php
request::getRawBody(  ): string
```

**Return Value:**





---

### request::getUri

```php
request::getUri(  ): mixed
```

**Return Value:**





---

## requestBodyAction

* Full name: \requestBodyAction
* Parent class: \yxorP\http\wrapper

### requestBodyAction::buildRequest

```php
requestBodyAction::buildRequest(  ): void
```

**Return Value:**





---

## requestResponseAction

* Full name: \requestResponseAction
* Parent class: \yxorP\http\wrapper

### requestResponseAction::buildIncludes

```php
requestResponseAction::buildIncludes(  ): void
```

**Return Value:**





---

## resourceHandlerAction

* Full name: \resourceHandlerAction
* Parent class: \yxorP\http\wrapper

### resourceHandlerAction::onBuildException

```php
resourceHandlerAction::onBuildException( mixed e ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `e` | **mixed** |  |

**Return Value:**





---

## response

* Full name: \yxorP\http\response

### response::__construct

```php
response::__construct( mixed content = CHAR_EMPTY_STRING, mixed status = 200, mixed headers = array() ): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |
| `status` | **mixed** |  |
| `headers` | **mixed** |  |

**Return Value:**





---

### response::setStatusCode

```php
response::setStatusCode( mixed code ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `code` | **mixed** |  |

**Return Value:**





---

### response::getContent

```php
response::getContent(  ): string
```

**Return Value:**





---

### response::setContent

```php
response::setContent( mixed content ): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `content` | **mixed** |  |

**Return Value:**





---

### response::printContent

```php
response::printContent(  ): void
```

**Return Value:**





---

### response::sendHeaders

```php
response::sendHeaders(  ): void
```

**Return Value:**





---

### response::getStatusText

```php
response::getStatusText(  ): string
```

**Return Value:**





---

### response::getStatusCode

```php
response::getStatusCode(  ): mixed
```

**Return Value:**





---

## setHeadersAction

* Full name: \setHeadersAction
* Parent class: \yxorP\http\wrapper

### setHeadersAction::buildHeaders

```php
setHeadersAction::buildHeaders(  ): void
```

**Return Value:**





---

## siteCollectionAction

* Full name: \siteCollectionAction
* Parent class: \yxorP\http\wrapper

### siteCollectionAction::onBuildContext

```php
siteCollectionAction::onBuildContext(  ): void
```

**Return Value:**





---

## streamPluginAction

* Full name: \streamPluginAction
* Parent class: \yxorP\http\wrapper

### streamPluginAction::onHeadersReceived

```php
streamPluginAction::onHeadersReceived(  ): void
```

**Return Value:**





---

### streamPluginAction::onCurlWrite

```php
streamPluginAction::onCurlWrite(  ): void
```

**Return Value:**





---

### streamPluginAction::onCompleted

```php
streamPluginAction::onCompleted(  ): void
```

**Return Value:**





---

## twitterPluginAction

* Full name: \twitterPluginAction
* Parent class: \yxorP\http\wrapper

### twitterPluginAction::onCompleted

```php
twitterPluginAction::onCompleted(  ): void
```

**Return Value:**





---

## whitespacesRemover

* Full name: \yxorP\minify\whitespacesRemover
* This class implements: \yxorP\minify\minfyInterface

### whitespacesRemover::process

```php
whitespacesRemover::process( string buffer ): string
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `buffer` | **string** |  |

**Return Value:**





---

## youtubePluginAction

* Full name: \youtubePluginAction
* Parent class: \yxorP\http\wrapper

### youtubePluginAction::onBeforeRequest

```php
youtubePluginAction::onBeforeRequest(  ): void
```

**Return Value:**





---

### youtubePluginAction::onCompleted

```php
youtubePluginAction::onCompleted(  ): void
```

**Return Value:**





---
