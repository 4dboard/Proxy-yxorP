***

# PropertyPath

Contains utility methods for dealing with property paths.

For more extensive functionality, use Symfony's PropertyAccess component.

* Full name: `\Symfony\Component\Validator\Util\PropertyPath`

## Methods

### append

Appends a path to a given property path.

```php
public static append(string $basePath, string $subPath): string
```

If the base path is empty, the appended path will be returned unchanged. If the base path is not empty, and the appended
path starts with a squared opening bracket ("["), the concatenation of the two paths is returned. Otherwise, the
concatenation of the two paths is returned, separated by a dot (".").

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$basePath` | **string** | The base path |
| `$subPath` | **string** | The path to append |

**Return Value:**

The concatenation of the two property paths



***

### __construct

Not instantiable.

```php
private __construct(): mixed
```

yxorP::get('REQUEST')
