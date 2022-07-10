<?php namespace yxorP\inc\minify;

use function implode;
use function preg_match_all;
use function preg_replace;
use function sizeof;
use function str_replace;
use function strlen;

class whitespacesRemover implements minfyInterface
{
    private const BLOCK_ELEMENTS = ['address', 'article', 'aside', 'audio', 'blockquote', 'body', 'canvas', 'caption', 'colgroup', 'datalist', 'details', 'div', 'dl', 'dt', 'embed', 'fieldset', 'figcaption', 'figure', 'footer', 'form', 'h[1-6]', 'head', 'header', 'hr', 'html', 'li', 'link', 'main', 'map', 'meta', 'meter', 'nav', 'noframes', 'noscript', 'object', 'ol', 'optgroup', 'option', 'p', 'param', 'pre', 'progress', 'ruby', 'script', 'section', 'select', 'source', 'style', 'summary', 'table', 'tbody', 'td', 'tfoot', 'th', 'thead', 'title', 'tr', 'track', 'ul', 'video'];

    public function process(string $buffer): string
    {
        if (strlen($buffer) === 0) {
            return CHAR_EMPTY_STRING;
        }
        preg_match_all('{<pre.+</pre>}msU', $buffer, $pres_source);
        preg_match_all('{<code.+</code>}msU', $buffer, $codes_source);
        preg_match_all('{<textarea.+</textarea>}msU', $buffer, $textareas_source);
        preg_match_all('{<script.+</script>}msU', $buffer, $javascript_source);
        $buffer = preg_replace('/\s{2,}/', ' ', $buffer);
        $buffer = preg_replace('/\s*(<\/?(' . implode('|', self::BLOCK_ELEMENTS) . ')[^>]*>)\s*/is', '$1', $buffer);
        if (sizeof($pres_source)) {
            preg_match_all('{<pre.+</pre>}msU', $buffer, $pres_edited);
            $buffer = str_replace($pres_edited[0], $pres_source[0], $buffer);
        }
        if (sizeof($codes_source)) {
            preg_match_all('{<code.+</code>}msU', $buffer, $codes_edited);
            $buffer = str_replace($codes_edited[0], $codes_source[0], $buffer);
        }
        if (sizeof($textareas_source)) {
            preg_match_all('{<textarea.+</textarea>}msU', $buffer, $textareas_edited);
            $buffer = str_replace($textareas_edited[0], $textareas_source[0], $buffer);
        }
        if (sizeof($javascript_source)) {
            preg_match_all('{<script.+</script>}msU', $buffer, $javascript_edited);
            $buffer = str_replace($javascript_edited[0], $javascript_source[0], $buffer);
        }
        return $buffer;
    }
}