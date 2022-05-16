<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Incidencia</title>
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
        <form method="POST" name=form action="{{route('incidencies.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="container col-12 justify-content-center ">
                <div class="col-9 justify-content-center eee" >
                    <h3>INCIDENCIES</h3>
                    <div class="row justify-content-center ">
                        <div class="col-md-11 justify-content-center">
                            <label class="intlef" for="reason">Motiu:*</label>
                        </div>
                        <div class="col-9 col-md-11 justify-content-center">
                        <select class="form-select" name="title" aria-label="Default select example">
                            <option name="title" value="post">Un post</option>
                            <option name="title" value="pagina">La pagina no carrega</option>
                            <option name="title" value="funció">Una Funcionalitat</option>
                            <option name="title" value="altres"> Altres </option>
                        </select>
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-9 col-md-11 ">
                            <label class="intlef" for="desc">Descripció:*</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-9 col-md-11 ">
                            <textarea class="form-control col-20 border border-secondary" id="desc" name="desc" rows="5"></textarea><br>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-9 col-md-11 text-center ">
                            <input class="col3 justify-content-center" type="submit" name="submitpost" value="Enviar Incidencia">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
