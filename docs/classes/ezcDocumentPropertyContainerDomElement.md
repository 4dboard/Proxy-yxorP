***

# ezcDocumentPropertyContainerDomElement

Wrapper class around DOMElement to store additional information
associated with DOMElement nodes.

The storage of additional information is realized using a static object
attribute, since dynamic attributes do not seem to work in DOMElement
derived classes.

* Full name: `\ezcDocumentPropertyContainerDomElement`
* Parent class: [`DOMElement`](./DOMElement.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NS_URI`|public| |&#039;http://ezcomponents.org/Document&#039;|

## Properties


### properties

Static property container shared with all nodes.

```php
protected static array $properties
```

Contains the properties registered for a node indexed by the numeric
ID of the respective node, which is assigned on the first write
access to each node.

* This property is **static**.


***

### id

Autoincrement unique ID for DOMElement nodes in XML documents.

```php
protected static int $id
```



* This property is **static**.


***

## Methods


### getProperty

Get property associated with node

```php
public getProperty(string $name): mixed
```

Get the value of a property associated with the node, or false, if
the property does not (yet) exist.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |




***

### setProperty

Set property on current node

```php
public setProperty(string $name, mixed $value): void
```

Set a custom property on the current node, containing a mixed value
identified by a string identifier.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$value` | **mixed** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
