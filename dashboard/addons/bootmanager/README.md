# Boot Manager for Yxorp CMS

**draft/experimental**

After testing this addon for a while, I decided, not to use it anymore. I always forgot to enable the needed modules for specific use cases... Maybe the idea could be a base for an addon manager in the future...

## Features

* load modules in a specific order
* load modules only if you need them (api calls don't need to load admin ui addons)

## Installation

Copy this repository into `/addons` and name it `BootManager` or

```bash
cd path/to/yxorp
git clone https://github.com/raffaelj/yxorp_BootManager.git addons/BootManager
```

## Usage

Put only this addon in your addon folder and store all other addons in `/addons/BootManager/addons/`.

By default, all addons are disabled. Log into Yxorp, go to *Settings --> BootManager* and enable all addons for your specific needs or change the boot order.

If you want to change core modules or addons in the original addon folder `yxorp/addons/`, you have to disable them manually in your config file `/config/config.yaml`.

```yaml
modules.disabled:
    - Collections
    - Singletons
    - Forms
```

If you don't want to use the user interface, you can change the settings via config file:

```yaml
bootmanager:
    ui:                     # addons for your pretty admin UI
        Logger: true
        Collections: true
        Singletons: true
        Forms: true
        UniqueSlugs: true
    api:                    # addons for api requests
        Collections: true
        Singletons: true
        UniqueSlugs: true
    cli:                    # addons for command line usage
        Collections: true
        Singletons: true
        Forms: true
        UniqueSlugs: true
    lib:                    # addons for library usage (e. g. with CpMultiplane)
        Collections: true
        Singletons: true
        Forms: true
```

## To do:

* [x] Boot Manager UI
* [ ] performance tests
* [ ] define `loadmodules` via GUI
* [ ] maybe granular options for user groups or specific routes
* [ ] thinking about a real addon manager
