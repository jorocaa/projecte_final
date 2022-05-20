
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    @include('head')
    @guest
        <script>
            window.location.href = '{{route("index")}}'; //using a named route
        </script>
    @endguest
    @auth
    @if(Auth::user()->id != $blog->idclient && Auth::user()->usertype == "U")
        <script>
            window.location.href = '{{route("index")}}'; //using a named route
        </script>
        @endif
    @endauth
    <title>Editar Post</title>
    <style>
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
    </style>
</head>
<body>
@include('navbarBase')
@include('rightmenu')
<form method="post" name=form action="{{route('blogs.update',$blog)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="container col-12 justify-content-center ">
    <div class="container col-9 justify-content-center eee">
        <h3>EDITAR POST</h3>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row ">
                    <div class="col-md-4">
                        <label class="intlef" for="titol">Titol:*</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="titol" name="titol" value="{{$blog->title}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="categoria">Categoria:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="categoria" name="categoria" value="{{$blog->category}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <label class="intlef" for="contingut">Contingut:</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <textarea class="form-control col-20 border border-secondary" id="contingut" name="contingut" rows="5">{{$blog->content}}</textarea><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="linkwiki">Títol o Enllaç de wikipedia:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="linkwiki" name="linkwiki" value="{{$blog->wikipedia}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="coor">Coordenades:</label>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <label class="intlef" for="coor">latitude:</label><input class="input-group " type="text" id="lat" name="lat" value="{{$blog->latitude}}"/><br>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <label class="intlef" for="coor">longitude:</label><input class="input-group " type="text" id="long" name="long"value="{{$blog->longitude}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        @if($image->filepath != '')
            <div class="row justify-content-center">
                <div class="col-9 col-md-12 ">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="img">Imatge:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <a href="{{asset('/storage/'.$image->filepath)}}" target="_blank"><img width="100%" height="100%" src="{{asset('/storage/'.$image->filepath)}}"/></a>
                        </div>
                    </div>
                    <div class="row">
                        <fieldset class="mt-4 mb-5">
                            <label class="col-md-4">Eliminar la imatge:</label>
                            <input type="radio" id="si" name="deleteimage" value="si" class="col-md-2 col-lg-1">
                            <label for="si">Sí</label>
                            <input type="radio" id="no" name="deleteimage" value="no" class="col-md-2 col-lg-1" checked>
                            <label for="no">No</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" id="triarimatge" hidden>
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="img">Afegir imatge:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group" type="file" id="img" name="img" onchange="readURL(this);"><br>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="img">Imatge:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group" type="file" id="img" name="img"><br>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-9 col-md-12 ">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="linkres">Correu de Contacte:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        @foreach($reserva as $res)
                            <input class="input-group " type="text" id="linkres" name="linkres" value="{{$res->reservationlink}}"><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @auth
        @if(Auth::user()->usertype != "U")
            <div class="row justify-content-center">
                <div class="col-9 col-md-12 ">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="nomempresa">Nom empresa:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            @foreach($reserva as $res)
                                <input class="input-group " type="text" id="nomempresa" name="nomempresa" value="{{$res->namecompany}}"/><br>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center ">
                <div class="col-9 col-md-6 text-center mb-2">
                    <input type="hidden" name="idreservation" value="{{$blog->idreservation}}"/>
                    <input class="col-11 justify-content-center" type="submit" name="submitpost" value="Actualizar i Publicar">
                </div>
                <div class="col-9 col-md-6 text-center ">
                    <input type="hidden" name="idreservation" value="{{$blog->idreservation}}"/>
                    <input class="col-11 justify-content-center" type="submit" name="submitpost" value="Actualizar i Despublicar">
                </div>
            </div>
        @else
        @if($blog->state=="publicat")
            <div class="row justify-content-center text-center">
                <div class="col-9 col-md-12 text-center ">
                    <p>*Aquest blog está publicat.. Si realitzes canvis es despublicará temporalment*</p>
                </div>
            </div>

        @endif

            <div class="row justify-content-center text-center">
                <div class="col-9 col-md-12 text-center ">
                    <input type="hidden" name="idreservation" value="{{$blog->idreservation}}"/>
                    <input class="col-3 justify-content-center" type="submit" name="submitpost" value="Actualitzar Dades">
                </div>
            </div>
        @endif
        @endauth
    </div>
    </div>
</form>
</body>
</html>
<script type="text/javascript">
    inputF = document.getElementById('linkres')
    inputF.onchange = evt => {
        const [file] = inputF.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    var radiobuttonsi = document.getElementById('si');
    var radiobuttonno = document.getElementById('no');
    var triarimatge = document.getElementById('triarimatge');

    radiobuttonsi.addEventListener('click',event=>{

        triarimatge.removeAttribute('hidden');

    });

    radiobuttonno.addEventListener('click',event=>{

        triarimatge.setAttribute('hidden',true);
    });
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
