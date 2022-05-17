<!DOCTYPE html>
<html lang="en">
    <head>
        @if(Auth::user()->id != $row->id && Auth::user()->usertype == "U")
            <script>
                window.location.href = '{{route("index")}}'; //using a named route
            </script>
        @endif
        @include('head')
        <title>Perfil</title>
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
        @include('navbarAdUs')
        @include('rightmenu')
        <div class="container col-12 justify-content-center ">
            <div class="col-9 justify-content-center eee">
                <h3>Perfil</h3>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Username:</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <p>{{$row->username}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Nom:</p>
                    </div>
                    <div class="col-9  col-md-5">
                        <p>{{$row->name}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Cognoms:</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <p>{{$row->surnames}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Email:</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <p>{{$row->email}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Ciutat:</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <p>{{$row->location}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <p>Quantitat de posts:</p>
                    </div>
                    <div class="col-9 col-md-5">
                        <p>{{$row->postsquantity}}</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-1">
                        <p>Editar:</p>
                    </div>
                    <div class="col-1">
                        <a href="{{$row->id}}/edit"><button name="edit" value="{{$row->id}}"><i class="fa">&#xf044;</i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
