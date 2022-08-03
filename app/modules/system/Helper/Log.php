<?php

namespace yxorP\app\modules\system\helper;

use helper;
use yxorP\app\lib\http\App;
use yxorP\app\lib\http\helperAware;

/**
 * @property App $app
 */
class Log extends helperAware
{

    protected array $channels = [];

    public function channel(string $name): LogChannel
    {

        if (!isset($this->channels[$name])) {
            $this->channels[$name] = new LogChannel($name, $this->app);
        }

        return $this->channels[$name];
    }
}

class LogChannel
{

    protected $app;
    protected string $name;

    public function __construct(string $name, $app)
    {

        $this->name = $name;
        $this->app = $app;
    }

    public function info(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'info', $context);
    }

    protected function addRecord(string $message, $type = 'info', ?array $context = null): void
    {

        $time = time();

        $record = [
            'message' => $message,
            'type' => $type,
            'channel' => $this->name,
            'context' => $context,
            'timestamp' => $time,
            'datetime' => date('Y-m-d G:i:s T', $time)
        ];

        $this->app->dataStorage->save('system/log', $record);

    }

    public function debug(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'debug', $context);
    }

    public function notice(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'notice', $context);
    }

    public function warning(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'warning', $context);
    }

    public function alert(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'alert', $context);
    }

    public function error(string $message, ?array $context = null): void
    {
        $this->addRecord($message, 'error', $context);
    }

}
