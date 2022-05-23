<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Informació Wikipedia</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>
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
                background-repeat: repeat;
                background-size: 100%;
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
    <div class="container col-12 justify-content-center eee">
        <br><p class="mt-2">{{$infowiki["extract"]}}</p><br>
        <form method="get" action="{{route('blogs.show',$post)}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-2 mt-3 mb-3">
                    <input type="submit" value="Tornar al Blog"/>
                </div>
            </div>
        </form>
    </div>

    </body>
</html>
