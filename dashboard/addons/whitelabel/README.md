# WhiteLabel

Custom logo and custom colours for [Yxorp CMS][1]. Maybe I'll add some more options in the future. 

## Installation

Copy this repository into `/addons` and name it `WhiteLabel` or

```bash
cd path/to/yxorp
git clone https://github.com/raffaelj/yxorp_WhiteLabel.git addons/WhiteLabel
```

## Configuration

Upload an image, copy it's url and set a config variable in `config/config.yaml` or `config/config.php`.

```yaml
whitelabel:
    logo: "#uploads:2019/11/08/5dc548b41c0cdlogo.png"
    logoWidth: 8em    # optional, default: 30px
    logoHeight: 3em   # optional, default: 30px
    hideName: true    # hide app name
    colors:
        - #ff0000
        - #00ff00
        - #0000ff
```

```php
return [
    'whitelabel' => [
        'logo'       => '#uploads:2019/11/08/5dc548b41c0cdlogo.png',
        'logoWidth'  => '8em',   # optional, default: 30px
        'logoHeight' => '3em',   # optional, default: 30px
        'hideName'   => true,    # hide app name
        'colors' => [
            '#ff0000',
            '#00ff00',
            '#0000ff',
        ],
    ];
];
```

I didn't write a user interface, because normally you do this task once and forget about it.

The logo url can be in the following formats

* internal paths (my favourite, because it works on local and production host without changes)
  * `#uploads:2019/11/08/5dc548b41c0cdlogo.png`
  * `assets:app/media/icons/code.svg`
* full url
  * `https://example.com/storage/uploads/2019/11/08/5dc548b41c0cdlogo.png`
  * `https://example.com/logo.png`
* relative path to site url
  * `/logo.png`
* full path
  * `/var/www/virtual/username/html/storage/uploads/2019/11/08/5dc548b41c0cdlogo.png`
  * `/var/www/virtual/username/html/logo.png`

The colors are used for the custom color picker in the settings of collections, forms and singletons.

[1]: https://github.com/agentejo/yxorp/
