<?php use yxorP\helpers\GeneralHelper;
use yxorP\http\ProxyEvent;
use yxorP\Plugin\AbstractPlugin;

class BlockListPlugin extends AbstractPlugin
{
    public function onBeforeRequest(ProxyEvent $event): void
    {
        $user_ip = $_SERVER['REMOTE_ADDR'];
        $user_ip_long = sprintf('%u', ip2long($user_ip));
        $url = $event['request']->getUrl();
        $url_host = parse_url($url, PHP_URL_HOST);
        $fnc_custom = $GLOBALS['BLOCKLIST'];
        if (is_callable($fnc_custom)) {
            $ret = $fnc_custom(compact('user_ip', 'user_ip_long', 'url', 'url_host'));
            if (!$ret) {
                $GLOBALS['BUGSNAG']->notifyException(new RuntimeException("Error: Access Denied!"));
            }
            return;
        }
        $url_block = (array)$GLOBALS['BLOCKLIST'];
        foreach ($url_block as $ub) {
            if (str_contains($url, $ub)) {
                $GLOBALS['BUGSNAG']->notifyException(new RuntimeException("Error: Access to $url has been blocked!"));
                return;
            }
        }
        $ip_match = false;
        $action_block = true;
        if ($GLOBALS['BLOCKLIST']) {
            $ip_match = $GLOBALS['BLOCKLIST'];
            $action_block = false;
        }
        if ($ip_match) {
            $m = GeneralHelper::re_match($ip_match, $user_ip);
            if (($m && $action_block) || (!$m && !$action_block)) {
                $GLOBALS['BUGSNAG']->notifyException(new RuntimeException("Error: Access denied!"));
            }
        }
    }
}