
/**
 * simple two way data-binding for riot
 */

(function (riot, global) {

    riot.util.bind = function (tag, namespace) {

        var root = tag.root;

        tag.root.$bindingRoot = true;

        function update() {

            var field;

            Array.prototype.forEach.call(root.querySelectorAll('[bind]'), function (ele) {

                field = ele.getAttribute('bind');

                if (!ele.$boundTo) {
                    init(ele);
                }

                if (ele.$boundTo !== tag) {
                    return;
                }

                var value = ele.$getValue();

                if (JSON.stringify(ele.$value) !== JSON.stringify(value)) {
                    ele.$value = value;
                    ele.$updateValue(value, field);
                }
            });
        }

        function init(ele) {

            var element = ele.parentNode, _tag = tag;

            while (element && element.nodeType === 1) {

                if (element._tag && element.$bindingRoot) {

                    if (element._tag.root !== tag.root) {
                        _tag = element._tag;
                    }

                    break;
                }

                element = element.parentNode;
            }

            ele.$boundTo = _tag;

            ele.$getValue = function (field) {

                field = field || ele.getAttribute('bind');

                var value = null;

                if (ele.$boundTo !== _tag) {
                    return;
                }

                return _.get(_tag, field);
            };

            ele.$setValue = (function () {

                return function (value, silent, field) {

                    field = field || ele.getAttribute('bind');

                    try {
                        _.set(_tag, field, value);

                        if (!silent) {
                            _tag.update();
                        }

                        _tag.trigger('bindingupdated', [field, value]);

                        return true;

                    } catch (e) {

                        console.log(e);

                        return false;
                    }
                };

            })();


            ele.$updateValue = function (value) { };

            var nodeType = ele.nodeName.toLowerCase(),
                defaultEvt = ('oninput' in ele) && nodeType == 'input' ? 'input' : 'change';

            if (['input', 'select', 'textarea'].indexOf(nodeType) !== -1) {

                ele.addEventListener(ele.getAttribute('bind-event') || defaultEvt, _.debounce(function () {

                    var isCheckbox = (ele.nodeName == 'INPUT' && ele.getAttribute('type') == 'checkbox'),
                        isNumeric = (ele.nodeName == 'INPUT' && ele.getAttribute('type') == 'number'),
                        isMultipleSelect = (ele.nodeName == 'SELECT' && ele.multiple);

                    try {

                        if (isCheckbox) {
                            ele.$setValue(ele.checked);
                        } else if (isMultipleSelect) {
                            
                            var values = [];

                            Array.from(ele.selectedOptions).forEach(function(o,i,a) { 
                                values.push(o.value); 
                            });

                            ele.$setValue(values || []);
                        } else {
                            ele.$setValue(isNumeric ? Number(ele.value || 0) : ele.value);
                        }

                    } catch (e) { }

                }, 200), false);

                ele.$updateValue = (function (fn, body) {

                    var isCheckbox = (ele.nodeName == 'INPUT' && ele.getAttribute('type') == 'checkbox'),
                        isNumeric = (ele.nodeName == 'INPUT' && ele.getAttribute('type') == 'number');

                    if (isCheckbox) {
                        body = 'input.checked = val ? true:false;';
                    } else {
                        body = 'input.value = val || "";';
                    }

                    fn = new Function('input', 'val', 'try{' + body + '}catch(e){}');

                    return function (value) {

                        if (document.activeElement === ele && nodeType == 'input' && !isCheckbox) {
                            return;
                        }

                        if (nodeType == 'select' && ele.multiple) {
                            try {
                                Array.from(ele.options).forEach(function(option) {
                                    option.selected = (Array.isArray(value) ? value : []).indexOf(option.value) > -1
                                })
                            } catch (e) { };
                            return;
                        }

                        fn(ele, isNumeric ? Number(value || 0) : value);
                    };

                })();

            } else {

                if (ele._tag) {

                    ele._tag.$getValue = ele.$getValue;
                    ele._tag.$setValue = ele.$setValue;
                    ele._tag.$boundTo = _tag;

                    ele.$updateValue = function (value, field) {

                        if (ele._tag.$updateValue) {
                            ele._tag.$updateValue.apply(ele._tag, [value, field, ele.__bindField != field]);
                        }

                        ele.__bindField = field;
                    };

                    if (ele._tag.$initBind) {
                        ele._tag.$initBind.apply(ele._tag, [tag]);
                    }

                }
            }
        }

        // init values
        tag.on('mount', function () { update(); });
        tag.on('updated', function () { update(); });
        tag.on('bind', function () { update(); });
        tag.$bindUpdate = function () { update(); };

    };

    var Mixin = {
        init: function () {
            riot.util.bind(this);
        }
    };

    global.RiotBindMixin = Mixin;

})(riot, this);
