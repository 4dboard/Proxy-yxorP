<?php

namespace yxorP\app\modules\system\controller;

use ArrayObject;
use Symfony\Component\Finder\Finder;
use yxorP\app\lib\openapi\Generator;
use yxorP\app\modules\app\controller\app;
use function file_exists;
use function str_replace;

/**
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 * @property \yxorP\app\lib\http\App $app
 */
class api extends app
{

    public function index()
    {
        return $this->render('system:views/api/index.php');
    }

    public function public()
    {

        $key = $this->app->dataStorage->findOne('system/api_keys', ['key' => 'public']);

        if (!$key) {

            $key = [
                'key' => 'public',
                'name' => 'public',
                'role' => null,
                'meta' => new ArrayObject([])
            ];
        }

        $this->checkAndLockResource('api.settings.public');

        return $this->render('system:views/api/key.php', compact('key'));
    }

    public function key($id = null)
    {

        if (!$id) {
            return $this->stop(['error' => 'key id is missing'], 412);
        }

        $key = $this->app->dataStorage->findOne('system/api_keys', ['_id' => $id]);

        if (!$key) {
            return false;
        }

        $this->checkAndLockResource($id);

        $key['meta'] = new ArrayObject($key['meta']);

        return $this->render('system:views/api/key.php', compact('key'));
    }

    public function create()
    {

        $key = [
            'key' => '',
            'name' => '',
            'role' => null,
            'meta' => new ArrayObject([])
        ];

        return $this->render('system:views/api/key.php', compact('key'));
    }

    public function remove()
    {

        $key = $this->param('key');

        if (!$key || !isset($key['_id'], $key['key'])) {
            return $this->stop(['error' => 'key is missing'], 412);
        }

        $this->app->dataStorage->remove('system/api_keys', ['_id' => $key['_id']]);

        $this->app->trigger('app.keys.remove', [$key]);

        $this->cache();

        return ['success' => true];
    }

    protected function cache()
    {
        $this->helper('api')->cache();
    }

    public function save()
    {

        $key = $this->param('key');

        if (!$key) {
            return $this->stop(['error' => 'Key data is missing'], 412);
        }

        $key['_modified'] = time();
        $isUpdate = isset($key['_id']);

        if (!$isUpdate) {
            $key['_created'] = $key['_modified'];
        }

        if (!isset($key['key']) || !trim($key['key'])) {
            return $this->stop(['error' => 'Key required'], 412);
        }

        foreach (['key', 'name'] as $k) {
            $key[$k] = strip_tags(trim($key[$k]));
        }

        // unique check

        $_key = $this->app->dataStorage->findOne('system/api_keys', ['key' => $key['key']]);

        if ($_key && (!isset($key['_id']) || $key['_id'] != $_key['_id'])) {
            $this->app->stop(['error' => 'Key is already used!'], 412);
        }

        $this->app->trigger('app.api.keys.save', [&$key, $isUpdate]);
        $this->app->dataStorage->save('system/api_keys', $key);

        $key = $this->app->dataStorage->findOne('system/api_keys', ['_id' => $key['_id']]);

        $key['meta'] = new ArrayObject(is_array($key['meta']) ? $key['meta'] : []);

        $this->cache();

        return $key;
    }

    public function load()
    {

        $this->helper('session')->close();

        return $this->app->dataStorage->find('system/api_keys', [
            'filter' => ['key' => ['$ne' => 'public']],
            'sort' => ['name' => 1]
        ])->toArray();
    }

    public function openapi(): array|string
    {

        $this->helper('session')->close();

        $paths = [(new Finder())->files()->in(SITE_DIR . '/modules')->notPath('#vendor#')];

        if (file_exists(SITE_DIR . '/addons')) {
            $paths[] = (new Finder())->files()->in(SITE_DIR . '/addons')->notPath('#vendor#');
        }

        if (file_exists(SITE_DIR . '/config/api')) {
            $paths[] = (new Finder())->files()->in(SITE_DIR . '/config/api')->notPath('#vendor#');
        }

        $yaml = Generator::scan($paths)->toYaml();

        // replace placeholders
        $yaml = str_replace([
            SITE_DIR,
            '{{ app.name }}',
            '{{ app.version }}',
        ], [
            $this->app->getSiteUrl(true) . '/api',
            $this->app->retrieve('app.name'),
            $this->app->retrieve('app.version'),
        ], $yaml);

        $this->app->response->mime = 'text';

        return $yaml;
    }

    public function restApiViewer()
    {

        $this->helper('session')->close();

        $apiKey = $this->param('apiKey');
        $bgColor = $this->param('bgColor');
        $primaryColor = $this->param('primaryColor');
        $textColor = $this->param('textColor');

        $this->layout = 'app:layouts/raw.php';

        $openApiUrl = $this->param('specUrl', $this->app->routeUrl('/system/api/openapi'));

        return $this->render('system:views/api/rest-api-viewer.php', compact('openApiUrl', 'apiKey', 'bgColor', 'primaryColor', 'textColor'));
    }

    public function graphqlViewer()
    {

        $this->helper('session')->close();

        $apiKey = $this->param('apiKey');
        $bgColor = $this->param('bgColor');
        $primaryColor = $this->param('primaryColor');
        $textColor = $this->param('textColor');

        $this->layout = 'app:layouts/raw.php';

        return $this->render('system:views/api/graphql-viewer.php', compact('apiKey', 'bgColor', 'primaryColor', 'textColor'));
    }

    protected function before()
    {

        if (!$this->isAllowed('app/api/manage')) {
            return $this->stop(401);
        }
    }
}
