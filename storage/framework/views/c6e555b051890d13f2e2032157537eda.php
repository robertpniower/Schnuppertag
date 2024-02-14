 <?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Edit a user</h1>
			<form id="add-frm" method="POST" action="<?php echo e(route('user.store')); ?>" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="username">username</label>
					<div>
						<input type="text" id="username" class="form-control mb-4" name="username"
							placeholder="Enter username" required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
                    <label  for="email">email</label>
                    <div>
                    <input type="text" id="email" class="form-control mb-4" name="email"
							placeholder="Enter email address" required>
                    </div>                        
				</div>
                
                
                
				<div class="control-group col-6 text-left mt-2">
					<label for="password">password</label>
					<div>
						<input type="text" id="password" class="form-control mb-4" name="password"
							placeholder="Enter password" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label class='form-check-label'for="is_admin">admin ?</label>
					<div>
						<input type="checkbox" id="is_admin" class="form-check-input mb-4" name="is_admin"
							value='0'>
					</div>
				</div>

				<?php echo csrf_field(); ?>

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Update user</button></div>

				<?php if($errors->any()): ?>
                <div class="control-group col-6 text-left mt-2">
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <?php if(session('success')): ?>
                <div class="control-group col-6 text-left mt-2">
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                </div>
                <?php endif; ?>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/user/edit.blade.php ENDPATH**/ ?>