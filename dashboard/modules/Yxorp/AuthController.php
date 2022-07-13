<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP;

use LimeExtra\Controller;
use function get_class;
use function str_replace;
use function strtolower;

class AuthController extends Controller
{

    protected $layout = 'yxorp:views/layouts/app.php';
    protected mixed $user;

    public function __construct($app)
    {

        $user = $app->module('yxorp')->getUser();

        if (!$user) {
            $app->reroute('/auth/login?to=' . $app->retrieve('route'));
            $app->stop();
        }

        parent::__construct($app);

        $this->user = $user;
        $app['user'] = $user;

        $controller = strtolower(str_replace('\\', '.', get_class($this)));

        $app->trigger("app.{$controller}.init", [$this]);

    }

}
