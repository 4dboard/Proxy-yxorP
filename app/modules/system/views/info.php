<kiss-container class="kiss-margin" size="medium">

    <ul class="kiss-breadcrumbs">
        <li><a href="<?=$this->route('/system')?>"><?=t('Settings')?></a></li>
    </ul>

    <div class="kiss-margin-large-bottom kiss-flex kiss-flex-middle">
        <div class="kiss-size-4 kiss-flex-1"><strong><?=t('System')?></strong></div>
    </div>

    <vue-view>
        <template>

            <kiss-card class="kiss-padding kiss-margin-large" theme="bordered contrast shadowed">

                <kiss-row class="kiss-flex-middle">
                    <div><kiss-svg src="<?=$this->baseUrl('app:assets/logo.svg')?>" width="60" height="60"></kiss-svg></div>
                    <div class="kiss-flex-1">
                        <div class="kiss-size-4 kiss-text-bold">yxorP</div>
                        <div class="kiss-text-caption kiss-margin-small kiss-color-muted">
                            Web Proxy Guzzler +  SAAS(y) Cockpit (GUI Dashboard incl.). Feature Rich, Multi-tenancy, Headless, Plug & Play, Augmentation & Content Spinning Web Proxy with Caching - PHP CURL+Composer are Optional. Leveraging SAAS architecture to provide multi-tenancy, multiple threads, caching, and an article spinner service.
                        </div>
                    </div>
                </kiss-row>

            </kiss-card>

            <kiss-tabs>

                <tab class="kiss-margin animated fadeIn" caption="<?=t('App')?>">

                    <div class="kiss-text-caption kiss-text-bold kiss-size-bold kiss-margin">
                        <?=('General')?>
                    </div>

                    <table class="kiss-table">
                        <tbody>
                            <tr>
                                <td width="30%" class="kiss-size-xsmall">Version</td>
                                <td class="kiss-size-small kiss-color-muted"><?=APP_VERSION?></td>
                            </tr>
                            <tr>
                                <td width="30%" class="kiss-size-xsmall">Debug mode</td>
                                <td class="kiss-size-small kiss-color-muted"><span class="kiss-badge kiss-badge-outline kiss-color-<?=($this->retrieve('debug') ? 'success':'danger')?>"><?=($this->retrieve('debug') ? 'Enabled':'Disabled')?></span></td>
                            </tr>
                        </tbody>
                    </table>

                    <?php if (count($addons)): asort($addons); ?>
                    <div class="kiss-text-caption kiss-text-bold kiss-size-bold kiss-margin kiss-margin-large-top">
                        <?=('Loaded Addons')?>
                    </div>

                    <kiss-grid cols="4@m 6@xl" gap="small">
                        <?php

                        foreach($addons as $name): $icon = $this->path("{$name}:icon.svg"); ?>
                        <kiss-card class="kiss-padding kiss-size-small kiss-text-capitalize kiss-flex kiss-flex-middle" theme="shadowed contrast">
                            <div class="kiss-margin-small-right"><kiss-svg src="<?=$this->base($icon ? "{$name}:icon.svg" : 'system:assets/icons/module.svg')?>" width="30" height="30"></kiss-svg></div>
                            <div><?=$name?></div>
                        </kiss-card>
                        <?php endforeach ?>
                    </kiss-grid>
                    <?php endif ?>

                </tab>

                <tab class="kiss-margin animated fadeIn" caption="PHP">

                    <table class="kiss-table">
                        <tbody>
                            <tr><td width="30%">Version</td><td class="kiss-color-muted"><?=phpversion()?></td></tr>
                            <tr><td>PHP SAPI</td><td class="kiss-color-muted"><?=php_sapi_name()?></td></tr>
                            <tr><td>System</td><td class="kiss-color-muted"><?=php_uname()?></td></tr>
                            <tr><td>Extensions</td><td class="kiss-color-muted"><?=implode(', ', get_loaded_extensions())?></td></tr>
                            <tr><td>Max. execution time</td><td class="kiss-color-muted"><?=ini_get('max_execution_time')?> sec.</td></tr>
                            <tr><td>Memory limit</td><td class="kiss-color-muted"><?=ini_get("memory_limit")?></td></tr>
                            <tr><td>Upload file size limit</td><td class="kiss-color-muted"><?=ini_get("upload_max_filesize")?></td></tr>
                            <tr><td>Realpath Cache</td><td class="kiss-color-muted"><?=ini_get("realpath_cache_size")?> / <?=ini_get("realpath_cache_ttl")?> (ttl)</td></tr>
                            <tr><td>System temporary directory</td><td class="kiss-color-muted"><?=sys_get_temp_dir()?></td></tr>
                            <tr>
                                <td>OPCache</td>
                                <td><span class="kiss-badge kiss-badge-outline kiss-color-<?=(ini_get("opcache.enable") ? 'success':'danger')?>"><?=(ini_get("opcache.enable") ? 'Enabled':'Disabled')?></span></td>
                            </tr>

                        </tbody>
                    </table>

                </tab>

                <?php if ($this->helper('acl')->isSuperAdmin()): ?>
                <tab class="kiss-margin animated fadeIn" caption="<?=t('Env')?>">

                    <table class="kiss-table">
                        <tbody>
                            <?php foreach(getenv() as $key => $value): ?>
                            <tr>
                                <td width="30%" class="kiss-size-small"><div class="kiss-size-xsmall"><?=$key?></div></td>
                                <td class="kiss-color-muted"><div class="kiss-size-xsmall"><?=$value?></div></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>

                </tab>
                <?php endif ?>

            </kiss-tabs>

        </template>

        <script type="module">

            export default {

            }
        </script>
    </vue-view>
</kiss-container>
