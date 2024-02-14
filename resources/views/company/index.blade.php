@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-4 mt-5 mb-4">List of all companies</h1>
            <div class="text-left"><a href="company/create" class="btn btn-outline-primary">Add new Company</a></div>	
            <table class="table table-striped mt-3  text-left">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{ $company->company_id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->city }}</td>
                        <td class="text-center">
                            <a href="company/{!! $company->company_id !!}/show" class="btn btn-outline-success">Show</a>
    						<a href="company/{!! $company->company_id !!}/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel({!! $company->company_id !!})">Delete</button>
						</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach($companies as $company)
<div class="modal fade" id="deleteConfirmationModel-{{ $company->company_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">Are you sure to delete this company?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel('{!! $company->company_id !!}')">Cancel</button>
				<form id="delete-form-{{ $company->company_id }}" class="" action="{{ route('company.destroy', $company->company_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" onClick="deleteCompany()">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
@endforeach

<script>
function showModel(id) {
    var frmDelete = document.getElementById("delete-form-" + id);
    frmDelete.action = "{{ route('company.destroy', ':id') }}".replace(':id', id);
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

function deleteCompany() {
    var frmDelete = document.getElementById("delete-frm");
    frmDelete.submit();
}
</script>
@endsection