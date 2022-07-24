<?php
/* Importing the `wrapper` class from the `yxorP\app\lib\http` namespace. */

use yxorP\app\constants;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;


class onWriteAction extends wrapper
{
    public function onWrite(): void
    {
        if (MIME === VAR_TEXT_HTML || MIME === 'application/javascript' || MIME === 'text/css' || MIME === 'application/xml' || str_contains(MIME, VAR_TEXT) || str_contains(MIME, VAR_HTML)) store::print(CACHE_KEY, str_replace(helpers::array_merge_ignore(array(YXORP_domain_target), array_keys((array)store::store(YXORP_GLOBAL_REPLACE)), array_keys((array)store::store(VAR_TARGET_REPLACE))), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)store::store(YXORP_GLOBAL_REPLACE)), array_values((array)store::store(VAR_TARGET_REPLACE))), preg_replace(helpers::array_merge_ignore(array_keys((array)store::store(YXORP_GLOBAL_PATTERN)), array_keys((array)store::store(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)store::store(YXORP_GLOBAL_PATTERN)), array_values((array)store::store(VAR_TARGET_PATTERN))), store::store(VAR_RESPONSE)->getBody())));
    }

}