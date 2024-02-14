
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-4 mt-5 mb-4">List of all categories</h1>
            <div class="text-left"><a href="category/create" class="btn btn-outline-primary">Add new Catagory</a></div>	
            <table class="table table-striped mt-3  text-left">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->category_id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="text-center">
                            <a href="category/{!! $category->category_id !!}/show" class="btn btn-outline-success">Show</a>
    						<a href="category/{!! $category->category_id !!}/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel({!! $category->category_id !!})">Delete</button>
						</td>
                    </tr>
                    @empty
					<tr>
						<td colspan="3">No categories found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
        </div>
    </div>
</div>

@foreach($categories as $category)
<div class="modal fade" id="deleteConfirmationModel-{{ $category->category_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">Are you sure to delete this category?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel('{!! $category->category_id !!}')">Cancel</button>
				<form id="delete-form-{{ $category->category_id }}" action="{{ route('category.destroy', ['category_id' => $category->category_id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onClick="deleteCategory()">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endforeach

<script>
function showModel(id) {
    var frmDelete = document.getElementById("delete-form-" + id);
    frmDelete.action = "{{ route('category.destroy', ':id') }}".replace(':id', id);
    var confirmationModal = document.getElementById("deleteConfirmationModel-" + id);
    confirmationModal.style.display = 'block';
    confirmationModal.classList.remove('fade');
    confirmationModal.classList.add('show');
}

function dismissModel(id) {
    var confirmationModal = document.getElementById("deleteConfirmationModel-" + id);
    confirmationModal.style.display = 'none';
    confirmationModal.classList.remove('show');
    confirmationModal.classList.add('fade');
}

function deleteCategory() {
    var frmDelete = document.getElementById("delete-frm");
    frmDelete.submit();
}
</script>
@endsection