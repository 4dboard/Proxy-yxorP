<?php use yxorP\http\EventWrapper;

class TwitterPlugin extends EventWrapper
{
    protected $url_pattern = 'twitter.com';

    public function onCompleted(): void
    {
        $response = Constants::get('RESPONSE');
        $content = $response->getContent();
        $content = Html::remove_scripts($content);
        $response->setContent($content);
    }
}