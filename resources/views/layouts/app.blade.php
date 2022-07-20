<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}">
    <title>Peruri E-Commerce</title>
</head>
<body>
    @include('layouts.navbar')
    <main>
        @yield('content')
    </main>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
</html>
