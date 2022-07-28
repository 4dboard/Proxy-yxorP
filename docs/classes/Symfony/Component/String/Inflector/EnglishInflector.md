***

# EnglishInflector





* Full name: `\Symfony\Component\String\Inflector\EnglishInflector`
* This class is marked as **final** and can't be subclassed
* This class implements:
[`\Symfony\Component\String\Inflector\InflectorInterface`](./InflectorInterface.md)
* This class is a **Final class**


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PLURAL_MAP`|private| |[
    // First entry: plural suffix, reversed
    // Second entry: length of plural suffix
    // Third entry: Whether the suffix may succeed a vocal
    // Fourth entry: Whether the suffix may succeed a consonant
    // Fifth entry: singular suffix, normal
    // bacteria (bacterium), criteria (criterion), phenomena (phenomenon)
    [&#039;a&#039;, 1, true, true, [&#039;on&#039;, &#039;um&#039;]],
    // nebulae (nebula)
    [&#039;ea&#039;, 2, true, true, &#039;a&#039;],
    // services (service)
    [&#039;secivres&#039;, 8, true, true, &#039;service&#039;],
    // mice (mouse), lice (louse)
    [&#039;eci&#039;, 3, false, true, &#039;ouse&#039;],
    // geese (goose)
    [&#039;esee&#039;, 4, false, true, &#039;oose&#039;],
    // fungi (fungus), alumni (alumnus), syllabi (syllabus), radii (radius)
    [&#039;i&#039;, 1, true, true, &#039;us&#039;],
    // men (man), women (woman)
    [&#039;nem&#039;, 3, true, true, &#039;man&#039;],
    // children (child)
    [&#039;nerdlihc&#039;, 8, true, true, &#039;child&#039;],
    // oxen (ox)
    [&#039;nexo&#039;, 4, false, false, &#039;ox&#039;],
    // indices (index), appendices (appendix), prices (price)
    [&#039;seci&#039;, 4, false, true, [&#039;ex&#039;, &#039;ix&#039;, &#039;ice&#039;]],
    // selfies (selfie)
    [&#039;seifles&#039;, 7, true, true, &#039;selfie&#039;],
    // zombies (zombie)
    [&#039;seibmoz&#039;, 7, true, true, &#039;zombie&#039;],
    // movies (movie)
    [&#039;seivom&#039;, 6, true, true, &#039;movie&#039;],
    // conspectuses (conspectus), prospectuses (prospectus)
    [&#039;sesutcep&#039;, 8, true, true, &#039;pectus&#039;],
    // feet (foot)
    [&#039;teef&#039;, 4, true, true, &#039;foot&#039;],
    // geese (goose)
    [&#039;eseeg&#039;, 5, true, true, &#039;goose&#039;],
    // teeth (tooth)
    [&#039;hteet&#039;, 5, true, true, &#039;tooth&#039;],
    // news (news)
    [&#039;swen&#039;, 4, true, true, &#039;news&#039;],
    // series (series)
    [&#039;seires&#039;, 6, true, true, &#039;series&#039;],
    // babies (baby)
    [&#039;sei&#039;, 3, false, true, &#039;y&#039;],
    // accesses (access), addresses (address), kisses (kiss)
    [&#039;sess&#039;, 4, true, false, &#039;ss&#039;],
    // analyses (analysis), ellipses (ellipsis), fungi (fungus),
    // neuroses (neurosis), theses (thesis), emphases (emphasis),
    // oases (oasis), crises (crisis), houses (house), bases (base),
    // atlases (atlas)
    [&#039;ses&#039;, 3, true, true, [&#039;s&#039;, &#039;se&#039;, &#039;sis&#039;]],
    // objectives (objective), alternative (alternatives)
    [&#039;sevit&#039;, 5, true, true, &#039;tive&#039;],
    // drives (drive)
    [&#039;sevird&#039;, 6, false, true, &#039;drive&#039;],
    // lives (life), wives (wife)
    [&#039;sevi&#039;, 4, false, true, &#039;ife&#039;],
    // moves (move)
    [&#039;sevom&#039;, 5, true, true, &#039;move&#039;],
    // hooves (hoof), dwarves (dwarf), elves (elf), leaves (leaf), caves (cave), staves (staff)
    [&#039;sev&#039;, 3, true, true, [&#039;f&#039;, &#039;ve&#039;, &#039;ff&#039;]],
    // axes (axis), axes (ax), axes (axe)
    [&#039;sexa&#039;, 4, false, false, [&#039;ax&#039;, &#039;axe&#039;, &#039;axis&#039;]],
    // indexes (index), matrixes (matrix)
    [&#039;sex&#039;, 3, true, false, &#039;x&#039;],
    // quizzes (quiz)
    [&#039;sezz&#039;, 4, true, false, &#039;z&#039;],
    // bureaus (bureau)
    [&#039;suae&#039;, 4, false, true, &#039;eau&#039;],
    // fees (fee), trees (tree), employees (employee)
    [&#039;see&#039;, 3, true, true, &#039;ee&#039;],
    // edges (edge)
    [&#039;segd&#039;, 4, true, true, &#039;dge&#039;],
    // roses (rose), garages (garage), cassettes (cassette),
    // waltzes (waltz), heroes (hero), bushes (bush), arches (arch),
    // shoes (shoe)
    [&#039;se&#039;, 2, true, true, [&#039;&#039;, &#039;e&#039;]],
    // tags (tag)
    [&#039;s&#039;, 1, true, true, &#039;&#039;],
    // chateaux (chateau)
    [&#039;xuae&#039;, 4, false, true, &#039;eau&#039;],
    // people (person)
    [&#039;elpoep&#039;, 6, true, true, &#039;person&#039;],
]|
|`SINGULAR_MAP`|private| |[
    // First entry: singular suffix, reversed
    // Second entry: length of singular suffix
    // Third entry: Whether the suffix may succeed a vocal
    // Fourth entry: Whether the suffix may succeed a consonant
    // Fifth entry: plural suffix, normal
    // criterion (criteria)
    [&#039;airetirc&#039;, 8, false, false, &#039;criterion&#039;],
    // nebulae (nebula)
    [&#039;aluben&#039;, 6, false, false, &#039;nebulae&#039;],
    // children (child)
    [&#039;dlihc&#039;, 5, true, true, &#039;children&#039;],
    // prices (price)
    [&#039;eci&#039;, 3, false, true, &#039;ices&#039;],
    // services (service)
    [&#039;ecivres&#039;, 7, true, true, &#039;services&#039;],
    // lives (life), wives (wife)
    [&#039;efi&#039;, 3, false, true, &#039;ives&#039;],
    // selfies (selfie)
    [&#039;eifles&#039;, 6, true, true, &#039;selfies&#039;],
    // movies (movie)
    [&#039;eivom&#039;, 5, true, true, &#039;movies&#039;],
    // lice (louse)
    [&#039;esuol&#039;, 5, false, true, &#039;lice&#039;],
    // mice (mouse)
    [&#039;esuom&#039;, 5, false, true, &#039;mice&#039;],
    // geese (goose)
    [&#039;esoo&#039;, 4, false, true, &#039;eese&#039;],
    // houses (house), bases (base)
    [&#039;es&#039;, 2, true, true, &#039;ses&#039;],
    // geese (goose)
    [&#039;esoog&#039;, 5, true, true, &#039;geese&#039;],
    // caves (cave)
    [&#039;ev&#039;, 2, true, true, &#039;ves&#039;],
    // drives (drive)
    [&#039;evird&#039;, 5, false, true, &#039;drives&#039;],
    // objectives (objective), alternative (alternatives)
    [&#039;evit&#039;, 4, true, true, &#039;tives&#039;],
    // moves (move)
    [&#039;evom&#039;, 4, true, true, &#039;moves&#039;],
    // staves (staff)
    [&#039;ffats&#039;, 5, true, true, &#039;staves&#039;],
    // hooves (hoof), dwarves (dwarf), elves (elf), leaves (leaf)
    [&#039;ff&#039;, 2, true, true, &#039;ffs&#039;],
    // hooves (hoof), dwarves (dwarf), elves (elf), leaves (leaf)
    [&#039;f&#039;, 1, true, true, [&#039;fs&#039;, &#039;ves&#039;]],
    // arches (arch)
    [&#039;hc&#039;, 2, true, true, &#039;ches&#039;],
    // bushes (bush)
    [&#039;hs&#039;, 2, true, true, &#039;shes&#039;],
    // teeth (tooth)
    [&#039;htoot&#039;, 5, true, true, &#039;teeth&#039;],
    // bacteria (bacterium), criteria (criterion), phenomena (phenomenon)
    [&#039;mu&#039;, 2, true, true, &#039;a&#039;],
    // men (man), women (woman)
    [&#039;nam&#039;, 3, true, true, &#039;men&#039;],
    // people (person)
    [&#039;nosrep&#039;, 6, true, true, [&#039;persons&#039;, &#039;people&#039;]],
    // bacteria (bacterium), criteria (criterion), phenomena (phenomenon)
    [&#039;noi&#039;, 3, true, true, &#039;ions&#039;],
    // coupon (coupons)
    [&#039;nop&#039;, 3, true, true, &#039;pons&#039;],
    // seasons (season), treasons (treason), poisons (poison), lessons (lesson)
    [&#039;nos&#039;, 3, true, true, &#039;sons&#039;],
    // bacteria (bacterium), criteria (criterion), phenomena (phenomenon)
    [&#039;no&#039;, 2, true, true, &#039;a&#039;],
    // echoes (echo)
    [&#039;ohce&#039;, 4, true, true, &#039;echoes&#039;],
    // heroes (hero)
    [&#039;oreh&#039;, 4, true, true, &#039;heroes&#039;],
    // atlases (atlas)
    [&#039;salta&#039;, 5, true, true, &#039;atlases&#039;],
    // irises (iris)
    [&#039;siri&#039;, 4, true, true, &#039;irises&#039;],
    // analyses (analysis), ellipses (ellipsis), neuroses (neurosis)
    // theses (thesis), emphases (emphasis), oases (oasis),
    // crises (crisis)
    [&#039;sis&#039;, 3, true, true, &#039;ses&#039;],
    // accesses (access), addresses (address), kisses (kiss)
    [&#039;ss&#039;, 2, true, false, &#039;sses&#039;],
    // syllabi (syllabus)
    [&#039;suballys&#039;, 8, true, true, &#039;syllabi&#039;],
    // buses (bus)
    [&#039;sub&#039;, 3, true, true, &#039;buses&#039;],
    // circuses (circus)
    [&#039;suc&#039;, 3, true, true, &#039;cuses&#039;],
    // conspectuses (conspectus), prospectuses (prospectus)
    [&#039;sutcep&#039;, 6, true, true, &#039;pectuses&#039;],
    // fungi (fungus), alumni (alumnus), syllabi (syllabus), radii (radius)
    [&#039;su&#039;, 2, true, true, &#039;i&#039;],
    // news (news)
    [&#039;swen&#039;, 4, true, true, &#039;news&#039;],
    // feet (foot)
    [&#039;toof&#039;, 4, true, true, &#039;feet&#039;],
    // chateaux (chateau), bureaus (bureau)
    [&#039;uae&#039;, 3, false, true, [&#039;eaus&#039;, &#039;eaux&#039;]],
    // oxen (ox)
    [&#039;xo&#039;, 2, false, false, &#039;oxen&#039;],
    // hoaxes (hoax)
    [&#039;xaoh&#039;, 4, true, false, &#039;hoaxes&#039;],
    // indices (index)
    [&#039;xedni&#039;, 5, false, true, [&#039;indicies&#039;, &#039;indexes&#039;]],
    // boxes (box)
    [&#039;xo&#039;, 2, false, true, &#039;oxes&#039;],
    // indexes (index), matrixes (matrix)
    [&#039;x&#039;, 1, true, false, [&#039;cies&#039;, &#039;xes&#039;]],
    // appendices (appendix)
    [&#039;xi&#039;, 2, false, true, &#039;ices&#039;],
    // babies (baby)
    [&#039;y&#039;, 1, false, true, &#039;ies&#039;],
    // quizzes (quiz)
    [&#039;ziuq&#039;, 4, true, false, &#039;quizzes&#039;],
    // waltzes (waltz)
    [&#039;z&#039;, 1, true, true, &#039;zes&#039;],
]|
|`UNINFLECTED`|private| |[
    &#039;&#039;,
    // data
    &#039;atad&#039;,
    // deer
    &#039;reed&#039;,
    // feedback
    &#039;kcabdeef&#039;,
    // fish
    &#039;hsif&#039;,
    // info
    &#039;ofni&#039;,
    // moose
    &#039;esoom&#039;,
    // series
    &#039;seires&#039;,
    // sheep
    &#039;peehs&#039;,
    // species
    &#039;seiceps&#039;,
]|


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


***

