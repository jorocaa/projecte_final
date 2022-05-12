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
            body{
                background: #513a8b;
            }
            .eee{
                background: #eee;
            }
        </style>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    </head>
    <body>
        @include('navbarBase')
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @include('rightmenu')
        <div class="container col-12 justify-content-center ">
                <div class="col-10 justify-content-center eee">
                    @if(isset($row->wikipedia))
                        <form method="post" action="{{route('wikishow',$row)}}">
                            @csrf
                            <div class="row justify-content-center mt-1">
                                <div class="col-2">
                                    <button>WIKI</button>
                                    
                                </div>
                            </div>
                        </form>
                    @endif
                    <div class="row">
                        <div class="col-md-11">
                            <h3>{{$row->title}}</h3>
                        </div>
                        @if(Auth::user()->usertype != "U" || Auth::user()->id == $row->idclient)
                            <div class="col-md-1">
                                <a href="{{$row->id}}/edit"><button name="edit" value="{{$row->id}}"><i class="fa">&#xf044;</i></button></a>
                            </div>
                        @endif
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <p>{{$row->content}}</p>
                        </div>
                    </div>
                    @if($image->id != 1)
                        <div class="row justify-content-center">
                            <div class="col-9 col-md-5">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6" style="max-height: 300px;">
                                        <a href="{{asset('/storage/'.$image->filepath)}}" target="_blank"><img width="100%" height="100%" src="{{asset('/storage/'.$image->filepath)}}"/></a><br/>
                                    </div>
                                </div>
                            </div>
                        </div><br/>
                    @endif
                    @if(isset($row->latitude))
                        <input type="hidden" id="latitude" name="lat" value="{{$row->latitude}}"/>
                        <input type="hidden" id="longitude" name="lon" value="{{$row->longitude}}"/>
                        <div class="row">
                            <div class="col-md-11">
                                <div class="Mapa">
                                    <div id="map" style="height: 350px; margin-left: 20%"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(!session()->has('success'))
                        @foreach($reserve as $res)
                            @if($row->idreservation == $res->id && $row->idreservation != 1)
                                <form method="POST" name="reservar" action="{{route('reserves.store')}}">
                                    @csrf
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-2">
                                            <button type="submit" id="reservar" name="reservar">RESERVAR</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="idclient" value="{{Auth::user()->id}}"/>
                                    <input type="hidden" name="idreservation" value="{{$row->idreservation}}"/>
                                </form>
                            @endif
                        @endforeach
                    @endif
                    <form method="post" name=form action="{{route('comments.store',$row)}}">
                        @csrf
                        <div class="row justify-content-center ">
                            <div class="col-lg-11">
                                <h3>AFEGIR COMENTARI</h3>
                                <label>Contingut:</label><br><textarea class="col-md-12" id="comentari" name="comentari"></textarea>
                                <br><input type="submit" name="submitcomment" value="Enviar">
                            </div>
                        </div>
                        
                    </form>
                    @foreach($comment as $com)
                        <div class="row justify-content-center ">
                            <div class="col-11">
                                <hr class="col-md-12"></hr>
                                <h5 class="col-md-12">{{$com->title}}</h5>
                                <p class="col-md-12">{{$com->content}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    var llaatt = document.getElementById('latitude').value;
    var lloonn = document.getElementById('longitude').value;
    // HACEMOS GEOLOCALIZACIÓN SI LE DAMOS A PERMITIR
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
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

    // SITUAMOS EL MAPA EN LAS CORDENADAS DEL LUGAR DEL POST
    var map = L.map('map').setView([llaatt, lloonn], 18);

    // CREAMOS MARCADOR CON LAS CORDENADAS DEL LUGAR DEL POST
    var marker = new L.marker([llaatt, lloonn]).addTo(map);
    marker._icon.classList.add("huechange2");


    var tiles

    // AÑADIMOS POPUP
    marker.bindPopup("<b>PUNT D'INTERÉS</b>").openPopup();

    // CREACIÓN DE MAPA (LA PARTE DE LA API)
    var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
        maxZoom: 18,
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
</script>
