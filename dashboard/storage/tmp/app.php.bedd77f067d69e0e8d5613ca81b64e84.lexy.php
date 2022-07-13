<?php

// Generate title
$_title = [];

foreach (explode('/', $app['route']) as $part) {
    if (trim($part)) $_title[] = $app('i18n')->get(ucfirst($part));
}

// sort modules by label
$modules = $app('admin')->data['menu.modules']->getArrayCopy();

usort($modules, function ($a, $b) {
    return mb_strtolower($a['label']) <=> mb_strtolower($b['label']);
});

?><!doctype html>
<html lang="<?php echo $app('i18n')->locale; ?>" data-base="<?php $app->base('/'); ?>"
      data-route="<?php $app->route('/'); ?>" data-version="<?php echo $app['cockpit/version']; ?>"
      data-locale="<?php echo $app('i18n')->locale; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo implode(' &raquo; ', $_title) . (count($_title) ? ' - ' : '') . $app['app.name']; ?></title>
    <link rel="icon" href="<?php $app->base('/favicon.png'); ?>" type="image/png">
    <?php echo $app->helper('admin')->favicon('red'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script>
        // App constants
        var SITE_URL = '<?php echo rtrim($app->filestorage->getUrl('site://'), '/'); ?>';
        var ASSETS_URL = '<?php echo rtrim($app->filestorage->getUrl('assets://'), '/'); ?>';
        var PUBLIC_STORAGE_URL = '<?php echo rtrim($app->pathToUrl('#pstorage:'), '/'); ?>';
    </script>

    <?php echo $app->assets($app('admin')->data->get('assets'), $app['debug'] ? time() : $app['cockpit/version']); ?>

    <script src="<?php $app->route('/cockpit.i18n.data'); ?>"></script>

    <script>
        App.$data = <?php echo json_encode($app('admin')->data->get('extract')); ?>;
        UIkit.modal.labels.Ok = App.i18n.get(UIkit.modal.labels.Ok);
        UIkit.modal.labels.Cancel = App.i18n.get(UIkit.modal.labels.Cancel);
    </script>

    <?php $app->trigger('app.layout.header'); ?>
    <?php $app->block('app.layout.header'); ?>

</head>
<body>

<div class="app-header" data-uk-sticky="{animation: 'uk-animation-slide-top', showup:true}">

    <div class="app-header-topbar">

        <div class="uk-container uk-container-center">

            <div class="uk-grid uk-flex-middle">

                <div>

                    <div class="app-menu-container" data-uk-dropdown="delay:400,mode:'click'">

                        <a href="<?php $app->route('/'); ?>"
                           class="uk-link-muted uk-text-bold app-name-link uk-flex uk-flex-middle">
                            <span class="app-logo"></span>
                            <span class="app-name"><?php echo $app['app.name']; ?></span>
                        </a>

                        <div class="uk-dropdown app-panel-dropdown uk-dropdown-close">

                            <?php if ($app('admin')->data['menu.modules']->count()) { ?>
                                <div class="uk-visible-small">
                                    <span class="uk-text-upper uk-text-small uk-text-bold"><?php echo $app("i18n")->get('Modules'); ?></span>
                                </div>

                                <ul class="uk-grid uk-grid-match uk-grid-small uk-text-center uk-visible-small uk-margin-bottom">

                                    <?php foreach ($modules as $item) { ?>
                                        <li class="uk-width-1-2 uk-width-medium-1-3 uk-grid-margin"
                                            data-route="<?php echo $item['route']; ?>">
                                            <a class="uk-display-block uk-panel-box uk-panel-card-hover uk-panel-space <?php echo (@$item['active']) ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                               href="<?php $app->route($item['route']); ?>">
                                                <div class="uk-svg-adjust">
                                                    <?php if (preg_match('/\.svg$/i', $item['icon'])) { ?>
                                                        <img src="<?php echo $app->pathToUrl($item['icon']); ?>"
                                                             alt="<?php echo $app("i18n")->get($item['label']); ?>"
                                                             data-uk-svg width="40" height="40"/>
                                                    <?php } else { ?>
                                                        <img src="<?php echo $app->pathToUrl('assets:app/media/icons/module.svg'); ?>"
                                                             alt="<?php echo $app("i18n")->get($item['label']); ?>"
                                                             data-uk-svg width="40" height="40"/>
                                                    <?php } ?>
                                                </div>
                                                <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get($item['label']); ?></div>
                                            </a>
                                        </li>
                                    <?php } ?>

                                    <?php $app->trigger('cockpit.menu.modules'); ?>

                                </ul>
                            <?php } ?>


                            <div>
                                <span class="uk-text-upper uk-text-small uk-text-bold"><?php echo $app("i18n")->get('System'); ?></span>
                            </div>

                            <ul class="uk-grid uk-grid-small uk-grid-width-1-2 uk-grid-width-medium-1-4 uk-text-center">

                                <li class="uk-grid-margin">
                                    <a class="uk-display-block uk-panel-card-hover uk-panel-box uk-panel-space <?php echo ($app['route'] == '/cockpit/dashboard') ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                       href="<?php $app->route('/cockpit/dashboard'); ?>">
                                        <div class="uk-svg-adjust">
                                            <img class="uk-margin-small-right inherit-color"
                                                 src="<?php $app->base('assets:app/media/icons/dashboard.svg'); ?>"
                                                 width="40" height="40" data-uk-svg alt="assets"/>
                                        </div>
                                        <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get('Dashboard'); ?></div>
                                    </a>
                                </li>

                                <li class="uk-grid-margin">
                                    <a class="uk-display-block uk-panel-card-hover uk-panel-box uk-panel-space <?php echo (strpos($app['route'], '/assetsmanager') === 0) ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                       href="<?php $app->route('/assetsmanager'); ?>">
                                        <div class="uk-svg-adjust">
                                            <img class="uk-margin-small-right inherit-color"
                                                 src="<?php $app->base('assets:app/media/icons/assets.svg'); ?>"
                                                 width="40" height="40" data-uk-svg alt="assets"/>
                                        </div>
                                        <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get('Assets'); ?></div>
                                    </a>
                                </li>

                                <?php if ($app->module("cockpit")->hasaccess('cockpit', 'finder')) { ?>
                                    <li class="uk-grid-margin">
                                        <a class="uk-display-block uk-panel-card-hover uk-panel-box uk-panel-space <?php echo (strpos($app['route'], '/finder') === 0) ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                           href="<?php $app->route('/finder'); ?>">
                                            <div class="uk-svg-adjust">
                                                <img class="uk-margin-small-right inherit-color"
                                                     src="<?php $app->base('assets:app/media/icons/finder.svg'); ?>"
                                                     width="40" height="40" data-uk-svg alt="assets"/>
                                            </div>
                                            <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get('Finder'); ?></div>
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if ($app->module("cockpit")->hasaccess('cockpit', 'settings')) { ?>
                                    <li class="uk-grid-margin">
                                        <a class="uk-display-block uk-panel-box uk-panel-card-hover uk-panel-space <?php echo (strpos($app['route'], '/settings') === 0) ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                           href="<?php $app->route('/settings'); ?>">
                                            <div class="uk-svg-adjust">
                                                <img class="uk-margin-small-right inherit-color"
                                                     src="<?php $app->base('assets:app/media/icons/settings.svg'); ?>"
                                                     width="40" height="40" data-uk-svg alt="assets"/>
                                            </div>
                                            <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get('Settings'); ?></div>
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if ($app->module("cockpit")->hasaccess('cockpit', 'accounts')) { ?>
                                    <li class="uk-grid-margin">
                                        <a class="uk-display-block uk-panel-box uk-panel-card-hover uk-panel-space <?php echo (strpos($app['route'], '/accounts') === 0) ? 'uk-bg-primary uk-contrast' : ''; ?>"
                                           href="<?php $app->route('/accounts'); ?>">
                                            <div class="uk-svg-adjust">
                                                <img class="uk-margin-small-right inherit-color"
                                                     src="<?php $app->base('assets:app/media/icons/accounts.svg'); ?>"
                                                     width="40" height="40" data-uk-svg alt="assets"/>
                                            </div>
                                            <div class="uk-text-truncate uk-text-small uk-margin-small-top"><?php echo $app("i18n")->get('Accounts'); ?></div>
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php $app->trigger('cockpit.menu.system'); ?>

                            </ul>

                            <?php $app->trigger('cockpit.menu'); ?>

                        </div>

                    </div>

                </div>

                <div class="uk-flex-item-1" riot-mount>
                    <cp-search></cp-search>
                </div>

                <?php if ($app('admin')->data['menu.modules']->count()) { ?>
                    <div class="uk-hidden-small">
                        <ul class="uk-subnav app-modulesbar">
                            <?php foreach ($modules as $item) { ?>
                                <li>
                                    <a class="uk-svg-adjust <?php echo (@$item['active']) ? 'uk-active' : ''; ?>"
                                       href="<?php $app->route($item['route']); ?>"
                                       title="<?php echo $app("i18n")->get($item['label']); ?>"
                                       aria-label="<?php echo $app("i18n")->get($item['label']); ?>"
                                       data-uk-tooltip="offset:10">
                                        <?php if (preg_match('/\.svg$/i', $item['icon'])) { ?>
                                            <img src="<?php echo $app->pathToUrl($item['icon']); ?>"
                                                 alt="<?php echo $app("i18n")->get($item['label']); ?>" data-uk-svg
                                                 width="20px" height="20px"/>
                                        <?php } else { ?>
                                            <img src="<?php echo $app->pathToUrl('assets:app/media/icons/module.svg'); ?>"
                                                 alt="<?php echo $app("i18n")->get($item['label']); ?>" data-uk-svg
                                                 width="20px" height="20px"/>
                                        <?php } ?>

                                        <?php if ($item['active']) { ?>
                                            <span class="uk-text-small uk-margin-small-left uk-text-bolder"><?php echo $app("i18n")->get($item['label']); ?></span>
                                        <?php } ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>

                <div>

                    <div data-uk-dropdown="mode:'click'">

                        <a class="uk-display-block" href="<?php $app->route('/accounts/account'); ?>"
                           style="width:30px;height:30px;" aria-label="<?php echo $app("i18n")->get('Edit account'); ?>"
                           riot-mount>
                            <cp-gravatar size="30"
                                         alt="<?php echo $app["user"]["name"] ? $app["user"]["name"] : $app["user"]["user"]; ?>">
                                <canvas width="30" height="30"></canvas>
                            </cp-gravatar>
                        </a>

                        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-flip">
                            <ul class="uk-nav uk-nav-navbar">
                                <li class="uk-nav-header uk-text-truncate"><?php echo $app["user"]["name"] ? $app["user"]["name"] : $app["user"]["user"]; ?></li>
                                <li>
                                    <a href="<?php $app->route('/accounts/account'); ?>"><?php echo $app("i18n")->get('Account'); ?></a>
                                </li>
                                <li class="uk-nav-divider"></li>
                                <li class="uk-nav-item-danger"><a
                                            href="<?php $app->route('/auth/logout'); ?>"><?php echo $app("i18n")->get('Logout'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="app-main" role="main">
    <div class="uk-container uk-container-center">
        <?php $app->trigger('app.layout.contentbefore'); ?>
        <?php echo $content_for_layout; ?>
        <?php $app->trigger('app.layout.contentafter'); ?>
    </div>
</div>

<?php $app->trigger('app.layout.footer'); ?>
<?php $app->block('app.layout.footer'); ?>

<!-- RIOT COMPONENTS -->
<?php foreach ($app('admin')->data['components'] as $component) { ?>
    <script type="riot/tag"
            src="<?php $app->base($component); ?>?nc=<?php echo $app['debug'] ? time() : $app['cockpit/version']; ?>"></script>
<?php } ?>

<?php foreach ($app('fs')->ls('*.tag', '#config:tags') as $component) { ?>
    <script type="riot/tag"
            src="<?php echo $app->pathToUrl('#config:tags/' . $component->getBasename()); ?>?nc=<?php echo $app['debug'] ? time() : $app['cockpit/version']; ?>"></script>
<?php } ?>

<?php echo $app->view('cockpit:views/_partials/logincheck.php'); ?>

</body>
</html>
