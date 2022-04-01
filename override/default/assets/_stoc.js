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