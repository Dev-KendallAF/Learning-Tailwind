<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>
    <script src="https://kit.fontawesome.com/eddade569a.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>
<body>

    @if ($subpage != '0')
    <x-layouts.navbar navtitle={{$navtitle}} navsubtitle={{$navsubtitle}} navtext={{$navtext}}/>
    
    @else
    <x-layouts.hero />

    @endif
    {{$content ?? ''}}

    <x-layouts.footer />
</body>
</html>