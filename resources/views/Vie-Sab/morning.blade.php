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

    .time-800x464 {
        position: absolute;
        top: 357px;
        left: 53px;
        font-size: 45px;
        z-index: 999;
        color: white;
        font-weight: bold;
        font-family: 'Gobold';
    }

    .time-1024x640 {
        position: absolute;
        top: 482px;
        left: 77px;
        font-size: 55px;
        z-index: 999;
        color: white;
        font-weight: bold;
        font-family: 'Gobold';
    }

    .time-512x384 {
        position: absolute;
        top: 293px;
        left: 44px;
        font-size: 35px;
        z-index: 999;
        color: white;
        font-weight: bold;
        font-family: 'Gobold';
    }

    .time-1080x1920 {
        position: absolute;
        top: 1645px;
        left: 89px;
        font-size: 85px;
        z-index: 999;
        color: white;
        font-weight: bold;
        font-family: 'Gobold';
    }
</style>
<div class="time-{{$screen->size}}">
    {{$hora}}
</div>
<img class="img" src="{{asset('Viernes-Sabado/Morning/' . $screen->size . ' - 7PM.jpg')}}">
</body>
</body>
</html>
