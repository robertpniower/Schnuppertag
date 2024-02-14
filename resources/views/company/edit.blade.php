@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Edit company</h1>
        <form method="POST" action="{{ route('company.update', $company->company_id) }}" class="border p-3 mt-2">
			
				<div class="control-group col-6 text-left">
					<label for="name" class="col-sm-2 col-form-label">name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter company name"  value="{!! $company->name !!}">
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
                    <label  for="industry" class="col-sm-2 col-form-label">industry</label>
                    <div>
                    <input type="text" id="industry" class="form-control mb-4" name="industry"
							placeholder="Enter industry"  value="{!! $company->industry !!}">
                    </div>                        
				</div>        
                <div class="control-group col-6 text-left mt-2">
					<label for="employees_nr" class="col-sm-2 col-form-label">Number of employees</label>
					<div>
						<input type="number" id="employees_nr" class="form-control mb-4" name="employees_nr"
							placeholder="Enter number of employees"  value="{!! $company->employees_nr !!}">
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="street" class="col-sm-2 col-form-label">street</label>
					<div>
						<input type="text" id="street" class="form-control mb-4" name="street"
							placeholder="Enter street"  value="{!! $company->street !!}">
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="number" class="col-sm-2 col-form-label">street number</label>
					<div>
						<input type="number" id="number" class="form-control mb-4" name="number"
							placeholder="Enter street number" value="{!! $company->number !!}">
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="postalcode" class="col-sm-2 col-form-label">postalcode</label>
					<div>
						<input type="text" id="postalcode" class="form-control mb-4" name="postalcode"
							placeholder="Enter postalcode" value="{!! $company->postalcode !!}">
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="city" class="col-sm-2 col-form-label">city</label>
					<div>
						<input type="text" id="city" class="form-control mb-4" name="city"
							placeholder="Enter city" value="{!! $company->city !!}">
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="country" class="col-sm-2 col-form-label">country</label>
					<div>
						<input type="text" id="country" class="form-control mb-4" name="country"
							placeholder="Enter country" value="{!! $company->country !!}">
					</div>
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="email" class="col-sm-2 col-form-label">email</label>
                    <div>
                    <input type="email" id="email" class="form-control mb-4" name="email"
							placeholder="Enter company email address" value="{!! $company->email !!}">
                    </div>                        
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="website" class="col-sm-2 col-form-label">website</label>
                    <div>
                    <input type="text" id="website" class="form-control mb-4" name="website"
							placeholder="Enter company website" value="{!! $company->website !!}">
                    </div>                        
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="phone" class="class="col-sm-2 col-form-label"">company phone</label>
                    <div>
                    <input type="text" id="phone" class="form-control mb-4" name="phone"
							placeholder="Enter company phone" value="{!! $company->phone !!}">
                    </div>                        
				</div>
                
				

                @csrf
                @method('PUT')

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Update Company</button></div>

				@if ($errors->any())
                <div class="control-group col-6 text-left mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if (session('success'))
                <div class="control-group col-6 text-left mt-2">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
                @endif
			</form>
		</div>
	</div>
</div>
@endsection


