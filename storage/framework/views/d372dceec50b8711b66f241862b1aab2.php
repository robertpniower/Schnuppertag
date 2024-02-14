

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center pt-5">
                <h1 cclass="display-3 mt-5">Company details</h1>
                <br/>
                <div class="text-left"><a href="company/create" class="btn btn-outline-primary">Add new company</a></div>	    
                    <br/>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th class="text-start">Name:</th>
                                    <td class="text-end"><?php echo e($company->name); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Industry:</th>
                                    <td class="text-end"><?php echo e($company->industry); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Number of Employees:</th>
                                    <td class="text-end"><?php echo e($company->employees_nr); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Street:</th>
                                    <td class="text-end"><?php echo e($company->street); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Number:</th>
                                    <td class="text-end"><?php echo e($company->number); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Postal Code:</th>
                                    <td class="text-end"><?php echo e($company->postalcode); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">City:</th>
                                    <td class="text-end"><?php echo e($company->city); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Country:</th>
                                    <td class="text-end"><?php echo e($company->country); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Email:</th>
                                    <td class="text-end"><?php echo e($company->email); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Website:</th>
                                    <td class="text-end"><?php echo e($company->website); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-start">Phone:</th>
                                    <td class="text-end"><?php echo e($company->phone); ?></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Robert\Software Development\laravel\Schnuppertag\resources\views/company/show.blade.php ENDPATH**/ ?>