<?php

namespace yxorP\Minify;


use JetBrains\PhpStorm\ArrayShape;

class AttributesSimplifier extends Areplacer implements MinfyInterface
{
    #[ArrayShape(['/ method=("get"|get)/i' => "string", '/ disabled=[^ >]*(.*?)/' => "string", '/ readonly=[^ >]*(.*?)/' => "string", '/ selected=[^ >]*(.*?)/' => "string", '/ async=[^ >]*(.*?)/' => "string", '/ defer=[^ >]*(.*?)/' => "string"])] public function getReplacePatternData(): array
    {
        return [
            '/ method=("get"|get)/i' => '',
            '/ disabled=[^ >]*(.*?)/' => ' disabled',
            '/ readonly=[^ >]*(.*?)/' => ' readonly',
            '/ selected=[^ >]*(.*?)/' => ' selected',
            '/ async=[^ >]*(.*?)/' => ' async',
            '/ defer=[^ >]*(.*?)/' => ' defer',
        ];
    }
}
