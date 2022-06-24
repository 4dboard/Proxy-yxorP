<?php namespace yxorP\Helper;

use stdClass;
use yxorP;
use yxorP\Domain\Domain;
use yxorP\Domain\Rules;
use yxorP\Http\EventWrapper;

class ContextHelper extends EventWrapper
{
    public static function helper()
    {
        yxorP::set('SITE_CONTEXT', new stdClass());
        yxorP::get('SITE_CONTEXT')->SITE_DOMAIN = self::extract_domain((string)yxorP::get('SERVER')['SERVER_NAME']);
        yxorP::get('SITE_CONTEXT')->SITE_SUB_DOMAIN = self::extract_subdomains((string)yxorP::get('SERVER')['SERVER_NAME']);
        yxorP::get('SITE_CONTEXT')->TARGET = yxorP::get('APP')->storage->findOne('collections/sites', ['host' => yxorP::get('SITE_CONTEXT')->SITE_DOMAIN]);
        yxorP::get('SITE_CONTEXT')->TARGET_SUB_DOMAIN = self::extract_subdomains(yxorP::get('SITE_CONTEXT')->TARGET['target']);
        yxorP::get('SITE_CONTEXT')->TARGET_DOMAIN = self::extract_domain(yxorP::get('SITE_CONTEXT')->TARGET['target']);
        yxorP::get('SITE_CONTEXT')->GLOBAL_REPLACE = yxorP::get('APP')->storage->findOne('collections/global', ['type' => 'replace'])['value'];
        yxorP::get('SITE_CONTEXT')->GLOBAL_PATTERN = yxorP::get('APP')->storage->findOne('collections/global', ['type' => 'pattern'])['value'];
        yxorP::get('SITE_CONTEXT')->GLOBAL_REWRITE = file_get_contents(yxorP::get('PLUGIN_DIR') . '/override/default/includes/rewrite.csv');
        yxorP::get('SITE_CONTEXT')->TARGET_URL = "https://" . (yxorP::get('SITE_CONTEXT')->SITE_SUB_DOMAIN ? yxorP::get('SITE_CONTEXT')->SITE_SUB_DOMAIN . "." : null) . yxorP::get('SITE_CONTEXT')->TARGET_DOMAIN;
        yxorP::get('SITE_CONTEXT')->PROXY_URL = yxorP::get('SITE_CONTEXT')->TARGET_URL . yxorP::get('REQUEST_URI');
        yxorP::get('SITE_CONTEXT')->DIR_FULL = yxorP::get('PLUGIN_DIR') . '/override/' . yxorP::get('SITE_CONTEXT')->SITE['dir'];
        MimeHelper::helper();
    }

    public static function extract_domain($domain)
    {
        if (str_contains($domain, '.')) {
            if (preg_match("/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i", $domain, $matches)) {
                return $matches['domain'];
            } else {
                return $domain;
            }
        } else {
            return $domain;
        }
    }

    public static function extract_subdomains($domain)
    {
        if (str_contains($domain, '.')) {
            $subdomains = $domain;
            $domain = self::extract_domain($subdomains);
            $subdomains = rtrim(strstr($subdomains, $domain, true), '.');
            return $subdomains;
        } else {
            return null;
        }
    }
}