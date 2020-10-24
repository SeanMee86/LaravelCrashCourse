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
<h1>Hello welcome to my homepage</h1>
@foreach($activities as $activity)
    <h1>{{$activity->name}}</h1>
    <br>
    {{$activity->description}}
    <br>
    {{$activity->duration}}
    <br>
@endforeach
</body>
</html>
