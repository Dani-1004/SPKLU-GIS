@extends('layouts.dashboard-volt')

@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

    <style>
        #map {
            height: 400px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Markers</div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('javascript')
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script>
        const map = L.map('map').setView([-6.178306, 106.631889], 12);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var iconMarker = L.icon({
            iconUrl:'{{ asset('iconMarkers/marker.png') }}',
            iconSize:[50,50],
        })

        var marker2 = L.marker([-6.193096141144581, 106.63365975360928],{
            //icon:iconMarker,
            draggable:false
        })
        .bindPopup('SPKLU TangCity')
        .addTo(map);

        var marker3 = L.marker([-6.1440077,106.630585],{
            //icon:iconMarker,
            draggable:false
        })
        .bindPopup('SPKLU Plaza Aeropolis')
        .addTo(map);

        
    </script>
@endpush
