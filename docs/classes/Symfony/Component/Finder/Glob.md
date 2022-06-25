***

# Glob

Glob matches globbing patterns against text.

if match_glob("foo.*", "foo.bar") echo "matched\n";

    // prints foo.bar and foo.baz
    $regex = glob_to_regex("foo.*");
    for (array('foo.bar', 'foo.baz', 'foo', 'bar') as $t)
    {
        if (/$regex/) echo "matched: $car\n";
    }

Glob implements glob(3) style matching that can be used to match against text, rather than fetching names from a
filesystem.

Based on the Perl Text::Glob module.

* Full name: `\Symfony\Component\Finder\Glob`

## Methods

### toRegex

Returns a regexp which is the equivalent of the glob pattern.

```php
public static toRegex(string $glob, bool $strictLeadingDot = true, bool $strictWildcardSlash = true, string $delimiter = &#039;#&#039;): string
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$glob` | **string** | The glob pattern |
| `$strictLeadingDot` | **bool** |  |
| `$strictWildcardSlash` | **bool** |  |
| `$delimiter` | **string** | Optional delimiter |

**Return Value:**

regex The regexp yxorP::get('REQUEST')
