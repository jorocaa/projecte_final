<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')

        <title>Crear Post</title>
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
        <form method="post" name=form action="{{route('blogs.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="container col-12 justify-content-center ">
            <div class="container col-9 justify-content-center eee">
                <h3>CREAR POST</h3>
                <div class="row justify-content-center ">
                    <div class="col-9 col-md-12 ">
                        <div class="row ">
                            <div class="col-md-4">
                                <label class="intlef" for="titol">Titol:*</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="titol" name="titol"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-12">
                        <div class="row ">
                            <div class="col-md-4">
                                <label class="intlef" for="categoria">Categoria:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="categoria" name="categoria"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-9 col-md-12">
                        <label class="intlef" for="contents">Contingut:*</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <textarea class="form-control col-20 border border-secondary" id="contents" name="contents" rows="5"></textarea><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="linkwiki">Títol o Enllaç de wikipedia:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="linkwiki" name="linkwiki"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="coor">Coordenades:</label>
                            </div>
                            <div class="col-lg-4">
                            <label class="intlef" for="lat">latitude:</label><input class="input-group " type="text" id="lat" name="lat"><br>
                            </div>
                            <div class="col-lg-4">
                            <label class="intlef" for="long">longitude:</label><input class="input-group " type="text" id="long" name="long"><br>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="row justify-content-center">
                    <div class="col-9 col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="linkres">Correu de Contacte:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="linkres" name="linkres"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                <div class="col-9 col-md-12 text-center ">
                        <input class="col3 " type="submit" name="submitpost" value="Enviar Datos">
                </div>
                </div>
            </div>
        </form>
    </body>
</html>
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
