php ./inc/phpDocumentor.phar --directory './snag'  --directory './psr' --directory './proxy' --directory './parser' --directory './connections' --directory  './events' --directory './protocols' --directory './action' --directory './http' --directory './COCKPIT' --directory './minify' --directory './plugin' --ignore 'CoreExtension.php' --ignore 'TextNormalizer.php'  -t './docs/' --force
php ./inc/phpDocumentor.phar --directory './snag'  --directory './psr' --directory './proxy' --directory './parser' --directory './connections' --directory  './events' --directory './protocols' --directory './action' --directory './http' --directory './COCKPIT' --directory './minify' --directory './plugin'  --ignore 'CoreExtension.php' --ignore 'TextNormalizer.php'   -t './docs/' --template="vendor/saggre/phpdocumentor-markdown/themes/markdown" --force
php ./inc/phpDocumentor.phar --directory './' -t './docs/' --force
php ./inc/phpDocumentor.phar --directory './'  -t './docs/' --template="vendor/saggre/phpdocumentor-markdown/themes/markdown" --force