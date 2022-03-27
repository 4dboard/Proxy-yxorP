#!/bin/bash
git add .  || git commit -m "update"
git commit -m "update" || git commit -m "update" -a
git pull || git push
git push || git pull
git add .    || git pull
git pull || git add .
git pull || git commit -m "update" -a
git add . || git commit -m "update" -a
git commit -m "update" -a  || git add .