 <?php $__env->startSection('content'); ?>
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
					<?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<tr>
						<td><?php echo $user->user_id; ?></td>
						<td><?php echo $user->username; ?></td>
						<td class="pr-5 text-right"><?php echo $user->email; ?></td>
						<td class="text-center">
						<a href="user/<?php echo $user->user_id; ?>/show" class="btn btn-outline-success">Show</a>
    						<a href="users/<?php echo $user->user_id; ?>/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel(<?php echo $user->user_id; ?>)">Delete</button>
						</td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<tr>
						<td colspan="3">No users found</td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="deleteConfirmationModel-<?php echo e($user->user_id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">Are you sure to delete this user?</div>
			<div class="modal-footer">
				
				<button type="button" class="btn btn-default" onClick="dismissModel('<?php echo e($user->user_id); ?>')">Cancel</button>

				<form id="delete-form-<?php echo e($user->user_id); ?>" class="" action="<?php echo e(route('user.destroy', $user->user_id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" onClick="deleteUser()">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
function showModel(id) {
    var frmDelete = document.getElementById("delete-form-" + id);
    frmDelete.action = "<?php echo e(route('user.destroy', ':id')); ?>".replace(':id', id);
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/users/index.blade.php ENDPATH**/ ?>