***

# ezcDocumentOdtElementHtmlTableFilter

Filter for ODT <table:table/> and its child elements.

This filter generates XHTML style tables in DocBook. This class is not yet
in use at all, since the internal DocBook representation of the Document
component does not cope with XHTML style tables, yet.

* Full name: `\ezcDocumentOdtElementHtmlTableFilter`
* Parent class: [`\ezcDocumentOdtElementBaseFilter`](./ezcDocumentOdtElementBaseFilter.md)



## Properties


### methodMap

Mapping for table elements.

```php
protected array $methodMap
```

Maps ODT table tags to a method in this class to convert them.




***

## Methods


### filterElement

Filter a single element.

```php
public filterElement(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### handles

Check if filter handles the current element.

```php
public handles(\ezcDocumentPropertyContainerDomElement $element): void
```

Returns a boolean value, indicating weather this filter can handle
the current element.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### convertTable

Converts the <table:table/> element.

```php
protected convertTable(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### aggregateRows

Aggregates table rows into a <tbody/> element.

```php
protected aggregateRows(\ezcDocumentPropertyContainerDomElement $element): void
```

This method aggregates all rows of a table into a single <tbody/>
element in the custom {@link} namespace. This
element will later be converted into a DocBook <tbody/> element.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### convertColumn

Convert the <table:table-column/> element.

```php
protected convertColumn(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### convertHeader

Convert the <table:table-header-rows/> element.

```php
protected convertHeader(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### convertRow

Convert the <table:table-row/> element.

```php
protected convertRow(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***

### convertCell

Convert the <table:table-cell/> element.

```php
protected convertCell(\ezcDocumentPropertyContainerDomElement $element): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\ezcDocumentPropertyContainerDomElement** |  |




***


## Inherited methods


### filterElement

Filter a single element

```php
public filterElement(\DOMElement $element): void
```




* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***

### handles

Check if filter handles the current element

```php
public handles(\DOMElement $element): void
```

Returns a boolean value, indicating weather this filter can handle
the current element.


* This method is **abstract**.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$element` | **\DOMElement** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
