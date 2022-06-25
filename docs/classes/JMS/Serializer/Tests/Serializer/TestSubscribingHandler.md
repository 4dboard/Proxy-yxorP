***

# TestSubscribingHandler





* Full name: `\JMS\Serializer\Tests\Serializer\TestSubscribingHandler`
* This class implements:
[`\JMS\Serializer\Handler\SubscribingHandlerInterface`](../../Handler/SubscribingHandlerInterface.md)




## Methods


### getSubscribingMethods

Return format:

```php
public static getSubscribingMethods(): array
```

array(
         array(
             'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
             'format' => 'json',
             'type' => 'DateTime',
             'method' => 'serializeDateTimeToJson',
         ),
     )

The direction and method keys can be omitted.

* This method is **static**.







***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
