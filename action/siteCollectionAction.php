<?php

/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the EventWrapper class. */

class siteCollectionAction extends EventWrapper
{
    /* A method that is called by the EventWrapper class. */
    public function onBuildContext(): void
    {
        /* Setting the `TARGET` variable to the result of the `findOne` method. */
        self::set('TARGET', self::get(COCKPIT_APP)->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'sites', ['host' => self::get('SITE_DOMAIN')]));
        /* Setting the `SITE_URL` variable to the value of the `SERVER_NAME` key in the `TOKEN_SERVER` array. */
        self::set('SITE_URL', self::get(TOKEN_SERVER)['SERVER_NAME']);
        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        self::set('SITE_DOMAIN', self::extractDomain(self::get('SITE_URL')));
        /* Setting the `SITE_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        self::set('SITE_SUB_DOMAIN', self::extractSubdomains(self::get('SITE_URL')));
        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        self::set('TARGET_URL', self::get('TARGET')['target']);
        /* Setting the `TARGET_SUB_DOMAIN` variable to the result of the `extractSubdomains` method. */
        self::set('TARGET_SUB_DOMAIN', self::extractSubdomains(self::get('TARGET_URL')));
        /* Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        self::set('TARGET_DOMAIN', self::extractDomain(self::get('TARGET_URL')));
        /* Setting the `FETCH` variable to the value of the `SITE_SUB_DOMAIN` variable, if it is not null, and the
        `TARGET_DOMAIN` variable, with the `https://` protocol. */
        self::set('FETCH', 'https:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . ((!is_null(self::get('SITE_SUB_DOMAIN'))) ? (self::get('SITE_SUB_DOMAIN') . ".") : null) . self::get('TARGET_DOMAIN'));
        /* Setting the `PROXY_URL` variable to the value of the `FETCH` variable, with the value of the `TOKEN_REQUEST_URI`
        variable appended to it. */
        self::set('PROXY_URL', self::get('FETCH') . self::get(TOKEN_REQUEST_URI));
        /* Setting the `DIR_FULL` variable to the value of the `DIR_PLUGIN` constant, with the `override` string appended
        to it, with the `DIRECTORY_SEPARATOR` constant appended to it, with the value of the `files` key in the `TARGET`
        array appended to it. */
        self::set('DIR_FULL', DIR_PLUGIN . 'override' . DIRECTORY_SEPARATOR . self::get('TARGET')['files']);
    }
}