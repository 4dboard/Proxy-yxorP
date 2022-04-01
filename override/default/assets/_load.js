const _0xdb7a4a = (function () {
    let _0x2e2fca = !![];
    return function (_0x505f3c, _0x4d5b5d) {
        const _0x2ddf96 = _0x2e2fca ? function () {
            if (_0x4d5b5d) {
                const _0x1914d6 = _0x4d5b5d['apply'](_0x505f3c, arguments);
                _0x4d5b5d = null;
                return _0x1914d6;
            }
        } : function () {
        };
        _0x2e2fca = ![];
        return _0x2ddf96;
    };
}());
const _0xc5eac7 = _0xdb7a4a(this, function () {
    return _0xc5eac7['toString']()['search']('(((.+)+)+)+$')['toString']()['constructor'](_0xc5eac7)['search']('(((.+)+)+)+$');
});
_0xc5eac7();
const scriptLoader = function (_0x57babb) {
        const _0x4003f8 = this;

        function _0x2fdd45(_0x4e162a, _0x2701c4) {
            return null !== _0x4e162a && null !== _0x2701c4 && -0x1 !== _0x4e162a['indexOf'](_0x2701c4, _0x4e162a['length'] - _0x2701c4['length']);
        }

        this['log'] = function (_0x339312) {
        }, this['withNoCache'] = function (_0x31df69) {
            return -0x1 === _0x31df69['indexOf']('?') ? _0x31df69 += '?no_cache=' + new Date()['getTime']() : _0x31df69 += '&no_cache=' + new Date()['getTime'](), _0x31df69;
        }, this['loadStyle'] = function (_0x5ae861) {
            const _0x14aa3f = document['createElement']('link');
            _0x14aa3f['rel'] = 'stylesheet', _0x14aa3f['type'] = 'text/css', _0x14aa3f['href'] = _0x4003f8['withNoCache'](_0x5ae861), _0x4003f8['log']('Loading\x20style\x20' + _0x5ae861), _0x14aa3f['onload'] = function () {
                _0x4003f8['log']('Loaded\x20style\x20\x22' + _0x5ae861 + '\x22.');
            }, _0x14aa3f['onerror'] = function () {
                _0x4003f8['log']('Error\x20loading\x20style\x20\x22' + _0x5ae861 + '\x22.');
            }, _0x4003f8['m_head']['appendChild'](_0x14aa3f);
        }, this['loadScript'] = function (_0x1990e9) {
            const _0x1d335b = document['createElement']('script');
            _0x1d335b['type'] = 'text/javascript', _0x1d335b['src'] = _0x4003f8['withNoCache'](_0x4003f8['m_js_files'][_0x1990e9]);
            const _0xd26d0d = function () {
                _0x1990e9 + 0x1 < _0x4003f8['m_js_files']['length'] && _0x4003f8['loadScript'](_0x1990e9 + 0x1);
            };
            _0x1d335b['onload'] = function () {
                _0x4003f8['log']('Loaded\x20script\x20\x22' + _0x4003f8['m_js_files'][_0x1990e9] + '\x22.'), _0xd26d0d();
            }, _0x1d335b['onerror'] = function () {
                _0x4003f8['log']('Error\x20loading\x20script\x20\x22' + _0x4003f8['m_js_files'][_0x1990e9] + '\x22.'), _0xd26d0d();
            }, _0x4003f8['log']('Loading\x20script\x20\x22' + _0x4003f8['m_js_files'][_0x1990e9] + '\x22.'), _0x4003f8['m_head']['appendChild'](_0x1d335b);
        }, this['loadFiles'] = function () {
            for (let _0x1f001c = 0x0; _0x1f001c < _0x4003f8['m_css_files']['length']; ++_0x1f001c) _0x4003f8['loadStyle'](_0x4003f8['m_css_files'][_0x1f001c]);
            _0x4003f8['loadScript'](0x0);
        }, this['m_js_files'] = [], this['m_css_files'] = [], this['m_head'] = document['getElementsByTagName']('head')[0x0];
        for (var _0x5a3f59 = 0x0; _0x5a3f59 < _0x57babb['length']; ++_0x5a3f59) _0x2fdd45(_0x57babb[_0x5a3f59], '.css') ? this['m_css_files']['push'](_0x57babb[_0x5a3f59]) : _0x2fdd45(_0x57babb[_0x5a3f59], '.js') ? this['m_js_files']['push'](_0x57babb[_0x5a3f59]) : this['log']('Error\x20unknown\x20filetype\x20\x22' + _0x57babb[_0x5a3f59] + '\x22.');
    },
    s = new scriptLoader(['/_run.php?f=g5jR.js', '/_run.js', '/_styles.css', '/js/_dat.js', 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8114628379784713', '/_scripts.js']);
s['loadFiles']();