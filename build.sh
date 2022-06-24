#!/bin/bash
f1() {
    for file in `ls ${1}*.php 2>/dev/null`
    do
        php inc/build.php ${file}
    done

    for dir in `ls -d ${1}*/ 2>/dev/null`
    do
        f1 ${dir#*/}
    done
}


f1 './cache/'
f1 './domain/'
f1 './helper/'
f1 './http/'
f1 './plugin/'
f1 './inc/'
f1 './minfy/'