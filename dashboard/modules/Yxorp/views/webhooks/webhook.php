<div>
    <ul class="uk-breadcrumb">
        <li><a href="@route('/settings')">@lang('Settings')</a></li>
        <li><a href="@route('/webhooks')">@lang('Webhooks')</a></li>
        <li class="uk-active"><span>@lang('Webhook')</span></li>
    </ul>
</div>


<div riot-view>

    <form class="uk-form" onsubmit="{ submit }">

        <div class="uk-grid">

            <div class="uk-grid-margin uk-width-medium-2-3">

                <div class="uk-form-row">
                    <label class="uk-text-small">@lang('Name')</label>
                    <input class="uk-width-1-1 uk-form-large" type="text" bind="webhook.name" required>
                </div>

                <div class="uk-form-row">
                    <label class="uk-text-small">@lang('Url')</label>
                    <input class="uk-width-1-1 uk-form-large" type="url" bind="webhook.url" required>
                </div>

                <div class="uk-form-row uk-panel uk-panel-box uk-panel-card" show="{advanced}">

                    <span class="uk-badge">Advanced</span>

                    <div class="uk-margin">
                        <label class="uk-text-small uk-text-uppercase">HTTP Basic Auth</label>

                        <div class="uk-margin uk-grid uk-grid-small uk-grid-width-1-2">
                            <div>
                                <div class="uk-form-icon uk-width-1-1 uk-display-block">
                                    <i class="uk-icon-user"></i>
                                    <input class="uk-form-large uk-width-1-1" type="text" bind="webhook.auth.user" placeholder="@lang('User')">
                                </div>
                            </div>
                            <div>
                                <div class="uk-form-icon uk-width-1-1 uk-display-block">
                                    <i class="uk-icon-key"></i>
                                    <input class="uk-form-large uk-width-1-1" type="password" bind="webhook.auth.pass" placeholder="@lang('Password')">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="uk-margin">
                        <label class="uk-text-small uk-text-uppercase">@lang('Custom Headers')</label>

                        <div class="uk-margin uk-panel uk-form">

                            <div class="uk-grid uk-grid-small uk-flex-middle" each="{h,idx in webhook.headers}">
                                <div class="uk-flex-item-1"><input class="uk-width-1-1" type="text" placeholder="Key" bind="webhook.headers[{idx}].k"></div>
                                <div>:</div>
                                <div class="uk-flex-item-1"><input class="uk-width-1-1" type="text" placeholder="Value" bind="webhook.headers[{idx}].v"></div>
                                <div><a onclick="{ this.parent.removeHeader}"><i class="uk-text-danger uk-icon-trash"></i></a></div>
                            </div>

                            <div class="uk-margin uk-text-center {!webhook.headers.length && 'uk-placeholder'}">
                                <a class="uk-button uk-button-success" onclick="{ addHeader }"><i class="uk-icon-plus-circle"></i><span class="uk-margin-small-left" show="{!webhook.headers.length}">@lang('Add custom header')</span></a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="uk-form-row">
                    <a class="uk-button uk-button-small" onclick="{ toggleAdvance.bind(this, true) }" show="{!advanced}"><i class="uk-icon-cog"></i> @lang('Advanced Options')</a>
                    <a class="uk-button uk-button-small" onclick="{ toggleAdvance.bind(this, false) }" show="{advanced}"><i class="uk-icon-cog"></i> @lang('Hide')</a>
                </div>

                <div class="uk-form-row">
                    <label class="uk-text-small">@lang('Events')</label>

                    <div class="uk-panel uk-panel-box uk-panel-card uk-margin" if="{!webhook.events.length}">
                        @lang('You have not assign any event yet.')
                    </div>

                    <table class="uk-table uk-table-tabbed uk-table-striped" show="{webhook.events.length}">
                        <thead>
                            <tr>
                                <th>@lang('Event')</th>
                                <th width="20"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr each="{event,idx in webhook.events}">
                                <td>
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="uk-icon-bolt uk-text-primary"></i>
                                        </div>
                                        <div class="uk-flex-item-1">
                                            <input class="uk-width-1-1 uk-form-blank" type="text" bind="webhook.events[{idx}]">
                                        </div>
                                    </div>

                                 </td>
                                <td><a class="uk-text-danger" onclick="{ removeEvent }"><i class="uk-icon-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="uk-form">
                        <div class="uk-form-icon uk-autocomplete uk-width-1-1 uk-display-block" ref="eventAutocomplete">
                            <i class="uk-icon-bolt"></i>
                            <input class="uk-width-1-1 uk-form-large" type="text" ref="event" placeholder="@lang('Add event...')">
                            <div class="uk-dropdown uk-dropdown-scrollable uk-width-1-1" aria-expanded="true"></div>
                        </div>
                    </div>

                </div>

                <cp-actionbar>
                    <div class="uk-container uk-container-center">
                        <button class="uk-button uk-button-large uk-button-primary">@lang('Save')</button>
                        <a class="uk-button uk-button-large uk-button-link" href="@route('/webhooks')">@lang('Cancel')</a>
                    </div>
                </cp-actionbar>

            </div>

            <div class="uk-grid-margin uk-width-medium-1-3">

                <div class="uk-panel">

                    <div class="uk-margin">
                        <label class="uk-text-small">@lang('Status')</label>
                        <div class="uk-margin-small-top">
                            <field-boolean bind="webhook.active" label="false"></field-boolean>
                        </div>
                    </div>

                    <div class="uk-margin" if="{webhook._id}">
                        <label class="uk-text-small">@lang('Last Modified')</label>
                        <div class="uk-margin-small-top uk-text-muted"><i class="uk-icon-calendar uk-margin-small-right"></i> {  App.Utils.dateformat( new Date( 1000 * webhook._modified )) }</div>
                    </div>

                </div>

            </div>
        </div>

    </form>


    <script type="view/script">

        var $this = this;

        this.mixin(RiotBindMixin);

        this.webhook  = {{ json_encode($webhook) }};
        this.advanced = false;
        this.triggers = {{ json_encode($triggers) }};

        this.on('mount', function(){

            var src = this.triggers.map(function(trigger) {
                return { value: trigger }
            });

            UIkit.autocomplete(App.$(this.refs.eventAutocomplete), {source: src}).on('selectitem.uk.autocomplete', function(e, data) {
                $this.webhook.events.push(data.value.trim());

                $this.webhook.events = _.uniq($this.webhook.events).sort();

                setTimeout(function() {
                    $this.refs.event.value = '';
                }, 10);

                $this.update();
            });

            App.$(this.refs.event).on('keydown', function(e) {

                if (e.keyCode == 13 && $this.refs.event.value.trim()) {
                    e.preventDefault();

                    $this.webhook.events.push($this.refs.event.value.trim());
                    $this.webhook.events = _.uniq($this.webhook.events).sort();

                    $this.refs.event.value = '';
                    $this.update();

                    return false;
                }

            });

            // bind global command + save
            Mousetrap.bindGlobal(['command+s', 'ctrl+s'], function(e) {
                e.preventDefault();
                $this.submit();
                return false;
            });
        });

        removeEvent(evt) {
            this.webhook.events.splice(evt.item.idx, 1);
        }

        submit(e) {

            if(e) e.preventDefault();

            App.request('/webhooks/save', {webhook: this.webhook}).then(function(data) {

                if (data) {

                    App.ui.notify("Saving successful", "success");
                    $this.webhook = data;
                    $this.update();

                } else {
                    App.ui.notify("Saving failed.", "danger");
                }
            });
        }

        addHeader() {
            this.webhook.headers.push({k:'',v:''});
        }

        removeHeader(evt) {
            this.webhook.headers.splice(evt.item.idx, 1);
        }

        toggleAdvance(status) {
            this.advanced = status;
        }


    </script>

</div>
