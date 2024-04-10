<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Job Board</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body
    class="mx-auto h-full bg-no-repeat bg-fixed mt-10 max-w-2xl text-slate-700 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500">
    {{$slot}}
</body>

</html>