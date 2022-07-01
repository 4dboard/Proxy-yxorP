<?php

namespace yxorP\Minify;


use function array_keys;
use function array_values;
use function preg_match_all;
use function preg_replace;
use function sizeof;
use function str_replace;
use function strlen;
use function strpos;
use function strrchr;
use function substr;

class InlineCssMinifier implements MinfyInterface
{
    public function process(string $buffer): string
    {
        if (strlen($buffer) === 0) {
            return '';
        }

        $css_minified = [];
        preg_match_all('{<style.+</style>}msU', $buffer, $style_blocks);

        // Minify the javascript in <script> tags.
        foreach ($style_blocks[0] as $block) {
            $css_minified[] = $this->minifyCss($block);
        }

        if (sizeof($css_minified)) {
            $buffer = str_replace($style_blocks[0], $css_minified, $buffer);
        }

        return $buffer;
    }

    private function minifyCss(string $buffer): string
    {
        $tags = ['close' => strrchr($buffer, '<')];
        $open_length = strpos($buffer, '>') + 1;
        $tags['open'] = substr($buffer, 0, $open_length);
        $buffer = substr($buffer, $open_length, -strlen($tags['close']));

        // Strip spaces from the tags
        $tags = preg_replace('/\s{2,}/', ' ', $tags);

        // Standartize new lines
        $buffer = str_replace(["\r\n", "\r"], "\n", $buffer);

        $patterns = [
            // Remove comment(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s' => '$1',
            // Remove unused white-space(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~+]|\s*+-(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si' => '$1$2$3$4$5$6$7',
            // Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
            '#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si' => '$1',
            // Replace `:0 0 0 0` with `:0`
            '#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i' => ':0',
            // Replace `background-position:0` with `background-position:0 0`
            '#(background-position):0(?=[;\}])#si' => '$1:0 0',
            // Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
            '#(?<=[\s:,\-])0+\.(\d+)#s' => '.$1',
            // Minify string value
            '#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si' => '$1$3',
            '#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si' => '$1$2$4$5',
            // Minify HEX color code
            '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i' => '$1$2$3',
            // Replace `(border|outline):none` with `(border|outline):0`
            '#(?<=[\{;])(border|outline):none(?=[;\}\!])#' => '$1:0',
            // Remove empty selector(s)
            '#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s' => '$1$2',
        ];

        $buffer = preg_replace(
            array_keys($patterns),
            array_values($patterns),
            $buffer
        );

        return $tags['open'] . $buffer . $tags['close'];
    }
}
