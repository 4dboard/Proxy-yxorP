<?php

/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the EventWrapper class. */

class pluginLoaderAction extends EventWrapper
{
    /* A method that is called by the EventWrapper class. */
    public function buildIncludes(): void
    {
        /* Getting the `plugins` key from the `TARGET` array. If it is not set, it will set it to an empty array. */
        $_plugins = Constants::get('TARGET')['plugins'] ?: [];
        /* Adding the default plugins to the `$_plugins` array. */
        array_push($_plugins, 'BlockListPlugin', 'CookiePlugin', 'DailyMotionPlugin', 'HeaderRewritePlugin', 'LogPlugin', 'OverridePlugin', 'ProxifyPlugin', 'StreamPlugin', 'TwitterPlugin', 'YoutubePlugin');
        /* Loading the plugins. */
        foreach ($_plugins as $plugin) {
            /* Checking if the plugin is in the `DIR_PLUGIN` directory, if it is, it will load it. If it is not, it will
            check if the plugin is in the `yxorP\plugin` namespace. If it is, it will load it. */
            if (file_exists(DIR_PLUGIN . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php')) require(DIR_PLUGIN . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php'); elseif ('\\yxorP\\plugin\\' . $plugin) $plugin = '\\yxorP\\plugin\\' . $plugin;
            /* Adding the plugin to the EventWrapper class. */
            $this->addSubscriber(new $plugin());
        }
    }
}