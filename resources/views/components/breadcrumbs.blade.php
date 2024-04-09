<nav {{$attributes}}>
    <ul class="flex space-x-1">
        <li class="hover:text-blue-500">
            <a href="/">Home</a>
        </li>
        @foreach($links as $label=>$link)
        <li>
            /
        </li>
        <li class="hover:text-blue-500">
            <a href="{{$link}}">{{$label}}</a>
        </li>
        @endforeach

    </ul>
</nav>