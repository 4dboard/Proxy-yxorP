<span id="language_buttons" class="uk-float-right" if="{ languages.length }">

    <button class="uk-button uk-button-large { (!lang || lang == '') ? 'uk-button-success' : 'uk-text-muted' }" value=""
            onclick="{ updateLanguage }">
        { languages.length < 3 ? App.$data.languageDefaultLabel : '{{ $app('i18n')->locale }}' }
    </button><button
            class="uk-button uk-button-large uk-margin-small-left { lang == language.code ? 'uk-button-success' : 'uk-text-muted' }"
            each="{ language,idx in languages }" value="{ language.code }" onclick="{ updateLanguage }">
        { languages.length < 3 ? language.label : language.code }
    </button>

</span>

<script>

    updateLanguage = function (e) {

        if (e) e.preventDefault();

        $this.lang = e.target.value;
        App.session.set('collections.entry.' + this.collection._id + '.lang', e.target.value);
    }

    this.on('mount', function () {
        App.$('#language_buttons').appendTo('cp-actionbar > div');
    });

</script>
