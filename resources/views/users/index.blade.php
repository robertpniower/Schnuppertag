@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
		<h1 class="display-4 mt-5 mb-4">List of all users</h1>
			<div class="text-left"><a href="users/register" class="btn btn-outline-primary">Add new user</a></div>		
			<table class="table table-striped mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Username</th>
						<th scope="col" >Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($users as $user)
					<tr>
						<td>{!! $user->user_id !!}</td>
						<td>{!! $user->username !!}</td>
						<td class="pr-5 text-right">{!! $user->email !!}</td>
						<td class="text-center">
						<a href="user/{!! $user->user_id !!}/show" class="btn btn-outline-success">Show</a>
    						<a href="users/{!! $user->user_id !!}/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel({!! $user->user_id !!})">Delete</button>
						</td>
					</tr>
					@empty
					<tr>
						<td colspan="3">No users found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>


@foreach($users as $user)
<div class="modal fade" id="deleteConfirmationModel-{{ $user->user_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">Are you sure to delete this user?</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-default" onClick="dismissModel('{{ $user->user_id }}')">Cancel</button>

				<form id="delete-form-{{ $user->user_id }}" class="" action="{{ route('user.destroy', $user->user_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onClick="deleteUser()">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endforeach

<script>
function showModel(id) {
    var frmDelete = document.getElementById("delete-form-" + id);
    frmDelete.action = "{{ route('user.destroy', ':id') }}".replace(':id', id);
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

function deleteUser() {
    var frmDelete = document.getElementById("delete-frm");
    frmDelete.submit();
}
</script>
@endsection