***

# OverridingExtensionToMimeTypeMap





* Full name: `\League\MimeTypeDetection\OverridingExtensionToMimeTypeMap`
* This class implements:
[`\League\MimeTypeDetection\ExtensionToMimeTypeMap`](./ExtensionToMimeTypeMap.md)



## Properties


### innerMap



```php
private \League\MimeTypeDetection\ExtensionToMimeTypeMap $innerMap
```






***

### overrides



```php
private string[] $overrides
```






***

## Methods


### __construct



```php
public __construct(\League\MimeTypeDetection\ExtensionToMimeTypeMap $innerMap, array&lt;string,string&gt; $overrides): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$innerMap` | **\League\MimeTypeDetection\ExtensionToMimeTypeMap** |  |
| `$overrides` | **array<string,string>** |  |




***

### lookupMimeType



```php
public lookupMimeType(string $extension): ?string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$extension` | **string** |  |




***


***

