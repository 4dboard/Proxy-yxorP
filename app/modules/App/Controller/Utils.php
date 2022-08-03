<?php

namespace yxorP\app\modules\app\controller;

use ArrayObject;
use Exception;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property \yxorP\app\lib\http\App $app
 */
class utils extends app
{

    /**
     * @throws Exception
     */
    #[ArrayShape(['token' => "string"])] public function generateToken($length = 20): array
    {

        $this->helper('session')->close();

        return ['token' => bin2hex(random_bytes($length))];
    }

    public function csrf($name = null, $generate = false, $expire = null): bool|array
    {

        if (!$name) {
            return false;
        }

        return ['token' => $this->helper('csrf')->token($name, $generate, $expire)];
    }

    public function search(): array
    {

        $this->helper('session')->close();

        $findings = new ArrayObject([]);
        $search = $this->param('search');

        if ($search) {
            $this->app->trigger('app.search', [$search, $findings]);
        }

        return $findings->getArrayCopy();
    }

}
