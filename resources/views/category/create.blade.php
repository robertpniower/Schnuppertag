@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Create a new category</h1>
			<form id="add-frm" method="POST" action="{{ route('category.store') }}" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="name">name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter category name" required>
					</div>
				</div>
                <div class="control-group col-6 mt-2 text-left">
					<label for="description">Category description</label>
					<div>
						<textarea id="description" class="form-control mb-4" name="description"
							placeholder="Enter category description"  required></textarea>
					</div>
				</div>
				@csrf

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add category</button></div>

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