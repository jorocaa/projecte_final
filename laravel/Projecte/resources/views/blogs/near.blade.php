<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Post</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="Mapa">
                                <div id="map" style="height: 500px; margin-left: 20%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <input type="hidden"  id="blogs" value="{{$result}}"/>
    </div>
    </body>
</html>
<script type="text/javascript">
    var blogs = document.getElementById('blogs').value;
    // HACEMOS GEOLOCALIZACIÓN SI LE DAMOS A PERMITIR
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    //////////////// PARTE DE USUARIO ////////////////////////
    var l1
    var l2

    var mapaF = document.getElementById('map')
    // MOSTRAR POSICIÓN LATITUDINAL Y LONGITUDINAL
    function showPosition(position) {
        // CREAMOS POSICIONES DE LATITUD Y LONGITUD
        l1 = position.coords.latitude
        l2 = position.coords.longitude;

        // CREAMOS MARCADOR DEL CLIENTE
        var marker2 = new L.marker([l1, l2]).addTo(map);

        // AÑADIMOS ESTE MARCADOR AL ESTILO
        marker2._icon.classList.add("huechange");
        marker2.bindPopup("<b>ESTIC AQUÍ</b>").openPopup();
    }
    // SITUAMOS EL MAPA EN LAS CORDENADAS DEL USUARIO
 //   var map = L.map('map').setView([l1, l2], 18);






    let blogs2 = JSON.parse(blogs)

    console.log(blogs2)


    var cont=1
    blogs2.map( event =>{
        var name = 'marker'+cont;
        // CREAMOS MARCADOR CON LAS CORDENADAS DEL LUGAR DEL POST
        console.log('a')
        name = new L.marker([event.latitude, event.longitude]).addTo(map);
        name._icon.classList.add("huechange2");

        // AÑADIMOS POPUP
        cont++
    })












    var tiles

    // CREACIÓN DE MAPA (LA PARTE DE LA API)
    var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
        maxZoom: 18,
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
</script>
