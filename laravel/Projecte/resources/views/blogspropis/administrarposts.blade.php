<!DOCTYPE html>
<html lang="en">
    <head>
        @include('head')
        <title>Administrar Posts Propis</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <style>
            .eee{
                background-color: #eee;
                border: #505 1px solid;
                opacity: 0.92;
            }
            body{
                /*Firts->background: #513a8b;*/
                /*background: linear-gradient(to bottom right, #513a8b, cadetblue);*/
                background-image: url({{asset('15.jpg')}});
                background-repeat: repeat;
                background-size: 100%;
            }
        </style>
    </head>
<body>
        @include('navbarBase')
        @include('rightmenu')
        <div class="container eee">
        <h3>Els meus posts</h3>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped data-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titol</th>
                                <th>Categoria</th>
                                <th>Estat</th>
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
            ajax: "{{ route('bllistarp') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'category', name: 'category'},
                {data: 'state', name: 'state'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
            });
        })
    </script>
</html>
<style>
    @media only screen and (max-width: 768px){
        .eee{
            @if(isset(Auth::user()->usertype))
            margin-top: 275px;
            @else
            margin-top: 200px;
        @endif
}
    }
</style>
