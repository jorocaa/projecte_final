<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TÍTOL DE COS</h1>
    <h3>SUBTÍTOL DE COS</h3>
    <p>Contingut del cos</p>
</body>
</html>

-->
@component('mail::message')
    # Hello {{$content['name']}},

    {{$content['body']}}

    @component('mail::button', ['url' => $content['url']])
        Click Here
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
