#!/bin/bash

cd ../
php ./app/lib/data/phpDocumentor.phar --directory './'  -t './docs' --force
php ./app/lib/data/phpDocumentor.phar --directory './'  -t './docs' --template="./docs/markdown/themes/markdown" --force