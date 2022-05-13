@php
$usertype = session('usertype')
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <title>Registrar-se</title>
</head>
<body>
    <!-- NAbEvAR -->
    @include('navbarBase')
    @include('rightmenu')
<h3>REGISTER</h3>
<form method="post" name=form action="{{route('users.store')}}">

    <div class="container">
        <!-- CAMP 1 -->
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="name">Nom:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="name" name="name"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="surnames">Cognom:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="surnames" name="surnames"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="username">Username:*</label>
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
                        <label class="intlef" for="email">Email:*</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="email" name="email"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="location">Ciutat:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="location" name="location"><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- CAMP 4 -->
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="contrasenya">Contrasenya:*</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="contrasenya" name="contrasenya"><br>
                    </div>
                </div>
            </div>
        </div>
        <!-- CAMP 5 -->
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="confirmarcontrasenya">Confirmar Contrasenya:*</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="confirmarcontrasenya" name="confirmarcontrasenya"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        <label class="intlef">Aquesta informació no es visible per altres usuaris</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOTÓ -->
        <div class="row justify-content-center mt-1">
            <div class="col-2">
                <input class="col3 justify-content-center" type="submit" name="submitpost" value="Enviar Datos">
            </div>
        </div>
    </div>
</form>
</body>
</html>
