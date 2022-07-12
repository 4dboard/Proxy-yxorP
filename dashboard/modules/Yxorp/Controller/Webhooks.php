<?php
/**
 * This file is part of the yxorP project.
 *
 * (c) Artur Heinze - 🅰🅶🅴🅽🆃🅴🅹🅾, http://agentejo.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yxorP\Controller;

class Webhooks extends \yxorP\AuthController {

    public function __construct($app) {

        parent::__construct($app);

        if (!$this->module('yxorp')->hasaccess('yxorp', 'webhooks')) {
            return $this->helper('admin')->denyRequest();
        }
    }

    public function index() {

        $webhooks = $this->app->storage->find('yxorp/webhooks', [
            'sort' => ['name' => 1]
        ])->toArray();

        return $this->render('yxorp:views/webhooks/index.php', compact('webhooks'));
    }

    public function webhook($id = null) {

        $webhook = [
            'name' => '',
            'url'  => '',
            'auth' => ['user'=>'', 'pass'=>''],
            'headers' => [],
            'events' => [],
            'active' => true
        ];

        if ($id) {

            $webhook = $this->app->storage->findOne('yxorp/webhooks', ['_id' => $id]);

            if (!$webhook) {
                return false;
            }
        }

        $triggers = new \ArrayObject([
            'admin.init',
            'app.{$controller}.init',
            'yxorp.account.login',
            'yxorp.account.logout',
            'yxorp.api.authenticate',
            'yxorp.api.erroronrequest',
            'yxorp.assets.list',
            'yxorp.assets.remove',
            'yxorp.assets.save',
            'yxorp.bootstrap',
            'yxorp.clearcache',
            'yxorp.export',
            'yxorp.import',
            'yxorp.media.removefiles',
            'yxorp.media.rename',
            'yxorp.media.upload',
            'yxorp.request.error',
            'yxorp.rest.init',
            'yxorp.update.after',
            'yxorp.update.before',
            'shutdown',
        ]);

        $this->app->trigger('yxorp.webhook.events', [$triggers]);

        $triggers = $triggers->getArrayCopy();

        return $this->render('yxorp:views/webhooks/webhook.php', compact('webhook', 'triggers'));
    }

    public function save() {

        if ($data = $this->param('webhook', false)) {

            $data['_modified'] = time();

            if (!isset($data['_id'])) {
                $data['_created'] = $data['_modified'];
            }

            $this->app->storage->save('yxorp/webhooks', $data);

            // invalidate cache
            if ($cache = $this->app->path('#tmp:webhooks.cache.php')) {
                @unlink($cache);
            }

            return json_encode($data);
        }

        return false;

    }

    public function remove() {

        if ($data = $this->param('webhook', false)) {

            $this->app->storage->remove('yxorp/webhooks', ['_id'=>$data['_id']]);

            // invalidate cache
            if ($cache = $this->app->path('#tmp:webhooks.cache.php')) {
                @unlink($cache);
            }

            return true;
        }

        return false;

    }
}
