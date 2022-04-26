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
    </head>
    <body>
        <form method="post" name=form action="recibir.php">
            @include('navbarBase.php')
            <h3>CREAR POST</h3>
            
            <div class="container col-9 float-start ">
                <div class="row justify-content-center">
                    <div class="col-9 col-md-5">
                        <div class="row">
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
                    <div class="col-9 col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="categoria">Categoria:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="categoria" name="categoria"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-5">
                        <label class="intlef" for="contingut">Contingut:*</label>
                    </div>  
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <textarea class="form-control col-20 border border-secondary" id="contingut" name="contingut" rows="5"></textarea><br>
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
                                <input class="input-group " type="text" id="linkwiki" name="linkwiki"><br>
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
                            <div class="col-lg-4">
                            <label class="intlef" for="coor">latitude:</label><input class="input-group " type="text" id="nom" name="nom"><br>
                            </div>
                            <div class="col-lg-4">
                            <label class="intlef" for="coor">longitude:</label><input class="input-group " type="text" id="nom" name="nom"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-9 col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="img">Imatge:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="file" id="img" name="img"><br>
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
                                <input class="input-group " type="text" id="linkres" name="linkres"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-1">
                    <div class="col-2">
                        <input class="col3 justify-content-center" type="submit" name="submitpost" value="Enviar Datos">   
                    </div> 
                </div> 
            </div>
            @include('rightmenu.php')
        </form>
    </body>
</html>