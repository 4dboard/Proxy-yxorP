<?php namespace yxorP\Helper;

use GuzzleHttp\Client;
use yxorP;
use yxorp\Cache\Cache;
use yxorP\Http\Request;
use yxorP\Http\Response;

class IncludeHelper
{
    public function __construct()
    {
        foreach (file(yxorP::get('PLUGIN_DIR') . '/.env') as $line) {
            if (trim((string)str_starts_with(trim($line), '#'))) continue;
            [$name, $value] = explode('=', $line, 2);
            yxorP::set($name, str_replace("\r\n", null, $value));
        }
        require yxorP::get('PLUGIN_DIR') . '/inc/Setup.php';
        yxorP::set('RESPONSE', yxorP::get('RESPONSE') ?: new Response());
        yxorP::set('REQUEST', yxorP::get('REQUEST') ?: Request::createFromGlobals());
        yxorP::FILES_CHECK(yxorP::get('SITE_CONTEXT')->DIR_FULL . '/', false);
        if (Cache::cache(yxorP::get('CACHE_KEY'))->isValid()) return Cache::cache(yxorP::get('CACHE_KEY'))->get();
        yxorP::FILES_CHECK(yxorP::get('PLUGIN_DIR') . '/override/global/assets', false);
        if (Cache::cache(yxorP::get('CACHE_KEY'))->isValid()) return Cache::cache(yxorP::get('CACHE_KEY'))->get();
        yxorP::set('GUZZLE', yxorP::get('GUZZLE') ?: new Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]));
        new yxorP();
    }
}