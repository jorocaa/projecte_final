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
        <title>Post</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function() {
            $('#table').DataTable();
        } );</script>
</head>
    <body>
        @include('navbarAdPo')
        <table id="table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Titol</th>
                        <th>Categoria</th>
                        <th>Estat</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                        <th>Publicar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $row)
                        <tr>
                            <td><label>{{$row->title}}</label></td>
                            <td><label>{{$row->category}}</label></td>
                            <td><label>{{$row->state}}</label></td>
                            <td><a href="{{route('blogs.show',$row)}}"><button name="show" value="{{$row->id}}"><i class="fa">&#xf06e;</i></button></a></td>
                            <td><a href="{{route('blogs.edit',$row)}}"><button name="edit" value="{{$row->id}}"><i class="fa">&#xf044;</i></button></a></td>
                            <td><a href="{{route('blogs.destroy',$row)}}"><button name="del" value="{{$row->id}}"><i class="fa">&#xf1f8;</i></button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @include('rightmenu')
    </body>
</html>
