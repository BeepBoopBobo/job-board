<x-layout>
    <x-breadcrumbs :links="['Jobs'=>route('jobs.index'), $job->title=> '#']" class="mb-2">
    </x-breadcrumbs>

    <x-job-card :job="$job">
        <p class="text-sm text-slate-500 mb-4">
            {!! nl2br(e($job->description)) !!}
        </p>
        @can('apply', $job)
        <x-link-button passedRoute="jobs.application.create" :passedData="$job" class="px-2">
            Apply
        </x-link-button>
        @else
        <div class="text-center text-sm text-gray-600 font-medium">You have already applied.</div>

        @endcan
    </x-job-card>

    <x-card>
        <h2 class="mb-4">
            Other Jobs from the {{$job->employer->company_name}}:
        </h2>
        <div class="text-sm text-slate-500">
            @foreach($job->employer->jobPosts as $otherJob)
            <div class="mb-4 flex justify-between p-2  hover:bg-slate-100">
                <div class="text-slate-700">
                    <a href="{{route('jobs.show', ['job'=> $otherJob])}}">
                        {{$otherJob->title}}
                    </a>
                    <div class="text-xs text-slate-400">
                        Created at: {{$otherJob->created_at->diffForHumans()}}
                    </div>
                </div>
                <div class="text-xs">${{number_format($otherJob->salary)}}</div>
            </div>
            @endforeach
        </div>
    </x-card>

</x-layout>