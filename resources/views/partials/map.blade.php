{{-- SP-17 Map · live OpenStreetMap via Leaflet (resources/js/app.js).
     Props: $lat, $lng, $label, $zoom (default 15). No-JS falls back to an OSM deep-link.
     Per CLAUDE.md: OpenStreetMap + Leaflet only; grayscale via the .map class. --}}
@php($zoom = $zoom ?? 15)
<div data-leaflet-map
     data-lat="{{ $lat }}" data-lng="{{ $lng }}" data-zoom="{{ $zoom }}"
     @isset($label) data-label="{{ $label }}" @endisset
     class="map">
    <noscript>
        <div class="flex h-full items-center justify-center p-6 text-center">
            <a href="https://www.openstreetmap.org/?mlat={{ $lat }}&amp;mlon={{ $lng }}#map={{ $zoom }}/{{ $lat }}/{{ $lng }}"
               rel="noopener" target="_blank" class="btn-text">Bekijk op OpenStreetMap →</a>
        </div>
    </noscript>
</div>
