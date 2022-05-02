
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
    <title>Formulario</title>
</head>
<form method="post" name=form action="{{route('blogs.update')}}" enctype="multipart/form-data">
    @include('navbarBase')
    <h3>EDITAR POST</h3>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
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
            <div class="col-9 col-md-5">
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
            <div class="col-9 col-md-5">
                <label class="intlef" for="contingut">Contingut:</label>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <textarea class="form-control col-20 border border-secondary" id="contingut" name="contingut" value="{{$blog->contents}}" rows="5"></textarea><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="linkwiki">Enllaç a wikipedia:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="linkwiki" name="linkwiki" value="{{$blog->wikipedia}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
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
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="img">Imagte:</label>
                    </div>
                    <img class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="img" name="img"><br>
                        <img src="{{asset("storage/$file->filepath")}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="linkres">Enllaç Reserva:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="linkres" name="linkres" value="{{$reserva->reservationlink}}"/><br>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()->usertype != "U"){
            <div class="row justify-content-center">
                <div class="col-9 col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="nomempresa">Nom empresa:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group " type="text" id="nomempresa" name="nomempresa"/><br>
                        </div>
                    </div>
                </div>
            </div>
        }
        <div class="row justify-content-center mt-1">
            <div class="col-2">
                <input type="hidden" name="idreservation" value={{$blog->idreservation}}/>
                <input type="hidden" name="imgid" value={{$blog->idimage}}/>
                <input type="hidden" name="namebefore" value={{$image->filePath}}/>
                <input class="col3 justify-content-center" type="submit" name="submitpost" value="Actualitzar Dades">
            </div>
        </div>
    </div>
    @include('rightmenu')
</form>
</body>
</html>
