<?php

namespace System\Controller;

use App\Controller\App;

class Spaces extends App {

    protected function before() {

        if (!$this->isAllowed('app/spaces')) {
            return $this->stop(401);
        }

        if (!$this->helper('spaces')->isMaster()) {
            return $this->stop(403);
        }
    }

    public function index() {

        return $this->render('system:views/spaces/index.php');
    }

    public function create() {

        return $this->render('system:views/spaces/create.php');
    }

    public function load() {

        return $this->helper('spaces')->spaces();
    }

    public function remove() {

        $space = $this->param('space');

        if (!$space || !isset($space['name'])) {
            return $this->stop(['error' => 'Space is missing'], 412);
        }

        if (strpos($space['name'], '.') !== false || strpos($space['name'], '/')) {
            return false;
        }

        $folder = $this->app->path("#app:.spaces/{$space['name']}");

        if ($folder) {
            $this->helper('fs')->delete($folder);
        }

        return ['success' => true];
    }
}
