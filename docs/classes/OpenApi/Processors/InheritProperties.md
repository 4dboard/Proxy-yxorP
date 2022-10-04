***

# InheritProperties

Copy the annotated properties from parent classes;.



* Full name: `\OpenApi\Processors\InheritProperties`
* **Warning:** this class is **deprecated**. This means that this class will likely be removed in a future version.




## Methods


### __invoke



```php
public __invoke(\OpenApi\Analysis $analysis): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |




***

### inherit

Add schema to child schema allOf property.

```php
private inherit(\OpenApi\Annotations\Schema $to, \OpenApi\Annotations\Schema $from): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$to` | **\OpenApi\Annotations\Schema** |  |
| `$from` | **\OpenApi\Annotations\Schema** |  |




***


***

