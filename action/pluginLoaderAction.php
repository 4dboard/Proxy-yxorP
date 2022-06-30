<?php

/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\Constants;

/* Extending the actionWrapper class. */

class pluginLoaderAction extends actionWrapper
{
    /* A method that is called by the actionWrapper class. */
    public function buildIncludes(): void
    {
        /* Getting the `plugins` key from the `TARGET` array. If it is not set, it will set it to an empty array. */
        $_plugins = Constants::get('TARGET')['plugins'] ?: [];
        /* Adding the default plugins to the `$_plugins` array. */
        array_push($_plugins, 'blockListPluginAction', 'cookiePluginAction', 'dailyMotionPluginAction', 'headerRewritePluginAction', 'logPluginAction', 'overridePluginAction', 'proxifyPluginAction', 'streamPluginAction', 'twitterPluginAction', 'youtubePluginAction');
        /* Loading the plugins. */
        foreach ($_plugins as $plugin) {
            /* Checking if the plugin is in the `DIR_PLUGIN` directory, if it is, it will load it. If it is not, it will
            check if the plugin is in the `yxorP\plugin` namespace. If it is, it will load it. */
            if (file_exists(DIR_PLUGIN . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php')) require(DIR_PLUGIN . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php'); elseif ('\\yxorP\\plugin\\' . $plugin) $plugin = '\\yxorP\\plugin\\' . $plugin;
            /* Adding the plugin to the actionWrapper class. */
            $this->addSubscriber(new $plugin());
        }
    }
}