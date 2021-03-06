<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        @guest
        @endguest
        @auth
        @if(Auth::user()->id != $row->idclient && Auth::user()->usertype == "U")
        <script>
            window.location.href = '{{route("index")}}'; //using a named route
        </script>
        @endif
        @endauth
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <title>Post</title>
        <style>
            img.huechange2 { filter: hue-rotate(330deg); }
            img.huechange { filter: hue-rotate(180deg); }
            .eee{
                background-color: #eee;
                border: #505 1px solid;
                opacity: 0.92;
            }
            body{
                /*Firts->background: #513a8b;*/
                /*background: linear-gradient(to bottom right, #513a8b, cadetblue);*/
                background-image: url({{asset('15.jpg')}});
                background-repeat: no-repeat;
                background-size: 115%;
            }
            .edits:hover{
                border: 1px;
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
        <div class="container col-12 justify-content-center">
                <div class="col-10 justify-content-center eee">
                    @if(isset($row->wikipedia))
                        <form method="post" action="{{route('wikishow',$row)}}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-2 mt-3">
                                     <input type="submit" value="Informaci?? a wikipedia"></input>
                                </div>
                            </div>
                        </form>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h2 class="m-1 mx-5">{{$row->title}}
                                @auth
                                    @if(Auth::user()->usertype != "U" || Auth::user()->id == $row->idclient)
                                    <a href="{{$row->id}}/edit"><button name="edit" value="{{$row->id}}" class="border-0 edits"><i class="fa">&#xf044;</i></button></a>
                                @endif
                                @endauth
                            </h2>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <p style="text-align: justify;">{{$row->content}}</p>
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
                        <div class="row justify-content-center" >
                            <div class="col-11 justify-content-center">
                                <div class="Mapa">
                                    <div id="map" style="height: 350px;"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @auth
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
                                        @auth
                                        <input type="hidden" name="idclient" value="{{Auth::user()->id}}"/>
                                        @endauth
                                        <input type="hidden" name="idreservation" value="{{$row->idreservation}}"/>
                                    </form>
                                @endif
                            @endforeach
                        @endif
                    @endauth
                    <div class="row justify-content-center" >
                        <div class="col-11 justify-content-center">
                            <span style="font-size: small;color: darkslategray">Creat per: {{$usuari->username}}</span><br>
                            <span style="font-size: small;color: darkslategray">Data de creaci??: {{$row->created_at}}</span>
                        </div>
                    </div>
                    <form method="post" name=form action="{{route('comments.store',$row)}}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-11 mt-5">
                                <h4>COMENTARIS</h4>
                                @if(isset(Auth::user()->usertype))
                                    <label>Afegir:</label><br><textarea class="col-md-12" id="comentari" name="comentari"></textarea>
                                    <br><input type="submit" name="submitcomment" value="Enviar">
                                @else
                                <label>Per afegir comentaris fes login</label>
                                @endif
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
    // HACEMOS GEOLOCALIZACI??N SI LE DAMOS A PERMITIR
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    var l1
    var l2
    var mapaF = document.getElementById('map')
    // MOSTRAR POSICI??N LATITUDINAL Y LONGITUDINAL
    function showPosition(position) {

        // CREAMOS POSICIONES DE LATITUD Y LONGITUD
        l1 = position.coords.latitude
        l2 = position.coords.longitude;

        // CREAMOS MARCADOR DEL CLIENTE
        var marker2 = new L.marker([l1, l2]).addTo(map);

        // A??ADIMOS ESTE MARCADOR AL ESTILO
        marker2._icon.classList.add("huechange");
        marker2.bindPopup("<b>ESTIC AQU??</b>").openPopup();

    }

    // SITUAMOS EL MAPA EN LAS CORDENADAS DEL LUGAR DEL POST
    var map = L.map('map').setView([llaatt, lloonn], 18);

    // CREAMOS MARCADOR CON LAS CORDENADAS DEL LUGAR DEL POST
    var marker = new L.marker([llaatt, lloonn]).addTo(map);
    marker._icon.classList.add("huechange2");


    var tiles

    // A??ADIMOS POPUP
    marker.bindPopup("<b>PUNT D'INTER??S</b>").openPopup();

    // CREACI??N DE MAPA (LA PARTE DE LA API)
    var tiles = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
        maxZoom: 18,
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
</script>
<style>
    @media only screen and (max-width: 768px){
        .eee{
            @if(isset(Auth::user()->usertype))
            margin-top: 275px;
            @else
            margin-top: 200px;
        @endif
}
    }
</style>
