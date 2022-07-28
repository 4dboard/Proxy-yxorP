***

# TypeComparators





* Full name: `\GraphQL\Utils\TypeComparators`




## Methods


### isEqualType

Provided two types, return true if the types are equal (invariant).

```php
public static isEqualType(\GraphQL\Type\Definition\Type $typeA, \GraphQL\Type\Definition\Type $typeB): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$typeA` | **\GraphQL\Type\Definition\Type** |  |
| `$typeB` | **\GraphQL\Type\Definition\Type** |  |




***

### isTypeSubTypeOf

Provided a type and a super type, return true if the first type is either
equal or a subset of the second super type (covariant).

```php
public static isTypeSubTypeOf(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\Type $maybeSubType, \GraphQL\Type\Definition\Type $superType): bool
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$maybeSubType` | **\GraphQL\Type\Definition\Type** |  |
| `$superType` | **\GraphQL\Type\Definition\Type** |  |




***

### doTypesOverlap

Provided two composite types, determine if they "overlap". Two composite
types overlap when the Sets of possible concrete types for each intersect.

```php
public static doTypesOverlap(\GraphQL\Type\Schema $schema, \GraphQL\Type\Definition\CompositeType $typeA, \GraphQL\Type\Definition\CompositeType $typeB): bool
```

This is often used to determine if a fragment of a given type could possibly
be visited in a context of another type.

This function is commutative.

* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schema` | **\GraphQL\Type\Schema** |  |
| `$typeA` | **\GraphQL\Type\Definition\CompositeType** |  |
| `$typeB` | **\GraphQL\Type\Definition\CompositeType** |  |




***


***

