***

# ezcDocumentOdtMetaGenerator

Generates basic meta data for ODT files.



* Full name: `\ezcDocumentOdtMetaGenerator`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`VERSION`|public| |&#039;//autogen//&#039;|
|`DEV_VERSION`|public| |&#039;dev&#039;|
|`GENERATOR`|public| |&#039;eZComponents/Document-%s&#039;|


## Methods


### generateMetaData

Generates basic meta data in $odtDocument.

```php
public generateMetaData(\DOMElement $odtMetaSection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$odtMetaSection` | **\DOMElement** |  |




***

### insertGenerator

Inserts the <meta:generator/> tag.

```php
protected insertGenerator(\DOMElement $metaSection): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metaSection` | **\DOMElement** |  |




***

### insertDate

Inserts <meta:creation-date /> and <dc:date/> tags.

```php
protected insertDate(\DOMElement $metaSection): mixed
```

Note that OpenOffice.org 3.1.1 is not capable of parsing W3C compliant
dates with TZ offset correctly {@see}. We do not work
around this issue, since it's too minor.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$metaSection` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
