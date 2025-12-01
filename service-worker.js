self.addEventListener("install", (e) => {
    console.log("Service Worker instalado");
    self.skipWaiting();
});

self.addEventListener("activate", (e) => {
    console.log("Service Worker activado");
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches.open("refsan-cache").then((cache) => {
            return cache.match(event.request).then((response) => {
                return response || fetch(event.request).then((fetchRes) => {
                    cache.put(event.request, fetchRes.clone());
                    return fetchRes;
                });
            });
        })
    );
});
