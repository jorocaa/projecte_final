<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        @guest
            <script>
                window.location.href = '{{route("index")}}'; //using a named route
            </script>
        @endguest
        @auth
        @if(Auth::user()->usertype == "U")
            <script>
                window.location.href = '{{route("index")}}'; //using a named route
            </script>
            @endif
        @endauth
        <title>Llista Posts General</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
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
        @include('navbarAdPo')
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        @include('rightmenu')
        <div class="container eee">
        <h3>Administrar Posts</h3>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Usuari</th>
                                <th>Titol</th>
                                <th>Descripció</th>
                                <th>Crud</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
    $(function (){
        var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('illistar') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'idclient', name: 'idclient'},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        });
    })
    </script>
</html>
