# Changelog

## 0.2.0

* removed global option
* changed config format from unnamed arrays (`["Collections"]`) to named pairs (`Collections: true`) - see [README.md](/README.md)
* added GUI
* moved boot process to `yxorp.bootstrap` event with priority `0`
* added autoloading for addon directories, that were added dynamically
* added option to store addons inside `yxorp/addons/BootManager/addons` to have full control about the boot order

## 0.1.1

* added `cli` to boot options

## 0.1.0

* initial proof of concept
