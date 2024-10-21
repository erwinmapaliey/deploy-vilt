<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('images/erwmlogo.png') }}" />

    <title>{{ config('app.name') }}</title>
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="bg-primary text-gray-200">
    @inertia
</body>
</html>
