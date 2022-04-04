#!/bin/bash
git push origin HEAD:main
git pull git@github.com:donPabloNow/sites.git main
git submodule update --init --recursive
git add .  || git commit -m "update"
git commit -m "update" || git commit -m "update" -a
git pull git@github.com:donPabloNow/sites.git main|| git push origin HEAD:main
git push origin HEAD:main|| git pull git@github.com:donPabloNow/sites.git main
git add .    || git pull git@github.com:donPabloNow/sites.git main
git pull git@github.com:donPabloNow/sites.git main|| git add .
git pull git@github.com:donPabloNow/sites.git main|| git commit -m "update" -a
git add . || git commit -m "update" -a
git commit -m "update" -a  || git add .
cd "./xn--gme-nnb.com/.yxorp" && ./git.sh && cd "../../xn--ply-onb.com/public_html" && ./git.sh && cd "../../" 
git pull git@github.com:donPabloNow/sites.git main --allow-unrelated-histories