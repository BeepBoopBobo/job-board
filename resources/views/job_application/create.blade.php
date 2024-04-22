<x-layout>
    <x-breadcrumbs :links="['Jobs'=>route('jobs.index'), $job->title=> route('jobs.show', $job), 'Apply'=> '#']"
        class="mb-2">
    </x-breadcrumbs>
    <x-job-card :$job></x-job-card>
    <x-card>
        <h2 class="mb-4 text-lg font-semibold">
            Your Job Application
        </h2>
        <form action="{{route('jobs.application.store', $job)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold text-slate-900">
                    Expected salary:
                    <x-text-input name="expected_salary" type="number" />
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-semibold text-slate-900">
                    Upload CV:
                    <x-text-input type="file" name='cv' />
                </label>
            </div>
            <x-button class="w-full p-2">Apply</x-button>
        </form>

    </x-card>
</x-layout>