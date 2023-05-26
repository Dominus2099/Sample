

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        

            
            <div class="card">
            <div class="card-header"><?php echo e(__('Company Table')); ?></div>
                
                <div class="card-body">

                    <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary" href="<?php echo e(url('company/create')); ?>"> Add Company</a>
                    </div>
                    </div>
                    
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>URL</th>
                        </tr>
                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($company->id); ?></td>
                            <td><?php echo e($company->name); ?></td>
                            <td><?php echo e($company->email); ?></td>
                            <td><?php echo e($company->logo); ?></td>
                            <td><?php echo e($company->url); ?></td>
                            <td>
                                <form action="<?php echo e(route('company.destroy',$company->id)); ?>" method="POST">
                
                                    <a class="btn btn-info" href="<?php echo e(route('company.show',$company->id)); ?>">Show</a>
                    
                                    <a class="btn btn-primary" href="<?php echo e(route('company.edit',$company->id)); ?>">Edit</a>
                
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo $companies->links(); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\Sample\resources\views/company/index.blade.php ENDPATH**/ ?>