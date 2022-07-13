<?php

namespace LayoutComponents\Controller;


use ArrayObject;
use yxorP\AuthController;

/**
 * @property \Lime\App $app
 */
class Admin extends AuthController
{

    public function index()
    {

        $content = '{}';

        if ($file = $this->app->path('#storage:components.json')) {
            $content = @file_get_contents($file);
        }

        $json = json_decode($content, true);

        if (!$json) {
            $json = [];
        }

        $components = new ArrayObject($json);

        return $this->render('layoutcomponents:views/index.php', compact('components'));
    }

    public function store(): bool
    {
        $components = $this->param('components');

        if ($components) {
            $this->helper('fs')->write('#storage:components.json', json_encode($components, JSON_PRETTY_PRINT));
            return true;
        } else if (is_array($components)) {
            $this->helper('fs')->delete('#storage:components.json');
            return true;
        }

        return false;
    }


}
