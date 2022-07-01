<?php

namespace yxorP\minify;


// Remove comments from HTML Code (non-MSIE conditionals)

use JetBrains\PhpStorm\ArrayShape;

class htmlCommentsRemover extends areplacer implements minfyInterface
{
    #[ArrayShape(['{\s*<!--[^\[<>].*(?<!!)-->\s*}msU' => "string"])] public function getReplacePatternData(): array
    {
        return [
            '{\s*<!--[^\[<>].*(?<!!)-->\s*}msU' => ''
        ];
    }
}
