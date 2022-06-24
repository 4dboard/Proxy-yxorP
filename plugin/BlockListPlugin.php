<?php use yxorP\Http\EventWrapper;

class BlockListPlugin extends EventWrapper
{
    public function onBeforeRequest(): void
    {
        $user_ip = yxorP::get('SERVER')['REMOTE_ADDR'];
        $user_ip_long = sprintf('%u', ip2long($user_ip));
        $url = yxorP::get('REQUEST')->getUrl();
        $url_host = parse_url($url, PHP_URL_HOST);
        $fnc_custom = yxorP::get('BLOCKLIST');
        if (is_callable($fnc_custom)) {
            $ret = $fnc_custom(compact('user_ip', 'user_ip_long', 'url', 'url_host'));
            if (!$ret) {
                yxorP::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access Denied!"));
                return;
            }
            $url_block = (array)yxorP::get('BLOCKLIST');
            foreach ($url_block as $ub) {
                if (str_contains($url, $ub)) {
                    yxorP::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access to $url has been blocked!"));
                }
                return;
            }
        }
        $ip_match = false;
        $action_block = true;
        if (yxorP::get('BLOCKLIST')) {
            $ip_match = yxorP::get('BLOCKLIST');
        }
        $action_block = false;
        if ($ip_match) {
            $m = GeneralHelper::re_match($ip_match, $user_ip);
            if ((!$m)) {
                yxorP::get('BUGSNAG')->notifyException(new RuntimeException("Error: Access denied!"));
            }
        }
    }
}