
<div class="uk-container-center">

    @trigger('admin.dashboard.header')

</div>


<div id="dashboard">

    <div class="">
        @trigger('admin.dashboard.top')
    </div>

    <div class="uk-grid uk-margin" data-uk-grid-margin>

        @trigger('admin.dashboardgrid.widgets.top', compact('areas'))

        <div class="uk-width-medium-1-2" data-area="main">
            <div class="uk-sortable uk-grid uk-grid-gutter uk-grid-width-1-1" data-uk-sortable="{group:'dashboard',animation:false,handleClass:'dashboard-handle'}">
              @if(isset($areas['main']))
                @foreach($areas['main'] as $widget)
                <div data-widget="{{ $widget['name'] }}">
                    <i class="dashboard-handle uk-icon-arrows"></i>
                    {{ $widget['content'] }}
                </div>
                @endforeach
              @endif
            </div>
        </div>
        <div class="uk-width-medium-1-4" data-area="aside-left">
            <div class="uk-sortable uk-grid uk-grid-gutter uk-grid-width-medium-1-1" data-uk-sortable="{group:'dashboard',animation:false,handleClass:'dashboard-handle'}">
              @if(isset($areas['aside-left']))
                @foreach($areas['aside-left'] as $widget)
                <div data-widget="{{ $widget['name'] }}">
                    <i class="dashboard-handle uk-icon-arrows"></i>
                    {{ $widget['content'] }}
                </div>
                @endforeach
              @endif
            </div>
        </div>
        <div class="uk-width-medium-1-4" data-area="aside-right">
            <div class="uk-sortable uk-grid uk-grid-gutter uk-grid-width-medium-1-1" data-uk-sortable="{group:'dashboard',animation:false,handleClass:'dashboard-handle'}">
              @if(isset($areas['aside-right']))
                @foreach($areas['aside-right'] as $widget)
                <div data-widget="{{ $widget['name'] }}">
                    <i class="dashboard-handle uk-icon-arrows"></i>
                    {{ $widget['content'] }}
                </div>
                @endforeach
              @endif
            </div>
        </div>
    </div>

    @trigger('admin.dashboardgrid.widgets.bottom', compact('areas'))

    <div class="uk-grid uk-margin" data-uk-grid-margin>

        <div class="dashboard-trash uk-width-1-1" data-area="trash">

            <div class="uk-grid" data-uk-grid-margin>

                <div class="uk-width-9-10">
                    <div class="uk-sortable uk-grid uk-grid-gutter uk-width-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-5" data-uk-sortable="{group:'dashboard',animation:false,handleClass:'dashboard-handle'}">
                      @if(isset($areas['trash']))
                        @foreach($areas['trash'] as $widget)
                        <div data-widget="{{ $widget['name'] }}">
                            <i class="dashboard-handle uk-icon-arrows"></i>
                            {{ $widget['content'] }}
                        </div>
                        @endforeach
                      @endif
                    </div>
                </div>

                <div class="uk-width-1-10 uk-text-right">
                    <a id="toggleTrash" class="uk-text-muted" href="#" title="@lang('Show/Hide widgets in trash')" data-uk-tooltip><i class="uk-icon-trash uk-icon-small"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class="uk-margin">
        @trigger('admin.dashboard.bottom')
    </div>

</div>

<style>

    .dashboard-display-grid:nth-child(even) {
        background-color: rgba(0,0,0,.1);
    }
    .dashboard-display-grid:nth-child(odd) {
        background-color: rgba(0,0,0,.05);
    }
    .uk-sortable-item:not(.uk-sortable-placeholder) > div {
        box-shadow: 0 34px rgba(0,90,255,.2), 0 -34px rgba(0,90,255,.2), 34px 0 rgba(0,90,255,.2), -34px 0 rgba(0,90,255,.2);
    }
    #dashboard .uk-sortable-empty {
        min-height: unset;
    }
    .dashboard-display-grid, #dashboard .dashboard-display-grid .uk-sortable-empty {
        min-height: 40px;
    }
    .dashboard-trash [data-widget] {
        display: none;
    }
    .dashboard-trash.dashboard-display-grid [data-widget], .dashboard-trash.trash-open [data-widget] {
        opacity: .5;
        display: block;
    }
    #dashboard [data-widget] {
        position: relative;
    }
    #dashboard .dashboard-handle {
        position: absolute;
        top: -.7em;
        left: 50%;
        display: none;
        z-index: 1;
        padding: .2em;
        color: #dfdfdf;
    }
    #dashboard .dashboard-handle:hover {
        font-size: 1.2em;
        background-color: #fff;
        color: #222;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: move;
        margin-left: -.1em;
    }
    #dashboard [data-widget]:hover .dashboard-handle {
        display: block;
    }

</style>

<script>

    App.$(function($){

        App.$('#toggleTrash').get(0).on('click', function(e) {

            e.preventDefault();

            $(this).toggleClass('uk-text-muted');
            App.$('.dashboard-trash').toggleClass('trash-open');

        });

        var data, dashboard = App.$('#dashboard').on({

            'start.uk.sortable': function(e){

                dashboard.find('[data-area]').each(function(){
                    this.classList.add('dashboard-display-grid');
                });

            },
            'stop.uk.sortable': function(e){

                data = {};

                dashboard.find('[data-area]').each(function(){
                    this.classList.remove('dashboard-display-grid');
                    
                    var $a      = $(this),
                        area    = $a.data('area'),
                        widgets = $a.find('[data-widget]');

                    widgets.each(function(prio){
                        data[this.getAttribute('data-widget')] = {
                            area: area,
                            prio: prio + 1
                        };
                    });
                });

                App.request('/cockpit/savedashboard',{widgets:data}).then(function(){

                });
            }
        });

    });

</script>
