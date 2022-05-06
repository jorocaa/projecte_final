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
        <form method="post" name=form action="{{route('blogs.store')}}" enctype="multipart/form-data">
            @csrf
            <h3>PETICIÓ ELIMINACIÓ</h3>
            <div class="container col-12 justify-content-center ">
                <div class="row justify-content-center ">
                    <div class="col-9 col-md-8 eee">
                        <div class="row ">
                            <div class="col-md-4">
                                <label class="intlef" for="reason">Motiu:*</label>
                            </div>
                            <div class="col-md-8 col-lg-6">
                                <input class="input-group " type="text" id="reason" name="reason"><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
