<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Applications'=> '#']">
    </x-breadcrumbs>
    @forelse($applications as $application)
    <x-job-card :job="$application->jobPost">
        <div class="flex items-center justify-between text-sm text-slate-500">
            <div>
                <div>
                    Applied: {{$application->created_at->diffForHumans()}}
                </div>
                <div>
                    Other {{Str::plural('applicant', $application->jobPost->job_applications_count-1)}}
                    {{$application->jobPost->job_applications_count-1}}
                </div>
                <div>
                    Asking salary: ${{number_format($application->expected_salary)}}
                </div>
                <div>
                    Average asking salary:
                    ${{number_format($application->jobPost->job_applications_avg_expected_salary)}}
                </div>
            </div>
            <div>
                <form action="{{route('my-job-applications.destroy', $application)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button>Cancel</x-button>
                </form>
            </div>
        </div>
    </x-job-card>
    @empty
    <div class="text-center text-white">
        <div>No applications yet.</div>
        <div>
            <a href="{{route('jobs.index')}}" class="hover:text-slate-300 hover:underline">Find more here.</a>
        </div>
    </div>
    @endforelse
</x-layout>