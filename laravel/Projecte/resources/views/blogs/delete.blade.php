<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Eliminar Post</title>
        <style>
        body{
                background: #513a8b;
        }
        .eee{
            background: #eee;
        }
        </style>
    </head>
    <body>
        @include('navbarBase')
        @include('rightmenu')
        <form method="post" name=form action="{{route('bdestroyp',$blog)}}" enctype="multipart/form-data">
            @csrf
            <h3>PETICIÓ ELIMINACIÓ</h3>
            <div class="container col-12 justify-content-center ">
                <div class="col-9 justify-content-center eee" >
                        <!-- <div class="col-md-4">
                            <label class="intlef" for="reason">Motiu:*</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecciona el motiu d'eliminació</option>
                            <option value="no me gusta el contenido">No m'agrada el contingut</option>
                            <option value="imatge == nono">La imatge es inapropiada</option>
                            <option value="spam">Es spam</option>
                            <option value="errors">La informació es incorrecta</option>
                        </select>
                        </div> -->
                        <div class="row justify-content-center ">
                            <div class="col-9 col-md-12 ">
                                <label class="intlef" for="whydel">Motiu:*</label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-9 col-md-12 ">
                                <textarea class="form-control col-20 border border-secondary" id="whydel" name="whydel" rows="5"></textarea><br>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-9 col-md-12 text-center ">
                                <input class="col3 justify-content-center" type="submit" name="submitpost" value="Actualitzar Dades">
                            </div>
                        </div>
                </div>
            </div>
        </form>
    </body>
</html>
