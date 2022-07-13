<?php

$this->on('admin.init', function () {

    // replace logo on login page and in top bar
    $this->on(['app.layout.header', 'app.login.header'], function () {

        $config = $this->retrieve('whitelabel', false);

        if (!$config || !isset($config['logo'])) return;

        $url = $config['logo'];

        if (!\filter_var($url, FILTER_VALIDATE_URL)) {

            if ($path = $this->pathToUrl($url)) {
                $url = $path;
            } elseif (strpos($url, ':') === false) {
                $url = $this->getSiteUrl(true) . '/' . ltrim($url, '/');
            } else {
                return;
            }

        }

        $width = $config['logoWidth'] ?? false;
        $height = $config['logoHeight'] ?? false;

        echo '<style>';

        echo '.login-image, .app-logo {background-image: url("' . $url . '");}';

        echo '.app-logo {background-position: left center;'
            . ($width ? 'width:' . $width . ';' : '')
            . ($height ? 'height:' . $height . ';' : '')
            . '}';

        if ($config['hideName'] ?? false) echo '.app-name {display: none;}';

        echo '</style>';

    });

    // replace favicon
    // to do: url guessing like logo and documentation
    if ($favicon = $this->retrieve('config/whitelabel/favicon', false)) {
        $this->helper('admin')->favicon = $favicon;
    }

    // add custom color picker to settings of collections, singletons and forms
    $this->on('collections.settings.aside', function () {

        $colors = $this->retrieve('config/whitelabel/colors', []);
        $bind = 'collection';

        $this->renderView('whitelabel:views/partials/color-picker.php', compact('colors', 'bind'));

    });

    $this->on('singletons.settings.aside', function () {

        $colors = $this->retrieve('config/whitelabel/colors', []);
        $bind = 'singleton';

        $this->renderView('whitelabel:views/partials/color-picker.php', compact('colors', 'bind'));

    });

    $this->on('forms.settings.aside', function () {

        $colors = $this->retrieve('config/whitelabel/colors', []);
        $bind = 'form';

        $this->renderView('whitelabel:views/partials/color-picker.php', compact('colors', 'bind'));

    });

});
