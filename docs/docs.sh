#!/bin/bash

cd ../
php ./docs/phpDocumentor.phar --directory './'  -t './docs' --force
php ./docs/phpDocumentor.phar --directory './'  -t './docs' --template="./docs/markdown/themes/markdown" --force