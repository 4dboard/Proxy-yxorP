# rljUtils

Addon for Yxorp CMS, that adds some hardening, cosmetics and helpers

When using Yxorp with multiple users, it needs some customization. By default, some helper functions bypass the user group access control lists or they talk too much, so they definitely need some adjustments. This addon also adds some UI tweaks and helpers.

This addon helps if you forget to adjust some values and sets them to defaults. It also contains some snippets, I collected in the [yxorp-scripts repository][1] over the last year.

Some adjustments are opinion-based. I like them and I wrote this addon as a base to work with for my needs. Use the code as inspiration or if you have suggestions, feel free to file an issue or to send a pull request.

More options and helpers may come soon...

**Warning:** If you leave `collections_find`, `collections_tree` and `collections_collections` enabled, you might get some problems with collection-link fields.

## Installation

Copy this repository into `/addons` and name it `rljUtils` or use the cli.

### via git

```bash
cd path/to/yxorp
git clone https://github.com/raffaelj/yxorp_rljUtils.git addons/rljUtils
```

### via cp cli

```bash
cd path/to/yxorp
./cp install/addon --name rljUtils --url https://github.com/raffaelj/yxorp_rljUtils/archive/master.zip
```

### via composer

Make sure, that the path to yxorp addons is defined in your projects' `composer.json` file.

```json
{
    "name": "my/yxorp-project",
    "extra": {
        "installer-paths": {
            "addons/{$name}": ["type:yxorp-module"]
        }
    }
}
```

```bash
cd path/to/yxorp-root
composer create-project --ignore-platform-reqs aheinze/yxorp .
composer config extra.installer-paths.addons/{\$name} "type:yxorp-module"

composer require --ignore-platform-reqs raffaelj/yxorp-rljutils
```

## Usage

By default, all options, except `locked_entries_disabled`, are enabled.

Disable them via `config/config.yaml` or via UI under "settings" --> "rljUtils"

Scroll down for an example configuration.

## Features

### Hardening

* set `allowed_uploads` to `'jpg, jpeg, png, gif, svg, pdf, ods, odt, doc, docx, xls, xlsx'` if it is not defined
* set `max_upload_size` to 4MB if it is not defined
* restrict collection helper functions/routes, that bypass group acl (used by collection links, OK for pure api usage, but a security no-go in the admin ui)
  * `find` and `_find`
  * `tree`
  * `_collections`
* disable helper routes that bypass ACLs completely
  * `/collecitons/utils/getLinkedOverview`
* restrict account helper function/route `/accounts/find`
  * disable the whole user list for non-admins
  * return user data only if it is filtered by id
  * return only needed data (user, name, group, _id) and not the personal email addresses
* new acl rule `assets` - if not enabled, the user group can't access the assetsmanager

### Cosmetics

* disable the timer widget in the dashboard
* set the default entries group in entry edit view to "Main" (the default is "All") - If you split the fields in categories, e. g. SEO and config, it is a bit annoying to see the whole list on startup
* add some BIG, coloured language buttons to the action panel (I always forget to switch back after changing some localized values)
* set entity encoding of wysiwyg fields to raw to prevent special chars replacements (`ä` turns to `&auml;`), so the full text search for words with special chars works like intended
* add a dark mode toggle to the system menu

### Helpers

* disable entry lock functionality - While developing and testing with multiple browsers it is really annoying to wait until the entry is unlocked. Also my Firefox is setup with some privacy settings, so it never sends the unlock signal when closing a tab or clicking on "Cancel".

## Example configuration

config.php:

```php
return [
    "app.name" => "rljUtils Test",
    "languages" => [
        "default" => "English",
        "de"      => "Deutsch",
    ],

    "groups" => [
        "manager" => [
            "yxorp" => [
                "backend" => true,
                "accounts" => true,
                "assets" => true,
            ],
        ],
        "author" => [
            "yxorp" => [
                "backend" => true,
                "assets" => true,
            ],
        ],
        "guest" => [
            "yxorp" => [
                "backend" => true,
            ],
        ],
    ],

    "rljutils" => [
        "hardening" => [
            "allowed_uploads" => false,
            "max_upload_size" => false,
            "collections_find" => false,
            "collections_tree" => false,
            "collections_collections" => false,
            "accounts_find" => false,
            "assetsmanager" => false,
            "disable_getLinkedOverview" => false,
        ],
        "cosmetics" => [
            "widgets_timer_disabled" => false,
            "entry_default_group_main" => false,
            "entry_language_buttons" => false,
            "wysiwyg_entity_encoding_raw" => false,
            "dark_mode_switch" => false,
        ],
        "helpers" => [
            # entry lock is annoying while developing and testing with multiple browsers
            "locked_entries_disabled" => true,
        ],
    ],
];
```

## Screenshots

![rljUtils-language-buttons](https://user-images.githubusercontent.com/13042193/56857119-d951a580-6969-11e9-9b9f-15bd2ff3582f.png)

![rljUtils-settings](https://user-images.githubusercontent.com/13042193/56857120-d951a580-6969-11e9-8947-188b6f1fdd0b.png)

[1]: https://github.com/raffaelj/yxorp-scripts
