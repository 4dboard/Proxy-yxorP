<?php /* yxorP */

use yxorP\http\ProxyEvent;

class ProxifyPlugin extends AbstractPlugin
{

    private string $base_url = '';

    public function onBeforeRequest(ProxyEvent $event)
    {

        $request = $event['request'];

        if ($request->post->has('convertGET')) {

            $request->post->remove('convertGET');

            $request->get->replace($request->post->all());

            $request->post->clear();

            $request->setMethod('GET');

            $request->prepare();
        }
    }

    public function onCompleted(ProxyEvent $event)
    {

        $this->base_url = $event['request']->getUri();
        $url_host = parse_url($this->base_url, PHP_URL_HOST);

        $response = $event['response'];
        $content_type = $this->clean_content_type($response->headers->get('content-type'));
        $str = $response->getContent();

        $no_proxify = array('text/javascript', 'application/javascript', 'application/x-javascript', 'text/plain');
        if (in_array($content_type, $no_proxify)) {
            return;
        }

        $str = preg_replace('@<iframe[^>]*>[^<]*</iframe>@is', '', $str);

        $str = $this->proxify_head($str);
        $str = $this->proxify_css($str);

        $str = preg_replace_callback('@(?:src|href)\s*=\s*(["|\'])(.*?)\1@is', array($this, 'html_attr'), $str);

        $str = preg_replace_callback('/srcset=\"(.*?)\"/i', function ($matches) {
            $src = $matches[1];

            $urls = preg_split('/\s*,\s*/', $src);
            foreach ($urls as $part) {

                $pos = strpos($part, ' ');
                if ($pos !== false) {
                    $url = substr($part, 0, $pos);
                    $src = str_replace($url, proxify_url($url, $this->base_url), $src);
                }
            }

            return 'srcset="' . $src . '"';
        }, $str);

        $str = preg_replace_callback('@<form[^>]*action=(["\'])(.*?)\1[^>]*>@i', array($this, 'form_action'), $str);

        $response->setContent($str);
    }

    public function clean_content_type($content_type): string
    {
        return trim(preg_replace('@;.*@', '', $content_type));
    }

    private function proxify_head($str): array|string|null
    {


        $str = preg_replace_callback('/content=(["\'])\d+\s*;\s*url=(.*?)\1/is', array($this, 'meta_refresh'), $str);

        return preg_replace('/[^<(.*?)]integrity=([\'"])(.*?)([\'"])/is', '', $str);
    }

    private function proxify_css($str): array|string|null
    {

        $str = preg_replace_callback('@[^a-z]{1}url\s*\((?:\'|"|)(.*?)(?:\'|"|)\)@im', array($this, 'css_url'), $str);

        return preg_replace_callback('/@import ([\'"])(.*?)\1/i', array($this, 'css_import'), $str);
    }

    private function css_url($matches): array|string
    {

        $url = trim($matches[1]);
        if (starts_with($url, 'data:')) {
            return $matches[0];
        }

        return str_replace($matches[1], proxify_url($matches[1], $this->base_url), $matches[0]);
    }

    private function css_import($matches): array|string
    {
        return str_replace($matches[2], proxify_url($matches[2], $this->base_url), $matches[0]);
    }

    private function html_attr($matches): array|string
    {

        $url = trim($matches[2]);

        $schemes = array('data:', 'magnet:', 'about:', 'javascript:', 'mailto:', 'tel:', 'ios-app:', 'android-app:');
        if (starts_with($url, $schemes)) {
            return $matches[0];
        }

        return str_replace($url, proxify_url($url, $this->base_url), $matches[0]);
    }

    private function form_action($matches): array|string
    {

        if (!$matches[2]) {
            $matches[2] = $this->base_url;
        }

        $new_action = proxify_url($matches[2], $this->base_url);

        $form_post = preg_match('@method=(["\'])post\1@i', $matches[0]) === 1;

        $result = str_replace($matches[2], $new_action, $matches[0]);

        if (!$form_post) {

            $result = str_replace("<form", '<form method="POST"', $result);

            $result .= '<input type="hidden" name="convertGET" value="1">';
        }

        return $result;
    }

    private function meta_refresh($matches): array|string
    {
        $url = $matches[2];
        return str_replace($url, proxify_url($url, $this->base_url), $matches[0]);
    }

}

