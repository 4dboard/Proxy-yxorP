#!/bin/bash
while true
do
cd ../
	php ./app/vendor/phpDocumentor.phar --directory './'  -t './docs' --force
	php ./app/vendor/phpDocumentor.phar --directory './'  -t './docs' --template="./docs/markdown/themes/markdown" --force
	find ./ -type f -exec \
      sed -E 's/\> Automatically(\([^,]*)[^)]*/markdown\1/)' {} +
done