<?php

namespace yxorP\app\modules\app\helper;

use JetBrains\PhpStorm\ArrayShape;
use yxorP\app\lib\http\helperAware;


/**
 * @property mixed $dataStorage
 * @property \yxorP\app\lib\http\App $app
 */
class eventStream extends helperAware
{

    public function cleanup()
    {
        $this->app->dataStorage->remove('app/events/stream', ['_created' => ['$lt' => strtotime('-5 minutes')]]);
    }

    public function getEvents(int $sinceTime)
    {

        $events = $this->dataStorage->find('app/events/stream', [
            'filter' => ['_created' => ['$gte' => $sinceTime]],
            'sort' => ['_created' => -1]
        ])->toArray();

        return $events;
    }

    #[ArrayShape(['type' => "string", 'data' => "", 'options' => "array", '_created' => "int"])] public function add(string $event, $data, array $options)
    {

        $evt = [
            'type' => $event,
            'data' => $data,
            'options' => $options,
            '_created' => time()
        ];

        $this->dataStorage->save('app/events/stream', $evt);

        return $evt;
    }
}
