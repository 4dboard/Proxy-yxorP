<div class="uk-margin" if="{_entry || _data}">
    <label class="uk-text-small">@lang('Last Autosaved')</label>
    <div class="uk-margin-small-top uk-text-small uk-text-muted">
      <div if="{ !isReady }"><i class="uk-icon-spinner uk-icon-spin"></i> Fetching...</div>
      <div if="{ isUpdating }"><i class="uk-icon-spinner uk-icon-spin"></i> Updating...</div>
      <span if="{ !isUpdating && isReady }"><i class="uk-icon-clock-o"></i> { autosavetime || App.i18n.get("Not autosaved yet") }</span>
    </div>
</div>
