


<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col">
            <label>Job titel</label>
            <input type="text" class="form-control" placeholder="Job title" aria-label="First name">
        </div>
        <div class="col">
            <label  for="inlineFormSelectPref">Job location</label>
            <select id="location" name="location" class="form-select" required>
											<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($company->city); ?>"><?php echo e($company->city); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                
            <h1 class="display-4 mt-5 mb-4">List of all jobs</h1>

            <div class="text-left"><a href="jobs/create" class="btn btn-outline-primary">Add new Job</a></div>	

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Start</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($job->id); ?></td>
                        <td><?php echo e($job->title); ?></td>
                        <td><?php echo e($job->start); ?></td>
                        <td><?php echo e($job->location); ?></td>
                        <td class="text-center">
                            <a href="company/<?php echo $company->company_id; ?>/show" class="btn btn-outline-success">Show</a>
    						<a href="company/<?php echo $company->company_id; ?>/edit" class="btn btn-outline-primary">Edit</a>
    						<button type="button" class="btn btn-outline-danger ml-1" onClick="showModel(<?php echo $company->company_id; ?>)">Delete</button>
						</td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<tr>
						<td colspan="3">No jobs found</td>
					</tr>
					<?php endif; ?>
				</tbody>
			</table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/jobs/index.blade.php ENDPATH**/ ?>