#!/bin/bash
f1() {
    for file in `ls ${1}*.php 2>/dev/null`
    do
        php build.php ${file}
    done

    for dir in `ls -d ${1}*/ 2>/dev/null`
    do
        f1 ${dir#*/}
    done
}

\cp -r ./src/* ./

php build.php ./cache/abstract.php
php build.php ./cache/driver.php
php build.php ./cache/extensions.php

f1 './cache/extensions/'
f1 './cache/drivers/'
f1 './cache/exceptions/'

f1 './dashboard/'
f1 './helper/'
f1 './http/'
f1 './plugin/'