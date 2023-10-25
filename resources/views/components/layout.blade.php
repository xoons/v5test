<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Homepage' }}</title>

    <!-- CSS -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <h1 class="text-center p-2">{{ $title }}</h1>
    {{ $slot }}
</body>

</html>