let ready = new Promise(function (resolve) {

    App.assets.require([
        'app:assets/vendor/tinymce/tinymce.min.js'
    ], function () {
        resolve(window.tinymce);
    });
});

let instanceCount = 0;

export default {

    _meta: {
        label: 'Wysiwyg',
        info: 'Rich text field',
        icon: 'system:assets/icons/wysiwyg.svg',
        render(value, field, context) {
            return App.utils.truncate(App.utils.stripTags(value), context == 'table-cell' ? 20 : 50);
        }
    },

    data() {
        return {
            id: ++instanceCount
        }
    },

    props: {
        modelValue: {
            type: String,
            default: false
        },

        tinymce: {
            type: Object,
            default: {}
        }
    },

    watch: {
        modelValue() {
            if (this.editor && !this.editor.isFocused) {
                this.editor.setContent(this.modelValue || '');
            }
        }
    },

    beforeUnmount() {

        if (this.editor) {
            tinymce.remove(this.editor)
        }
    },

    mounted() {

        ready.then(() => {

            let opts = Object.assign({
                deprecation_warnings: false,
                target: this.$el.querySelector('.wysiwyg-container'),
                plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
                editimage_cors_hosts: ['picsum.photos'],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                image_advtab: true,
                height: 400,
                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                contextmenu: 'link image table',
                skin: 'oxide-dark',
                content_css: 'dark',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
                relative_urls: false,
                paste_as_text: true
            }, this.tinymce || {});

            opts.content_style += `
                html,body {
                    background-color: ${getComputedStyle(document.documentElement).getPropertyValue('background-color')};
                    color: ${getComputedStyle(document.documentElement).getPropertyValue('color')};
                }
                a { color: ${getComputedStyle(document.documentElement).getPropertyValue('--kiss-color-primary')};}
            `;

            opts.setup = (editor) => {

                this.editor = editor;

                editor.on('init', e => {

                    editor.setContent(this.modelValue || '');

                    editor.on('change input undo redo ExecCommand', e => {
                        this.$emit('update:modelValue', editor.getContent())
                    });

                    editor.on('focus blur', e => {
                        editor.isFocused = !editor.isFocused;
                        this.$el.dispatchEvent(new Event(editor.isFocused ? 'focusin' : 'focusout', {
                            bubbles: true,
                            cancelable: true
                        }));
                    });
                });

                App.trigger('field-wysiwyg-setup', [editor]);

                let observer = new MutationObserver(mutations => {

                    if (!document.body.contains(this.$el) && this.editor) {
                        tinymce.remove(this.editor)
                        observer.disconnect();
                    }
                });

                observer.observe(document.body, {childList: true, subtree: true});
            };

            App.trigger('field-wysiwyg-init', [opts]);

            tinymce.init(opts);

        });
    },

    methods: {
        update() {
            this.$emit('update:modelValue', this.editor.getContent())
        }
    },

    template: /*html*/`
        <div field="wysiwyg">
            <div :id="'mce-field-'+id" class="wysiwyg-container"></div>
        </div>
    `
}
