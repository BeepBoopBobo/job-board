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
    <nav class="mb-8 flex justify-between text-large font-medium text-white">
        <ul>
            <li><a href="{{route('jobs.index')}}">Home</a></li>
        </ul>
        <ul class="flex space-x-2">
            @auth
            <li>
                <a href="{{route('my-job-applications.index')}}">
                    {{auth()->user()->name?? 'Anonymus'}}: Applications
                </a>
            </li>
            <li>
                <form action="{{ route('auth.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Logout</button>
                </form>
            </li>
            @else
            <li> <a href="{{route('auth.create')}}">Sign in</a></li>
            @endauth
        </ul>
    </nav>

    @if(session('success'))
    <div class="my-8 p-4 rounded-md border-l-4 border-green-600 bg-green-200 text-green-700 opacity-75" role="alert">
        <p class="font-bold">Success!</p>
        <p>{{session('success')}}</p>
    </div>
    @endif

    {{$slot}}
</body>

</html>