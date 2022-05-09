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
        <title>Porfile</title>
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
