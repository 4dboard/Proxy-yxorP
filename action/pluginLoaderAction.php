<?php use yxorP\Http\EventWrapper;

class pluginLoaderAction extends EventWrapper
{
    public function buildIncludes(): void
    {
        $_plugins = self::get('TARGET')['plugins'] ?: [];
        array_push($_plugins, 'BlockListPlugin', 'CookiePlugin', 'DailyMotionPlugin', 'HeaderRewritePlugin', 'LogPlugin', 'OverridePlugin', 'ProxifyPlugin', 'StreamPlugin', 'TwitterPlugin', 'YoutubePlugin');
        foreach ($_plugins as $plugin) {
            if (file_exists(self::get('PLUGIN_DIR') . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php')) require(self::get('PLUGIN_DIR') . 'plugin' . DIRECTORY_SEPARATOR . $plugin . '.php'); elseif ('\\yxorP\\plugin\\' . $plugin) $plugin = '\\yxorP\\plugin\\' . $plugin;
            $this->addSubscriber(new $plugin());
        }
    }
}