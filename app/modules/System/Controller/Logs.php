<?php

namespace yxorP\app\modules\system\controller;

use yxorP\app\modules\app\controller\app;

/**
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class logs extends app
{

    public function index()
    {

        $channels = [];

        foreach (array_keys((array)$this->app->retrieve('modules')) as $m) {

            if ($m === 'app') continue;

            $path = $this->path("{$m}:");
            $icon = $this->path("{$m}:icon.svg") ? "{$m}:icon.svg" : 'system:assets/icons/channel.svg';

            $channels[$m] = [
                'name' => $m,
                'label' => basename($path),
                'icon' => $icon
            ];
        }

        return $this->render('system:views/logs/index.php', compact('channels'));
    }

    public function load(): array
    {

        $this->helper('session')->close();

        $options = array_merge([
            'sort' => ['timestamp' => -1]
        ], $this->param('options', []));

        $items = $this->app->dataStorage->find('system/log', $options)->toArray();
        $count = $this->app->dataStorage->count('system/log', $options['filter'] ?? []);
        $pages = isset($options['limit']) ? ceil($count / $options['limit']) : 1;
        $page = 1;

        if ($pages > 1 && isset($options['skip'])) {
            $page = ceil($options['skip'] / $options['limit']) + 1;
        }

        return compact('items', 'count', 'pages', 'page');
    }

    protected function before()
    {

        if (!$this->isAllowed('app/logs')) {
            return $this->stop(401);
        }
    }

}
