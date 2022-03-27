const staticCacheName = "connect";
self.addEventListener("install", function (e) {
        e.waitUntil(caches.open("connect")
                .then(function (e) {
                        return e.addAll(["/"])
                }))
}), self.addEventListener("fetch", function (e) {
        console.log(e.request.url), e.respondWith(caches.match(e.request)
                .then(function (t) {
                        return t || fetch(e.request)
                }))
});
