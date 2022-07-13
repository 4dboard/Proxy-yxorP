<style>
    .autosave-container {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100vw;
        height: 100vh;
        z-index: 99999;
        background-color: rgba(255, 255, 255, 0.9);
    }
</style>

<div if="{ autosaved }" class="autosave-container">
    <div class="uk-width-medium-1-2 uk-viewport-height-1-2 uk-container-center uk-flex uk-flex-center uk-flex-middle">
        <div class="uk-animation-fade uk-width-1-1">
            <p class="uk-h2">@lang('There is a autosaved version for this resource!')</p>

            <div class="uk-panel-box uk-panel-card uk-margin-top">
                <strong class="uk-text-uppercase uk-text-small">@lang('Autosaved by') { autosaved.user.name } @lang(' on
                    ') { autosaved.date }</strong>
                <div class="uk-margin-top uk-flex">
                    <div>
                        <cp-gravatar size="40" alt="{ autosaved.user.name }"></cp-gravatar>
                    </div>
                    <div class="uk-margin-left">
                        <span>{ autosaved.user.name }</span><br/>
                        <span class="uk-text-muted">{ autosaved.user.email }</span><br/>
                    </div>
                </div>
                <div class="uk-margin-large-top">
                    <strong>@lang('Do you want to restore the autosaved version or discard it?')</strong><br/>
                    <span class="uk-text-muted">@lang('If you discard the autosaved version will be deleted.')</span>
                </div>

                <div class="uk-margin-top uk-text-center">
                    <hr>
                    <div>
                        <button class="uk-button uk-button-large uk-button-primary"
                                onclick="{ () => restore(resourceType) }">
                            <i class="uk-icon-refresh"></i> @lang('Restore')
                        </button>
                        <button class="uk-button uk-button-large uk-button-danger uk-margin-left" onclick="{ discard }">
                            <i class="uk-icon-trash"></i> @lang('Discard')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    this.resourceType = {
    {
        json_encode($type)
    }
    }
    ;

    this.restore = function (type) {
        if (type === 'collection') {
            _.extend($this.entry, $this.autosaved.data);
        } else if (type === 'singleton') {
            _.extend($this.data, $this.autosaved.data);
        }
        $this.update();

        window.setTimeout(function () {
            var elements = App.$('cp-field[type=wysiwyg]');
            elements.each(function (key, el) {
                var id = App.$(el).find('textarea').first().attr('id');
                var content = el.$getValue();
                if (content) {
                    tinyMCE.get(id).setContent(content);
                }
            });
            App.callmodule('autosave:remove', $this.autosaved.id, 'access');
            $this.autosaved = null;
            $this.update();
            App.ui.notify('Autosaved resource restored with success', 'success');
        }, 200);
    }

    this.discard = function () {
        App.callmodule('autosave:remove', this.autosaved.id, 'access').then(function (data) {
            $this.autosaved = null;
            $this.isReady = true;
            $this.update();
            App.ui.notify('Autosaved resource discarded with success', 'success');
        }).catch(function (e) {
            App.ui.notify('Error during autosave delete operation', 'danger');
        });
    }
</script>
