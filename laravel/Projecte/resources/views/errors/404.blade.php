<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Iniciar Sessió</title>
    </head>
    <style type="text/css">
        body {
            background-image: url("{{asset('space.gif')}}");
        }
        .tamany{
            font-size: xxx-large;
        }
        .eee{
            color: #EEE;
        }
        img{
            border-radius: 100%;
            opacity: 45%;
        }
    </style>
    <body>
    <!-- NAbEvAR -->
    @include('navbarBase')
    @include('rightmenu')
        <div class="container col-12 float-center clearfix global">
            <div class="row justify-content-center mt-4">
                <div class="col-md-12 inin justify-content-center text-center" >
                    <div class="row justify-content-center">
                        <div class="col-md-10 justify-content-center text-light tamany">
                            <p class="eee">404 | PÀGINA NO TROBADA</p>
                        </div>
                        <p class="eee">"Aquesta informació ha desaparegut en el buit"</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10 justify-content-center">
                            <img src="{{asset('bhole.gif')}}" width="57%" class="m-3">
                        </div>
                    </div>
                </div>
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
