<?php use yxorP\Http\EventWrapper;
use yxorP\Http\ProxyEvent;

if (!\class_exists('TwitterPlugin')) {
    class TwitterPlugin extends EventWrapper
    {
        protected $url_pattern = 'twitter.com';

        public function onCompleted(ProxyEvent $event)
        {
            $response = $event['response'];
            $content = $response->getContent();
            $content = Html::remove_scripts($content);
            $response->setContent($content);
        }
    }
}