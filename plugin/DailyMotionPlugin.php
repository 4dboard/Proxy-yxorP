<?php /* yxorP */


use yxorP\http\ProxyEvent;

class DailyMotionPlugin extends AbstractPlugin
{
    protected $url_pattern = 'dailymotion.com';


    public function onCompleted(ProxyEvent $event)
    {

        $response = $event['response'];
        $content = $response->getContent();

        if (preg_match('/"url":"([^"]+mp4[^"]*)"/m', $content, $matches)) {

            $video = stripslashes($matches[1]);

            $player = vid_player($video, 1240, 478);

            $content = Html::replace_inner("#player", $player, $content);
        }

        $content = Html::remove_scripts($content);

        $response->setContent($content);
    }
}


