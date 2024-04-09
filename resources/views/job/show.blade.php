<x-layout>
    <x-breadcrumbs :links="['Jobs'=>route('jobs.index'), $job->title=> '#']" class="mb-2">
    </x-breadcrumbs>

    <x-job-card :job="$job">
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>
</x-layout>