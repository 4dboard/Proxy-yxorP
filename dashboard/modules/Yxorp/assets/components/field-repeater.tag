<field-repeater>

    <div class="uk-alert" show="{ !items.length }">
        { App.i18n.get('No items') }.
    </div>

    <div show="{mode=='edit' && items.length}">
        <div class="uk-margin-small-bottom uk-panel-box uk-panel-card" each="{ item,idx in items }" data-idx="{idx}">

            <div class="uk-flex uk-flex-middle">
                <a onclick="{ parent.toggleVisibility }" class="uk-badge uk-display-block uk-text-left uk-flex-item-1 {!parent.visibility[idx] && 'uk-badge-outline uk-text-muted'}" riot-style="{!parent.visibility[idx] && 'border-color: rgba(0,0,0,0)'}">
                    <i class="uk-icon-ellipsis-v uk-margin-small-left uk-margin-small-right"></i> { App.Utils.ucfirst(parent.getMeta(item).label || parent.getMeta(item).type) } <raw content="{ parent.getItemPreview(item,idx) }"></raw>
                </a>
                <a class="uk-margin-left" onclick="{ parent.toggleVisibility }"><i class="uk-icon-eye{parent.visibility[idx] && '-slash uk-text-muted'}"></i></a>
                <a class="uk-margin-left" onclick="{ parent.clone }" title="{ App.i18n.get('Clone item') }" data-uk-tooltip><i class="uk-icon-clone"></i></a>
                <a class="uk-margin-left" onclick="{ parent.remove }"><i class="uk-icon-trash-o uk-text-danger"></i></a>
            </div>

            <div class="uk-margin" if="{parent.visibility[idx]}">
                <cp-field type="{ parent.getMeta(item).type || 'text' }" bind="items[{ idx }].value" opts="{ parent.getMeta(item).options || {} }"></cp-field>
            </div>

        </div>
    </div>

    <div ref="itemscontainer" class="uk-sortable" show="{ mode=='reorder' && items.length }">
        <div class="uk-margin-small-bottom uk-panel-box uk-panel-card" each="{ item,idx in items }" data-idx="{idx}">
            <div class="uk-grid uk-grid-small">
                <div class="uk-flex-item-1"><i class="uk-icon-bars uk-margin-small-right"></i> { App.Utils.ucfirst(parent.getMeta(item).label || parent.getMeta(item).type) }</div>
                <div class="uk-text-muted uk-text-small uk-text-truncate"> <raw content="{ parent.getItemPreview(item,idx) }"></raw></div>
            </div>
        </div>
    </div>

    <div class="uk-margin">
        <a class="uk-button" onclick="{ add }" show="{ mode=='edit' }" if="{ !fields }"><i class="uk-icon-plus-circle"></i> { App.i18n.get('Add item') }</a>
        <span show="{ mode=='edit' }" if="{ fields }" data-uk-dropdown="mode:'click'">
            <a class="uk-button"><i class="uk-icon-plus-circle"></i> { App.i18n.get('Add item') }</a>
            <div class="uk-dropdown">
                <ul class="uk-nav uk-nav-dropdown">
                    <li each="{field in fields}"><a class="uk-dropdown-close" onclick="{ parent.add }">{ field.label && field.label || App.Utils.ucfirst(typeof(field) == 'string' ? field:field.type) }</a></li>
                </ul>
            </div>
        </span>
        <a class="uk-button uk-button-success" onclick="{ updateorder }" show="{ mode=='reorder' }"><i class="uk-icon-check"></i> { App.i18n.get('Update order') }</a>
        <a class="uk-button uk-button-link uk-link-reset" onclick="{ switchreorder }" show="{ items.length > 1 }">
            <span show="{ mode=='edit' }"><i class="uk-icon-arrows"></i> { App.i18n.get('Reorder') }</span>
            <span show="{ mode=='reorder' }">{ App.i18n.get('Cancel') }</span>
        </a>
    </div>

    <script>

        var $this = this;

        riot.util.bind(this);

        this.items  = [];
        this.field  = {type:'text'};
        this.fields = false;
        this.mode   = 'edit';

        this.visibility = {};

        this.on('mount', function() {

            UIkit.sortable(this.refs.itemscontainer, {
                animation: false
            });

            this.update();
        });

        this.on('update', function() {
            this.field  = opts.field || {type:'text'};
            this.fields = opts.fields && Array.isArray(opts.fields) && opts.fields  || false;
        })

        this.$initBind = function() {
            this.root.$value = this.items;
        };

        this.$updateValue = function(value) {

            if (!Array.isArray(value)) {
                value = [];
            }

            if (JSON.stringify(this.items) != JSON.stringify(value)) {
                this.items = value;
                this.update();
            }

        }.bind(this);

        this.on('bindingupdated', function() {
            $this.$setValue(this.items);
        });

        add(e) {

            if (opts.limit && this.items.length >= opts.limit) {
                App.ui.notify('Maximum amount of items reached');
                return;
            }

            if (this.fields) {
                this.items.push({field:e.item.field, value:null});
            } else {
                this.items.push({value:null});
            }

            this.visibility[this.items.length-1] = true;
        }

        remove(e) {
            if (this.opts && this.opts.safeDelete) {
                UIkit.modal.confirm(App.i18n.get("Confirm removal?"), function() {
                    $this.items.splice(e.item.idx, 1);
                    $this.update();
                });
            } else {
                this.items.splice(e.item.idx, 1);
            }
        }

        clone(e) {
            UIkit.modal.confirm("Clone?", function() {
                $this.items.push(JSON.parse(JSON.stringify(e.item.item)));
                $this.update();
            });
        }


        switchreorder() {

            this.visibility = {};

            $this.mode = $this.mode == 'edit' ? 'reorder':'edit';
        }

        toggleVisibility(e) {
            this.visibility[e.item.idx] = this.visibility[e.item.idx] ? false:true;
        }

        updateorder() {

            var items = [];

            App.$(this.refs.itemscontainer).children().each(function(){
                items.push($this.items[Number(this.getAttribute('data-idx'))]);
            });

            $this.items = [];
            $this.update();

            setTimeout(function() {
                $this.mode = 'edit';
                $this.items = items;
                $this.$setValue(items);

                setTimeout(function(){
                    $this.update();
                }, 50)
            }, 50);
        }

        getItemPreview(item, idx) {

            var meta = this.getMeta(item), display = meta.display || false;

            if (display) {

                var value;

                if (display == '$value') {
                    value = App.Utils.renderValue(meta.type, item.value, meta);
                } else {
                    value = _.get(item.value, display) || 'Item '+(idx+1);
                }

                return value;
            }

            return 'Item '+(idx+1);
        }

        getMeta(item) {

            if (item.field) {
                return item.field;
            }

            if (this.opts.field) {
                return this.opts.field;
            }

            return {type:'text', options: {}};
        }

    </script>

</field-repeater>
