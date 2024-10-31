<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel + Vue CRUD User Profile</title>

    <!-- Tambahkan Style dengan Vite -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div id="app">
        <user-profile></user-profile>
    </div>

    <!-- Tambahkan Script dengan Vite -->
    @vite('resources/js/app.js')
</body>
</html>
