self.addEventListener('install', function(event) {
	// console.log('[Service Worker] installing Service worker.....', event);
event.waitUntil(caches.open('static')
	.then(function(cache) {
	 cache.add('/')
	 cache.add('index.php')
	 cache.add('dist/css/sb-admin-2.css')
	 cache.add('js/app.js')

	})

)	

});
self.addEventListener('activate', function(event) {
	// console.log('[Service Worker] activating Service worker.....', event);

});
self.addEventListener('fetch', function(event) {
	// console.log('[Service Worker] activating Service worker.....', event);
	event.respondWith(
		caches.match(event.request)
		.then(function(response) {
			if (response) {
				return response;
			}else{
				return fetch(event.request);
			}
			})
		);
});