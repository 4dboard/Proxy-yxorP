<?php

if (!isset($cli, $app) || PHP_SAPI !== 'cli') {
    return;
}

$cli->add(new yxorP\app\modules\app\Command\Cache\flush($app));
$cli->add(new yxorP\app\modules\app\Command\Spaces\create($app));
$cli->add(new yxorP\app\modules\app\Command\i18n\createTranslation($app));
