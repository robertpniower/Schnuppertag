 <?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
        <h1 class="display-3 mt-5">Create a new category</h1>
			<form id="add-frm" method="POST" action="<?php echo e(route('category.store')); ?>" class="border p-3 mt-2">
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
				<?php echo csrf_field(); ?>

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add category</button></div>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/category/create.blade.php ENDPATH**/ ?>