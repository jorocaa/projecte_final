<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Iniciar Sessió</title>
</head>
<body>
    <!-- NAbEvAR -->
    @include('navbarBase')
    @include('rightmenu')
<h3>LOGIN</h3>

<form method="post" name=form action="{{route('users.login')}}">
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
            <div class="col-2">
                <button><a class="button" href="{{route('auth.register')}}" style="text-decoration: none">Registro</a></button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
