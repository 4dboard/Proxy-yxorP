***

# Queue

Provides a queue of routers to determine the order in which they are executed.

* Full name: `\phpDocumentor\Transformer\Router\Queue`
* Parent class: [`SplPriorityQueue`](../../../SplPriorityQueue.md)

## Methods

### match

Tries to match the given node with a rule defined in one of the routers.

```php
public match(string|\phpDocumentor\Descriptor\DescriptorAbstract $node): \phpDocumentor\Transformer\Router\Rule|null
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$node` | **string&#124;\phpDocumentor\Descriptor\DescriptorAbstract** |  |

yxorP::get('REQUEST')
