<?php use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;
use yxorP\app\lib\minify\minify;

class onWriteAction extends wrapper
{
    public function onWrite(): void
    {
        if (!store::handler(VAR_RESPONSE)) exit(header(YXORP_SITE_DOMAIN, true, 301));
        $content = store::handler(VAR_RESPONSE)->getBody();
        if (helpers::MIME() === VAR_TEXT_HTML) {
            $css = [];
            $styles = null;
            if (store::handler(TARGET_BUTTON_HOVER)) $css[] = ['button' => 'background-color:' . store::handler(TARGET_BUTTON_HOVER)];
            if (store::handler(TARGET_BUTTON)) $css[] = ['button' => 'background-color:' . store::handler(TARGET_BUTTON)];
            if (store::handler(TARGET_LINK_HOVER)) $css[] = ['a:hover' => 'color:' . store::handler(TARGET_LINK_HOVER)];
            if (store::handler(TARGET_LINK_VISITED)) $css[] = ['a:visited' => 'color:' . store::handler(TARGET_LINK_VISITED)];
            if (store::handler(TARGET_LINK)) $css[] = ['a' => 'color:' . store::handler(TARGET_LINK)];
            if (store::handler(TARGET_MENU)) $css[] = ['nav' => 'display:none'];
            if (store::handler(TARGET_HEAD)) $css[] = ['header' => 'display:none'];
            if (store::handler(TARGET_BG_COLOR)) $css[] = ['body' => 'background-color:' . store::handler(TARGET_BG_COLOR)];
            if (store::handler(TARGET_BG_IMG)) $css[] = ['body' => 'background-image:url(' . store::handler(TARGET_BG_IMG) . ')'];
            if (store::handler(TARGET_HTML_MENU)) $content = preg_replace('/<nav[^>]*[^>]*>(.*?)<\/nav>/is', '<nav>' . store::handler(TARGET_HTML_MENU) . '</nav>', $content);
            if (store::handler(TARGET_MENU)) $css[] = ['nav' => 'display:none'];
            if (store::handler(TARGET_HTML_MENU)) $content = preg_replace('/<footer[^>]*[^>]*>(.*?)<\/footer>/is', '<footer>' . store::handler(TARGET_FOOT_HTML) . '</footer>', $content);
            if (store::handler(TARGET_FOOT)) $css[] = ['footer' => 'display:none'];
            if (store::handler(TARGET_HTML_MENU)) $content = preg_replace('/<header[^>]*[^>]*>(.*?)<\/header>/is', '<header>' . store::handler(TARGET_HEAD_HTML) . '</header>', $content);
            if (store::handler(TARGET_HEAD)) $css[] = ['header' => 'display:none'];
            if ($css) foreach ($css as $style) $styles .= sprintf("%s{%s;}", array_keys($style)[0], array_values($style)[0]);
        }
        if (!store::handler(YXORP_CONTENT) && store::handler(VAR_RESPONSE)) echo store::handler(YXORP_CONTENT, ((store::handler(VAR_RESPONSE)) && (helpers::MIME() === VAR_TEXT_HTML || helpers::MIME() === 'application/javascript' || helpers::MIME() === 'text/css' || helpers::MIME() === 'application/xml' || str_contains(helpers::MIME(), VAR_TEXT) || str_contains(helpers::MIME(), VAR_HTML))) ? (minify::createDefault())->process(str_replace(helpers::array_merge_ignore(array(YXORP_domain_target), array_keys((array)store::handler(YXORP_GLOBAL_REPLACE)), array_keys((array)store::handler(VAR_TARGET_REPLACE)), array_keys($inject = ['</head>' => (minify::createDefault())->process(sprintf("<style>%s %s %s</style><script>%s</script><script>%s</script></head>", store::handler(YXORP_GLOBAL_CSS), store::handler(YXORP_TARGET_CSS), $styles, store::handler(YXORP_GLOBAL_JS), store::handler(YXORP_TARGET_JS)))])), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)store::handler(YXORP_GLOBAL_REPLACE)), array_values((array)store::handler(VAR_TARGET_REPLACE)), array_values($inject)), preg_replace(helpers::array_merge_ignore(array_keys((array)store::handler(YXORP_GLOBAL_PATTERN)), array_keys((array)store::handler(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)store::handler(YXORP_GLOBAL_PATTERN)), array_values((array)store::handler(VAR_TARGET_PATTERN))), $content))) : $content);
        store::handler(YXORP_CONTENT, $content);
    }
}
