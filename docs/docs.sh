#!/bin/bash
while true
do
cd ../
	php ./app/vendor/phpDocumentor.phar --directory './'  -t './docs' --force
	php ./app/vendor/phpDocumentor.phar --directory './'  -t './docs' --template="./docs/markdown/themes/markdown" --force
	find ./ -type f -exec \
      sed -E 's/\> Automatically\(:[0-9]\+\)\(px\)\?/\1px phpDocumentor-markdown/g)' {} +
done