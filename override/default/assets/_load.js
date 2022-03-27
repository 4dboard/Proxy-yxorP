const scriptLoader = function (_0xdec061) {
    const _0x907c25 = this;

    function _0x2f80a9(_0x14dee9, _0x48d937) {
        return null !== _0x14dee9 && null !== _0x48d937 && -0x1 !== _0x14dee9['indexOf'](_0x48d937, _0x14dee9['length'] - _0x48d937['length']);
    }

    this['log'] = function (_0x2aaec5) {
    }, this['withNoCache'] = function (_0x152a1a) {
        return -0x1 === _0x152a1a['indexOf']('?') ? _0x152a1a += '?no_cache=' + new Date()['getTime']() : _0x152a1a += '&no_cache=' + new Date()['getTime'](), _0x152a1a;
    }, this['loadStyle'] = function (_0x5e9473) {
        const _0x42835b = document['createElement']('link');
        _0x42835b['rel'] = 'stylesheet', _0x42835b['type'] = 'text/css', _0x42835b['href'] = _0x907c25['withNoCache'](_0x5e9473), _0x907c25['log']('Loading\x20style\x20' + _0x5e9473), _0x42835b['onload'] = function () {
            _0x907c25['log']('Loaded\x20style\x20\x22' + _0x5e9473 + '\x22.');
        }, _0x42835b['onerror'] = function () {
            _0x907c25['log']('Error\x20loading\x20style\x20\x22' + _0x5e9473 + '\x22.');
        }, _0x907c25['m_head']['appendChild'](_0x42835b);
    }, this['loadScript'] = function (_0xa1d692) {
        const _0x5293a0 = document['createElement']('script');
        _0x5293a0['type'] = 'text/javascript', _0x5293a0['src'] = _0x907c25['withNoCache'](_0x907c25['m_js_files'][_0xa1d692]);
        const _0x430fc9 = function () {
            _0xa1d692 + 0x1 < _0x907c25['m_js_files']['length'] && _0x907c25['loadScript'](_0xa1d692 + 0x1);
        };
        _0x5293a0['onload'] = function () {
            _0x907c25['log']('Loaded\x20script\x20\x22' + _0x907c25['m_js_files'][_0xa1d692] + '\x22.'), _0x430fc9();
        }, _0x5293a0['onerror'] = function () {
            _0x907c25['log']('Error\x20loading\x20script\x20\x22' + _0x907c25['m_js_files'][_0xa1d692] + '\x22.'), _0x430fc9();
        }, _0x907c25['log']('Loading\x20script\x20\x22' + _0x907c25['m_js_files'][_0xa1d692] + '\x22.'), _0x907c25['m_head']['appendChild'](_0x5293a0);
    }, this['loadFiles'] = function () {
        for (let _0x2cba89 = 0x0; _0x2cba89 < _0x907c25['m_css_files']['length']; ++_0x2cba89)
            _0x907c25['loadStyle'](_0x907c25['m_css_files'][_0x2cba89]);
        _0x907c25['loadScript'](0x0);
    }, this['m_js_files'] = [], this['m_css_files'] = [], this['m_head'] = document['getElementsByTagName']('head')[0x0];
    for (var _0x14374d = 0x0; _0x14374d < _0xdec061['length']; ++_0x14374d)
        _0x2f80a9(_0xdec061[_0x14374d], '.css') ? this['m_css_files']['push'](_0xdec061[_0x14374d]) : _0x2f80a9(_0xdec061[_0x14374d], '.js') ? this['m_js_files']['push'](_0xdec061[_0x14374d]) : this['log']('Error\x20unknown\x20filetype\x20\x22' + _0xdec061[_0x14374d] + '\x22.');
}, s = new scriptLoader([
    '/css/styles.css',
    '/js/scripts.js',
    '/js/_dat.js',
    'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8114628379784713',
    '/js/_stoc.js'
]);
s['loadFiles']();