<?php use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

/**
 * @property $name
 * @property $name
 */
class onExceptionAction extends wrapper
{
    public function onException($e): void
    {
        store::handler(YXORP_APP)->dataStorage->save('system/log', ['message' => $e->getMessage(), 'type' => 'error', 'channel' => $this->name, 'context' => null, 'timestamp' => time(), 'datetime' => date('Y-m-d G:i:s T', time())]);
        if (helpers::MIME() === 'text' . CHAR_SLASH . 'html' && defined(YXORP_PROXY_URL)) header("Location: " . YXORP_PROXY_URL); else if (ENV_DEBUG) var_dump($e); else store::handler(YXORP_APP)->dataStorage->save('system/log', ['message' => $e->getMessage(), 'type' => 'error', 'channel' => $this->name, 'context' => null, 'timestamp' => time(), 'datetime' => date('Y-m-d G:i:s T', time())]);
    }
}
