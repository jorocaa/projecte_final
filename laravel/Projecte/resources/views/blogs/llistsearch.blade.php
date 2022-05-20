<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Resultat de: {{$buscar}}</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
        <style>
            hr{
                height: 1px;
                background-color: black;
                border: none;
            }
            .global{
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
        <h3>Resultats de la busqueda</h3>
        @foreach($result as $row)
            <div class="row justify-content-center mt-4">
                <div class="col-md-11 inin" >
                    <div class="row">
                        <div class="col-md-12">
                            <a class="atit" href="{{route('blogs.show',$row)}}"><h3>{{$row->title}}</h3></a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 ">
                            {{$row->content}}
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 ">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </body>
</html>
<style>
    @media only screen and (max-width: 768px){
        .global{
            @if(isset(Auth::user()->usertype))
            margin-top: 275px;
            @else
            margin-top: 200px;
        @endif
}
    }
</style>
