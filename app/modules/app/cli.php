<?php

if (!isset($cli, $app) || PHP_SAPI !== 'cli') {
    return;
}

$cli->add(new App\Command\Cache\flush($app));
$cli->add(new App\Command\Spaces\create($app));
$cli->add(new App\Command\i18n\createTranslation($app));
