<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$post1}}</h1>
    @foreach($imena as $ime)
        @if($ime == "Ivan")
            <li>Josip</li>
        @else
            <li>{{$ime}}</li>
        @endif
    @endforeach
</body>
</html>
