@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Edit category</h1>
        <form method="POST" action="{{ route('category.update', $category->category_id) }}" class="border p-3 mt-2">
			
				<div class="control-group col-6 text-left">
					<label for="name">name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter category name"  value="{!! $category->name !!}">
					</div>
				</div>
                <div class="control-group col-6 mt-2 text-left">
					<label for="description">Category description</label>
					<div>
						<textarea id="description" class="form-control mb-4" name="description"
							placeholder="Enter category description" value="{!!  $category->description !!}"></textarea>
					</div>
				</div>		
                @csrf
                @method('PUT')

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Update category</button></div>

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


