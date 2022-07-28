#!/bin/bash

cd ../
php ./lib/data/phpDocumentor.phar --directory './'  -t './docs' --force
php ./lib/data/phpDocumentor.phar --directory './'  -t './docs' --template="./docs/markdown/themes/markdown" --force