<?php

namespace yxorP\app\modules\app\controller;

/**
 * Class Controller
 * @property \yxorP\app\lib\http\App $app
 * @package App
 */
class app extends authenticated
{

    protected $layout = 'app:layouts/app.php';

    protected function render(string $view, array $params = []): mixed
    {

        $this->app->trigger('app.layout.render');

        return parent::render($view, $params);
    }
}
