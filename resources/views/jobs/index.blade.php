

@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col">
            <label>Job titel</label>
            <input type="text" class="form-control" placeholder="Job title" aria-label="First name">
        </div>
        <div class="col">
            <label  for="inlineFormSelectPref">Job location</label>
            <select id="location" name="location" class="form-select" required>
											@foreach($companies as $company)
												<option value="{{ $company->city }}">{{ $company->city }}</option>
											@endforeach
						</select>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                
            <h1 class="display-4 mt-5 mb-4">List of all jobs</h1>

            <div class="text-left"><a href="jobs/create" class="btn btn-outline-primary">Add new Job</a></div>	

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Start</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->start }}</td>
                        <td>{{ $job->location }}</td>
                        <td class="text-center">
                            <a href="company/{!! $company->company_id !!}/show" class="btn btn-outline-success">Show</a>
    						<a href="company/{!! $company->company_id !!}/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel({!! $company->company_id !!})">Delete</button>
						</td>
                        
                    </tr>
                    @empty
					<tr>
						<td colspan="3">No jobs found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
            </div>
        </div>
    </div>
@endsection