

<?php $__env->startSection('content'); ?>
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
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($company->company_id); ?></td>
                        <td><?php echo e($company->name); ?></td>
                        <td><?php echo e($company->city); ?></td>
                        <td class="text-center">
                            <a href="company/<?php echo $company->company_id; ?>/show" class="btn btn-outline-success">Show</a>
    						<a href="company/<?php echo $company->company_id; ?>/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel(<?php echo $company->company_id; ?>)">Delete</button>
						</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="deleteConfirmationModel-<?php echo e($company->company_id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-body">Are you sure to delete this company?</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" onClick="dismissModel('<?php echo $company->company_id; ?>')">Cancel</button>
				<form id="delete-form-<?php echo e($company->company_id); ?>" class="" action="<?php echo e(route('company.destroy', $company->company_id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" onClick="deleteCompany()">Delete</button>
                </form>
			</div>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
function showModel(id) {
    var frmDelete = document.getElementById("delete-form-" + id);
    frmDelete.action = "<?php echo e(route('company.destroy', ':id')); ?>".replace(':id', id);
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/company/index.blade.php ENDPATH**/ ?>