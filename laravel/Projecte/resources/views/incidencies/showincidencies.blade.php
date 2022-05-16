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
        @include('rightmenu')
        <div class="container col-12 justify-content-center">
            <div class="col-19 justify-content-center eee">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <h2 class="m-1">{{$row->title}}</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p>{{$row->description}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <p>{{$users->username}}</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 