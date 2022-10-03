***

# FrenchInflector

French inflector.

This class does only inflect nouns; not adjectives nor composed words like "soixante-dix".

* Full name: `\Symfony\Component\String\Inflector\FrenchInflector`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Symfony\Component\String\Inflector\InflectorInterface`](./InflectorInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PLURALIZE_REGEXP`|private| |[
    // First entry: regexp
    // Second entry: replacement
    // Words finishing with &quot;s&quot;, &quot;x&quot; or &quot;z&quot; are invariables
    // Les mots finissant par &quot;s&quot;, &quot;x&quot; ou &quot;z&quot; sont invariables
    [&#039;/(s|x|z)$/i&#039;, &#039;\\1&#039;],
    // Words finishing with &quot;eau&quot; are pluralized with a &quot;x&quot;
    // Les mots finissant par &quot;eau&quot; prennent tous un &quot;x&quot; au pluriel
    [&#039;/(eau)$/i&#039;, &#039;\\1x&#039;],
    // Words finishing with &quot;au&quot; are pluralized with a &quot;x&quot; excepted &quot;landau&quot;
    // Les mots finissant par &quot;au&quot; prennent un &quot;x&quot; au pluriel sauf &quot;landau&quot;
    [&#039;/^(landau)$/i&#039;, &#039;\\1s&#039;],
    [&#039;/(au)$/i&#039;, &#039;\\1x&#039;],
    // Words finishing with &quot;eu&quot; are pluralized with a &quot;x&quot; excepted &quot;pneu&quot;, &quot;bleu&quot;, &quot;émeu&quot;
    // Les mots finissant en &quot;eu&quot; prennent un &quot;x&quot; au pluriel sauf &quot;pneu&quot;, &quot;bleu&quot;, &quot;émeu&quot;
    [&#039;/^(pneu|bleu|émeu)$/i&#039;, &#039;\\1s&#039;],
    [&#039;/(eu)$/i&#039;, &#039;\\1x&#039;],
    // Words finishing with &quot;al&quot; are pluralized with a &quot;aux&quot; excepted
    // Les mots finissant en &quot;al&quot; se terminent en &quot;aux&quot; sauf
    [&#039;/^(bal|carnaval|caracal|chacal|choral|corral|étal|festival|récital|val)$/i&#039;, &#039;\\1s&#039;],
    [&#039;/al$/i&#039;, &#039;\\1aux&#039;],
    // Aspirail, bail, corail, émail, fermail, soupirail, travail, vantail et vitrail font leur pluriel en -aux
    [&#039;/^(aspir|b|cor|ém|ferm|soupir|trav|vant|vitr)ail$/i&#039;, &#039;\\1aux&#039;],
    // Bijou, caillou, chou, genou, hibou, joujou et pou qui prennent un x au pluriel
    [&#039;/^(bij|caill|ch|gen|hib|jouj|p)ou$/i&#039;, &#039;\\1oux&#039;],
    // Invariable words
    [&#039;/^(cinquante|soixante|mille)$/i&#039;, &#039;\\1&#039;],
    // French titles
    [&#039;/^(mon|ma)(sieur|dame|demoiselle|seigneur)$/&#039;, &#039;mes\\2s&#039;],
    [&#039;/^(Mon|Ma)(sieur|dame|demoiselle|seigneur)$/&#039;, &#039;Mes\\2s&#039;],
]|
|`SINGULARIZE_REGEXP`|private| |[
    // First entry: regexp
    // Second entry: replacement
    // Aspirail, bail, corail, émail, fermail, soupirail, travail, vantail et vitrail font leur pluriel en -aux
    [&#039;/((aspir|b|cor|ém|ferm|soupir|trav|vant|vitr))aux$/i&#039;, &#039;\\1ail&#039;],
    // Words finishing with &quot;eau&quot; are pluralized with a &quot;x&quot;
    // Les mots finissant par &quot;eau&quot; prennent tous un &quot;x&quot; au pluriel
    [&#039;/(eau)x$/i&#039;, &#039;\\1&#039;],
    // Words finishing with &quot;al&quot; are pluralized with a &quot;aux&quot; expected
    // Les mots finissant en &quot;al&quot; se terminent en &quot;aux&quot; sauf
    [&#039;/(amir|anim|arsen|boc|can|capit|capor|chev|crist|génér|hopit|hôpit|idé|journ|littor|loc|m|mét|minér|princip|radic|termin)aux$/i&#039;, &#039;\\1al&#039;],
    // Words finishing with &quot;au&quot; are pluralized with a &quot;x&quot; excepted &quot;landau&quot;
    // Les mots finissant par &quot;au&quot; prennent un &quot;x&quot; au pluriel sauf &quot;landau&quot;
    [&#039;/(au)x$/i&#039;, &#039;\\1&#039;],
    // Words finishing with &quot;eu&quot; are pluralized with a &quot;x&quot; excepted &quot;pneu&quot;, &quot;bleu&quot;, &quot;émeu&quot;
    // Les mots finissant en &quot;eu&quot; prennent un &quot;x&quot; au pluriel sauf &quot;pneu&quot;, &quot;bleu&quot;, &quot;émeu&quot;
    [&#039;/(eu)x$/i&#039;, &#039;\\1&#039;],
    //  Words finishing with &quot;ou&quot; are pluralized with a &quot;s&quot; excepted bijou, caillou, chou, genou, hibou, joujou, pou
    // Les mots finissant par &quot;ou&quot; prennent un &quot;s&quot; sauf bijou, caillou, chou, genou, hibou, joujou, pou
    [&#039;/(bij|caill|ch|gen|hib|jouj|p)oux$/i&#039;, &#039;\\1ou&#039;],
    // French titles
    [&#039;/^mes(dame|demoiselle)s$/&#039;, &#039;ma\\1&#039;],
    [&#039;/^Mes(dame|demoiselle)s$/&#039;, &#039;Ma\\1&#039;],
    [&#039;/^mes(sieur|seigneur)s$/&#039;, &#039;mon\\1&#039;],
    [&#039;/^Mes(sieur|seigneur)s$/&#039;, &#039;Mon\\1&#039;],
    //Default rule
    [&#039;/s$/i&#039;, &#039;&#039;],
]|
|`UNINFLECTED`|private| |&#039;/^(abcès|accès|abus|albatros|anchois|anglais|autobus|bois|brebis|carquois|cas|chas|colis|concours|corps|cours|cyprès|décès|devis|discours|dos|embarras|engrais|entrelacs|excès|fils|fois|gâchis|gars|glas|héros|intrus|jars|jus|kermès|lacis|legs|lilas|marais|mars|matelas|mépris|mets|mois|mors|obus|os|palais|paradis|parcours|pardessus|pays|plusieurs|poids|pois|pouls|printemps|processus|progrès|puits|pus|rabais|radis|recors|recours|refus|relais|remords|remous|rictus|rhinocéros|repas|rubis|sans|sas|secours|sens|souris|succès|talus|tapis|tas|taudis|temps|tiers|univers|velours|verglas|vernis|virus)$/i&#039;|


## Methods


### singularize

Returns the singular forms of a string.

```php
public singularize(string $plural): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$plural` | **string** |  |




***

### pluralize

Returns the plural forms of a string.

```php
public pluralize(string $singular): string[]
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$singular` | **string** |  |




***

### isInflectedWord



```php
private isInflectedWord(string $word): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$word` | **string** |  |




***


***

