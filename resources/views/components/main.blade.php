<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('dist/css/_app.css') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Smart Manajement | {{ $title }} </title>
</head>
<body class="{{ $bodyclass }}">
    <div class="contents">
        @yield('content')
    </div>
</body>
</html>