<div>
    <ul class="uk-breadcrumb">
        <li class="uk-active"><span>@lang('Finder')</span></li>
    </ul>
</div>

<div riot-view>
    <cp-finder root="{{ $app->module("yxorp")->getGroupVar("media.path", '/') }}"></cp-finder>
</div>
