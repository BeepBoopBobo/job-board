<nav {{$attributes}}>
    <ul class="flex space-x-1">
        <li class="text-slate-50 hover:text-slate-400">
            <a href="/">Home</a>
        </li>
        @foreach($links as $label=>$link)
        <li class="text-slate-300">
            /
        </li>
        <li class="text-slate-50 hover:text-slate-400">
            <a href="{{$link}}">{{$label}}</a>
        </li>
        @endforeach

    </ul>
</nav>