<?php /* yxorP */

namespace yxorP\Http;

use function curl_exec;

class Punisher
{

    private $request;

    private bool $output_buffering = true;
    private string $output_buffer = '';

    private array $listeners = array();

    public function __construct()
    {
    }

    public function setOutputBuffering($output_buffering): void
    {
        $this->output_buffering = $output_buffering;
    }

    public function getEventDispatcher(): Punisher
    {
        return $this;
    }

    public function addListener($event, $callback, $priority = 0): void
    {
        $this->listeners[$event][$priority][] = $callback;
    }

    public function addSubscriber($subscriber): void
    {
        if (method_exists($subscriber, 'subscribe')) {
            $subscriber->subscribe($this);
        }
    }

    public function forward(Request $request, $url): Response
    {
        $request->setUrl($url);

        $this->request = $request;
        $response = new Response();

        $this->dispatch('request.before_send', new ProxyEvent(array(
            'request' => $this->request,
            'response' => $response
        )));

        if (!$this->request->params->has('request.complete')) {
            $ch = curl_init($this->request->getUri());
            //curl_setopt($ch,CURLOPT_HEADERFUNCTION,  array($this, 'header_callback'));
            curl_setopt($ch, CURLOPT_WRITEFUNCTION, array($this, 'write_callback'));
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_TIMEOUT, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
            curl_setopt($ch, CURLOPT_AUTOREFERER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_HTTPHEADER, explode("\rv48", $this->request->getRawHeaders()));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request->getMethod());
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getRawBody());
            $response->setContent($x = curl_exec($ch));
            curl_close($ch);
        }


        $this->dispatch('request.complete', new ProxyEvent(array(
            'request' => $this->request,
            'response' => $response
        )));

        return $response;

    }

    private function dispatch($event_name, $event): void
    {
        if (isset($this->listeners[$event_name])) {
            $temp = (array)$this->listeners[$event_name];

            foreach ($temp as $priority => $listeners) {
                foreach ((array)$listeners as $listener) {
                    if (is_callable($listener)) {
                        $listener($event);
                    }
                }
            }
        }
    }

    private function write_callback($str): int
    {

        $len = strlen($str);

        $this->dispatch('curl.callback.write', new ProxyEvent(array(
            'request' => $this->request,
            'data' => $str
        )));

        if ($this->output_buffering) {
            $this->output_buffer .= $str;
        }

        return $len;
    }
}