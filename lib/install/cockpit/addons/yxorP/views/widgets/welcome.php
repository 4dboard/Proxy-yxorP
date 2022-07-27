
<div>

    <div class="uk-flex">
        <div riot-mount>
            <cp-gravatar email="{{ $app['user']['email'] }}" size="55" alt="{{ $app["user"]["name"] ? $app["user"]["name"] : $app["user"]["user"] }}"></cp-gravatar>
        </div>
        <div class="uk-flex-item-1 uk-margin-left">
            <h2 class="uk-margin-remove">@lang('Welcome back')</h2>
            <div class="uk-h3 uk-text-bold uk-margin-small-top">
                {{ $app['user/name'] ? $app['user/name'] : $app['user/user'] }}
            </div>
        </div>
    </div>

    <hr>

    <div class="uk-flex uk-flex-middle">
        <span class="uk-badge uk-margin-small-right">{{ $app['user/group'] }}</span>
        <a class="uk-button uk-button-link uk-link-muted" href="@route('/accounts/account')"><img class="uk-margin-small-right inherit-color" src="@base('assets:app/media/icons/settings.svg')" width="20" height="20" data-uk-svg /> @lang('Account')</a>
    </div>

</div>
