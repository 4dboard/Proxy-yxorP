#!/bin/bash
git add .  || git commit -m "update"
git commit -m "update" || git commit -m "update" -a
git pull git@github.com:4dboard/yxorP origin master --allow-unrelated-histories
git pull git@github.com:4dboard/yxorP.git main|| git push origin HEAD:main
git push origin HEAD:main|| git pull git@github.com:4dboard/yxorP.git main
git add .    || git pull git@github.com:4dboard/yxorP.git main
git pull git@github.com:4dboard/yxorP.git main|| git add .
git pull git@github.com:4dboard/yxorP.git main|| git commit -m "update" -a
git add . || git commit -m "update" -a
git commit -m "update" -a  || git add .