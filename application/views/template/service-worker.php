<script>
    if (!('serviceWorker' in navigator)) {
        console.log("Service worker tidak didukung browser ini.");
    } else {
        registerServiceWorker();
    }

    function registerServiceWorker() {
        return navigator.serviceWorker.register('<?= site_url('workbox.js') ?>')
            .then(function (registration) {
                return registration;
            })
            .catch(function (err) {
                console.error('Registrasi service worker gagal.', err);
            });
    }
</script>