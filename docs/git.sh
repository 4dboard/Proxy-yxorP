#!/bin/bash
while true
do
  git gc
  git add . --all
	git push origin HEAD:main
	git add .  || git commit -m "update"
	git commit -m "update" || git commit -m "update" -a
	git add .  || git commit -m "update"
	git commit -m "update" || git commit -m "update" -a
	git push origin HEAD:main
	git push origin HEAD:main
	git add .    
	git git add .
	git git commit -m "update" -a
	git add . || git commit -m "update" -a
	git commit -m "update" -a  || git add .
	git add . --all
	git commit -m "update" -a
	git push origin HEAD:main --force
done