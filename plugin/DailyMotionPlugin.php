<?php
namespace yxorP\Helper;
use yxorP\Http\EventWrapper;
use yxorP\http\ProxyEvent;
use yxorP\Helper\GeneralHelper;

class DailyMotionPlugin extends EventWrapper
{
    protected $url_pattern = 'dailymotion.com';

    public function onCompleted(ProxyEvent $event)
    {
        $response = $event['response'];
        $content = $response->getContent();
        if (preg_match('/"url":"([^"]+mp4[^"]*)"/m', $content, $matches)) {
            $video = stripslashes($matches[1]);
            $player = GeneralHelper::vid_player($video, 1240, 478);
            $content = Html::replace_inner("#player", $player, $content);
        }
        $content = Html::remove_scripts($content);
        $response->setContent($content);
    }
}

