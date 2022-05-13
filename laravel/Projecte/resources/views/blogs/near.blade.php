<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>A prop meu</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <style>
            img.huechange2 { filter: hue-rotate(330deg); }
            img.huechange { filter: hue-rotate(180deg); }
            hr{
                height: 1px;
                background-color: black;
                border: none;
            }
            .global{
                background-color: #eee;
            }
            body{
                background: #513a8b;
            }
            .atit{
                color:#505;
                text-decoration: none;
            }
        </style>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    </head>
    <body>
        @include('navbarBase')
        @include('rightmenu')
        <div class="container col-12 float-center clearfix global">
        @foreach($result as $row)
            <div class="row justify-content-center mt-4">
                <div class="col-md-11 inin" >
                    <div class="row">
                        <div class="col-md-12">
                            <a class="atit" href="{{route('blogs.show',$row)}}"><h3>{{$row->title}}</h3></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="row">
                <div class="col-md-12">
                    <div class="Mapa">
                        <div id="map" style="height: 500px; margin-left: 20%"></div>
                    </div>
                </div>
            </div>
            <input type="hidden"  id="blogs" value="{{$result}}"/>
    </div>
    </body>
</html>
<script type="text/javascript">
    // HACEMOS GEOLOCALIZACIÓN SI LE DAMOS A PERMITIR
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }

    var map, tiles

    // MOSTRAR POSICIÓN LATITUDINAL Y LONGITUDINAL
    function showPosition(position) {
        //////////////////////// PART D'USUARI ////////////////////////
        // CREAMOS POSICIONES DE LATITUD Y LONGITUD
        let l1 = position.coords.latitude
        let l2 = position.coords.longitude;

        // SITUAMOS EL MAPA EN LAS CORDENADAS DEL USUARIO
        map = L.map('map').setView([l1, l2], 13);

        // CREACIÓN DE MAPA (LA PARTE DE LA API)
        tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
            maxZoom: 18,
            tileSize: 512,
            zoomOffset: -1
        }).addTo(map);

        // CREAMOS MARCADOR DEL CLIENTE
        let marker2 = new L.marker([l1, l2]).addTo(map);

        // AÑADIMOS ESTE MARCADOR AL ESTILO
        marker2._icon.classList.add("huechange");
        marker2.bindPopup("<b>ESTIC AQUÍ</b>").openPopup();

        //////////////////////// PART DE POSTS ////////////////////////

        @foreach($result as $r)
            // CREAMOS MARCADOR CON LAS CORDENADAS DEL LUGAR DEL POST
            var lat = {{$r->latitude}};
            var lon = {{$r->longitude}};
            var marker = new L.marker([lat, lon]).addTo(map);
            marker._icon.classList.add("huechange2");
            // AÑADIMOS POPUP
            marker.bindPopup("<b>{{$r->title}}</b>");
        @endforeach
    }

</script>
