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
    <body>
        <form method="post" name=form action="recibir.php">
            <nav class="navbar navbar-dark bg-dark navbar-default navbar-static-top navbar-expand-md mb-3 ">
                <div class="container-fluid ">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbartop" aria-controls="navbartop" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse " id="navbartop">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item"><a class="nav-link active" href="home.php">home</a></li>
                            
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Mostrar Software</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                    <li><a class="dropdown-item " href="show.php?sistema=Linux">Linux Base</a></li>
                                    <li><a class="dropdown-item" href="show.php?sistema=Windows">Windows Base</a></li>
                                    <li><a class="dropdown-item" href="showpdi.php?sistema=Linux">Linux PDI</a></li>
                                    <li><a class="dropdown-item" href="showpdi.php?sistema=Windows">Windows PDI</a></li>
                                    <li><a class="dropdown-item" href="showtocreateimag.php?sistema=Linux">Linux</a></li>
                                    <li><a class="dropdown-item" href="showtocreateimag.php?sistema=Windows">Windows</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item"><a class="nav-link " href="showimg.php">Categories </a></li>
                            <!-- @if($_SESSION['tipus']=="A")
                                @if($_SESSION['tipus'] == "A" || $_SESSION['tipus'] == "M") -->
                                <li class="nav-item"><a class="nav-link " href="showimg.php">Administrar Posts </a></li>
                                <!-- @endif -->
                                <li class="nav-item"><a class="nav-link " href="showimg.php">Administrar Usuaris </a></li>
                            <!-- @endif -->
                        </ul>
                    </div>
                </div> 
            </nav>
            <div class="container">
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
                        <label class="intlef" for="contingut">Contingut:</label>
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
                
                <!-- <div class="row justify-content-center">
                    <div class="col-9 col-md-5">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="intlef" for="tipusuari"> Usuari:</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <select class="form-select border border-secondary" type="select" id="tipusuari" name="tipusuari">
                                    <option>TIC</option>
                                    <option>LAB</option>
                                    <option>PDI</option>
                                </select><br>
                            </div>
                        </div>
                    </div>  
                </div> -->
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
                            <div class="col-md-4 col-lg-3">
                            <label class="intlef" for="coor">latitude:</label><input class="input-group " type="text" id="nom" name="nom"><br>
                            </div>
                            <div class="col-md-4 col-lg-3">
                            <label class="intlef" for="coor">longitude:</label><input class="input-group " type="text" id="nom" name="nom"><br>
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
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="img" name="img"><br>
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
        </form>
    </body>
</html>