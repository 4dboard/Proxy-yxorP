<?php

/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\Constants;

/* Extending the actionWrapper class. */

class siteCollectionAction extends actionWrapper
{
    /* A method that is called by the actionWrapper class. */
    public function onBuildContext(): void
    {
        /* Setting the `TARGET` variable to the result of the `findOne` method. */
        Constants::set('TARGET', Constants::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'sites', ['host' => Constants::get('SITE_DOMAIN')]));
        /* Setting the `SITE_URL` variable to the value of the `SERVER_NAME` key in the `TOKEN_SERVER` array. */
        Constants::set('SITE_URL', Constants::get(TOKEN_SERVER)['SERVER_NAME']);
        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        Constants::set('SITE_DOMAIN', self::extractDomain(Constants::get('SITE_URL')));
        /* Setting the `SITE_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        Constants::set('SITE_SUB_DOMAIN', self::extractSubdomains(Constants::get('SITE_URL')));
        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        Constants::set('TARGET_URL', Constants::get('TARGET')['target']);
        /* Setting the `TARGET_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        Constants::set('TARGET_SUB_DOMAIN', self::extractSubdomains(Constants::get('TARGET_URL')));
        /* Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        Constants::set('TARGET_DOMAIN', self::extractDomain(Constants::get('TARGET_URL')));
        /* Setting the `FETCH` variable to the value of the `SITE_SUB_DOMAIN` variable, if it is not null, and the
        `TARGET_DOMAIN` variable, with the `https://` protocol. */
        Constants::set('FETCH', 'https:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . ((!is_null(Constants::get('SITE_SUB_DOMAIN'))) ? (Constants::get('SITE_SUB_DOMAIN')->__toString() . ".") : null) . Constants::get('TARGET_DOMAIN')->__toString());
        /* Setting the `PROXY_URL` variable to the value of the `FETCH` variable, with the value of the `TOKEN_REQUEST_URI`
        variable appended to it. */
        Constants::set('PROXY_URL', Constants::get('FETCH')->__toString() . Constants::get(TOKEN_REQUEST_URI)->__toString());
        /* Setting the `DIR_FULL` variable to the value of the `DIR_PLUGIN` constant, with the `override` string appended
        to it, with the `DIRECTORY_SEPARATOR` constant appended to it, with the value of the `files` key in the `TARGET`
        array appended to it. */
        Constants::set('DIR_FULL', DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . Constants::get('TARGET')['files']);
    }
}