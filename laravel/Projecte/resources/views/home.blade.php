<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>{{config('app.name')}} - {{config('app.subtitle')}}</title>
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
            card{
                z-index:3;
            }
            .atit{
                color:#505;
                text-decoration: none;
            }
            .cookie-consent{
                position: fixed;
                bottom: 14px;
                right: 22px;
                width: 260px;
                padding-top: 7px;
                height: 123px;
                color: #fff;

                line-height: 20px;
                padding-left: 10px;
                padding-right: 10px;
                font-size: 14px;
                background: #292929;
                z-index: 120;
                cursor: pointer;
                border-radius: 3px;
            }

            .allow-button{
                height: 20px;
                width: 104px;
                color: #fff;
                font-size: 12px;
                line-height: 10px;
                border-radius: 3px;
                border: 1px solid green;
                background-color: green;
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
            <div class="row justify-content-center text-center">
                <div class="col-12 text-center justify-content-center mt-4">
                    <br>
                    <h1 style="background: linear-gradient(to right,black,darkgoldenrod);-webkit-background-clip: text;color: transparent; font-size: 400%">{{config('app.name')}}</h1>
                    <h6 style="font-size: 125%">{{config('app.subtitle')}}</h6>
                    <br>
                </div>
            </div>
        @foreach($result as $row)
                <div class="row justify-content-center mt-3">
                    <div class="col-md-12 justify-content-center inin" >
                        <div class="row">
                            <div class="col-md-12">
                                <a class="atit" href="{{route('blogs.show',$row)}}"><h3>{{$row->title}}</h3></a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-11 justify-content-center" style="text-align: justify;">
                                {{$row->content}}
                            </div>
                        </div>
                        @foreach ($usuari as $key => $value)
                            @if($key == $row->id)
                                <div class="row ">
                                    <div class="col-md-12 ">
                                        <span style="font-size: small; color: darkslategrey">Creat per: {{$value}}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <div class="row ">
                            <div class="col-md-12 ">
                                <span style="font-size: small; color: darkslategrey">Data de creació: {{$row->created_at}}</span>
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
    <div class="cookie-consent" id="bis">
        <span>Aquest lloc utilitza dades de sessií per millorar l'experiència d'usuari. Veure <a href="{{route('termcondition')}}" class="ml-1 text-decoration-none">Política de privacitat X Termes i Condicions</a></span>
        <div class="mt-2 d-flex align-items-center justify-content-center g-2">
            <button class="allow-button mr-1" id="cuit1">Allow cookies</button>
            <button class="allow-button" id="cuit2">cancel</button>
        </div>
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
<script type="text/javascript">
    let bis = document.getElementById('bis');
    let cuit1 = document.getElementById('cuit1');
    let cuit2 = document.getElementById('cuit2');

    cuit1.addEventListener('click',event=>{
        bis.setAttribute('hidden',true);
    })
    cuit2.addEventListener('click',event=>{
        bis.setAttribute('hidden',true);
    })
</script>
