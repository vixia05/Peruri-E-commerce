<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-slate-100 bg-opacity-80">
    @include('layouts.navbar')
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
