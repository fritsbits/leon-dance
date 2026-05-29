import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

// Progressive enhancement: any [data-leaflet-map] becomes an interactive
// OpenStreetMap. No-JS falls back to the <noscript> deep-link inside the node.
function initLeafletMaps() {
    document.querySelectorAll('[data-leaflet-map]').forEach((el) => {
        if (el.dataset.mapReady) return;
        el.dataset.mapReady = '1';

        const lat = parseFloat(el.dataset.lat);
        const lng = parseFloat(el.dataset.lng);
        const zoom = parseInt(el.dataset.zoom || '15', 10);
        if (Number.isNaN(lat) || Number.isNaN(lng)) return;

        const map = L.map(el, { scrollWheelZoom: false }).setView([lat, lng], zoom);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);

        // Grayscale dot pin (avoids the default coloured marker + bundler icon paths).
        const icon = L.divIcon({
            className: 'map-pin',
            html: '<span></span>',
            iconSize: [16, 16],
            iconAnchor: [8, 8],
        });
        const marker = L.marker([lat, lng], { icon }).addTo(map);
        if (el.dataset.label) {
            marker.bindTooltip(el.dataset.label, {
                permanent: true,
                direction: 'top',
                offset: [0, -10],
            });
        }
    });
}

if (document.readyState !== 'loading') initLeafletMaps();
else document.addEventListener('DOMContentLoaded', initLeafletMaps);
