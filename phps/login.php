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
    <!-- NAbEvAR -->
<h3>LOGIN</h3>
<form method="post" name=form action="recibir.php">
    <div class="container">
        <!-- CAMP 1 -->
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="username">Username:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="username" name="username"><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- CAMP 2 -->
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="contrasenya">Contrasenya:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="contrasenya" name="contrasenya"><br>
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTÓ ENTRAR -->
        <div class="row justify-content-center mt-1">
            <div class="col-2">
                <input class="col3 justify-content-center" type="submit" name="submitlogin" value="Enviar">
            </div>
        </div>

        <!-- BOTÓ REGISTRAR-SE -->
        <div class="row justify-content-center mt-1">
            <div class="col-6">
                <p>No t'has registrat encara? Registra't ara clicant al següent botó!</p>
            </div>
        </div>
        <div class="row justify-content-center mt-1">
            
            <div class="col-2 ">
                <input class="col3 justify-content-center" type="submit" name="submitregister" value="Registro">
            </div>
        </div>
        
        
            
    </div>
</form>
</body>
</html>