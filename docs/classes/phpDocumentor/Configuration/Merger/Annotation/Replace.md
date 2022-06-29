***

# Replace

Declares that, when merging objects, the property with this annotation should be replaced and not merged with the
property of the same name in the secondary object.

Normal behaviour for the Merger is to merge two properties with the same name if they contain an array of items. When
this annotation is used on a property then this behavior is altered and the associated property is always replaced with
the newer version.

* Full name: `\phpDocumentor\Configuration\Merger\Annotation\Replace`

***

