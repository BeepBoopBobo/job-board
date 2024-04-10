<div class="relative">
    @if($formId)
    <button class="absolute right-1 top-0 flex h-full items-center" type="button"
        onclick="document.getElementById('{{$name}}').value=''; document.getElementById('{{$formId}}').submit()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-4 h-4 text-slate-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    @endif
    <input type="{{$type}}" placeholder="{{$placeholder}}" name="{{$name}}" value="{{$value}}" id="{{$name}}"
        class="pr-6 w-full rounded-md border-0 py-1 px-2 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2" />
</div>