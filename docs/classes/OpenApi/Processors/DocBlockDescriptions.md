***

# DocBlockDescriptions

This would be detected as summary.

And this would be detected
as the description.

* Full name: `\OpenApi\Processors\DocBlockDescriptions`




## Methods


### __invoke

Checks if the annotation has a summary and/or description property
and uses the text in the comment block (above the annotations) as summary and/or description.

```php
public __invoke(\OpenApi\Analysis $analysis): mixed
```

Use null `@Annotation(description=null)` if you don't want the annotation to have a description.






**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$analysis` | **\OpenApi\Analysis** |  |




***

### description



```php
private description(mixed $annotation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **mixed** |  |




***

### summaryAndDescription



```php
private summaryAndDescription(mixed $annotation): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$annotation` | **mixed** |  |




***


***

