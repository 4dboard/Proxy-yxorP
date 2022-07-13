<li class="uk-grid-margin" riot-view>
    <div class="uk-display-block uk-panel-box uk-panel-card-hover uk-panel-space">
        <div style="height:40px;line-height:40px;">

            <div class="uk-form-switch uk-display-inline">

                <input ref="check" type="checkbox" id="darkmode_toggle" checked="{ darkmode }"
                       onchange="{ toggleDarkmode }"/>
                <label for="darkmode_toggle" style="padding-left:3em;"></label>

            </div>
        </div>
        <div class="uk-text-truncate uk-text-small uk-margin-small-top">@lang('Dark mode')</div>
    </div>

    <script type="view/script">

        this.darkmode   = {{ json_encode($on) }};
        this.style_url  = {{ json_encode($style_url) }};
        this.script_url = {{ json_encode($script_url) }};

        this.on('mount', function() {
            this.update();
        });

        this.on('update', function() {

            var style = App.$('link[href*="DarkMode/assets/style.min.css"]').get(0);

            if (this.darkmode && typeof style == 'undefined') {
                App.assets.require(this.style_url);
                App.assets.require(this.script_url);
            }
            else if (this.darkmode && typeof style != 'undefined') {
                style.disabled = false;
            }
            else if (!this.darkmode && typeof style != 'undefined') {
                style.disabled = true;
            }

        });

        toggleDarkmode(e) {
            this.darkmode = e.target.checked;
            App.request('/darkmode/toggle').then(function(){

            });
        }




    </script>

</li>
