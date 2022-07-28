<?php
/**
 * Importing the `wrapper` class from the `yxorP\lib\http` namespace.
 */

use yxorP\lib\constants;
use yxorP\lib\http\helpers;
use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;
use yxorP\lib\minify\minify;


class onWriteAction extends wrapper
{
    /**
     * It checks if the response is not empty and if the MIME type is HTML, JavaScript, CSS, XML, text or HTML. If it is,
     * it will cache the response
     */
    public function onWrite(): void
    {
        /* Checking if the response is not empty and if the MIME type is HTML, JavaScript, CSS, XML, text or HTML. If it
        is, it will cache the response. */
        if (!store::handler(YXORP_CONTENT)) echo store::handler(YXORP_CONTENT, ((store::handler(VAR_RESPONSE)) && (helpers::MIME() === VAR_TEXT_HTML || helpers::MIME() === 'application/javascript' || helpers::MIME() === 'text/css' || helpers::MIME() === 'application/xml' || str_contains(helpers::MIME(), VAR_TEXT) || str_contains(helpers::MIME(), VAR_HTML))) ? (minify::createDefault())->process(str_replace(helpers::array_merge_ignore(array(YXORP_domain_target), array_keys((array)store::handler(YXORP_GLOBAL_REPLACE)), array_keys((array)store::handler(VAR_TARGET_REPLACE)), array_keys($inject = ['</head>' => (minify::createDefault())->process(sprintf("<style>%s</style><style>%s</style><script>%s</script><script>%s</script></head>", store::handler(YXORP_GLOBAL_CSS), store::handler(YXORP_TARGET_CSS), store::handler(YXORP_GLOBAL_JS), store::handler(YXORP_TARGET_JS)))])), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)store::handler(YXORP_GLOBAL_REPLACE)), array_values((array)store::handler(VAR_TARGET_REPLACE)), array_values($inject)), preg_replace(helpers::array_merge_ignore(array_keys((array)store::handler(YXORP_GLOBAL_PATTERN)), array_keys((array)store::handler(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)store::handler(YXORP_GLOBAL_PATTERN)), array_values((array)store::handler(VAR_TARGET_PATTERN))), store::handler(VAR_RESPONSE)->getBody()))) : store::handler(VAR_RESPONSE)->getBody());
        echo 2;
    }

}