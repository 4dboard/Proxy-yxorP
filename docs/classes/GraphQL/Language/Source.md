***

# Source





* Full name: `\GraphQL\Language\Source`



## Properties


### body



```php
public string $body
```






***

### length



```php
public int $length
```






***

### name



```php
public string $name
```






***

### locationOffset



```php
public \GraphQL\Language\SourceLocation $locationOffset
```






***

## Methods


### __construct

A representation of source input to GraphQL.

```php
public __construct(string $body, string|null $name = null, ?\GraphQL\Language\SourceLocation $location = null): mixed
```

`name` and `locationOffset` are optional. They are useful for clients who
store GraphQL documents in source files; for example, if the GraphQL input
starts at line 40 in a file named Foo.graphql, it might be useful for name to
be "Foo.graphql" and location to be `{ line: 40, column: 0 }`.
line and column in locationOffset are 1-indexed






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$body` | **string** |  |
| `$name` | **string&#124;null** |  |
| `$location` | **?\GraphQL\Language\SourceLocation** |  |




***

### getLocation



```php
public getLocation(int $position): \GraphQL\Language\SourceLocation
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$position` | **int** |  |




***


***

