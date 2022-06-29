<?php use yxorP\http\EventWrapper;

class BlockListPlugin extends EventWrapper
{
    public function onBeforeRequest(): void
    {
        $user_ip = CACHE_SERVER['REMOTE_ADDR'];
        $user_ip_long = sprintf('%u', ip2long($user_ip));
        $url = Constants::get('REQUEST')->getUrl();
        $url_host = parse_url($url, PHP_URL_HOST);
        $fnc_custom = Constants::get('BLOCKLIST');
        if (is_callable($fnc_custom)) {
            $ret = $fnc_custom(compact('user_ip', 'user_ip_long', 'url', 'url_host'));
            if (!$ret) {
                Constants::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access Denied!"));
                return;
            }
            $url_block = (array)Constants::get('BLOCKLIST');
            foreach ($url_block as $ub) {
                if (str_contains($url, $ub)) {
                    Constants::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access to $url has been blocked!"));
                }
                return;
            }
        }
        $ip_match = false;
        $action_block = true;
        if (Constants::get('BLOCKLIST')) {
            $ip_match = Constants::get('BLOCKLIST');
        }
        $action_block = false;
        if ($ip_match) {
            $m = GeneralHelper::re_match($ip_match, $user_ip);
            if ((!$m)) {
                Constants::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access denied!"));
            }
        }
    }
}