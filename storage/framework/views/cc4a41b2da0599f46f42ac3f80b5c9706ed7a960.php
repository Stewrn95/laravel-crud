

<?php $__env->startSection('main'); ?>
<div class="container mt-1">
    <div class="row">
        <header>
            <h5><i class="bi bi-pencil-square"></i> Product Details</h5>
            <nav class="my-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">View Product</li>
                </ol>
            </nav>
        </header>
        <div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src="/products/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                    <p class="card-text"><?php echo e($product->description); ?></p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-danger">M.R.P (Rm): <del><?php echo e($product->mrp); ?></del></p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-success">Selling Price (Rm): <?php echo e($product->price); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\uSER\Desktop\laravel-crud\crud-app\resources\views/products/show.blade.php ENDPATH**/ ?>