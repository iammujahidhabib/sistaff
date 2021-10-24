importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js');

if (!workbox) {
  console.log(`Workbox gagal dimuat`);
}

workbox.routing.registerRoute(
  new RegExp('/assets/css'),
  workbox.strategies.networkFirst({
      cacheName: 'assets-css'
  })
);

workbox.routing.registerRoute(
  new RegExp('/assets/scss'),
  workbox.strategies.cacheFirst({
      cacheName: 'assets-scss'
  })
);

workbox.routing.registerRoute(
  new RegExp('/assets/js'),
  workbox.strategies.networkFirst({
      cacheName: 'assets-js'
  })
);

workbox.routing.registerRoute(
  new RegExp('/assets/vendors'),
  workbox.strategies.cacheFirst({
      cacheName: 'assets-vendors'
  })
);

workbox.routing.registerRoute(
  new RegExp('/assets/template'),
  workbox.strategies.cacheFirst({
      cacheName: 'assets-template'
  })
);

workbox.routing.registerRoute(
  new RegExp('/assets/images/core'),
  workbox.strategies.cacheFirst({
    cacheName: 'assets-image',
    plugins: [
      new workbox.expiration.Plugin({
        maxEntries: 60,
        maxAgeSeconds: 30 * 24 * 60 * 60, // 30 hari
      }),
    ],
  }),
);

workbox.routing.registerRoute(
  new RegExp('https://unpkg.com/feather-icons'),
  workbox.strategies.cacheFirst({
    cacheName: 'feather-icons',
    plugins: [
      new workbox.cacheableResponse.Plugin({
        statuses: [0, 200],
      }),
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 365,
        maxEntries: 30,
      }),
    ],
  })
);

workbox.routing.registerRoute(
  new RegExp('https://fonts.gstatic.com'),
  workbox.strategies.cacheFirst({
    cacheName: 'google-fonts-webfonts',
    plugins: [
      new workbox.cacheableResponse.Plugin({
        statuses: [0, 200],
      }),
      new workbox.expiration.Plugin({
        maxAgeSeconds: 60 * 60 * 24 * 365,
        maxEntries: 30,
      }),
    ],
  })
);