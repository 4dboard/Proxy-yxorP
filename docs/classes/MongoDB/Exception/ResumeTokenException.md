***

# ResumeTokenException





* Full name: `\MongoDB\Exception\ResumeTokenException`
* Parent class: [`\MongoDB\Exception\RuntimeException`](./RuntimeException.md)




## Methods


### invalidType

Thrown when a resume token has an invalid type.

```php
public static invalidType(mixed $value): self
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$value` | **mixed** | Actual value (used to derive the type) |




***

### notFound

Thrown when a resume token is not found in a change document.

```php
public static notFound(): self
```



* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-07-03 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
