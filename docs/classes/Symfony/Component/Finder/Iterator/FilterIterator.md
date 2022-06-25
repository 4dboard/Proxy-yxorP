***

# FilterIterator

This iterator just overrides the rewind method in order to correct a PHP bug,
which existed before version 5.5.23/5.6.7.



* Full name: `\Symfony\Component\Finder\Iterator\FilterIterator`
* Parent class: [`FilterIterator`](../../../../FilterIterator.md)
* This class is an **Abstract class**

**See Also:**

* https://bugs.php.net/68557 - 




## Methods


### rewind

This is a workaround for the problem with \FilterIterator leaving inner \FilesystemIterator in wrong state after
rewind in some cases.

```php
public rewind(): mixed
```










**See Also:**

* \Symfony\Component\Finder\Iterator\FilterIterator::rewind() - 

***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
