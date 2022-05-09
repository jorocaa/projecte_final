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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Formulario</title>
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
                <div class="col-9 col-md-8 eee">
                    <div class="row ">
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
                            <div class="col-9 col-md-12 eee">
                                <label class="intlef" for="whydel">Motiu:*</label>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-9 col-md-12 eee">
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
            </div>
        </form>
    </body>
</html>
