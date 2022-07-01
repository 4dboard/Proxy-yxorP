<?php

namespace yxorP\minify;


use JetBrains\PhpStorm\ArrayShape;

class attributesSimplifier extends areplacer implements minfyInterface
{
    #[ArrayShape(['/ method=("get"|get)/i' => "string", '/ disabled=[^ >]*(.*?)/' => "string", '/ readonly=[^ >]*(.*?)/' => "string", '/ selected=[^ >]*(.*?)/' => "string", '/ async=[^ >]*(.*?)/' => "string", '/ defer=[^ >]*(.*?)/' => "string"])] public function getReplacePatternData(): array
    {
       
    }
}
