<?php

namespace DashboardGrid\Controller;

use ArrayObject;
use Cockpit\AuthController;
use SplPriorityQueue;
use function Lime\fetch_from_array;

class Dashboard extends AuthController
{

    public function dashboard()
    {

        $settings = $this->app->storage->getKey('cockpit/options', 'dashboard.widgets.' . $this->user["_id"], []);

        $widgets = new ArrayObject([]);

        $this->app->trigger('admin.dashboard.widgets', [$widgets]);

        $areas = [];

        foreach ($widgets as &$widget) {

            $name = $widget['name'];
            $area = isset($widget['area']) && in_array($widget['area'], ['main', 'aside-left', 'aside-right']) ? $widget['area'] : 'main';

            $area = fetch_from_array($settings, "{$name}/area", $area);
            $prio = fetch_from_array($settings, "{$name}/prio", 0);

            if (!isset($areas[$area])) {
                $areas[$area] = new SplPriorityQueue();
            }
            $areas[$area]->insert($widget, -1 * $prio);
        }

        return $this->render('yxorp:views/dashboard.php', compact('areas', 'widgets'));
    }

}
