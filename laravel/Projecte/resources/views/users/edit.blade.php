
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Editar Perfil</title>
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
<form method="post" name=form action="{{route('users.update',$user)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h3>EDITAR USUARI</h3>
    <div class="container col-12 justify-content-center ">
    <div class="container col-9 justify-content-center eee">
        <div class="row justify-content-center">
            <div class="col-9 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="name">Nom:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="name" name="name" value="{{$user->name}}"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="surnames">Cognom:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="surnames" name="surnames" value="{{$user->surnames}}"><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-9 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="username">Username:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group" type="text" id="username" name="username" value="{{$user->username}}"><br>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()->usertype == "A")
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="ut">Tipus Usuari:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <select class="intlef" type="select" id="ut" name="ut">
                                @if($user->usertype == "U")
                                    <option selected>U</option>
                                    <option>M</option>
                                    <option>A</option>
                                @endif
                                @if($user->usertype == "M")
                                    <option>U</option>
                                    <option selected>M</option>
                                    <option>A</option>
                                @endif
                                @if($user->usertype == "A")
                                    <option>U</option>
                                    <option>M</option>
                                    <option selected>A</option>
                                @endif

                            </select></br></br>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-9 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label class="intlef" for="location">Ciutat:</label>
                    </div>
                    <div class="col-md-8 col-lg-6">
                        <input class="input-group " type="text" id="location" name="location" value="{{$user->location}}"><br>
                    </div>
                </div>
            </div>
        </div>
        @if(Auth::user()->usertype == "A")
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="intlef">DADES DE MODERADORS</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="salary">Salari:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group " type="text" id="salary" name="salary" value="{{$user->salary}}"><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="dni">DNI:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group " type="text" id="dni" name="dni" value="{{$user->dni}}"><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="iban">IBAN:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group " type="text" id="iban" name="iban" value="{{$user->iban}}"><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9 col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="intlef" for="nuss">NUSS:</label>
                        </div>
                        <div class="col-md-8 col-lg-6">
                            <input class="input-group " type="text" id="nuss" name="nuss" value="{{$user->nuss}}"><br>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- BOTÓ -->
        <div class="row justify-content-center mt-1">
            <div class="col-3">
                <input class="col-12 justify-content-center" type="submit" name="submitpost" value="Enviar Datos">
            </div>
        </div>
    </div>
    </div>
</form>
</body>
</html>
<script type="text/javascript">
    inputF = document.getElementById('linkres')
    inputF.onchange = evt => {
        const [file] = inputF.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    var radiobuttonsi = document.getElementById('si');
    var radiobuttonno = document.getElementById('no');
    var triarimatge = document.getElementById('triarimatge');

    radiobuttonsi.addEventListener('click',event=>{

        triarimatge.removeAttribute('hidden');

    });

    radiobuttonno.addEventListener('click',event=>{

        triarimatge.setAttribute('hidden',true);
    });
</script>
