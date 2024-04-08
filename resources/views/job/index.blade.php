<x-layout>
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