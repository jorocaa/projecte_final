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
<div class="container col-12 float-start eee">
    @if(isset($row->wikipedia))
        <div class="row justify-content-center mt-1">
            <div class="col-2">
                <button>WIKI</button>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-9 justify-content-center">
            <div class="row">
                <div class="col-md-4">
                    <h3>{{$row->title}}</h3>
                </div>
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
                    <div class="col-md-12">
                        <div class="Mapa">
                            <div id="map" style="height: 350px; margin-left: 20%"></div>
                        </div>
                    </div>
                </div>
            @endif
            @if(!session()->has('success'))
                @foreach($reserve as $res)
                    @if($row->idreservation == $res->id)
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
        </div>
    </div>
    <form method="post" name=form action="{{route('comments.store',$row)}}">
        @csrf
        <h3>AFEGIR COMENTARI</h3>
        <label>Contingut:</label><br><textarea id="comentari" name="comentari"></textarea>
        <br><input type="submit" name="submitcomment" value="Enviar">
    </form>
    @foreach($comment as $com)
        <hr></hr>
        <h5>{{$com->title}}</h5>
        <p>{{$com->content}}</p>
    @endforeach
</div>
</body>
</html>
