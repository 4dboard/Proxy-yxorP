
App.$(document).on('init-wysiwyg-editor', function(e, editor) {

    if (typeof editor.settings.content_style == 'undefined') {
        editor.settings.content_style = '';
    }

    editor.settings.content_style += 'body {'
        + 'background-color: #111;'
        + 'color: #fafafa;'
        + 'line-height: 1.5em;'
        + '}';

});

App.assets.require('/assets/lib/codemirror/theme/ayu-dark.css').then(function() {

});

App.$(document).on('init-html-editor', function(e, editor) {
    editor.editor.setOption('theme', 'ayu-dark');
});
