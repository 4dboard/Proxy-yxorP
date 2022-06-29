<?php use yxorP\Http\EventWrapper;

class siteCollectionAction extends EventWrapper
{
    public function onBuildContext(): void
    {
        self::set('TARGET', self::get('APP')->storage->findOne('collections' . DIRECTORY_SEPARATOR . 'sites', ['host' => self::get('SITE_DOMAIN')]));
        self::set('SITE_URL', self::get('SERVER')['SERVER_NAME']);
        self::set('SITE_DOMAIN', self::extractDomain(self::get('SITE_URL')));
        self::set('SITE_SUB_DOMAIN', self::extractSubdomains(self::get('SITE_URL')));
        self::set('TARGET_URL', self::get('TARGET')['target']);
        self::set('TARGET_SUB_DOMAIN', self::extractSubdomains(self::get('TARGET_URL')));
        self::set('TARGET_DOMAIN', self::extractDomain(self::get('TARGET_URL')));
        self::set('FETCH', 'https:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . ((!is_null(self::get('SITE_SUB_DOMAIN'))) ? (self::get('SITE_SUB_DOMAIN') . ".") : null) . self::get('TARGET_DOMAIN'));
        self::set('PROXY_URL', self::get('FETCH') . self::get('REQUEST_URI'));
        self::set('DIR_FULL', self::get('PLUGIN_DIR') . 'override' . DIRECTORY_SEPARATOR . self::get('TARGET')['files']);
    }
}