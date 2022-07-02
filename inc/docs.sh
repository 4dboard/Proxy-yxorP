 phpdoc  -d './' -t docs/ --template="xml"

 php ./inc/phpDocumentor.phar --directory './action' --directory './http' --directory './minify' --directory './plugin' -t './docs/' --template 'vendor/cvuorinen/phpdoc-markdown-public/data/templates/markdown-public'