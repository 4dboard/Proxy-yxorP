<div>
    <div class="uk-panel uk-panel-space uk-panel-box uk-panel-card">
        <img src="<?php echo $app->pathToUrl('assets:app/media/icons/play-cubis.svg'); ?>" width="50" height="50"
             alt="<?php echo $app("i18n")->get('Bootmanager'); ?>"/>

        <div class="uk-text-truncate uk-margin">
            <?php echo $app("i18n")->get('Bootmanager'); ?>
        </div>
        <a class="uk-position-cover" aria-label="<?php echo $app("i18n")->get('Bootmanager'); ?>"
           href="<?php $app->route('/bootmanager/settings'); ?>"></a>
    </div>
</div>
