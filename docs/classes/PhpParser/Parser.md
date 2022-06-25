***

# Parser





* Full name: `\PhpParser\Parser`
* Parent class: [`\PhpParser\ParserAbstract`](./ParserAbstract.md)


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`YYERRTOK`|public| |256|
|`T_INCLUDE`|public| |257|
|`T_INCLUDE_ONCE`|public| |258|
|`T_EVAL`|public| |259|
|`T_REQUIRE`|public| |260|
|`T_REQUIRE_ONCE`|public| |261|
|`T_LOGICAL_OR`|public| |262|
|`T_LOGICAL_XOR`|public| |263|
|`T_LOGICAL_AND`|public| |264|
|`T_PRINT`|public| |265|
|`T_YIELD`|public| |266|
|`T_YIELD_FROM`|public| |267|
|`T_PLUS_EQUAL`|public| |268|
|`T_MINUS_EQUAL`|public| |269|
|`T_MUL_EQUAL`|public| |270|
|`T_DIV_EQUAL`|public| |271|
|`T_CONCAT_EQUAL`|public| |272|
|`T_MOD_EQUAL`|public| |273|
|`T_AND_EQUAL`|public| |274|
|`T_OR_EQUAL`|public| |275|
|`T_XOR_EQUAL`|public| |276|
|`T_SL_EQUAL`|public| |277|
|`T_SR_EQUAL`|public| |278|
|`T_POW_EQUAL`|public| |279|
|`T_COALESCE`|public| |280|
|`T_BOOLEAN_OR`|public| |281|
|`T_BOOLEAN_AND`|public| |282|
|`T_IS_EQUAL`|public| |283|
|`T_IS_NOT_EQUAL`|public| |284|
|`T_IS_IDENTICAL`|public| |285|
|`T_IS_NOT_IDENTICAL`|public| |286|
|`T_SPACESHIP`|public| |287|
|`T_IS_SMALLER_OR_EQUAL`|public| |288|
|`T_IS_GREATER_OR_EQUAL`|public| |289|
|`T_SL`|public| |290|
|`T_SR`|public| |291|
|`T_INSTANCEOF`|public| |292|
|`T_INC`|public| |293|
|`T_DEC`|public| |294|
|`T_INT_CAST`|public| |295|
|`T_DOUBLE_CAST`|public| |296|
|`T_STRING_CAST`|public| |297|
|`T_ARRAY_CAST`|public| |298|
|`T_OBJECT_CAST`|public| |299|
|`T_BOOL_CAST`|public| |300|
|`T_UNSET_CAST`|public| |301|
|`T_POW`|public| |302|
|`T_NEW`|public| |303|
|`T_CLONE`|public| |304|
|`T_EXIT`|public| |305|
|`T_IF`|public| |306|
|`T_ELSEIF`|public| |307|
|`T_ELSE`|public| |308|
|`T_ENDIF`|public| |309|
|`T_LNUMBER`|public| |310|
|`T_DNUMBER`|public| |311|
|`T_STRING`|public| |312|
|`T_STRING_VARNAME`|public| |313|
|`T_VARIABLE`|public| |314|
|`T_NUM_STRING`|public| |315|
|`T_INLINE_HTML`|public| |316|
|`T_CHARACTER`|public| |317|
|`T_BAD_CHARACTER`|public| |318|
|`T_ENCAPSED_AND_WHITESPACE`|public| |319|
|`T_CONSTANT_ENCAPSED_STRING`|public| |320|
|`T_ECHO`|public| |321|
|`T_DO`|public| |322|
|`T_WHILE`|public| |323|
|`T_ENDWHILE`|public| |324|
|`T_FOR`|public| |325|
|`T_ENDFOR`|public| |326|
|`T_FOREACH`|public| |327|
|`T_ENDFOREACH`|public| |328|
|`T_DECLARE`|public| |329|
|`T_ENDDECLARE`|public| |330|
|`T_AS`|public| |331|
|`T_SWITCH`|public| |332|
|`T_ENDSWITCH`|public| |333|
|`T_CASE`|public| |334|
|`T_DEFAULT`|public| |335|
|`T_BREAK`|public| |336|
|`T_CONTINUE`|public| |337|
|`T_GOTO`|public| |338|
|`T_FUNCTION`|public| |339|
|`T_CONST`|public| |340|
|`T_RETURN`|public| |341|
|`T_TRY`|public| |342|
|`T_CATCH`|public| |343|
|`T_FINALLY`|public| |344|
|`T_THROW`|public| |345|
|`T_USE`|public| |346|
|`T_INSTEADOF`|public| |347|
|`T_GLOBAL`|public| |348|
|`T_STATIC`|public| |349|
|`T_ABSTRACT`|public| |350|
|`T_FINAL`|public| |351|
|`T_PRIVATE`|public| |352|
|`T_PROTECTED`|public| |353|
|`T_PUBLIC`|public| |354|
|`T_VAR`|public| |355|
|`T_UNSET`|public| |356|
|`T_ISSET`|public| |357|
|`T_EMPTY`|public| |358|
|`T_HALT_COMPILER`|public| |359|
|`T_CLASS`|public| |360|
|`T_TRAIT`|public| |361|
|`T_INTERFACE`|public| |362|
|`T_EXTENDS`|public| |363|
|`T_IMPLEMENTS`|public| |364|
|`T_OBJECT_OPERATOR`|public| |365|
|`T_DOUBLE_ARROW`|public| |366|
|`T_LIST`|public| |367|
|`T_ARRAY`|public| |368|
|`T_CALLABLE`|public| |369|
|`T_CLASS_C`|public| |370|
|`T_TRAIT_C`|public| |371|
|`T_METHOD_C`|public| |372|
|`T_FUNC_C`|public| |373|
|`T_LINE`|public| |374|
|`T_FILE`|public| |375|
|`T_COMMENT`|public| |376|
|`T_DOC_COMMENT`|public| |377|
|`T_OPEN_TAG`|public| |378|
|`T_OPEN_TAG_WITH_ECHO`|public| |379|
|`T_CLOSE_TAG`|public| |380|
|`T_WHITESPACE`|public| |381|
|`T_START_HEREDOC`|public| |382|
|`T_END_HEREDOC`|public| |383|
|`T_DOLLAR_OPEN_CURLY_BRACES`|public| |384|
|`T_CURLY_OPEN`|public| |385|
|`T_PAAMAYIM_NEKUDOTAYIM`|public| |386|
|`T_NAMESPACE`|public| |387|
|`T_NS_C`|public| |388|
|`T_DIR`|public| |389|
|`T_NS_SEPARATOR`|public| |390|
|`T_ELLIPSIS`|public| |391|

## Properties


### tokenToSymbolMapSize



```php
protected int $tokenToSymbolMapSize
```






***

### actionTableSize



```php
protected int $actionTableSize
```






***

### gotoTableSize



```php
protected int $gotoTableSize
```






***

### invalidSymbol



```php
protected int $invalidSymbol
```






***

### errorSymbol



```php
protected int $errorSymbol
```






***

### defaultAction



```php
protected int $defaultAction
```






***

### unexpectedTokenRule



```php
protected int $unexpectedTokenRule
```






***

### YY2TBLSTATE



```php
protected $YY2TBLSTATE
```






***

### YYNLSTATES



```php
protected $YYNLSTATES
```






***

### symbolToName



```php
protected array $symbolToName
```






***

### tokenToSymbol



```php
protected array $tokenToSymbol
```






***

### action



```php
protected array $action
```






***

### actionCheck



```php
protected array $actionCheck
```






***

### actionBase



```php
protected array $actionBase
```






***

### actionDefault



```php
protected array $actionDefault
```






***

### goto



```php
protected array $goto
```






***

### gotoCheck



```php
protected array $gotoCheck
```






***

### gotoBase



```php
protected array $gotoBase
```






***

### gotoDefault



```php
protected array $gotoDefault
```






***

### ruleToNonTerminal



```php
protected array $ruleToNonTerminal
```






***

### ruleToLength



```php
protected array $ruleToLength
```






***

## Methods


### reduceRule0



```php
protected reduceRule0(): mixed
```











***

### reduceRule1



```php
protected reduceRule1(): mixed
```











***

### reduceRule2



```php
protected reduceRule2(): mixed
```











***

### reduceRule3



```php
protected reduceRule3(): mixed
```











***

### reduceRule4



```php
protected reduceRule4(): mixed
```











***

### reduceRule5



```php
protected reduceRule5(): mixed
```











***

### reduceRule6



```php
protected reduceRule6(): mixed
```











***

### reduceRule7



```php
protected reduceRule7(): mixed
```











***

### reduceRule8



```php
protected reduceRule8(): mixed
```











***

### reduceRule9



```php
protected reduceRule9(): mixed
```











***

### reduceRule10



```php
protected reduceRule10(): mixed
```











***

### reduceRule11



```php
protected reduceRule11(): mixed
```











***

### reduceRule12



```php
protected reduceRule12(): mixed
```











***

### reduceRule13



```php
protected reduceRule13(): mixed
```











***

### reduceRule14



```php
protected reduceRule14(): mixed
```











***

### reduceRule15



```php
protected reduceRule15(): mixed
```











***

### reduceRule16



```php
protected reduceRule16(): mixed
```











***

### reduceRule17



```php
protected reduceRule17(): mixed
```











***

### reduceRule18



```php
protected reduceRule18(): mixed
```











***

### reduceRule19



```php
protected reduceRule19(): mixed
```











***

### reduceRule20



```php
protected reduceRule20(): mixed
```











***

### reduceRule21



```php
protected reduceRule21(): mixed
```











***

### reduceRule22



```php
protected reduceRule22(): mixed
```











***

### reduceRule23



```php
protected reduceRule23(): mixed
```











***

### reduceRule24



```php
protected reduceRule24(): mixed
```











***

### reduceRule25



```php
protected reduceRule25(): mixed
```











***

### reduceRule26



```php
protected reduceRule26(): mixed
```











***

### reduceRule27



```php
protected reduceRule27(): mixed
```











***

### reduceRule28



```php
protected reduceRule28(): mixed
```











***

### reduceRule29



```php
protected reduceRule29(): mixed
```











***

### reduceRule30



```php
protected reduceRule30(): mixed
```











***

### reduceRule31



```php
protected reduceRule31(): mixed
```











***

### reduceRule32



```php
protected reduceRule32(): mixed
```











***

### reduceRule33



```php
protected reduceRule33(): mixed
```











***

### reduceRule34



```php
protected reduceRule34(): mixed
```











***

### reduceRule35



```php
protected reduceRule35(): mixed
```











***

### reduceRule36



```php
protected reduceRule36(): mixed
```











***

### reduceRule37



```php
protected reduceRule37(): mixed
```











***

### reduceRule38



```php
protected reduceRule38(): mixed
```











***

### reduceRule39



```php
protected reduceRule39(): mixed
```











***

### reduceRule40



```php
protected reduceRule40(): mixed
```











***

### reduceRule41



```php
protected reduceRule41(): mixed
```











***

### reduceRule42



```php
protected reduceRule42(): mixed
```











***

### reduceRule43



```php
protected reduceRule43(): mixed
```











***

### reduceRule44



```php
protected reduceRule44(): mixed
```











***

### reduceRule45



```php
protected reduceRule45(): mixed
```











***

### reduceRule46



```php
protected reduceRule46(): mixed
```











***

### reduceRule47



```php
protected reduceRule47(): mixed
```











***

### reduceRule48



```php
protected reduceRule48(): mixed
```











***

### reduceRule49



```php
protected reduceRule49(): mixed
```











***

### reduceRule50



```php
protected reduceRule50(): mixed
```











***

### reduceRule51



```php
protected reduceRule51(): mixed
```











***

### reduceRule52



```php
protected reduceRule52(): mixed
```











***

### reduceRule53



```php
protected reduceRule53(): mixed
```











***

### reduceRule54



```php
protected reduceRule54(): mixed
```











***

### reduceRule55



```php
protected reduceRule55(): mixed
```











***

### reduceRule56



```php
protected reduceRule56(): mixed
```











***

### reduceRule57



```php
protected reduceRule57(): mixed
```











***

### reduceRule58



```php
protected reduceRule58(): mixed
```











***

### reduceRule59



```php
protected reduceRule59(): mixed
```











***

### reduceRule60



```php
protected reduceRule60(): mixed
```











***

### reduceRule61



```php
protected reduceRule61(): mixed
```











***

### reduceRule62



```php
protected reduceRule62(): mixed
```











***

### reduceRule63



```php
protected reduceRule63(): mixed
```











***

### reduceRule64



```php
protected reduceRule64(): mixed
```











***

### reduceRule65



```php
protected reduceRule65(): mixed
```











***

### reduceRule66



```php
protected reduceRule66(): mixed
```











***

### reduceRule67



```php
protected reduceRule67(): mixed
```











***

### reduceRule68



```php
protected reduceRule68(): mixed
```











***

### reduceRule69



```php
protected reduceRule69(): mixed
```











***

### reduceRule70



```php
protected reduceRule70(): mixed
```











***

### reduceRule71



```php
protected reduceRule71(): mixed
```











***

### reduceRule72



```php
protected reduceRule72(): mixed
```











***

### reduceRule73



```php
protected reduceRule73(): mixed
```











***

### reduceRule74



```php
protected reduceRule74(): mixed
```











***

### reduceRule75



```php
protected reduceRule75(): mixed
```











***

### reduceRule76



```php
protected reduceRule76(): mixed
```











***

### reduceRule77



```php
protected reduceRule77(): mixed
```











***

### reduceRule78



```php
protected reduceRule78(): mixed
```











***

### reduceRule79



```php
protected reduceRule79(): mixed
```











***

### reduceRule80



```php
protected reduceRule80(): mixed
```











***

### reduceRule81



```php
protected reduceRule81(): mixed
```











***

### reduceRule82



```php
protected reduceRule82(): mixed
```











***

### reduceRule83



```php
protected reduceRule83(): mixed
```











***

### reduceRule84



```php
protected reduceRule84(): mixed
```











***

### reduceRule85



```php
protected reduceRule85(): mixed
```











***

### reduceRule86



```php
protected reduceRule86(): mixed
```











***

### reduceRule87



```php
protected reduceRule87(): mixed
```











***

### reduceRule88



```php
protected reduceRule88(): mixed
```











***

### reduceRule89



```php
protected reduceRule89(): mixed
```











***

### reduceRule90



```php
protected reduceRule90(): mixed
```











***

### reduceRule91



```php
protected reduceRule91(): mixed
```











***

### reduceRule92



```php
protected reduceRule92(): mixed
```











***

### reduceRule93



```php
protected reduceRule93(): mixed
```











***

### reduceRule94



```php
protected reduceRule94(): mixed
```











***

### reduceRule95



```php
protected reduceRule95(): mixed
```











***

### reduceRule96



```php
protected reduceRule96(): mixed
```











***

### reduceRule97



```php
protected reduceRule97(): mixed
```











***

### reduceRule98



```php
protected reduceRule98(): mixed
```











***

### reduceRule99



```php
protected reduceRule99(): mixed
```











***

### reduceRule100



```php
protected reduceRule100(): mixed
```











***

### reduceRule101



```php
protected reduceRule101(): mixed
```











***

### reduceRule102



```php
protected reduceRule102(): mixed
```











***

### reduceRule103



```php
protected reduceRule103(): mixed
```











***

### reduceRule104



```php
protected reduceRule104(): mixed
```











***

### reduceRule105



```php
protected reduceRule105(): mixed
```











***

### reduceRule106



```php
protected reduceRule106(): mixed
```











***

### reduceRule107



```php
protected reduceRule107(): mixed
```











***

### reduceRule108



```php
protected reduceRule108(): mixed
```











***

### reduceRule109



```php
protected reduceRule109(): mixed
```











***

### reduceRule110



```php
protected reduceRule110(): mixed
```











***

### reduceRule111



```php
protected reduceRule111(): mixed
```











***

### reduceRule112



```php
protected reduceRule112(): mixed
```











***

### reduceRule113



```php
protected reduceRule113(): mixed
```











***

### reduceRule114



```php
protected reduceRule114(): mixed
```











***

### reduceRule115



```php
protected reduceRule115(): mixed
```











***

### reduceRule116



```php
protected reduceRule116(): mixed
```











***

### reduceRule117



```php
protected reduceRule117(): mixed
```











***

### reduceRule118



```php
protected reduceRule118(): mixed
```











***

### reduceRule119



```php
protected reduceRule119(): mixed
```











***

### reduceRule120



```php
protected reduceRule120(): mixed
```











***

### reduceRule121



```php
protected reduceRule121(): mixed
```











***

### reduceRule122



```php
protected reduceRule122(): mixed
```











***

### reduceRule123



```php
protected reduceRule123(): mixed
```











***

### reduceRule124



```php
protected reduceRule124(): mixed
```











***

### reduceRule125



```php
protected reduceRule125(): mixed
```











***

### reduceRule126



```php
protected reduceRule126(): mixed
```











***

### reduceRule127



```php
protected reduceRule127(): mixed
```











***

### reduceRule128



```php
protected reduceRule128(): mixed
```











***

### reduceRule129



```php
protected reduceRule129(): mixed
```











***

### reduceRule130



```php
protected reduceRule130(): mixed
```











***

### reduceRule131



```php
protected reduceRule131(): mixed
```











***

### reduceRule132



```php
protected reduceRule132(): mixed
```











***

### reduceRule133



```php
protected reduceRule133(): mixed
```











***

### reduceRule134



```php
protected reduceRule134(): mixed
```











***

### reduceRule135



```php
protected reduceRule135(): mixed
```











***

### reduceRule136



```php
protected reduceRule136(): mixed
```











***

### reduceRule137



```php
protected reduceRule137(): mixed
```











***

### reduceRule138



```php
protected reduceRule138(): mixed
```











***

### reduceRule139



```php
protected reduceRule139(): mixed
```











***

### reduceRule140



```php
protected reduceRule140(): mixed
```











***

### reduceRule141



```php
protected reduceRule141(): mixed
```











***

### reduceRule142



```php
protected reduceRule142(): mixed
```











***

### reduceRule143



```php
protected reduceRule143(): mixed
```











***

### reduceRule144



```php
protected reduceRule144(): mixed
```











***

### reduceRule145



```php
protected reduceRule145(): mixed
```











***

### reduceRule146



```php
protected reduceRule146(): mixed
```











***

### reduceRule147



```php
protected reduceRule147(): mixed
```











***

### reduceRule148



```php
protected reduceRule148(): mixed
```











***

### reduceRule149



```php
protected reduceRule149(): mixed
```











***

### reduceRule150



```php
protected reduceRule150(): mixed
```











***

### reduceRule151



```php
protected reduceRule151(): mixed
```











***

### reduceRule152



```php
protected reduceRule152(): mixed
```











***

### reduceRule153



```php
protected reduceRule153(): mixed
```











***

### reduceRule154



```php
protected reduceRule154(): mixed
```











***

### reduceRule155



```php
protected reduceRule155(): mixed
```











***

### reduceRule156



```php
protected reduceRule156(): mixed
```











***

### reduceRule157



```php
protected reduceRule157(): mixed
```











***

### reduceRule158



```php
protected reduceRule158(): mixed
```











***

### reduceRule159



```php
protected reduceRule159(): mixed
```











***

### reduceRule160



```php
protected reduceRule160(): mixed
```











***

### reduceRule161



```php
protected reduceRule161(): mixed
```











***

### reduceRule162



```php
protected reduceRule162(): mixed
```











***

### reduceRule163



```php
protected reduceRule163(): mixed
```











***

### reduceRule164



```php
protected reduceRule164(): mixed
```











***

### reduceRule165



```php
protected reduceRule165(): mixed
```











***

### reduceRule166



```php
protected reduceRule166(): mixed
```











***

### reduceRule167



```php
protected reduceRule167(): mixed
```











***

### reduceRule168



```php
protected reduceRule168(): mixed
```











***

### reduceRule169



```php
protected reduceRule169(): mixed
```











***

### reduceRule170



```php
protected reduceRule170(): mixed
```











***

### reduceRule171



```php
protected reduceRule171(): mixed
```











***

### reduceRule172



```php
protected reduceRule172(): mixed
```











***

### reduceRule173



```php
protected reduceRule173(): mixed
```











***

### reduceRule174



```php
protected reduceRule174(): mixed
```











***

### reduceRule175



```php
protected reduceRule175(): mixed
```











***

### reduceRule176



```php
protected reduceRule176(): mixed
```











***

### reduceRule177



```php
protected reduceRule177(): mixed
```











***

### reduceRule178



```php
protected reduceRule178(): mixed
```











***

### reduceRule179



```php
protected reduceRule179(): mixed
```











***

### reduceRule180



```php
protected reduceRule180(): mixed
```











***

### reduceRule181



```php
protected reduceRule181(): mixed
```











***

### reduceRule182



```php
protected reduceRule182(): mixed
```











***

### reduceRule183



```php
protected reduceRule183(): mixed
```











***

### reduceRule184



```php
protected reduceRule184(): mixed
```











***

### reduceRule185



```php
protected reduceRule185(): mixed
```











***

### reduceRule186



```php
protected reduceRule186(): mixed
```











***

### reduceRule187



```php
protected reduceRule187(): mixed
```











***

### reduceRule188



```php
protected reduceRule188(): mixed
```











***

### reduceRule189



```php
protected reduceRule189(): mixed
```











***

### reduceRule190



```php
protected reduceRule190(): mixed
```











***

### reduceRule191



```php
protected reduceRule191(): mixed
```











***

### reduceRule192



```php
protected reduceRule192(): mixed
```











***

### reduceRule193



```php
protected reduceRule193(): mixed
```











***

### reduceRule194



```php
protected reduceRule194(): mixed
```











***

### reduceRule195



```php
protected reduceRule195(): mixed
```











***

### reduceRule196



```php
protected reduceRule196(): mixed
```











***

### reduceRule197



```php
protected reduceRule197(): mixed
```











***

### reduceRule198



```php
protected reduceRule198(): mixed
```











***

### reduceRule199



```php
protected reduceRule199(): mixed
```











***

### reduceRule200



```php
protected reduceRule200(): mixed
```











***

### reduceRule201



```php
protected reduceRule201(): mixed
```











***

### reduceRule202



```php
protected reduceRule202(): mixed
```











***

### reduceRule203



```php
protected reduceRule203(): mixed
```











***

### reduceRule204



```php
protected reduceRule204(): mixed
```











***

### reduceRule205



```php
protected reduceRule205(): mixed
```











***

### reduceRule206



```php
protected reduceRule206(): mixed
```











***

### reduceRule207



```php
protected reduceRule207(): mixed
```











***

### reduceRule208



```php
protected reduceRule208(): mixed
```











***

### reduceRule209



```php
protected reduceRule209(): mixed
```











***

### reduceRule210



```php
protected reduceRule210(): mixed
```











***

### reduceRule211



```php
protected reduceRule211(): mixed
```











***

### reduceRule212



```php
protected reduceRule212(): mixed
```











***

### reduceRule213



```php
protected reduceRule213(): mixed
```











***

### reduceRule214



```php
protected reduceRule214(): mixed
```











***

### reduceRule215



```php
protected reduceRule215(): mixed
```











***

### reduceRule216



```php
protected reduceRule216(): mixed
```











***

### reduceRule217



```php
protected reduceRule217(): mixed
```











***

### reduceRule218



```php
protected reduceRule218(): mixed
```











***

### reduceRule219



```php
protected reduceRule219(): mixed
```











***

### reduceRule220



```php
protected reduceRule220(): mixed
```











***

### reduceRule221



```php
protected reduceRule221(): mixed
```











***

### reduceRule222



```php
protected reduceRule222(): mixed
```











***

### reduceRule223



```php
protected reduceRule223(): mixed
```











***

### reduceRule224



```php
protected reduceRule224(): mixed
```











***

### reduceRule225



```php
protected reduceRule225(): mixed
```











***

### reduceRule226



```php
protected reduceRule226(): mixed
```











***

### reduceRule227



```php
protected reduceRule227(): mixed
```











***

### reduceRule228



```php
protected reduceRule228(): mixed
```











***

### reduceRule229



```php
protected reduceRule229(): mixed
```











***

### reduceRule230



```php
protected reduceRule230(): mixed
```











***

### reduceRule231



```php
protected reduceRule231(): mixed
```











***

### reduceRule232



```php
protected reduceRule232(): mixed
```











***

### reduceRule233



```php
protected reduceRule233(): mixed
```











***

### reduceRule234



```php
protected reduceRule234(): mixed
```











***

### reduceRule235



```php
protected reduceRule235(): mixed
```











***

### reduceRule236



```php
protected reduceRule236(): mixed
```











***

### reduceRule237



```php
protected reduceRule237(): mixed
```











***

### reduceRule238



```php
protected reduceRule238(): mixed
```











***

### reduceRule239



```php
protected reduceRule239(): mixed
```











***

### reduceRule240



```php
protected reduceRule240(): mixed
```











***

### reduceRule241



```php
protected reduceRule241(): mixed
```











***

### reduceRule242



```php
protected reduceRule242(): mixed
```











***

### reduceRule243



```php
protected reduceRule243(): mixed
```











***

### reduceRule244



```php
protected reduceRule244(): mixed
```











***

### reduceRule245



```php
protected reduceRule245(): mixed
```











***

### reduceRule246



```php
protected reduceRule246(): mixed
```











***

### reduceRule247



```php
protected reduceRule247(): mixed
```











***

### reduceRule248



```php
protected reduceRule248(): mixed
```











***

### reduceRule249



```php
protected reduceRule249(): mixed
```











***

### reduceRule250



```php
protected reduceRule250(): mixed
```











***

### reduceRule251



```php
protected reduceRule251(): mixed
```











***

### reduceRule252



```php
protected reduceRule252(): mixed
```











***

### reduceRule253



```php
protected reduceRule253(): mixed
```











***

### reduceRule254



```php
protected reduceRule254(): mixed
```











***

### reduceRule255



```php
protected reduceRule255(): mixed
```











***

### reduceRule256



```php
protected reduceRule256(): mixed
```











***

### reduceRule257



```php
protected reduceRule257(): mixed
```











***

### reduceRule258



```php
protected reduceRule258(): mixed
```











***

### reduceRule259



```php
protected reduceRule259(): mixed
```











***

### reduceRule260



```php
protected reduceRule260(): mixed
```











***

### reduceRule261



```php
protected reduceRule261(): mixed
```











***

### reduceRule262



```php
protected reduceRule262(): mixed
```











***

### reduceRule263



```php
protected reduceRule263(): mixed
```











***

### reduceRule264



```php
protected reduceRule264(): mixed
```











***

### reduceRule265



```php
protected reduceRule265(): mixed
```











***

### reduceRule266



```php
protected reduceRule266(): mixed
```











***

### reduceRule267



```php
protected reduceRule267(): mixed
```











***

### reduceRule268



```php
protected reduceRule268(): mixed
```











***

### reduceRule269



```php
protected reduceRule269(): mixed
```











***

### reduceRule270



```php
protected reduceRule270(): mixed
```











***

### reduceRule271



```php
protected reduceRule271(): mixed
```











***

### reduceRule272



```php
protected reduceRule272(): mixed
```











***

### reduceRule273



```php
protected reduceRule273(): mixed
```











***

### reduceRule274



```php
protected reduceRule274(): mixed
```











***

### reduceRule275



```php
protected reduceRule275(): mixed
```











***

### reduceRule276



```php
protected reduceRule276(): mixed
```











***

### reduceRule277



```php
protected reduceRule277(): mixed
```











***

### reduceRule278



```php
protected reduceRule278(): mixed
```











***

### reduceRule279



```php
protected reduceRule279(): mixed
```











***

### reduceRule280



```php
protected reduceRule280(): mixed
```











***

### reduceRule281



```php
protected reduceRule281(): mixed
```











***

### reduceRule282



```php
protected reduceRule282(): mixed
```











***

### reduceRule283



```php
protected reduceRule283(): mixed
```











***

### reduceRule284



```php
protected reduceRule284(): mixed
```











***

### reduceRule285



```php
protected reduceRule285(): mixed
```











***

### reduceRule286



```php
protected reduceRule286(): mixed
```











***

### reduceRule287



```php
protected reduceRule287(): mixed
```











***

### reduceRule288



```php
protected reduceRule288(): mixed
```











***

### reduceRule289



```php
protected reduceRule289(): mixed
```











***

### reduceRule290



```php
protected reduceRule290(): mixed
```











***

### reduceRule291



```php
protected reduceRule291(): mixed
```











***

### reduceRule292



```php
protected reduceRule292(): mixed
```











***

### reduceRule293



```php
protected reduceRule293(): mixed
```











***

### reduceRule294



```php
protected reduceRule294(): mixed
```











***

### reduceRule295



```php
protected reduceRule295(): mixed
```











***

### reduceRule296



```php
protected reduceRule296(): mixed
```











***

### reduceRule297



```php
protected reduceRule297(): mixed
```











***

### reduceRule298



```php
protected reduceRule298(): mixed
```











***

### reduceRule299



```php
protected reduceRule299(): mixed
```











***

### reduceRule300



```php
protected reduceRule300(): mixed
```











***

### reduceRule301



```php
protected reduceRule301(): mixed
```











***

### reduceRule302



```php
protected reduceRule302(): mixed
```











***

### reduceRule303



```php
protected reduceRule303(): mixed
```











***

### reduceRule304



```php
protected reduceRule304(): mixed
```











***

### reduceRule305



```php
protected reduceRule305(): mixed
```











***

### reduceRule306



```php
protected reduceRule306(): mixed
```











***

### reduceRule307



```php
protected reduceRule307(): mixed
```











***

### reduceRule308



```php
protected reduceRule308(): mixed
```











***

### reduceRule309



```php
protected reduceRule309(): mixed
```











***

### reduceRule310



```php
protected reduceRule310(): mixed
```











***

### reduceRule311



```php
protected reduceRule311(): mixed
```











***

### reduceRule312



```php
protected reduceRule312(): mixed
```











***

### reduceRule313



```php
protected reduceRule313(): mixed
```











***

### reduceRule314



```php
protected reduceRule314(): mixed
```











***

### reduceRule315



```php
protected reduceRule315(): mixed
```











***

### reduceRule316



```php
protected reduceRule316(): mixed
```











***

### reduceRule317



```php
protected reduceRule317(): mixed
```











***

### reduceRule318



```php
protected reduceRule318(): mixed
```











***

### reduceRule319



```php
protected reduceRule319(): mixed
```











***

### reduceRule320



```php
protected reduceRule320(): mixed
```











***

### reduceRule321



```php
protected reduceRule321(): mixed
```











***

### reduceRule322



```php
protected reduceRule322(): mixed
```











***

### reduceRule323



```php
protected reduceRule323(): mixed
```











***

### reduceRule324



```php
protected reduceRule324(): mixed
```











***

### reduceRule325



```php
protected reduceRule325(): mixed
```











***

### reduceRule326



```php
protected reduceRule326(): mixed
```











***

### reduceRule327



```php
protected reduceRule327(): mixed
```











***

### reduceRule328



```php
protected reduceRule328(): mixed
```











***

### reduceRule329



```php
protected reduceRule329(): mixed
```











***

### reduceRule330



```php
protected reduceRule330(): mixed
```











***

### reduceRule331



```php
protected reduceRule331(): mixed
```











***

### reduceRule332



```php
protected reduceRule332(): mixed
```











***

### reduceRule333



```php
protected reduceRule333(): mixed
```











***

### reduceRule334



```php
protected reduceRule334(): mixed
```











***

### reduceRule335



```php
protected reduceRule335(): mixed
```











***

### reduceRule336



```php
protected reduceRule336(): mixed
```











***

### reduceRule337



```php
protected reduceRule337(): mixed
```











***

### reduceRule338



```php
protected reduceRule338(): mixed
```











***

### reduceRule339



```php
protected reduceRule339(): mixed
```











***

### reduceRule340



```php
protected reduceRule340(): mixed
```











***

### reduceRule341



```php
protected reduceRule341(): mixed
```











***

### reduceRule342



```php
protected reduceRule342(): mixed
```











***

### reduceRule343



```php
protected reduceRule343(): mixed
```











***

### reduceRule344



```php
protected reduceRule344(): mixed
```











***

### reduceRule345



```php
protected reduceRule345(): mixed
```











***

### reduceRule346



```php
protected reduceRule346(): mixed
```











***

### reduceRule347



```php
protected reduceRule347(): mixed
```











***

### reduceRule348



```php
protected reduceRule348(): mixed
```











***

### reduceRule349



```php
protected reduceRule349(): mixed
```











***

### reduceRule350



```php
protected reduceRule350(): mixed
```











***

### reduceRule351



```php
protected reduceRule351(): mixed
```











***

### reduceRule352



```php
protected reduceRule352(): mixed
```











***

### reduceRule353



```php
protected reduceRule353(): mixed
```











***

### reduceRule354



```php
protected reduceRule354(): mixed
```











***

### reduceRule355



```php
protected reduceRule355(): mixed
```











***

### reduceRule356



```php
protected reduceRule356(): mixed
```











***

### reduceRule357



```php
protected reduceRule357(): mixed
```











***

### reduceRule358



```php
protected reduceRule358(): mixed
```











***

### reduceRule359



```php
protected reduceRule359(): mixed
```











***

### reduceRule360



```php
protected reduceRule360(): mixed
```











***

### reduceRule361



```php
protected reduceRule361(): mixed
```











***

### reduceRule362



```php
protected reduceRule362(): mixed
```











***

### reduceRule363



```php
protected reduceRule363(): mixed
```











***

### reduceRule364



```php
protected reduceRule364(): mixed
```











***

### reduceRule365



```php
protected reduceRule365(): mixed
```











***

### reduceRule366



```php
protected reduceRule366(): mixed
```











***

### reduceRule367



```php
protected reduceRule367(): mixed
```











***

### reduceRule368



```php
protected reduceRule368(): mixed
```











***

### reduceRule369



```php
protected reduceRule369(): mixed
```











***

### reduceRule370



```php
protected reduceRule370(): mixed
```











***

### reduceRule371



```php
protected reduceRule371(): mixed
```











***

### reduceRule372



```php
protected reduceRule372(): mixed
```











***

### reduceRule373



```php
protected reduceRule373(): mixed
```











***

### reduceRule374



```php
protected reduceRule374(): mixed
```











***

### reduceRule375



```php
protected reduceRule375(): mixed
```











***

### reduceRule376



```php
protected reduceRule376(): mixed
```











***

### reduceRule377



```php
protected reduceRule377(): mixed
```











***

### reduceRule378



```php
protected reduceRule378(): mixed
```











***

### reduceRule379



```php
protected reduceRule379(): mixed
```











***

### reduceRule380



```php
protected reduceRule380(): mixed
```











***

### reduceRule381



```php
protected reduceRule381(): mixed
```











***

### reduceRule382



```php
protected reduceRule382(): mixed
```











***

### reduceRule383



```php
protected reduceRule383(): mixed
```











***

### reduceRule384



```php
protected reduceRule384(): mixed
```











***

### reduceRule385



```php
protected reduceRule385(): mixed
```











***

### reduceRule386



```php
protected reduceRule386(): mixed
```











***

### reduceRule387



```php
protected reduceRule387(): mixed
```











***

### reduceRule388



```php
protected reduceRule388(): mixed
```











***

### reduceRule389



```php
protected reduceRule389(): mixed
```











***

### reduceRule390



```php
protected reduceRule390(): mixed
```











***

### reduceRule391



```php
protected reduceRule391(): mixed
```











***

### reduceRule392



```php
protected reduceRule392(): mixed
```











***

### reduceRule393



```php
protected reduceRule393(): mixed
```











***

### reduceRule394



```php
protected reduceRule394(): mixed
```











***

### reduceRule395



```php
protected reduceRule395(): mixed
```











***

### reduceRule396



```php
protected reduceRule396(): mixed
```











***

### reduceRule397



```php
protected reduceRule397(): mixed
```











***

### reduceRule398



```php
protected reduceRule398(): mixed
```











***

### reduceRule399



```php
protected reduceRule399(): mixed
```











***

### reduceRule400



```php
protected reduceRule400(): mixed
```











***

### reduceRule401



```php
protected reduceRule401(): mixed
```











***

### reduceRule402



```php
protected reduceRule402(): mixed
```











***

### reduceRule403



```php
protected reduceRule403(): mixed
```











***

### reduceRule404



```php
protected reduceRule404(): mixed
```











***

### reduceRule405



```php
protected reduceRule405(): mixed
```











***

### reduceRule406



```php
protected reduceRule406(): mixed
```











***

### reduceRule407



```php
protected reduceRule407(): mixed
```











***

### reduceRule408



```php
protected reduceRule408(): mixed
```











***

### reduceRule409



```php
protected reduceRule409(): mixed
```











***

### reduceRule410



```php
protected reduceRule410(): mixed
```











***

### reduceRule411



```php
protected reduceRule411(): mixed
```











***

### reduceRule412



```php
protected reduceRule412(): mixed
```











***

### reduceRule413



```php
protected reduceRule413(): mixed
```











***

### reduceRule414



```php
protected reduceRule414(): mixed
```











***

### reduceRule415



```php
protected reduceRule415(): mixed
```











***

### reduceRule416



```php
protected reduceRule416(): mixed
```











***

### reduceRule417



```php
protected reduceRule417(): mixed
```











***

### reduceRule418



```php
protected reduceRule418(): mixed
```











***

### reduceRule419



```php
protected reduceRule419(): mixed
```











***

### reduceRule420



```php
protected reduceRule420(): mixed
```











***

### reduceRule421



```php
protected reduceRule421(): mixed
```











***

### reduceRule422



```php
protected reduceRule422(): mixed
```











***

### reduceRule423



```php
protected reduceRule423(): mixed
```











***

### reduceRule424



```php
protected reduceRule424(): mixed
```











***

### reduceRule425



```php
protected reduceRule425(): mixed
```











***

### reduceRule426



```php
protected reduceRule426(): mixed
```











***

### reduceRule427



```php
protected reduceRule427(): mixed
```











***

### reduceRule428



```php
protected reduceRule428(): mixed
```











***

### reduceRule429



```php
protected reduceRule429(): mixed
```











***

### reduceRule430



```php
protected reduceRule430(): mixed
```











***

### reduceRule431



```php
protected reduceRule431(): mixed
```











***

### reduceRule432



```php
protected reduceRule432(): mixed
```











***

### reduceRule433



```php
protected reduceRule433(): mixed
```











***

### reduceRule434



```php
protected reduceRule434(): mixed
```











***

### reduceRule435



```php
protected reduceRule435(): mixed
```











***

### reduceRule436



```php
protected reduceRule436(): mixed
```











***

### reduceRule437



```php
protected reduceRule437(): mixed
```











***

### reduceRule438



```php
protected reduceRule438(): mixed
```











***

### reduceRule439



```php
protected reduceRule439(): mixed
```











***

### reduceRule440



```php
protected reduceRule440(): mixed
```











***

### reduceRule441



```php
protected reduceRule441(): mixed
```











***

### reduceRule442



```php
protected reduceRule442(): mixed
```











***

### reduceRule443



```php
protected reduceRule443(): mixed
```











***

### reduceRule444



```php
protected reduceRule444(): mixed
```











***

### reduceRule445



```php
protected reduceRule445(): mixed
```











***

### reduceRule446



```php
protected reduceRule446(): mixed
```











***

### reduceRule447



```php
protected reduceRule447(): mixed
```











***

### reduceRule448



```php
protected reduceRule448(): mixed
```











***

### reduceRule449



```php
protected reduceRule449(): mixed
```











***


## Inherited methods


### __construct

Creates a parser instance.

```php
public __construct(\PhpParser\Lexer $lexer, array $options = array()): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$lexer` | **\PhpParser\Lexer** | A lexer |
| `$options` | **array** | Options array. The boolean &#039;throwOnError&#039; option determines whether an exception should be<br />thrown on first error, or if the parser should try to continue parsing the remaining code<br />and build a partial AST. |




***

### getErrors

Get array of errors that occurred during the last parse.

```php
public getErrors(): \PhpParser\Error[]
```

This method may only return multiple errors if the 'throwOnError' option is disabled.









***

### parse

Parses PHP code into a node tree.

```php
public parse(string $code): \PhpParser\Node[]|null
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$code` | **string** | The source code to parse |


**Return Value:**

Array of statements (or null if the 'throwOnError' option is disabled and the parser was
unable to recover from an error).



***

### getErrorMessage



```php
protected getErrorMessage(mixed $symbol, mixed $state): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$symbol` | **mixed** |  |
| `$state` | **mixed** |  |




***

### getExpectedTokens



```php
protected getExpectedTokens(mixed $state): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$state` | **mixed** |  |




***

### handleNamespaces

Moves statements of semicolon-style namespaces into $ns->stmts and checks various error conditions.

```php
protected handleNamespaces(\PhpParser\Node[] $stmts): \PhpParser\Node[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **\PhpParser\Node[]** |  |




***

### getNamespacingStyle



```php
private getNamespacingStyle(array $stmts): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$stmts` | **array** |  |




***


***
> Automatically generated from source code comments on 2022-06-25 using [phpDocumentor](http://www.phpdoc.org/) and [saggre/phpdocumentor-markdown](https://github.com/Saggre/phpDocumentor-markdown)
