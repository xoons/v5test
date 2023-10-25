<x-layout title="Famous Names">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @each('card', $names, 'name')
        </div>
        <x-modal id="modal-map">
            <div id="map-canvas"></div>
            <script>
                // using env through config so config can be cached...
                const GOOGLE_MAP_KEY = '{{ config("custom.google_map_key") }}';
            </script>
        </x-modal>
    </div>
</x-layout>