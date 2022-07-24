<?php

// docs and list of all options: http://bgrins.github.io/spectrum/
$spectrum = [
    'preferredFormat' => 'hex',
    'showPaletteOnly' => true,
    'togglePaletteOnly' => true,
    'togglePaletteMoreText' => $app('i18n')->get('more'),
    'togglePaletteLessText' => $app('i18n')->get('less'),
    'palette' => !empty($colors) ? $colors : [
        '#D8334A',
        '#FFCE54',
        '#A0D468',
        '#48CFAD',
        '#4FC1E9',
        '#5D9CEC',
        '#AC92EC',
        '#EC87C0',
        '#BAA286',
        '#8E8271',
        '#3C3B3D'
    ],
];

$_spectrum = json_encode($spectrum);
// $_colors   = \json_encode($colors);

// I commented the color tag field out, because there is no need for it with the colour picker, but I leave the code here if I decide to enable it in the future.

?>

<div class="uk-margin">
    <label class="uk-text-small">{ App.i18n.get('Custom color') }</label>
    <field-color bind="{{ $bind }}.color" spectrum='{ {{ $_spectrum }} }'></field-color>
    {{--
    @if(!empty($colors))
    <field-colortag bind="{{ $bind }}.color" colors='{ {{ $_colors }} }'></field-colortag>
    @endif
    --}}
</div>
