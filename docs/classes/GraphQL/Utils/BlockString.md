***

# BlockString





* Full name: `\GraphQL\Utils\BlockString`




## Methods


### value

Produces the value of a block string from its parsed raw value, similar to
Coffeescript's block string, Python's docstring trim or Ruby's strip_heredoc.

```php
public static value(mixed $rawString): mixed
```

This implements the GraphQL spec's BlockStringValue() static algorithm.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rawString` | **mixed** |  |




***

### leadingWhitespace



```php
private static leadingWhitespace(mixed $str): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **mixed** |  |




***


***

