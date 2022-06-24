<?php

namespace yxorP\Minify;


class AttributesSimplifier extends Areplacer implements MinfyInterface
{
    public function getReplacePatternData(): array
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
