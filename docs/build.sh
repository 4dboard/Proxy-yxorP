#!/bin/bash
f1() {
    for file in `ls ${1}*.php 2>/dev/null`
    do
        php lib/install/build.php ${file}
    done

    for dir in `ls -d ${1}*/ 2>/dev/null`
    do
        f1 ${dir#*/}
    done
}


#f1 './*'