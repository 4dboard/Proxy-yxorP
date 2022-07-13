<field-gallery>

    <div ref="uploadprogress" class="uk-margin uk-hidden">
        <div class="uk-progress">
            <div ref="progressbar" class="uk-progress-bar" style="width: 0%;">&nbsp;</div>
        </div>
    </div>

    <div ref="panel">

        <div ref="imagescontainer" class="uk-sortable uk-grid uk-grid-match uk-grid-small uk-flex-center uk-grid-gutter uk-grid-width-medium-1-4" show="{ images && images.length }">
            <div data-idx="{ idx }" each="{ img,idx in images }">
                <div class="uk-panel uk-panel-box uk-panel-thumbnail uk-panel-framed uk-visible-hover">

                        <div class="uk-bg-transparent-pattern uk-position-relative" style="min-height:120px;">
                            <canvas class="uk-responsive-width" width="200" height="150"></canvas>
                            <div class="uk-position-absolute uk-position-cover uk-flex uk-flex-middle">
                                <div class="uk-width-1-1 uk-text-center">
                                    <cp-thumbnail src="{ img.path.match(/^(http\:|https\:|\/\/)/) ? img.path : (SITE_URL+'/'+img.path.replace(/^\//, '')) }" height="120"></cp-thumbnail>
                                </div>
                            </div>
                        </div>

                        <div class="uk-invisible uk-margin-top">
                            <ul class="uk-grid uk-grid-small uk-flex-center uk-text-small">
                                <li data-uk-dropdown="pos:'bottom-center'">
                                    <a class="uk-text-muted" onclick="{ parent.selectAsset }" title="{ App.i18n.get('Select image') }" data-uk-tooltip><i class="uk-icon-image"></i></a>
                                    <div class="uk-dropdown">
                                        <ul class="uk-nav uk-nav-dropdown uk-dropdown-close">
                                            <li class="uk-nav-header">{ App.i18n.get('Source') }</li>
                                            <li><a onclick="{ parent.selectAsset }">{ App.i18n.get('Select Asset') }</a></li>
                                            <li show="{App.$data.acl.finder}"><a onclick="{ parent.selectImage }">{ App.i18n.get('Select Image') }</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="uk-text-muted" onclick="{ parent.showMeta }" title="{ App.i18n.get('Edit meta data') }" data-uk-tooltip><i class="uk-icon-cog"></i></a></li>
                                <li><a class="uk-text-muted" href="{ img.path.match(/^(http\:|https\:|\/\/)/) ? img.path : (SITE_URL+'/'+img.path.replace(/^\//, '')) }" data-uk-lightbox="type:'image'" title="{ App.i18n.get('Full size') }" data-uk-tooltip><i class="uk-icon-eye"></i></a></li>
                                <li><a class="uk-text-danger" onclick="{ parent.remove }" title="{ App.i18n.get('Remove image') }" data-uk-tooltip><i class="uk-icon-trash-o"></i></a></li>
                            </ul>
                        </div>

                </div>

            </div>
        </div>

        <div class="uk-text-center {images && images.length ? 'uk-margin-top':'' }">
            <div class="uk-text-muted" if="{ images && !images.length }">
                <img class="uk-svg-adjust" riot-src="{ App.base('/assets/app/media/icons/gallery.svg') }" width="100" data-uk-svg>
                <p>{ App.i18n.get('Gallery is empty') }</p>
            </div>
            <div class="uk-display-inline-block uk-position-relative" data-uk-dropdown="pos:'bottom-center'">
                <a class="uk-text-large" onclick="{ selectAssetsImages }">
                    <i class="uk-icon-plus-circle" title="{ App.i18n.get('Add images') }" data-uk-tooltip></i>
                </a>
                <div class="uk-dropdown" if="{App.$data.acl.finder}">
                    <ul class="uk-nav uk-nav-dropdown uk-text-left uk-dropdown-close">
                        <li class="uk-nav-header">{ App.i18n.get('Select') }</li>
                        <li><a onclick="{ selectAssetsImages }">Asset</a></li>
                        <li><a onclick="{ selectimages }">{App.i18n.get('Finder')}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="uk-modal uk-sortable-nodrag" ref="modalmeta">
            <div class="uk-modal-dialog">

                <div class="uk-modal-header"><h3>{ App.i18n.get('Image Meta') }</h3></div>

                <div class="uk-grid uk-grid-match uk-grid-gutter" if="{image}">

                    <div class="uk-grid-margin uk-width-medium-{field.width}" each="{field,name in meta}" no-reorder>

                        <div class="uk-panel">

                            <label class="uk-text-small uk-text-bold">
                                <i class="uk-icon-pencil-square uk-margin-small-right"></i> { field.label || name }
                            </label>

                            <div class="uk-margin uk-text-small uk-text-muted">
                                { field.info || ' ' }
                            </div>

                            <div class="uk-margin">
                                <cp-field type="{ field.type || 'text' }" bind="image.meta['{name}']" opts="{ field.options || {} }"></cp-field>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="uk-modal-footer uk-text-right"><button class="uk-button uk-button-large uk-button-link uk-modal-close">{ App.i18n.get('Close') }</button></div>

            </div>
        </div>

    </div>

    <script>

        riot.util.bind(this);

        var $this = this;

        this.images = [];
        this._field = null;
        this.meta = {
            title: {
                type: 'text',
                label: 'Title'
            }
        };

        this.on('mount', function() {

            this.meta = App.$.extend(this.meta, opts.meta || {});

            UIkit.sortable(this.refs.imagescontainer, {

                animation: false

            }).element.on('change.uk.sortable', function(e, sortable, ele) {

                ele = App.$(ele);

                var images = $this.images,
                    cidx   = ele.index(),
                    oidx   = ele.data('idx');

                images.splice(cidx, 0, images.splice(oidx, 1)[0]);

                // hack to force complete images rebuild
                App.$($this.refs.panel).css('height', App.$($this.refs.panel).height());

                $this.images = [];
                $this.update();

                setTimeout(function() {
                    $this.images = images;
                    $this.$setValue(images);
                    $this.update();

                    setTimeout(function(){
                        $this.refs.panel.style.height = '';
                        $this.update();
                    }, 30)
                }, 10);

            });

            // handle uploads

            var _uploads = [];

            App.assets.require(['/assets/lib/uikit/js/components/upload.js'], function() {

                UIkit.uploadDrop($this.root, {

                    action: App.route('/assetsmanager/upload'),
                    type: 'json',
                    allow : '*.(jpg|jpeg|gif|png|webp)',
                    beforeAll: function() {
                        _uploads = [];
                    },
                    loadstart: function() {
                        $this.refs.uploadprogress.classList.remove('uk-hidden');
                    },
                    progress: function(percent) {

                        percent = Math.ceil(percent) + '%';

                        $this.refs.progressbar.innerHTML   = '<span>'+percent+'</span>';
                        $this.refs.progressbar.style.width = percent;
                    },

                    complete: function(response) {

                        if (response && response.failed && response.failed.length) {
                            App.ui.notify("File(s) failed to upload.", "danger");
                        }

                        if (response && Array.isArray(response.assets) && response.assets.length) {

                            response.assets.forEach(function(asset){

                                if (asset.mime.match(/^image\//)) {
                                    _uploads.push({
                                        meta:{title:'', asset: asset._id},
                                        path: ASSETS_URL.replace(SITE_URL, '')+asset.path
                                    });
                                }
                            });
                        }

                        if (!response) {
                            App.ui.notify("Something went wrong.", "danger");
                        }
                    },

                    allcomplete: function(response) {

                        $this.refs.uploadprogress.classList.add('uk-hidden');

                        if (Array.isArray(_uploads) && _uploads.length) {

                            $this.$setValue($this.images.concat(_uploads));
                        }
                    }
                });
            });

        });

        this.$updateValue = function(value, field) {

            if (!Array.isArray(value)) {
                value = [];
            }

            if (JSON.stringify(this.images) !== JSON.stringify(value)) {
                this.images = value;
                this.update();
            }

        }.bind(this);

        this.$initBind = function() {
            this.root.$value = this.images;
        };

        this.on('bindingupdated', function() {
            $this.$setValue(this.images);
        });

        showMeta(e) {

            this.image = this.images[e.item.idx];

            setTimeout(function() {
                UIkit.modal($this.refs.modalmeta, {modal:false}).show().on('close.uk.modal', function(){
                    $this.image = null;
                });
            }, 50)
        }

        selectimages() {

            App.media.select(function(selected) {

                var images = [];

                selected.forEach(function(path){
                    images.push({meta:{title:''}, path:path});
                });

                $this.$setValue($this.images.concat(images));

            }, { typefilter:'image', pattern: '*.jpg|*.jpeg|*.png|*.gif|*.svg|*.webp' });

        }

        selectAssetsImages() {

            App.assets.select(function(assets){

                if (Array.isArray(assets)) {

                    var images = [];

                    assets.forEach(function(asset){

                        if (asset.mime.match(/^image\//)) {
                            images.push({
                                meta:{title:'', asset: asset._id},
                                path: ASSETS_URL.replace(SITE_URL, '')+asset.path
                            });
                        }
                    });

                    $this.$setValue($this.images.concat(images));
                }
                
            }, {typefilter: 'image'});
        }

        selectImage(e) {

            var image = e.item.img;

            App.media.select(function(selected) {

                image.path = selected[0];
                $this.$setValue($this.images);
                $this.update();

            }, { typefilter:'image', pattern: '*.jpg|*.jpeg|*.png|*.gif|*.svg|*.webp' });
        }

        selectAsset(e) {

            var image = e.item.img;

            App.assets.select(function(assets){

                if (Array.isArray(assets) && assets[0]) {

                    image.path = ASSETS_URL.replace(SITE_URL, '')+assets[0].path;
                    $this.$setValue($this.images);
                    $this.update();
                }
            });
        }

        remove(e) {
            this.images.splice(e.item.idx, 1);
            this.$setValue(this.images);
        }

    </script>

</field-gallery>
