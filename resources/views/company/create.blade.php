@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Create a new company</h1>
			<form id="add-frm" method="POST" action="{{ route('company.store') }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="name">name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter company name" required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
                    <label  for="industry">industry</label>
                    <div>
                    <input type="text" id="industry" class="form-control mb-4" name="industry"
							placeholder="Enter industry" required>
                    </div>                        
				</div>        
                <div class="control-group col-6 text-left mt-2">
					<label for="employees_nr">Number of employees</label>
					<div>
						<input type="number" id="employees_nr" class="form-control mb-4" name="employees_nr"
							placeholder="Enter number of employees" required>
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="street">street</label>
					<div>
						<input type="text" id="street" class="form-control mb-4" name="street"
							placeholder="Enter street" required>
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="number">street number</label>
					<div>
						<input type="number" id="number" class="form-control mb-4" name="number"
							placeholder="Enter street number" required>
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="postalcode">postalcode</label>
					<div>
						<input type="text" id="postalcode" class="form-control mb-4" name="postalcode"
							placeholder="Enter postalcode" required>
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="city">city</label>
					<div>
						<input type="text" id="city" class="form-control mb-4" name="city"
							placeholder="Enter city" required>
					</div>
				</div>
                <div class="control-group col-6 text-left mt-2">
					<label for="country">country</label>
					<div>
						<input type="text" id="country" class="form-control mb-4" name="country"
							placeholder="Enter country" required>
					</div>
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="email">email</label>
                    <div>
                    <input type="email" id="email" class="form-control mb-4" name="email"
							placeholder="Enter company email address" required>
                    </div>                        
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="website">website</label>
                    <div>
                    <input type="text" id="website" class="form-control mb-4" name="website"
							placeholder="Enter company website" required>
                    </div>                        
				</div>
                <div class="control-group col-6 mt-2 text-left">
                    <label  for="phone">company phone</label>
                    <div>
                    <input type="text" id="phone" class="form-control mb-4" name="phone"
							placeholder="Enter company phone" required>
                    </div>                        
				</div>
                
				

				@csrf

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add company</button></div>

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