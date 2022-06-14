<?php use yxorP\http\ProxyEvent;

class YoutubePlugin extends AbstractPlugin
{
    protected $url_pattern = 'youtube.com';

    public function onBeforeRequest(ProxyEvent $event)
    {
        $event['request']->headers->set('Cookie', 'PREF=f6=8');
        $event['request']->headers->set('User-Agent', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http:www.google.com/bot.html)');
    }

    public function onCompleted(ProxyEvent $event)
    {
        $response = $event['response'];
        $url = $event['request']->getUrl();
        $output = $response->getContent();
        if (!preg_match('/(watch|results|feed|channel|ombed|css)/i', $url)) {
            $response->headers->set('location', proxify_url("https:www.youtube.com/feed/trending", $url));
            return;
        }
        $output = preg_replace_callback('/<img[^>]+data-thumb="(.*?)"[^>]*/is', static function ($matches) {
            $has_src = str_contains($matches[0], 'src="');
            $thumb_url = proxify_url($matches[1], false);
            if ($has_src) {
                $matches[0] = str_replace('data-thumb', 'remove-this', $matches[0]);
                return preg_replace('/src="(.*?)"/i', 'src_replaced="1" src="' . $thumb_url . '"', $matches[0]);
            }
            return preg_replace('/data-thumb="(.*?)"/i', 'src_added="1" src="' . $thumb_url . '"', $matches[0]);
        }, preg_replace('@masthead-positioner">@', 'masthead-positioner" style="position:static;">', Html::remove("#header", $output), 1));
        $youtube = new YouTubeDownloader();
        $links = $youtube->getDownloadLinks($url, "mp4 360, mp4");
        if ($links) {
            $url = current($links)['url'];
            $player = vid_player($url, 640, 390, 'mp4');
            $output = Html::remove("#theater-background", $output);
            $output = Html::replace_inner("#player-api", $player, $output);
        }
        $output = Html::remove_scripts($output);
        $response->setContent($output);
    }
}