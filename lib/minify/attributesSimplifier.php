<?php

namespace yxorP\app\lib\minify;


use JetBrains\PhpStorm\ArrayShape;

class attributesSimplifier extends areplacerInterface implements minfyInterface
{
    #[ArrayShape(['/ method=("get"|get)/i' => "string", '/ disabled=[^ >]*(.*?)/' => "string", '/ readonly=[^ >]*(.*?)/' => "string", '/ selected=[^ >]*(.*?)/' => "string", '/ async=[^ >]*(.*?)/' => "string", '/ defer=[^ >]*(.*?)/' => "string"])] public function getReplacePatternData(): array
    {
        return ['/ method=("get"|get)/i' => CHAR_EMPTY_STRING, '/ disabled=[^ >]*(.*?)/' => ' disabled', '/ readonly=[^ >]*(.*?)/' => ' readonly', '/ selected=[^ >]*(.*?)/' => ' selected', '/ async=[^ >]*(.*?)/' => ' async', '/ defer=[^ >]*(.*?)/' => ' defer',];
    }
}
