***

# BlogPost





* Full name: `\JMS\Serializer\Tests\Fixtures\Doctrine\BlogPost`



## Properties


### id



```php
protected $id
```






***

### title



```php
private $title
```






***

### slug



```php
protected $slug
```






***

### createdAt



```php
private $createdAt
```






***

### published



```php
private $published
```






***

### comments



```php
private $comments
```






***

### author



```php
private $author
```






***

### ref



```php
private $ref
```






***

## Methods


### __construct



```php
public __construct(mixed $title, \JMS\Serializer\Tests\Fixtures\Doctrine\Author $author, \DateTime $createdAt): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$title` | **mixed** |  |
| `$author` | **\JMS\Serializer\Tests\Fixtures\Doctrine\Author** |  |
| `$createdAt` | **\DateTime** |  |




***

### setPublished



```php
public setPublished(): mixed
```











***

### addComment



```php
public addComment(\JMS\Serializer\Tests\Fixtures\Doctrine\Comment $comment): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$comment` | **\JMS\Serializer\Tests\Fixtures\Doctrine\Comment** |  |




***

### getRef



```php
public getRef(): mixed
```











***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
