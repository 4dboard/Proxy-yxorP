***

# ImplicitlyIgnoredAnnotationNames

A list of annotations that are implicitly ignored during the parsing process.

All names are case sensitive.

* Full name: `\Doctrine\Common\Annotations\ImplicitlyIgnoredAnnotationNames`
* This class is marked as **final** and can't be subclassed
* This class is a **Final class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`Reserved`|private| |[

    &#039;Annotation&#039; =&gt; true,
    &#039;Attribute&#039; =&gt; true,
    &#039;Attributes&#039; =&gt; true,
    /* Can we enable this? &#039;Enum&#039; =&gt; true, */
    &#039;Required&#039; =&gt; true,
    &#039;Target&#039; =&gt; true,
    &#039;NamedArgumentConstructor&#039; =&gt; true,

]| |`WidelyUsedNonStandard`|private|
|[&#039;fix&#039; =&gt; true, &#039;fixme&#039; =&gt; true, &#039;override&#039; =&gt; true]| |`PhpDocumentor1`|private|
|[&#039;abstract&#039; =&gt; true, &#039;access&#039; =&gt; true, &#039;code&#039; =&gt; true, &#039;deprec&#039; =&gt; true, &#039;endcode&#039; =&gt; true, &#039;exception&#039; =&gt; true, &#039;final&#039; =&gt; true, &#039;ingroup&#039; =&gt; true, &#039;inheritdoc&#039; =&gt; true, &#039;inheritDoc&#039; =&gt; true, &#039;magic&#039; =&gt; true, &#039;name&#039; =&gt; true, &#039;private&#039; =&gt; true, &#039;static&#039; =&gt; true, &#039;staticvar&#039; =&gt; true, &#039;staticVar&#039; =&gt; true, &#039;toc&#039; =&gt; true, &#039;tutorial&#039; =&gt; true, &#039;throw&#039; =&gt; true]
| |`PhpDocumentor2`|private| |[
&#039;api&#039; =&gt; true, &#039;author&#039; =&gt; true, &#039;category&#039; =&gt; true, &#039;copyright&#039; =&gt; true, &#039;deprecated&#039; =&gt; true, &#039;example&#039; =&gt; true, &#039;filesource&#039; =&gt; true, &#039;global&#039; =&gt; true, &#039;ignore&#039; =&gt; true, /* Can we enable this? &#039;index&#039; =&gt; true, */ &#039;internal&#039; =&gt; true, &#039;license&#039; =&gt; true, &#039;link&#039; =&gt; true, &#039;method&#039; =&gt; true, &#039;package&#039; =&gt; true, &#039;param&#039; =&gt; true, &#039;property&#039; =&gt; true, &#039;property-read&#039; =&gt; true, &#039;property-write&#039; =&gt; true, &#039;return&#039; =&gt; true, &#039;see&#039; =&gt; true, &#039;since&#039; =&gt; true, &#039;source&#039; =&gt; true, &#039;subpackage&#039; =&gt; true, &#039;throws&#039; =&gt; true, &#039;todo&#039; =&gt; true, &#039;TODO&#039; =&gt; true, &#039;usedby&#039; =&gt; true, &#039;uses&#039; =&gt; true, &#039;var&#039; =&gt; true, &#039;version&#039; =&gt; true,
]| |`PHPUnit`|private|
|[&#039;author&#039; =&gt; true, &#039;after&#039; =&gt; true, &#039;afterClass&#039; =&gt; true, &#039;backupGlobals&#039; =&gt; true, &#039;backupStaticAttributes&#039; =&gt; true, &#039;before&#039; =&gt; true, &#039;beforeClass&#039; =&gt; true, &#039;codeCoverageIgnore&#039; =&gt; true, &#039;codeCoverageIgnoreStart&#039; =&gt; true, &#039;codeCoverageIgnoreEnd&#039; =&gt; true, &#039;covers&#039; =&gt; true, &#039;coversDefaultClass&#039; =&gt; true, &#039;coversNothing&#039; =&gt; true, &#039;dataProvider&#039; =&gt; true, &#039;depends&#039; =&gt; true, &#039;doesNotPerformAssertions&#039; =&gt; true, &#039;expectedException&#039; =&gt; true, &#039;expectedExceptionCode&#039; =&gt; true, &#039;expectedExceptionMessage&#039; =&gt; true, &#039;expectedExceptionMessageRegExp&#039; =&gt; true, &#039;group&#039; =&gt; true, &#039;large&#039; =&gt; true, &#039;medium&#039; =&gt; true, &#039;preserveGlobalState&#039; =&gt; true, &#039;requires&#039; =&gt; true, &#039;runTestsInSeparateProcesses&#039; =&gt; true, &#039;runInSeparateProcess&#039; =&gt; true, &#039;small&#039; =&gt; true, &#039;test&#039; =&gt; true, &#039;testdox&#039; =&gt; true, &#039;testWith&#039; =&gt; true, &#039;ticket&#039; =&gt; true, &#039;uses&#039; =&gt; true]
| |`PhpCheckStyle`|private| |[&#039;SuppressWarnings&#039; =&gt; true]| |`PhpStorm`|private|
|[&#039;noinspection&#039; =&gt; true]| |`PEAR`|private| |[&#039;package_version&#039; =&gt; true]| |`PlainUML`|private|
|[&#039;startuml&#039; =&gt; true, &#039;enduml&#039; =&gt; true]| |`Symfony`|private|
|[&#039;experimental&#039; =&gt; true]| |`PhpCodeSniffer`|private|
|[&#039;codingStandardsIgnoreStart&#039; =&gt; true, &#039;codingStandardsIgnoreEnd&#039; =&gt; true]|
|`SlevomatCodingStandard`|private| |[&#039;phpcsSuppress&#039; =&gt; true]| |`Phan`|private|
|[&#039;suppress&#039; =&gt; true]| |`Rector`|private| |[&#039;noRector&#039; =&gt; true]| |`StaticAnalysis`|private| |[
// PHPStan, Psalm &#039;extends&#039; =&gt; true, &#039;implements&#039; =&gt; true, &#039;template&#039; =&gt; true, &#039;use&#039; =&gt; true, // Psalm &#039;pure&#039; =&gt; true, &#039;immutable&#039; =&gt; true,
]| |`LIST`|public| |self::Reserved + self::WidelyUsedNonStandard + self::PhpDocumentor1 + self::PhpDocumentor2 + self::
PHPUnit + self::PhpCheckStyle + self::PhpStorm + self::PEAR + self::PlainUML + self::Symfony + self::
SlevomatCodingStandard + self::PhpCodeSniffer + self::Phan + self::Rector + self::StaticAnalysis|

## Methods

### __construct

```php
private __construct(): mixed
```

yxorP::get('REQUEST')
