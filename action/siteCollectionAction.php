<?php

/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\http\wrapper;
use yxorP\inc\constants;

/* Extending the wrapper class. */

class siteCollectionAction extends wrapper
{
    /* A method that is called by the wrapper class. */
    public function onBuildContext(): void
    {
        /* Setting the `TARGET` variable to the result of the `findOne` method. */
        constants::set(YXORP_TARGET, constants::get(constants::get(YXORP_COCKPIT_APP))->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'sites', ['host' => constants::get(YXORP_SITE_DOMAIN)]));
        /* Setting the `SITE_URL` variable to the value of the `SERVER_NAME` key in the `YXORP_SERVER` array. */
        constants::set(YXORP_SITE_URL, constants::get(YXORP_SERVER)[YXORP_SERVER_NAME]);
        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        constants::set(YXORP_SITE_DOMAIN, self::extractDomain(constants::get(YXORP_SITE_URL)));
        /* Setting the `SITE_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        constants::set(YXORP_SITE_SUB_DOMAIN, self::extractSubdomains(constants::get(YXORP_SITE_URL)));
        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        constants::set(YXORP_TARGET_URL, constants::get(YXORP_TARGET)[YXORP_TARGET]);
        /* Setting the `TARGET_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        constants::set(YXORP_TARGET_SUB_DOMAIN, self::extractSubdomains(constants::get(YXORP_TARGET_URL)));
        /* Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        constants::set('TARGET_DOMAIN', self::extractDomain(constants::get(YXORP_TARGET_URL)));
        /* Setting the `FETCH` variable to the value of the `SITE_SUB_DOMAIN` variable, if it is not null, and the
        `TARGET_DOMAIN` variable, with the `https://` protocol. */
        constants::set('FETCH', 'https:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . ((!is_null(constants::get(YXORP_SITE_SUB_DOMAIN))) ? (constants::get(YXORP_SITE_SUB_DOMAIN)->__toString() . ".") : null) . constants::get('TARGET_DOMAIN')->__toString());
        /* Setting the `PROXY_URL` variable to the value of the `FETCH` variable, with the value of the `YXORP_REQUEST_URI`
        variable appended to it. */
        constants::set(YXORP_PROXY_URL, constants::get('FETCH')->__toString() . constants::get(YXORP_REQUEST_URI)->__toString());
        /* Setting the `DIR_FULL` variable to the value of the `DIR_ROOT` constant, with the `override` string appended
        to it, with the `DIRECTORY_SEPARATOR` constant appended to it, with the value of the `files` key in the `TARGET`
        array appended to it. */
        constants::set('DIR_FULL', DIR_ROOT . 'override' . DIRECTORY_SEPARATOR . constants::get(YXORP_TARGET)['files']);
    }
}