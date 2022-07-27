
<div>

@if($app('admin')->data['menu.modules']->count())

{%
    $modules = $app('admin')->data['menu.modules']->getArrayCopy();

    usort($modules, function($a, $b) {
        return mb_strtolower($a['label']) <=> mb_strtolower($b['label']);
    });    
%}
<ul class="uk-grid uk-grid-match uk-grid-small uk-grid-gutter uk-text-center" data-uk-grid-margin>

    @foreach($modules as $item)
    <li class="uk-width-1-{{$columns}}" data-route="{{ $item['route'] }}">
        <a class="uk-display-block uk-panel-box uk-panel-card-hover" href="@route($item['route'])">
            <div class="uk-svg-adjust">
                @if(preg_match('/\.svg$/i', $item['icon']))
                <img src="@url($item['icon'])" alt="@lang($item['label'])" data-uk-svg width="40" height="40" />
                @else
                <img src="@url('assets:app/media/icons/module.svg')" alt="@lang($item['label'])" data-uk-svg width="40" height="40" />
                @endif
            </div>
            <div class="uk-text-truncate uk-text-small uk-margin-top">@lang($item['label'])</div>
        </a>
    </li>
    @endforeach

</ul>
@endif

</div>
