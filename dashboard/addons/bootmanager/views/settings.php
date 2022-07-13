<div>
    <ul class="uk-breadcrumb">
        <li><a href="@route('/settings')">@lang('Settings')</a></li>
        <li class="uk-active"><span>@lang('Bootmanager')</span></li>
    </ul>
</div>

<div id="bootmanager" class="uk-width-1-1 uk-width-xlarge-3-4 uk-container-center" riot-view>

    <style>.cursor-move:hover {
            cursor: move;
        }</style>

    <div class="uk-panel uk-text-right">

        <i class="uk-margin-right uk-icon-check-square-o"
           title="{ App.i18n.get('Module is active right now (in UI).') }" data-uk-tooltip></i>

        <i class="uk-margin-right uk-icon-square-o" title="{ App.i18n.get('Module is inactive right now.') }"
           data-uk-tooltip></i>

        <i class="uk-margin-right uk-icon-info-circle"
           title="{ App.i18n.get('To update the active state, reload the page.') }" data-uk-tooltip></i>

        <i class="uk-margin-right uk-icon-lock" title="{ App.i18n.get('Module can\'t be turned off') }"
           data-uk-tooltip></i>

        <i class="uk-margin-right uk-icon-warning"
           title="{ App.i18n.get('If you deactivate core modules, some addons might break the application by calling functions on null.') }"
           data-uk-tooltip></i>

        <i class="uk-margin-right uk-icon-ambulance"
           title="{ App.i18n.get('Module exists in two different folders. You should delete one of them. yxorP prevents itself from breaking, because it doesn\'t load doubled addons, but it\'s hard guess, which one is loaded.') }"
           data-uk-tooltip></i>

        <a href="#help-modal" data-uk-modal><i class="uk-margin-right uk-icon-question-circle"
                                               title="{ App.i18n.get('Open help page') }" onclick="{loadReadme}"
                                               data-uk-tooltip></i></a>

    </div>

    <form class="" onsubmit="{ submit }">

        <div class="uk-tab-center uk-width-1-1">
            <ul class="uk-tab uk-margin-bottom">
                <li class="{ tab==mode && 'uk-active'}" each="{ mode in modes }"><a class="uk-text-capitalize"
                                                                                    onclick="{ toggleTab }"
                                                                                    data-tab="{mode}">{ mode }</a></li>
            </ul>
        </div>

        <div class="uk-width-1-1" each="{ mode in modes }" show="{tab==mode}">
            <div class="uk-grid uk-grid-small">

                <div class="uk-width-small-1-2">

                    <label class="uk-panel uk-margin-top uk-text-uppercase">{ App.i18n.get('Activate Module') }</label>

                    <div class="uk-panel uk-panel-box uk-panel-card uk-width-1-1" each="{ modules, type in types }">

                        <label class="uk-text-uppercase uk-text-muted">{ type }</label>

                        <div class="uk-margin-small" each="{ module, name in modules }">

                            <i class="uk-margin-right uk-text-muted uk-icon-{ module.active ? 'check-square-o' : 'square-o' }"></i>

                            <field-boolean bind="config.{mode}.{module.label}" label="{ module.label }"
                                           if="{ !module.forced }"></field-boolean>

                            <span if="{ module.forced }"><i class="uk-icon-lock uk-margin-small-right"></i>{ module.label }</span>

                            <i class="uk-icon-warning uk-margin-small-left"
                               if="{ type == 'core' && !module.forced && (!config[tab] || !config[tab][module.label]) }"></i>

                            <i class="uk-icon-ambulance uk-margin-small-left" if="{ module.danger }"></i>

                        </div>
                    </div>
                </div>

                <div class="uk-width-small-1-2">

                    <label class="uk-panel uk-margin-top uk-text-uppercase">
                        { App.i18n.get('Boot order') }
                        <a href="#" class="uk-margin-left" onclick="{cleanDisabledModulesFromOrder}"><i
                                    class="uk-icon-trash-o"
                                    title="{ App.i18n.get('Remove disabled modules from list') }"
                                    data-uk-tooltip></i></a>
                    </label>

                    <div class="uk-panel uk-panel-box uk-panel-card uk-width-1-1" data-mode="{mode}"
                         data-uk-sortable="{group:mode,animation:false}">

                        <div class="uk-panel-box uk-panel-card uk-margin-small cursor-move { (config[tab] && !config[tab][module]) ? 'uk-text-muted' : 'uk-text-primary' }"
                             data-module="{module}" each="{ status, module in config[tab] }" if="{ config[tab] }">

                            <span>{ module }</span>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <cp-actionbar>
            <div class="uk-container uk-container-center">
                <button class="uk-button uk-button-large uk-button-primary">@lang('Save')</button>
                <a class="uk-button uk-button-link" href="@route('/settings')">
                    <span>@lang('Cancel')</span>
                </a>
            </div>
        </cp-actionbar>

    </form>

    <div id="help-modal" class="uk-modal">
        <div class="uk-modal-dialog uk-modal-dialog-large">
            <a class="uk-modal-close uk-close"></a>
            <div id="help-content"></div>
        </div>
    </div>

    <script type="view/script">

        var $this = this;

        riot.util.bind(this);

        this.modes = [
            // 'global',
            'ui',
            'api',
            'cli',
            'lib'
        ];

        this.types   = {};
        this.modules = {{ json_encode($modules) }};
        this.config  = {{ json_encode($config) }};
        this.tab     = 'ui';

        this.on('mount', function() {

            // bind global command + save
            Mousetrap.bindGlobal(['command+s', 'ctrl+s'], function(e) {
                e.preventDefault();
                $this.submit();
                return false;
            });

            this.groupModulesByType();

            this.update();

        });

        this.on('update', function() {
            
        });

        // reorder modules
        App.$(function($) {

            var bootmanager = App.$('#bootmanager').on('stop.uk.sortable', function(e) {

                var modules = {},
                    tab = $this.tab;

                bootmanager.find('[data-mode='+tab+'] [data-module]').each(function() {

                    var key = ($(this)).data('module')
                        status = ($this.config[tab] && $this.config[tab].hasOwnProperty(key)) ? $this.config[tab][key] : true;;

                    modules[key] = status;

                });

                $this.config[tab] = modules;

                // It seems, that when firing `update()`, the html gets rendered before
                // `this.config` is updated. The config update works, but in the sortable
                // section, the order is wrong, until switching tabs
                $this.toggleTabUpdateFix('nonsense');
                $this.update();

                $this.toggleTabUpdateFix(tab);
                $this.update();

            });
 
        });

        submit(e) {

            if (e) e.preventDefault();

            App.request('/bootmanager/saveConfig/redirect', {config:this.config}).then(function(data) {

               if (data) {

                   App.ui.notify("Saving successful", "success");

                   if (data.config && data.modules) {
                      $this.config  = data.config;
                      $this.modules = data.modules;

                      $this.groupModulesByType();
                      $this.update();
                      // $this.mount();
                   }

                } else {
                    App.ui.notify("Saving failed.", "danger");
                }

            });

        }
        
        groupModulesByType() {

            // group modules by type
            Object.keys(this.modules).forEach(function(key) {

                var type = $this.modules[key].type;

                if (!$this.types.hasOwnProperty(type)) {
                    $this.types[type] = {};
                }

                $this.types[type][key] = {
                    label:  $this.modules[key].label,
                    active: $this.modules[key].active,
                    forced: $this.modules[key].forced,
                    danger: $this.modules[key].danger || false,
                };

            });
            
        }

        toggleTab(e) {
            this.tab = e.target.getAttribute('data-tab');
        }

        // for sortable update
        toggleTabUpdateFix(tab) {
            this.tab = tab;
        }

        cleanDisabledModulesFromOrder(e) {

            if (e) e.preventDefault();

            var data = this.config[this.tab];

            if (data) {
                for (var i in data) {
                    if (data.hasOwnProperty(i) && data[i] === false) {
                        delete data[i];
                    }
                }
            }

        }

        // load README as help page
        loadReadme(e) {

            var content = document.getElementById('help-content');

            if (content.innerHTML == '') {

                App.request('/bootmanager/getReadme', null, 'html').then(function(data) {
                    content.innerHTML = data;
                });

            }

        }





    </script>

</div>
