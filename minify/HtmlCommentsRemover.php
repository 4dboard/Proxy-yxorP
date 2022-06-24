<?php

namespace yxorP\Minify;


// Remove comments from HTML Code (non-MSIE conditionals)
class HtmlCommentsRemover extends Areplacer implements MinfyInterface
{
    public function getReplacePatternData(): array
    {
        return [
            '{\s*<!--[^\[<>].*(?<!!)-->\s*}msU' => ''
        ];
    }
}
