***

# CascadingStrategy

Specifies whether an object should be cascaded.

Cascading is relevant for any node type but class nodes. If such a node contains an object of value, and if cascading is
enabled, then the node traverser will try to find class metadata for that object and validate the object against that
metadata.

If no metadata is found for a cascaded object, and if that object implements {@link}, the node traverser will iterate
over the object and cascade each object or collection contained within, unless iteration is prohibited by the specified
{@link}.

Although the constants currently represent a boolean switch, they are implemented as bit mask in order to allow future
extensions.

* Full name: `\Symfony\Component\Validator\Mapping\CascadingStrategy`

**See Also:**

* \Symfony\Component\Validator\Mapping\TraversalStrategy -

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NONE`|public| |1|
|`CASCADE`|public| |2|

## Methods

### __construct

Not instantiable.

```php
private __construct(): mixed
```

yxorP::get('REQUEST')
