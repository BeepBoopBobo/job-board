<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\JobPost;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class JobApplicationController extends Controller
{
    use AuthorizesRequests;
    /**
     * Show the form for creating a new resource.
     */
    public function create(JobPost $job)
    {
        $this->authorize('apply', $job);
        return view('job_application.create', ['job' => $job]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPost $job, Request $request)
    {

        $this->authorize('apply', $job);

        $validatedData = $request->validate([
            'expected_salary' => 'required|min:1|max:1000000',
            'cv' => 'required|file|mimes:pdf|max:2048',
        ]);

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');


        $job->jobApplications()->create(
            [
                'user_id' => auth()->user()->id,
                'expected_salary' => $validatedData['expected_salary'],
                'cv_path' => $path,
            ]
        );

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application submitted.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
