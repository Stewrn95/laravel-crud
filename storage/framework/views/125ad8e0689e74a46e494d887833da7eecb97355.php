

<?php $__env->startSection('main'); ?>
<div class="row">
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-journal-richtext"></i>Product Details</h5>
        <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
    </div>
</div>

<div class="row mt-3">
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
        <div class="card mb-4">
            
                <img src="products/<?php echo e($product->image); ?>" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;" alt="Product Image">
            
            <div class="card-body">
            <a href="products/<?php echo e($product->id); ?>/show" style="text-decoration: none; color: inherit;">
                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                </a>
                <p class="card-text">MRP: RM <?php echo e($product->mrp); ?></p>
                <p class="card-text">Selling Price: RM <?php echo e($product->price); ?></p>
                <div class="d-flex justify-content-between">
                    <a href="products/<?php echo e($product->id); ?>/edit" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="products/<?php echo e($product->id); ?>/delete" onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>




<?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\uSER\Desktop\laravel-crud\crud-app\resources\views/products/index.blade.php ENDPATH**/ ?>