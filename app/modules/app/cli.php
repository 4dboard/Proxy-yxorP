<?php

if (!isset($cli, $app) || PHP_SAPI !== 'cli') {
    return;
}

$cli->add(new yxorP\app\modules\app\command\Cache\flush($app));
$cli->add(new yxorP\app\modules\app\command\Spaces\create($app));
$cli->add(new yxorP\app\modules\app\command\i18n\createTranslation($app));
