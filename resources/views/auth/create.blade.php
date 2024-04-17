<x-layout>
    <h1 class="font-medium text-4xl my-8 text-center text-slate-100 ">Sign in:</h1>
    <x-card class="p-8">
        <form action="{{route('auth.store')}}" method="POST">
            @csrf

            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-900">
                    Email
                    <x-text-input name="email" type="email"></x-text-input>
                </label>
            </div>
            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-900">
                    Password
                    <x-text-input name="password" type="password"></x-text-input>
                </label>
            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <label>
                        <input type="checkbox" class="rounded" name="remember" />
                        Remember me
                    </label>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
                </div>
            </div>
            <x-button class="p-2 w-full">
                Log in
            </x-button>
        </form>

    </x-card>
</x-layout>