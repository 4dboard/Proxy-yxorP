<?php if (PHP_VERSION_ID < 50600) {
    echo 'Composer 2.3.0 dropped support for autoloading on PHP <5.6 and you are running ' . PHP_VERSION . ', please upgrade PHP or use Composer 2.2 LTS via "composer self-update --2.2". Aborting.' . PHP_EOL;
    exit(1);
}
require_once __DIR__ . '/composer/autoload_real.php';
return ComposerAutoloaderInit0fc67c8c6d14d2081ce037f8348a35e1::getLoader();