***

# AbstractUnicodeString

Represents a string of abstract Unicode characters.

Unicode defines 3 types of "characters" (bytes, code points and grapheme clusters).
This class is the abstract type to use as a type-hint when the logic you want to
implement is Unicode-aware but doesn't care about code points vs grapheme clusters.

* Full name: `\Symfony\Component\String\AbstractUnicodeString`
* Parent class: [`\Symfony\Component\String\AbstractString`](./AbstractString.md)
* This class is an **Abstract class**

## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NFC`|public| |\Normalizer::NFC|
|`NFD`|public| |\Normalizer::NFD|
|`NFKC`|public| |\Normalizer::NFKC|
|`NFKD`|public| |\Normalizer::NFKD|
|`ASCII`|private| |&quot; eiasntrolud][cmp&#039;\ng|hv.fb,:=-q10C2*yx)(L9AS/P\&quot;EjMIk3&gt;5T&lt;D4}B{8FwR67UGN;JzV#HOW_&amp;!K?XQ%Y\\\tZ+~^\$@`\x00\x01\x02\x03\x04\x05\x06\x07\x08\v\f\r\x0e\x0f\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1a\x1b\x1c\x1d\x1e\x1f&quot;|
|`FOLD_FROM`|private| |[&#039;İ&#039;, &#039;µ&#039;, &#039;ſ&#039;, &quot;ͅ&quot;, &#039;ς&#039;, &#039;ϐ&#039;, &#039;ϑ&#039;, &#039;ϕ&#039;, &#039;ϖ&#039;, &#039;ϰ&#039;, &#039;ϱ&#039;, &#039;ϵ&#039;, &#039;ẛ&#039;, &quot;ι&quot;, &#039;ß&#039;, &#039;İ&#039;, &#039;ŉ&#039;, &#039;ǰ&#039;, &#039;ΐ&#039;, &#039;ΰ&#039;, &#039;և&#039;, &#039;ẖ&#039;, &#039;ẗ&#039;, &#039;ẘ&#039;, &#039;ẙ&#039;, &#039;ẚ&#039;, &#039;ẞ&#039;, &#039;ὐ&#039;, &#039;ὒ&#039;, &#039;ὔ&#039;, &#039;ὖ&#039;, &#039;ᾀ&#039;, &#039;ᾁ&#039;, &#039;ᾂ&#039;, &#039;ᾃ&#039;, &#039;ᾄ&#039;, &#039;ᾅ&#039;, &#039;ᾆ&#039;, &#039;ᾇ&#039;, &#039;ᾈ&#039;, &#039;ᾉ&#039;, &#039;ᾊ&#039;, &#039;ᾋ&#039;, &#039;ᾌ&#039;, &#039;ᾍ&#039;, &#039;ᾎ&#039;, &#039;ᾏ&#039;, &#039;ᾐ&#039;, &#039;ᾑ&#039;, &#039;ᾒ&#039;, &#039;ᾓ&#039;, &#039;ᾔ&#039;, &#039;ᾕ&#039;, &#039;ᾖ&#039;, &#039;ᾗ&#039;, &#039;ᾘ&#039;, &#039;ᾙ&#039;, &#039;ᾚ&#039;, &#039;ᾛ&#039;, &#039;ᾜ&#039;, &#039;ᾝ&#039;, &#039;ᾞ&#039;, &#039;ᾟ&#039;, &#039;ᾠ&#039;, &#039;ᾡ&#039;, &#039;ᾢ&#039;, &#039;ᾣ&#039;, &#039;ᾤ&#039;, &#039;ᾥ&#039;, &#039;ᾦ&#039;, &#039;ᾧ&#039;, &#039;ᾨ&#039;, &#039;ᾩ&#039;, &#039;ᾪ&#039;, &#039;ᾫ&#039;, &#039;ᾬ&#039;, &#039;ᾭ&#039;, &#039;ᾮ&#039;, &#039;ᾯ&#039;, &#039;ᾲ&#039;, &#039;ᾳ&#039;, &#039;ᾴ&#039;, &#039;ᾶ&#039;, &#039;ᾷ&#039;, &#039;ᾼ&#039;, &#039;ῂ&#039;, &#039;ῃ&#039;, &#039;ῄ&#039;, &#039;ῆ&#039;, &#039;ῇ&#039;, &#039;ῌ&#039;, &#039;ῒ&#039;, &#039;ΐ&#039;, &#039;ῖ&#039;, &#039;ῗ&#039;, &#039;ῢ&#039;, &#039;ΰ&#039;, &#039;ῤ&#039;, &#039;ῦ&#039;, &#039;ῧ&#039;, &#039;ῲ&#039;, &#039;ῳ&#039;, &#039;ῴ&#039;, &#039;ῶ&#039;, &#039;ῷ&#039;, &#039;ῼ&#039;, &#039;ﬀ&#039;, &#039;ﬁ&#039;, &#039;ﬂ&#039;, &#039;ﬃ&#039;, &#039;ﬄ&#039;, &#039;ﬅ&#039;, &#039;ﬆ&#039;, &#039;ﬓ&#039;, &#039;ﬔ&#039;, &#039;ﬕ&#039;, &#039;ﬖ&#039;, &#039;ﬗ&#039;]|
|`FOLD_TO`|private| |[&#039;i̇&#039;, &#039;μ&#039;, &#039;s&#039;, &#039;ι&#039;, &#039;σ&#039;, &#039;β&#039;, &#039;θ&#039;, &#039;φ&#039;, &#039;π&#039;, &#039;κ&#039;, &#039;ρ&#039;, &#039;ε&#039;, &#039;ṡ&#039;, &#039;ι&#039;, &#039;ss&#039;, &#039;i̇&#039;, &#039;ʼn&#039;, &#039;ǰ&#039;, &#039;ΐ&#039;, &#039;ΰ&#039;, &#039;եւ&#039;, &#039;ẖ&#039;, &#039;ẗ&#039;, &#039;ẘ&#039;, &#039;ẙ&#039;, &#039;aʾ&#039;, &#039;ss&#039;, &#039;ὐ&#039;, &#039;ὒ&#039;, &#039;ὔ&#039;, &#039;ὖ&#039;, &#039;ἀι&#039;, &#039;ἁι&#039;, &#039;ἂι&#039;, &#039;ἃι&#039;, &#039;ἄι&#039;, &#039;ἅι&#039;, &#039;ἆι&#039;, &#039;ἇι&#039;, &#039;ἀι&#039;, &#039;ἁι&#039;, &#039;ἂι&#039;, &#039;ἃι&#039;, &#039;ἄι&#039;, &#039;ἅι&#039;, &#039;ἆι&#039;, &#039;ἇι&#039;, &#039;ἠι&#039;, &#039;ἡι&#039;, &#039;ἢι&#039;, &#039;ἣι&#039;, &#039;ἤι&#039;, &#039;ἥι&#039;, &#039;ἦι&#039;, &#039;ἧι&#039;, &#039;ἠι&#039;, &#039;ἡι&#039;, &#039;ἢι&#039;, &#039;ἣι&#039;, &#039;ἤι&#039;, &#039;ἥι&#039;, &#039;ἦι&#039;, &#039;ἧι&#039;, &#039;ὠι&#039;, &#039;ὡι&#039;, &#039;ὢι&#039;, &#039;ὣι&#039;, &#039;ὤι&#039;, &#039;ὥι&#039;, &#039;ὦι&#039;, &#039;ὧι&#039;, &#039;ὠι&#039;, &#039;ὡι&#039;, &#039;ὢι&#039;, &#039;ὣι&#039;, &#039;ὤι&#039;, &#039;ὥι&#039;, &#039;ὦι&#039;, &#039;ὧι&#039;, &#039;ὰι&#039;, &#039;αι&#039;, &#039;άι&#039;, &#039;ᾶ&#039;, &#039;ᾶι&#039;, &#039;αι&#039;, &#039;ὴι&#039;, &#039;ηι&#039;, &#039;ήι&#039;, &#039;ῆ&#039;, &#039;ῆι&#039;, &#039;ηι&#039;, &#039;ῒ&#039;, &#039;ΐ&#039;, &#039;ῖ&#039;, &#039;ῗ&#039;, &#039;ῢ&#039;, &#039;ΰ&#039;, &#039;ῤ&#039;, &#039;ῦ&#039;, &#039;ῧ&#039;, &#039;ὼι&#039;, &#039;ωι&#039;, &#039;ώι&#039;, &#039;ῶ&#039;, &#039;ῶι&#039;, &#039;ωι&#039;, &#039;ff&#039;, &#039;fi&#039;, &#039;fl&#039;, &#039;ffi&#039;, &#039;ffl&#039;, &#039;st&#039;, &#039;st&#039;, &#039;մն&#039;, &#039;մե&#039;, &#039;մի&#039;, &#039;վն&#039;, &#039;մխ&#039;]|
|`UPPER_FROM`|private| |[&#039;ß&#039;, &#039;ﬀ&#039;, &#039;ﬁ&#039;, &#039;ﬂ&#039;, &#039;ﬃ&#039;, &#039;ﬄ&#039;, &#039;ﬅ&#039;, &#039;ﬆ&#039;, &#039;և&#039;, &#039;ﬓ&#039;, &#039;ﬔ&#039;, &#039;ﬕ&#039;, &#039;ﬖ&#039;, &#039;ﬗ&#039;, &#039;ŉ&#039;, &#039;ΐ&#039;, &#039;ΰ&#039;, &#039;ǰ&#039;, &#039;ẖ&#039;, &#039;ẗ&#039;, &#039;ẘ&#039;, &#039;ẙ&#039;, &#039;ẚ&#039;, &#039;ὐ&#039;, &#039;ὒ&#039;, &#039;ὔ&#039;, &#039;ὖ&#039;, &#039;ᾶ&#039;, &#039;ῆ&#039;, &#039;ῒ&#039;, &#039;ΐ&#039;, &#039;ῖ&#039;, &#039;ῗ&#039;, &#039;ῢ&#039;, &#039;ΰ&#039;, &#039;ῤ&#039;, &#039;ῦ&#039;, &#039;ῧ&#039;, &#039;ῶ&#039;]|
|`UPPER_TO`|private| |[&#039;SS&#039;, &#039;FF&#039;, &#039;FI&#039;, &#039;FL&#039;, &#039;FFI&#039;, &#039;FFL&#039;, &#039;ST&#039;, &#039;ST&#039;, &#039;ԵՒ&#039;, &#039;ՄՆ&#039;, &#039;ՄԵ&#039;, &#039;ՄԻ&#039;, &#039;ՎՆ&#039;, &#039;ՄԽ&#039;, &#039;ʼN&#039;, &#039;Ϊ́&#039;, &#039;Ϋ́&#039;, &#039;J̌&#039;, &#039;H̱&#039;, &#039;T̈&#039;, &#039;W̊&#039;, &#039;Y̊&#039;, &#039;Aʾ&#039;, &#039;Υ̓&#039;, &#039;Υ̓̀&#039;, &#039;Υ̓́&#039;, &#039;Υ̓͂&#039;, &#039;Α͂&#039;, &#039;Η͂&#039;, &#039;Ϊ̀&#039;, &#039;Ϊ́&#039;, &#039;Ι͂&#039;, &#039;Ϊ͂&#039;, &#039;Ϋ̀&#039;, &#039;Ϋ́&#039;, &#039;Ρ̓&#039;, &#039;Υ͂&#039;, &#039;Ϋ͂&#039;, &#039;Ω͂&#039;]|
|`TRANSLIT_FROM`|private| |[&#039;Æ&#039;, &#039;Ð&#039;, &#039;Ø&#039;, &#039;Þ&#039;, &#039;ß&#039;, &#039;æ&#039;, &#039;ð&#039;, &#039;ø&#039;, &#039;þ&#039;, &#039;Đ&#039;, &#039;đ&#039;, &#039;Ħ&#039;, &#039;ħ&#039;, &#039;ı&#039;, &#039;ĸ&#039;, &#039;Ŀ&#039;, &#039;ŀ&#039;, &#039;Ł&#039;, &#039;ł&#039;, &#039;ŉ&#039;, &#039;Ŋ&#039;, &#039;ŋ&#039;, &#039;Œ&#039;, &#039;œ&#039;, &#039;Ŧ&#039;, &#039;ŧ&#039;, &#039;ƀ&#039;, &#039;Ɓ&#039;, &#039;Ƃ&#039;, &#039;ƃ&#039;, &#039;Ƈ&#039;, &#039;ƈ&#039;, &#039;Ɖ&#039;, &#039;Ɗ&#039;, &#039;Ƌ&#039;, &#039;ƌ&#039;, &#039;Ɛ&#039;, &#039;Ƒ&#039;, &#039;ƒ&#039;, &#039;Ɠ&#039;, &#039;ƕ&#039;, &#039;Ɩ&#039;, &#039;Ɨ&#039;, &#039;Ƙ&#039;, &#039;ƙ&#039;, &#039;ƚ&#039;, &#039;Ɲ&#039;, &#039;ƞ&#039;, &#039;Ƣ&#039;, &#039;ƣ&#039;, &#039;Ƥ&#039;, &#039;ƥ&#039;, &#039;ƫ&#039;, &#039;Ƭ&#039;, &#039;ƭ&#039;, &#039;Ʈ&#039;, &#039;Ʋ&#039;, &#039;Ƴ&#039;, &#039;ƴ&#039;, &#039;Ƶ&#039;, &#039;ƶ&#039;, &#039;Ǆ&#039;, &#039;ǅ&#039;, &#039;ǆ&#039;, &#039;Ǥ&#039;, &#039;ǥ&#039;, &#039;ȡ&#039;, &#039;Ȥ&#039;, &#039;ȥ&#039;, &#039;ȴ&#039;, &#039;ȵ&#039;, &#039;ȶ&#039;, &#039;ȷ&#039;, &#039;ȸ&#039;, &#039;ȹ&#039;, &#039;Ⱥ&#039;, &#039;Ȼ&#039;, &#039;ȼ&#039;, &#039;Ƚ&#039;, &#039;Ⱦ&#039;, &#039;ȿ&#039;, &#039;ɀ&#039;, &#039;Ƀ&#039;, &#039;Ʉ&#039;, &#039;Ɇ&#039;, &#039;ɇ&#039;, &#039;Ɉ&#039;, &#039;ɉ&#039;, &#039;Ɍ&#039;, &#039;ɍ&#039;, &#039;Ɏ&#039;, &#039;ɏ&#039;, &#039;ɓ&#039;, &#039;ɕ&#039;, &#039;ɖ&#039;, &#039;ɗ&#039;, &#039;ɛ&#039;, &#039;ɟ&#039;, &#039;ɠ&#039;, &#039;ɡ&#039;, &#039;ɢ&#039;, &#039;ɦ&#039;, &#039;ɧ&#039;, &#039;ɨ&#039;, &#039;ɪ&#039;, &#039;ɫ&#039;, &#039;ɬ&#039;, &#039;ɭ&#039;, &#039;ɱ&#039;, &#039;ɲ&#039;, &#039;ɳ&#039;, &#039;ɴ&#039;, &#039;ɶ&#039;, &#039;ɼ&#039;, &#039;ɽ&#039;, &#039;ɾ&#039;, &#039;ʀ&#039;, &#039;ʂ&#039;, &#039;ʈ&#039;, &#039;ʉ&#039;, &#039;ʋ&#039;, &#039;ʏ&#039;, &#039;ʐ&#039;, &#039;ʑ&#039;, &#039;ʙ&#039;, &#039;ʛ&#039;, &#039;ʜ&#039;, &#039;ʝ&#039;, &#039;ʟ&#039;, &#039;ʠ&#039;, &#039;ʣ&#039;, &#039;ʥ&#039;, &#039;ʦ&#039;, &#039;ʪ&#039;, &#039;ʫ&#039;, &#039;ᴀ&#039;, &#039;ᴁ&#039;, &#039;ᴃ&#039;, &#039;ᴄ&#039;, &#039;ᴅ&#039;, &#039;ᴆ&#039;, &#039;ᴇ&#039;, &#039;ᴊ&#039;, &#039;ᴋ&#039;, &#039;ᴌ&#039;, &#039;ᴍ&#039;, &#039;ᴏ&#039;, &#039;ᴘ&#039;, &#039;ᴛ&#039;, &#039;ᴜ&#039;, &#039;ᴠ&#039;, &#039;ᴡ&#039;, &#039;ᴢ&#039;, &#039;ᵫ&#039;, &#039;ᵬ&#039;, &#039;ᵭ&#039;, &#039;ᵮ&#039;, &#039;ᵯ&#039;, &#039;ᵰ&#039;, &#039;ᵱ&#039;, &#039;ᵲ&#039;, &#039;ᵳ&#039;, &#039;ᵴ&#039;, &#039;ᵵ&#039;, &#039;ᵶ&#039;, &#039;ᵺ&#039;, &#039;ᵻ&#039;, &#039;ᵽ&#039;, &#039;ᵾ&#039;, &#039;ᶀ&#039;, &#039;ᶁ&#039;, &#039;ᶂ&#039;, &#039;ᶃ&#039;, &#039;ᶄ&#039;, &#039;ᶅ&#039;, &#039;ᶆ&#039;, &#039;ᶇ&#039;, &#039;ᶈ&#039;, &#039;ᶉ&#039;, &#039;ᶊ&#039;, &#039;ᶌ&#039;, &#039;ᶍ&#039;, &#039;ᶎ&#039;, &#039;ᶏ&#039;, &#039;ᶑ&#039;, &#039;ᶒ&#039;, &#039;ᶓ&#039;, &#039;ᶖ&#039;, &#039;ᶙ&#039;, &#039;ẚ&#039;, &#039;ẜ&#039;, &#039;ẝ&#039;, &#039;ẞ&#039;, &#039;Ỻ&#039;, &#039;ỻ&#039;, &#039;Ỽ&#039;, &#039;ỽ&#039;, &#039;Ỿ&#039;, &#039;ỿ&#039;, &#039;©&#039;, &#039;®&#039;, &#039;₠&#039;, &#039;₢&#039;, &#039;₣&#039;, &#039;₤&#039;, &#039;₧&#039;, &#039;₺&#039;, &#039;₹&#039;, &#039;ℌ&#039;, &#039;℞&#039;, &#039;㎧&#039;, &#039;㎮&#039;, &#039;㏆&#039;, &#039;㏗&#039;, &#039;㏞&#039;, &#039;㏟&#039;, &#039;¼&#039;, &#039;½&#039;, &#039;¾&#039;, &#039;⅓&#039;, &#039;⅔&#039;, &#039;⅕&#039;, &#039;⅖&#039;, &#039;⅗&#039;, &#039;⅘&#039;, &#039;⅙&#039;, &#039;⅚&#039;, &#039;⅛&#039;, &#039;⅜&#039;, &#039;⅝&#039;, &#039;⅞&#039;, &#039;⅟&#039;, &#039;〇&#039;, &#039;‘&#039;, &#039;’&#039;, &#039;‚&#039;, &#039;‛&#039;, &#039;“&#039;, &#039;”&#039;, &#039;„&#039;, &#039;‟&#039;, &#039;′&#039;, &#039;″&#039;, &#039;〝&#039;, &#039;〞&#039;, &#039;«&#039;, &#039;»&#039;, &#039;‹&#039;, &#039;›&#039;, &#039;‐&#039;, &#039;‑&#039;, &#039;‒&#039;, &#039;–&#039;, &#039;—&#039;, &#039;―&#039;, &#039;︱&#039;, &#039;︲&#039;, &#039;﹘&#039;, &#039;‖&#039;, &#039;⁄&#039;, &#039;⁅&#039;, &#039;⁆&#039;, &#039;⁎&#039;, &#039;、&#039;, &#039;。&#039;, &#039;〈&#039;, &#039;〉&#039;, &#039;《&#039;, &#039;》&#039;, &#039;〔&#039;, &#039;〕&#039;, &#039;〘&#039;, &#039;〙&#039;, &#039;〚&#039;, &#039;〛&#039;, &#039;︑&#039;, &#039;︒&#039;, &#039;︹&#039;, &#039;︺&#039;, &#039;︽&#039;, &#039;︾&#039;, &#039;︿&#039;, &#039;﹀&#039;, &#039;﹑&#039;, &#039;﹝&#039;, &#039;﹞&#039;, &#039;｟&#039;, &#039;｠&#039;, &#039;｡&#039;, &#039;､&#039;, &#039;×&#039;, &#039;÷&#039;, &#039;−&#039;, &#039;∕&#039;, &#039;∖&#039;, &#039;∣&#039;, &#039;∥&#039;, &#039;≪&#039;, &#039;≫&#039;, &#039;⦅&#039;, &#039;⦆&#039;]|
|`TRANSLIT_TO`|private| |[&#039;AE&#039;, &#039;D&#039;, &#039;O&#039;, &#039;TH&#039;, &#039;ss&#039;, &#039;ae&#039;, &#039;d&#039;, &#039;o&#039;, &#039;th&#039;, &#039;D&#039;, &#039;d&#039;, &#039;H&#039;, &#039;h&#039;, &#039;i&#039;, &#039;q&#039;, &#039;L&#039;, &#039;l&#039;, &#039;L&#039;, &#039;l&#039;, &#039;\&#039;n&#039;, &#039;N&#039;, &#039;n&#039;, &#039;OE&#039;, &#039;oe&#039;, &#039;T&#039;, &#039;t&#039;, &#039;b&#039;, &#039;B&#039;, &#039;B&#039;, &#039;b&#039;, &#039;C&#039;, &#039;c&#039;, &#039;D&#039;, &#039;D&#039;, &#039;D&#039;, &#039;d&#039;, &#039;E&#039;, &#039;F&#039;, &#039;f&#039;, &#039;G&#039;, &#039;hv&#039;, &#039;I&#039;, &#039;I&#039;, &#039;K&#039;, &#039;k&#039;, &#039;l&#039;, &#039;N&#039;, &#039;n&#039;, &#039;OI&#039;, &#039;oi&#039;, &#039;P&#039;, &#039;p&#039;, &#039;t&#039;, &#039;T&#039;, &#039;t&#039;, &#039;T&#039;, &#039;V&#039;, &#039;Y&#039;, &#039;y&#039;, &#039;Z&#039;, &#039;z&#039;, &#039;DZ&#039;, &#039;Dz&#039;, &#039;dz&#039;, &#039;G&#039;, &#039;g&#039;, &#039;d&#039;, &#039;Z&#039;, &#039;z&#039;, &#039;l&#039;, &#039;n&#039;, &#039;t&#039;, &#039;j&#039;, &#039;db&#039;, &#039;qp&#039;, &#039;A&#039;, &#039;C&#039;, &#039;c&#039;, &#039;L&#039;, &#039;T&#039;, &#039;s&#039;, &#039;z&#039;, &#039;B&#039;, &#039;U&#039;, &#039;E&#039;, &#039;e&#039;, &#039;J&#039;, &#039;j&#039;, &#039;R&#039;, &#039;r&#039;, &#039;Y&#039;, &#039;y&#039;, &#039;b&#039;, &#039;c&#039;, &#039;d&#039;, &#039;d&#039;, &#039;e&#039;, &#039;j&#039;, &#039;g&#039;, &#039;g&#039;, &#039;G&#039;, &#039;h&#039;, &#039;h&#039;, &#039;i&#039;, &#039;I&#039;, &#039;l&#039;, &#039;l&#039;, &#039;l&#039;, &#039;m&#039;, &#039;n&#039;, &#039;n&#039;, &#039;N&#039;, &#039;OE&#039;, &#039;r&#039;, &#039;r&#039;, &#039;r&#039;, &#039;R&#039;, &#039;s&#039;, &#039;t&#039;, &#039;u&#039;, &#039;v&#039;, &#039;Y&#039;, &#039;z&#039;, &#039;z&#039;, &#039;B&#039;, &#039;G&#039;, &#039;H&#039;, &#039;j&#039;, &#039;L&#039;, &#039;q&#039;, &#039;dz&#039;, &#039;dz&#039;, &#039;ts&#039;, &#039;ls&#039;, &#039;lz&#039;, &#039;A&#039;, &#039;AE&#039;, &#039;B&#039;, &#039;C&#039;, &#039;D&#039;, &#039;D&#039;, &#039;E&#039;, &#039;J&#039;, &#039;K&#039;, &#039;L&#039;, &#039;M&#039;, &#039;O&#039;, &#039;P&#039;, &#039;T&#039;, &#039;U&#039;, &#039;V&#039;, &#039;W&#039;, &#039;Z&#039;, &#039;ue&#039;, &#039;b&#039;, &#039;d&#039;, &#039;f&#039;, &#039;m&#039;, &#039;n&#039;, &#039;p&#039;, &#039;r&#039;, &#039;r&#039;, &#039;s&#039;, &#039;t&#039;, &#039;z&#039;, &#039;th&#039;, &#039;I&#039;, &#039;p&#039;, &#039;U&#039;, &#039;b&#039;, &#039;d&#039;, &#039;f&#039;, &#039;g&#039;, &#039;k&#039;, &#039;l&#039;, &#039;m&#039;, &#039;n&#039;, &#039;p&#039;, &#039;r&#039;, &#039;s&#039;, &#039;v&#039;, &#039;x&#039;, &#039;z&#039;, &#039;a&#039;, &#039;d&#039;, &#039;e&#039;, &#039;e&#039;, &#039;i&#039;, &#039;u&#039;, &#039;a&#039;, &#039;s&#039;, &#039;s&#039;, &#039;SS&#039;, &#039;LL&#039;, &#039;ll&#039;, &#039;V&#039;, &#039;v&#039;, &#039;Y&#039;, &#039;y&#039;, &#039;(C)&#039;, &#039;(R)&#039;, &#039;CE&#039;, &#039;Cr&#039;, &#039;Fr.&#039;, &#039;L.&#039;, &#039;Pts&#039;, &#039;TL&#039;, &#039;Rs&#039;, &#039;x&#039;, &#039;Rx&#039;, &#039;m/s&#039;, &#039;rad/s&#039;, &#039;C/kg&#039;, &#039;pH&#039;, &#039;V/m&#039;, &#039;A/m&#039;, &#039; 1/4&#039;, &#039; 1/2&#039;, &#039; 3/4&#039;, &#039; 1/3&#039;, &#039; 2/3&#039;, &#039; 1/5&#039;, &#039; 2/5&#039;, &#039; 3/5&#039;, &#039; 4/5&#039;, &#039; 1/6&#039;, &#039; 5/6&#039;, &#039; 1/8&#039;, &#039; 3/8&#039;, &#039; 5/8&#039;, &#039; 7/8&#039;, &#039; 1/&#039;, &#039;0&#039;, &#039;\&#039;&#039;, &#039;\&#039;&#039;, &#039;,&#039;, &#039;\&#039;&#039;, &#039;&quot;&#039;, &#039;&quot;&#039;, &#039;,,&#039;, &#039;&quot;&#039;, &#039;\&#039;&#039;, &#039;&quot;&#039;, &#039;&quot;&#039;, &#039;&quot;&#039;, &#039;&lt;&lt;&#039;, &#039;&gt;&gt;&#039;, &#039;&lt;&#039;, &#039;&gt;&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;-&#039;, &#039;||&#039;, &#039;/&#039;, &#039;[&#039;, &#039;]&#039;, &#039;*&#039;, &#039;,&#039;, &#039;.&#039;, &#039;&lt;&#039;, &#039;&gt;&#039;, &#039;&lt;&lt;&#039;, &#039;&gt;&gt;&#039;, &#039;[&#039;, &#039;]&#039;, &#039;[&#039;, &#039;]&#039;, &#039;[&#039;, &#039;]&#039;, &#039;,&#039;, &#039;.&#039;, &#039;[&#039;, &#039;]&#039;, &#039;&lt;&lt;&#039;, &#039;&gt;&gt;&#039;, &#039;&lt;&#039;, &#039;&gt;&#039;, &#039;,&#039;, &#039;[&#039;, &#039;]&#039;, &#039;((&#039;, &#039;))&#039;, &#039;.&#039;, &#039;,&#039;, &#039;*&#039;, &#039;/&#039;, &#039;-&#039;, &#039;/&#039;, &#039;\\&#039;, &#039;|&#039;, &#039;||&#039;, &#039;&lt;&lt;&#039;, &#039;&gt;&gt;&#039;, &#039;((&#039;, &#039;))&#039;]|

## Properties

### transliterators

```php
private static $transliterators
```

* This property is **static**.

***

### tableZero

```php
private static $tableZero
```

* This property is **static**.

***

### tableWide

```php
private static $tableWide
```

* This property is **static**.

***

## Methods

### fromCodePoints

```php
public static fromCodePoints(int $codes): static
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$codes` | **int** |  |

***

### ascii

Generic UTF-8 to ASCII transliteration.

```php
public ascii(string[]|\Transliterator[]|\Closure[] $rules = []): self
```

Install the intl extension for best results.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$rules` | **string[]&#124;\Transliterator[]&#124;\Closure[]** | See &quot;*-Latin&quot; rules from Transliterator::listIDs() |

***

### camel

```php
public camel(): static
```

***

### codePointsAt

```php
public codePointsAt(int $offset): int[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |

***

### folded

```php
public folded(bool $compat = true): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$compat` | **bool** |  |

***

### join

```php
public join(array $strings, string $lastGlue = null): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array** |  |
| `$lastGlue` | **string** |  |

***

### lower

```php
public lower(): static
```

***

### match

Matches the string using a regular expression.

```php
public match(string $regexp, int $flags, int $offset): array
```

Pass PREG_PATTERN_ORDER or PREG_SET_ORDER as $flags to get all occurrences matching the regular expression.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regexp` | **string** |  |
| `$flags` | **int** |  |
| `$offset` | **int** |  |

**Return Value:**

All matches in a multi-dimensional array ordered according to flags



***

### normalize

```php
public normalize(int $form = self::NFC): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$form` | **int** |  |

***

### padBoth

```php
public padBoth(int $length, string $padStr = &#039; &#039;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### padEnd

```php
public padEnd(int $length, string $padStr = &#039; &#039;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### padStart

```php
public padStart(int $length, string $padStr = &#039; &#039;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### replaceMatches

```php
public replaceMatches(string $fromRegexp, string|callable $to): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromRegexp` | **string** |  |
| `$to` | **string&#124;callable** |  |

***

### reverse

```php
public reverse(): static
```

***

### snake

```php
public snake(): static
```

***

### title

```php
public title(bool $allWords = false): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allWords` | **bool** |  |

***

### trim

```php
public trim(string $chars = &quot; 	

  ﻿&quot;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimEnd

```php
public trimEnd(string $chars = &quot; 	

  ﻿&quot;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimPrefix

```php
public trimPrefix(mixed $prefix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **mixed** |  |

***

### trimStart

```php
public trimStart(string $chars = &quot; 	

  ﻿&quot;): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimSuffix

```php
public trimSuffix(mixed $suffix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **mixed** |  |

***

### upper

```php
public upper(): static
```

***

### width

Returns the printable length on a terminal.

```php
public width(bool $ignoreAnsiDecoration = true): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreAnsiDecoration` | **bool** |  |

***

### pad

```php
private pad(int $len, self $pad, int $type): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$len` | **int** |  |
| `$pad` | **self** |  |
| `$type` | **int** |  |

***

### wcswidth

Based on https://github.com/jquast/wcwidth, a Python implementation of https://www.cl.cam.ac.uk/~mgk25/ucs/wcwidth.c.

```php
private wcswidth(string $string): int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

## Inherited methods

### __construct

```php
public __construct(string $string = &#039;&#039;): mixed
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string** |  |

***

### unwrap

Unwraps instances of AbstractString back to strings.

```php
public static unwrap(array $values): string[]|array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |

***

### wrap

Wraps (and normalizes) strings in instances of AbstractString.

```php
public static wrap(array $values): static[]|array
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$values` | **array** |  |

***

### after

```php
public after(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |

***

### afterLast

```php
public afterLast(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |

***

### append

```php
public append(string $suffix): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |

***

### before

```php
public before(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |

***

### beforeLast

```php
public beforeLast(string|string[] $needle, bool $includeNeedle = false, int $offset): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$includeNeedle` | **bool** |  |
| `$offset` | **int** |  |

***

### bytesAt

```php
public bytesAt(int $offset): int[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offset` | **int** |  |

***

### camel

```php
public camel(): static
```

* This method is **abstract**.

***

### chunk

```php
public chunk(int $length = 1): static[]
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |

***

### collapseWhitespace

```php
public collapseWhitespace(): static
```

***

### containsAny

```php
public containsAny(string|string[] $needle): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |

***

### endsWith

```php
public endsWith(string|string[] $suffix): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string&#124;string[]** |  |

***

### ensureEnd

```php
public ensureEnd(string $suffix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string** |  |

***

### ensureStart

```php
public ensureStart(string $prefix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |

***

### equalsTo

```php
public equalsTo(string|string[] $string): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$string` | **string&#124;string[]** |  |

***

### folded

```php
public folded(): static
```

* This method is **abstract**.

***

### ignoreCase

```php
public ignoreCase(): static
```

***

### indexOf

```php
public indexOf(string|string[] $needle, int $offset): ?int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$offset` | **int** |  |

***

### indexOfLast

```php
public indexOfLast(string|string[] $needle, int $offset): ?int
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$needle` | **string&#124;string[]** |  |
| `$offset` | **int** |  |

***

### isEmpty

```php
public isEmpty(): bool
```

***

### join

```php
public join(array $strings, string $lastGlue = null): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$strings` | **array** |  |
| `$lastGlue` | **string** |  |

***

### jsonSerialize

```php
public jsonSerialize(): string
```

***

### length

```php
public length(): int
```

* This method is **abstract**.

***

### lower

```php
public lower(): static
```

* This method is **abstract**.

***

### match

Matches the string using a regular expression.

```php
public match(string $regexp, int $flags, int $offset): array
```

Pass PREG_PATTERN_ORDER or PREG_SET_ORDER as $flags to get all occurrences matching the regular expression.

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$regexp` | **string** |  |
| `$flags` | **int** |  |
| `$offset` | **int** |  |

**Return Value:**

All matches in a multi-dimensional array ordered according to flags



***

### padBoth

```php
public padBoth(int $length, string $padStr = &#039; &#039;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### padEnd

```php
public padEnd(int $length, string $padStr = &#039; &#039;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### padStart

```php
public padStart(int $length, string $padStr = &#039; &#039;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$padStr` | **string** |  |

***

### prepend

```php
public prepend(string $prefix): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string** |  |

***

### repeat

```php
public repeat(int $multiplier): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$multiplier` | **int** |  |

***

### replace

```php
public replace(string $from, string $to): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$from` | **string** |  |
| `$to` | **string** |  |

***

### replaceMatches

```php
public replaceMatches(string $fromRegexp, string|callable $to): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$fromRegexp` | **string** |  |
| `$to` | **string&#124;callable** |  |

***

### reverse

```php
public reverse(): static
```

* This method is **abstract**.

***

### slice

```php
public slice(int $start, int $length = null): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$start` | **int** |  |
| `$length` | **int** |  |

***

### snake

```php
public snake(): static
```

* This method is **abstract**.

***

### splice

```php
public splice(string $replacement, int $start, int $length = null): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$replacement` | **string** |  |
| `$start` | **int** |  |
| `$length` | **int** |  |

***

### split

```php
public split(string $delimiter, int $limit = null, int $flags = null): static[]
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$delimiter` | **string** |  |
| `$limit` | **int** |  |
| `$flags` | **int** |  |

***

### startsWith

```php
public startsWith(string|string[] $prefix): bool
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;string[]** |  |

***

### title

```php
public title(bool $allWords = false): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$allWords` | **bool** |  |

***

### toByteString

```php
public toByteString(string $toEncoding = null): \Symfony\Component\String\ByteString
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$toEncoding` | **string** |  |

***

### toCodePointString

```php
public toCodePointString(): \Symfony\Component\String\CodePointString
```

***

### toString

```php
public toString(): string
```

***

### toUnicodeString

```php
public toUnicodeString(): \Symfony\Component\String\UnicodeString
```

***

### trim

```php
public trim(string $chars = &quot; 	

  ﻿&quot;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimEnd

```php
public trimEnd(string $chars = &quot; 	

  ﻿&quot;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimPrefix

```php
public trimPrefix(string|string[] $prefix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$prefix` | **string&#124;string[]** |  |

***

### trimStart

```php
public trimStart(string $chars = &quot; 	

  ﻿&quot;): static
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$chars` | **string** |  |

***

### trimSuffix

```php
public trimSuffix(string|string[] $suffix): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$suffix` | **string&#124;string[]** |  |

***

### truncate

```php
public truncate(int $length, string $ellipsis = &#039;&#039;, bool $cut = true): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$length` | **int** |  |
| `$ellipsis` | **string** |  |
| `$cut` | **bool** |  |

***

### upper

```php
public upper(): static
```

* This method is **abstract**.

***

### width

Returns the printable length on a terminal.

```php
public width(bool $ignoreAnsiDecoration = true): int
```

* This method is **abstract**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ignoreAnsiDecoration` | **bool** |  |

***

### wordwrap

```php
public wordwrap(int $width = 75, string $break = &quot;
&quot;, bool $cut = false): static
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$width` | **int** |  |
| `$break` | **string** |  |
| `$cut` | **bool** |  |

***

### __sleep

```php
public __sleep(): array
```

***

### __clone

```php
public __clone(): mixed
```

***

### __toString

```php
public __toString(): string
```

***


***

