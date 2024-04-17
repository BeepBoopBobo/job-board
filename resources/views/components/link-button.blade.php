<a {{$attributes->class(['p-1 font-semibold rounded border border-slate-500 text-sm shadow-sm hover:bg-slate-100'])}}
    href="{{route($passedRoute,$passedData)}}"
    >
    {{$slot}}
</a>