<x-layout>
    <x-breadcrumbs :links="['Jobs'=>route('jobs.index')]" class="mb-2">
    </x-breadcrumbs>

    <x-card class="mb-4 text-sm">
        <form action="{{route('jobs.index')}}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-2">
                <div>
                    <div class="mb-1 font-semibold">
                        Search
                    </div>
                    <x-text-input name="search" value="{{request('search')}}" placeholder="Search by text"
                        type="text" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Salary
                    </div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{request('min_salary')}}" placeholder="From"
                            type="number" />
                        <x-text-input name="max_salary" value="{{request('max_salary')}}" placeholder="To"
                            type="number" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Experience
                    </div>
                    <x-radio-group name='experience' :options="App\Models\JobPost::$experience" />

                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Field
                    </div>
                    <x-radio-group name='category' :options="App\Models\JobPost::$category" />
                </div>
            </div>
            <button class="w-full py-2 hover:bg-slate-100" type="submit">Filter</button>
        </form>

    </x-card>
    @foreach($jobs as $job)
    <x-job-card :job="$job">
        <div>
            <x-link-button :passed-route="'jobs.show'" :passed-data="$job">
                Show details
            </x-link-button>
        </div>
    </x-job-card>
    @endforeach
</x-layout>