const staticCacheName = 'connect';
self['addEventListener']('install', function (_0x525d0e) {
    _0x525d0e['waitUntil'](caches['open']('connect')['then'](function (_0x44f188) {
        return _0x44f188['addAll'](['/']);
    }));
}), self['addEventListener']('fetch', function (_0x4cc8d4) {
    console['log'](_0x4cc8d4['request']['url']), _0x4cc8d4['respondWith'](caches['match'](_0x4cc8d4['request'])['then'](function (_0x13a00a) {
        return _0x13a00a || fetch(_0x4cc8d4['request']);
    }));
});