<?php
/* Importing the `wrapper` class from the `yxorP\app\lib\http` namespace. */

use yxorP\app\constants;
use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;


class onWriteAction extends wrapper
{
    public function onWrite(): void
    {
        if (yP::get(VAR_RESPONSE) && (MIME === VAR_TEXT_HTML || MIME === 'application/javascript' || MIME === 'text/css' || MIME === 'application/xml' || str_contains(MIME, VAR_TEXT) || str_contains(MIME, VAR_HTML))) cache::set(str_replace(helpers::array_merge_ignore(array(YXORP_TARGET_DOMAIN), array_keys((array)yP::get(YXORP_GLOBAL_REPLACE)), array_keys((array)yP::get(VAR_TARGET_REPLACE))), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)yP::get(YXORP_GLOBAL_REPLACE)), array_values((array)yP::get(VAR_TARGET_REPLACE))), preg_replace(helpers::array_merge_ignore(array_keys((array)yP::get(YXORP_GLOBAL_PATTERN)), array_keys((array)yP::get(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)yP::get(YXORP_GLOBAL_PATTERN)), array_values((array)yP::get(VAR_TARGET_PATTERN))), yP::get(VAR_RESPONSE)->getBody())));
    }

}