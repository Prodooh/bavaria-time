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
<style>

    @font-face {
        font-family: 'Gobold';
        src: url('{{ asset('fonts/Gobold Regular.otf') }}') format('truetype');
    }

    body {
        margin-left: 0;
        margin-top: 0;
    }

    .img {
        position: relative;
    }
    .clima-1056x864-frio{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 40px;
        top: 725px;
        left: 768px;
        font-family: 'Gobold';
    }

    .clima-512x384-frio{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 20px;
        top: 316px;
        left: 374px;
        font-family: 'Gobold';
    }

    .clima-448x576-frio{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 24px;
        top: 499px;
        left: 295px;
        font-family: 'Gobold';
    }

    .clima-1056x864-calor{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 43px;
        top: 113px;
        left: 730px;
        font-family: 'Gobold';
    }

    .clima-512x384-calor{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 20px;
        top: 52px;
        left: 358px;
        font-family: 'Gobold';
    }

    .clima-448x576-calor{
        position: absolute;
        color: white;
        z-index: 999;
        font-size: 24px;
        top: 110px;
        left: 300px;
        font-family: 'Gobold';
    }


</style>
<div class="clima-{{$screen->size}}-{{$clima['temp']>=28 ? 'calor' : 'frio'}}">
    {{$clima['temp']}} °C
</div>
@if($clima['temp']>=28)
    <img class="img" src="{{asset('Weather/' . $screen->size . ' +28º.jpg')}}">
@else
    <img class="img" src="{{asset('Weather/' . $screen->size . ' -28º.jpg')}}">
@endif
</body>
</html>
