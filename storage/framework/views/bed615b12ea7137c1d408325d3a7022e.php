

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3 mt-5">Create a new job</h1>
            <form id="add-frm" method="POST" action="<?php echo e(route('jobs.store')); ?>" class="border p-3 mt-2">
                <?php echo csrf_field(); ?>

                <div class="control-group col-6 text-left">
                    <label for="title" class="col-sm-2 col-form-label" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                    </div>
                </div>
                <div class="control-group col-6 text-left mt-2">
                    <label for="start" class="col-sm-2 col-form-label">Start</label>
                    <div>
                        <input type="text" id="city" class="form-control mb-4" name="start" placeholder="Enter Start" >
                    </div>
                </div>
                <div class="control-group col-6 text-left">
                    <label for="company" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="company" name="company_id" required>
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="hidden" name="company_name" id="company_name">
                    </div>
                </div>

                <div class="control-group col-6 text-left">
                    <label for="location" class="col-sm-2 col-form-label">Job Location</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="location" name="location" required>
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($company->city); ?>"><?php echo e($company->city); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="control-group col-6 text-left">
                    <label for="category" class="col-sm-2 col-form-label">Job Category</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category" name="category_id" required>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="control-group col-6 mt-2 text-left">
                    <label for="description">Job description</label>
                    <div class="col-sm-10">
                        <textarea id="description" class="form-control mb-4" name="description" placeholder="Enter Job description" rows="" required></textarea>
                    </div>
                </div>

                <div class="control-group col-6 text-left">
                    <label for="mission" class="col-sm-2 col-form-label">Job Mission</label>
                    <div class="col-sm-10">
                        <textarea class="form-control mb-4"  id="mission" name="mission" placeholder="Enter job mission" required></textarea>
                    </div>
                </div>

                <div class="control-group col-6 text-left">
                    <label for="skills" class="col-sm-2 col-form-label">Required Skills</label>
                    <div class="col-sm-10">
                        <textarea class="form-control mb-4"  id="skills" name="skills" placeholder="Enter required skills" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="company_id" id="company_id">
                <input type="hidden" name="category_id" id="category_id">

                <div class="control-group col-6 text-left">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Add New Job</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('company').addEventListener('change', function() {
        var companyName = this.options[this.selectedIndex].text;
        var companyId = this.options[this.selectedIndex].value;
        document.getElementById('company_name').value = companyName;
        document.getElementById('company_id').value = companyId;
    });

    document.getElementById('category').addEventListener('change', function() {
        var categoryName = this.options[this.selectedIndex].text;
        var categoryId = this.options[this.selectedIndex].value;
        document.getElementById('category_name').value = categoryName;
        document.getElementById('category_id').value = categoryId;
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/jobs/create.blade.php ENDPATH**/ ?>