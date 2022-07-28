<?php

/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */

namespace yxorP\plugin;

use yxorP\lib\constants;
use yxorP\lib\http\helpers;
use yxorP\lib\http\wrapper;
use yxorP\lib\minify\minify;

/**
 * Extending the wrapper class.
 */
class spinPluginAction extends wrapper
{
    /**
     * A method that is called before the request is processed.
     *
     */
    public function onComplete(): void
    {
        store::handler(YXORP_CONTENT, str_replace(helpers::array_merge_ignore(array(YXORP_domain_target), array_keys((array)store::handler(YXORP_GLOBAL_REPLACE)), array_keys((array)store::handler(VAR_TARGET_REPLACE)), array_keys($inject = ['</head>' => (minify::createDefault())->process(sprintf("<style>%s</style><style>%s</style><script>%s</script><script>%s</script></head>", store::handler(YXORP_GLOBAL_CSS), store::handler(YXORP_TARGET_CSS), store::handler(YXORP_GLOBAL_JS), store::handler(YXORP_TARGET_JS)))])), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)store::handler(YXORP_GLOBAL_REPLACE)), array_values((array)store::handler(VAR_TARGET_REPLACE)), array_values($inject)), preg_replace(helpers::array_merge_ignore(array_keys((array)store::handler(YXORP_GLOBAL_PATTERN)), array_keys((array)store::handler(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)store::handler(YXORP_GLOBAL_PATTERN)), array_values((array)store::handler(VAR_TARGET_PATTERN))), store::handler(VAR_RESPONSE)->getBody())));
        exit(die(file_put_contents(self::gen($key)['path'], '<?php header("Content-type: ' . helpers::MIME() . '"); exit(die( ' . var_export((minify::createDefault())->process(helpers::MIME() === VAR_TEXT_HTML ? helpers::replace($content) : $content), true) . '));')));
    }

}

