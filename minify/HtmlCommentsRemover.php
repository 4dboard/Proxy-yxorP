<?php

namespace yxorP\Minify;


// Remove comments from HTML Code (non-MSIE conditionals)

use JetBrains\PhpStorm\ArrayShape;

class HtmlCommentsRemover extends Areplacer implements MinfyInterface
{
    #[ArrayShape(['{\s*<!--[^\[<>].*(?<!!)-->\s*}msU' => "string"])] public function getReplacePatternData(): array
    {
        return [
            '{\s*<!--[^\[<>].*(?<!!)-->\s*}msU' => ''
        ];
    }
}
