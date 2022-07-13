<div>

    <div class="uk-panel-box uk-panel-card">

        <div class="uk-panel-box-header uk-flex uk-flex-middle">
            <strong class="uk-panel-box-header-title uk-flex-item-1">
                <?php echo $app("i18n")->get('Singletons'); ?>

                <?php if ($app->module("cockpit")->hasaccess('singletons', 'create')) { ?>
                <a href="<?php $app->route('/singletons/singleton'); ?>" class="uk-icon-plus uk-margin-small-left" title="<?php echo $app("i18n")->get('Create Singleton'); ?>" data-uk-tooltip></a>
                <?php } ?>
            </strong>

            <?php if (count($singletons)) { ?>
            <span class="uk-badge uk-flex uk-flex-middle"><span><?php echo  count($singletons) ; ?></span></span>
            <?php } ?>
        </div>

        <?php if (count($singletons)) { ?>

            <div class="uk-margin">

                <ul class="uk-list uk-list-space uk-margin-top">
                    <?php foreach (array_slice($singletons, 0, count($singletons) > 5 ? 5: count($singletons)) as $singleton) { ?>
                    <li class="uk-text-truncate">
                        <a class="uk-link-muted" href="<?php $app->route('/singletons/form/'.$singleton['name']); ?>">

                            <img class="uk-margin-small-right uk-svg-adjust" src="<?php echo $app->pathToUrl(isset($singleton['icon']) && $singleton['icon'] ? 'assets:app/media/icons/'.$singleton['icon']:'singletons:icon.svg'); ?>" width="18px" alt="icon" data-uk-svg>

                            <?php echo  htmlspecialchars(@$singleton['label'] ? $singleton['label'] : $singleton['name'], ENT_QUOTES, 'UTF-8') ; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>

            </div>

            <?php if (count($singletons) > 5) { ?>
            <div class="uk-panel-box-footer uk-text-center">
                <a class="uk-button uk-button-small uk-button-link" href="<?php $app->route('/singletons'); ?>"><?php echo $app("i18n")->get('Show all'); ?></a>
            </div>
            <?php } ?>

        <?php } else { ?>

            <div class="uk-margin uk-text-center uk-text-muted">

                <p>
                    <img src="<?php echo $app->pathToUrl('singletons:icon.svg'); ?>" width="30" height="30" alt="Singletons" data-uk-svg />
                </p>

                <?php echo $app("i18n")->get('No singletons'); ?>

            </div>

        <?php } ?>

    </div>

</div>
