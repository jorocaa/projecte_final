<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>{{config('app.name')}}</title>
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
        @include('navbarHome')
        @include('rightmenu')
        <div class="container col-12 float-center clearfix global">
        @foreach($result as $row)
                <div clcenterass="row justify-content-center mt-4">
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
            margin-top: 275px;
        }
    }
</style>
