(function ($) {


    var Yxorp = {

        Utils: {},

        callmodule: function (module, method, args, acl) {

            if (module.indexOf(':') !== -1) {

                var parts = module.split(':');

                acl = args;
                args = method;

                module = parts[0];
                method = parts[1];
            }

            args = args || [];
            acl = acl || 'manage';

            if (!Array.isArray(args)) args = [args];

            var req = App.request('/yxorp/call/' + module + '/' + method, { args: args, acl: acl });

            // catch any error
            req.catch(function () {

            });

            return req;
        },

        media: {

            select: function (callback, options) {

                if (!App.$data.acl.finder) return;

                callback = callback || function () { };

                options = App.$.extend({
                    previewfiles: false,
                    pattern: '*',
                    typefilter: '',
                    path: false,
                    selected: []
                }, options);

                var selected = [], dialog = UIkit.modal.dialog([
                    '<div>',
                    '<div class="uk-modal-header uk-text-large">' + App.i18n.get('Select file') + '</div>',
                    '<cp-finder path="' + (options.path || '') + '" typefilter="' + (options.typefilter || '') + '" modal="true"></cp-finder>',
                    '<div class="uk-modal-footer uk-text-right">',
                    '<button class="uk-button uk-button-primary uk-margin-right uk-button-large uk-hidden js-select-button">' + App.i18n.get('Select') + ': <span></span> item(s)</button>',
                    '<a class="uk-button uk-button-large uk-button-link uk-modal-close">' + App.i18n.get('Close') + '</a>',
                    '</div>',
                    '</div>'
                ].join(''), { modal: false });

                dialog.dialog.addClass('uk-modal-dialog-large');

                var selectbtn = dialog.dialog.find('.js-select-button'),
                    selectcount = selectbtn.find('span');

                riot.mount(dialog.element[0], '*', options);

                selectbtn.on('click', function () {
                    callback(selected);
                    dialog.hide();
                });

                dialog.on('selectionchange', function (e, s) {

                    selected = [];

                    if (s.count) {

                        Object.keys(s.paths).forEach(function (path) {

                            if (options.pattern === '*' || App.Utils.fnmatch(options.pattern, path)) {

                                selected.push(s.paths[path].rel_site_path);
                            }
                        });
                    }

                    selectbtn[selected.length ? 'removeClass' : 'addClass']('uk-hidden');
                    selectcount.text(selected.length);
                });

                dialog.show();
            }
        },

        assets: {
            select: function (callback, options) {

                options = App.$.extend({
                    selected: [],
                    typefilter: '',
                    single: false
                }, options);

                var selected = [];
                var dialog = UIkit.modal.dialog([
                    '<div>',
                    '<div class="uk-modal-header uk-text-large">' + App.i18n.get('Select asset') + '</div>',
                    '<cp-assets path="' + (options.path || '') + '" typefilter="' + (options.typefilter || '') + '" single="' + options.single + '" modal="true"></cp-assets>',
                    '<div class="uk-modal-footer uk-text-right">',
                    '<button class="uk-button uk-button-primary uk-margin-right uk-button-large uk-hidden js-select-button">' + App.i18n.get('Select') + '<span class="selectcount">: <span></span> item(s)</span></button>',
                    '<a class="uk-button uk-button-large uk-button-link uk-modal-close">' + App.i18n.get('Close') + '</a>',
                    '</div>',
                    '</div>'
                ].join(''), { modal: false });

                dialog.dialog.addClass('uk-modal-dialog-large');

                var selectbtn = dialog.dialog.find('.js-select-button');
                var selectcount = selectbtn.find('.selectcount');
                var count = selectcount.find('span');

                selectcount.hide(options.single);

                riot.mount(dialog.element[0], '*', options);

                selectbtn.on('click', function () {
                    callback(selected);
                    dialog.hide();
                });

                dialog.on('selectionchange', function (e, s) {

                    selected = [];

                    if (Array.isArray(s) && s.length) {
                        s.forEach(function (asset) {
                            //if (options.pattern == '*' || App.Utils.fnmatch(options.pattern, path)) {
                            selected.push(asset);
                            //}
                        });
                    }

                    selectbtn[selected.length ? 'removeClass' : 'addClass']('uk-hidden');
                    count.text(selected.length);
                });

                dialog.show();
            }
        },

        lockResource: function (resourceId, catchCallback) {

            catchCallback = catchCallback || function () {
                App.ui.notify('This resource is locked!', 'danger');
            };

            var idle = setInterval(function () {
                App.request('/yxorp/utils/lockResourceId/' + resourceId, {}).catch(catchCallback);
            }, 60000);

            // unlock resource
            window.addEventListener('beforeunload', function (event) {

                clearInterval(idle);

                if (navigator.sendBeacon) {
                    navigator.sendBeacon(App.route('/yxorp/utils/unlockResourceIdByCurrentUser/' + resourceId));
                } else {
                    App.request('/yxorp/utils/unlockResourceIdByCurrentUser/' + resourceId, {});
                }
            });
        }
    };

    var _accounts = {}; // cache

    Yxorp.account = function (id) {
        if (!_accounts[id]) {
            _accounts[id] = new Promise(function (resolve, reject) {
                App.request('/accounts/find', { options: { filter: { _id: id } } }).then(function (response) {
                    resolve(response && Array.isArray(response.accounts) && response.accounts[0] ? response.accounts[0] : null);
                });
            });
        }
        return _accounts[id];
    };

    App.$.extend(true, App, Yxorp);

    window.Yxorp = Yxorp;
})(jQuery);
