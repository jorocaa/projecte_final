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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <style>
            img.huechange2 { filter: hue-rotate(330deg); }
            img.huechange { filter: hue-rotate(180deg); }
        </style>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    </head>
    <body>
        <form method="post" name=form action="recibir.php">
            @include('navbarBase')
            @foreach($result as $row)
                <div class="container col-9 float-start ">
                    <div class="row justify-content-center mt-1">
                        <div class="col-2">
                            <button>WIKI</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>{{$row->title}}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>{{$row->content}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                img
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div id="map"></div>
                                    <script>
                                        var listener = new window.keypress.Listener();
                                        var map = L.map('map').setView([{{$row->latitude}}, {{$row->longitude}}], 18);
                                        if (navigator.geolocation) {
                                            navigator.geolocation.getCurrentPosition(showposition);
                                        }
                                        function showposition(position){
                                        var lat=position.coords.latitude
                                        var long=position.coords.longitude
                                        var marker2 = new  L.marker([lat, long]).addTo(map);
                                        marker2.bindPopup("<b>Vosté está aquí</b>").openPopup();
                                        marker2._icon.classList.add("huechange2");
                                        }
                                        var marker = new L.marker([{{$row->latitude}}, {{$row->longitude}}]).addTo(map);
                                        marker._icon.classList.add("huechange");

                                        marker.bindPopup("<b>Institut</b></br>Joaquim Mir").openPopup();
                                        var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                                            maxZoom: 18,
                                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                                                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                            id: 'mapbox/streets-v11',
                                            tileSize: 512,
                                            zoomOffset: -1
                                        }).addTo(map);
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @include('rightmenu')
        </form>
    </body>
</html>
