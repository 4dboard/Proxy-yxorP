***

# UriResolver

Resolves a URI reference in the context of a base URI and the opposite way.



* Full name: `\yxorP\lib\proxy\Psr7\UriResolver`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

**See Also:**

* https://tools.ietf.org/html/rfc3986#section-5 - 




## Methods


### __construct



```php
private __construct(): mixed
```











***

### removeDotSegments

Removes dot segments from a path and returns the new path.

```php
public static removeDotSegments(string $path): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$path` | **string** |  |



**See Also:**

* http://tools.ietf.org/html/rfc3986#section-5.2.4 - 

***

### resolve

Converts the relative URI into a new URI that is resolved against the base URI.

```php
public static resolve(\yxorP\inc\Psr\Http\Message\UriInterface $base, \yxorP\inc\Psr\Http\Message\UriInterface $rel): \yxorP\inc\Psr\Http\Message\UriInterface
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\inc\Psr\Http\Message\UriInterface** | Base URI |
| `$rel` | **\yxorP\inc\Psr\Http\Message\UriInterface** | Relative URI |



**See Also:**

* http://tools.ietf.org/html/rfc3986#section-5.2 - 

***

### relativize

Returns the target URI as a relative reference from the base URI.

```php
public static relativize(\yxorP\inc\Psr\Http\Message\UriInterface $base, \yxorP\inc\Psr\Http\Message\UriInterface $target): \yxorP\inc\Psr\Http\Message\UriInterface
```

This method is the counterpart to resolve():

   (string) $target === (string) UriResolver::resolve($base, UriResolver::relativize($base, $target))

One use-case is to use the current request URI as base URI and then generate relative links in your documents
to reduce the document size or offer self-contained downloadable document archives.

   $base = new Uri('http://example.com/a/b/');
   echo UriResolver::relativize($base, new Uri('http://example.com/a/b/c'));  // prints 'c'.
   echo UriResolver::relativize($base, new Uri('http://example.com/a/x/y'));  // prints '../x/y'.
   echo UriResolver::relativize($base, new Uri('http://example.com/a/b/?q')); // prints '?q'.
   echo UriResolver::relativize($base, new Uri('http://example.org/a/b/'));   // prints '//example.org/a/b/'.

This method also accepts a target that is already relative and will try to relativize it further. Only a
relative-path reference will be returned as-is.

   echo UriResolver::relativize($base, new Uri('/a/b/c'));  // prints 'c' as well

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\inc\Psr\Http\Message\UriInterface** | Base URI |
| `$target` | **\yxorP\inc\Psr\Http\Message\UriInterface** | Target URI |


**Return Value:**

The relative URI reference



***

### getRelativePath



```php
private static getRelativePath(\yxorP\inc\Psr\Http\Message\UriInterface $base, \yxorP\inc\Psr\Http\Message\UriInterface $target): mixed
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$base` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |
| `$target` | **\yxorP\inc\Psr\Http\Message\UriInterface** |  |




***


***

