<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display all jobs
     */
    public function index()
    {
        $jobs = Job::all();
        $companies = Company::all();
        return view('jobs.index', compact('jobs', 'companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        $categories = Category::all();
        $locations = Company::distinct('city')->pluck('city');
        return view('jobs.create', compact('companies', 'categories', 'locations'));
    }

    /**
     * Store a newly created Job in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'mission' => 'required|string',
            'skills' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $job = new Job();
        $job->title = $request->input('title');
        $job->start = $request->input('start');
        $job->company_id = $request->input('company_id');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->mission = $request->input('mission');
        $job->skills = $request->input('skills');
        $job->category_id = $request->input('category_id');

        $category = Category::findOrFail($request->input('category_id'));
        $job->category_name = $category->name;

        $company = Company::findOrFail($request->input('company_id'));
        $job->company_name = $company->name;

        $job->save();

        return redirect('/jobs')->with('success', 'Job created successfully');
    }

    /**
     * Display a specific job
     */
    public function show($job_id)
    {
        $job = Job::findOrFail($job_id);
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing jobs
     */
    public function edit(Job $job)
    {
        return view('job.edit', [
            'job' => $job,
        ]);
    }

    /**
     * Update jobs
     */
    public function update(Request $request, Job $job)
    {
        $job->update([
            $job->title = $request->input('title'),
            $job->start = $request->input('start'),
            $job->company_name = $request->input('company_name'),
            $job->location = $request->input('location'),
            $job->description = $request->input('description'),
            $job->mission = $request->input('mission'),
            $job->skills = $request->input('skills'),
        ]);

        return redirect()->route('job.index')->with('success', 'Job updated successfully.');
    }

    /**
     * Remove job
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
