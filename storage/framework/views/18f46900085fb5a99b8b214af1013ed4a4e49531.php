

<?php $__env->startSection('main'); ?>
<div class="container ">
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5><i class="bi bi-plus-square-fill"></i> Add New Product</h5>
                    <hr>
                    <nav class="my-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Add New Product</li>
                        </ol>
                    </nav>

                    <form action="/products/store" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control <?php if($errors->has('name')): ?> is-invalid <?php endif; ?>" placeholder="Enter Product Name" value="<?php echo e(old('name')); ?>">
                            <?php if($errors->has('name')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('name')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="mrp" class="form-label">M.R.P</label>
                                <input type="text" name="mrp" id="mrp" class="form-control <?php if($errors->has('mrp')): ?> is-invalid <?php endif; ?>" placeholder="Enter M.R.P" value="<?php echo e(old('mrp')); ?>">
                                <?php if($errors->has('mrp')): ?>
                                    <div class="invalid-feedback"><?php echo e($errors->first('mrp')); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Selling Price</label>
                                <input type="text" name="price" id="price" class="form-control <?php if($errors->has('price')): ?> is-invalid <?php endif; ?>" placeholder="Enter Selling Price" value="<?php echo e(old('price')); ?>">
                                <?php if($errors->has('price')): ?>
                                    <div class="invalid-feedback"><?php echo e($errors->first('price')); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" style="resize:none; height: 150px;" class="form-control <?php if($errors->has('description')): ?> is-invalid <?php endif; ?>" placeholder="Enter the description of the product"><?php echo e(old('description')); ?></textarea>
                            <?php if($errors->has('description')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('description')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control <?php if($errors->has('image')): ?> is-invalid <?php endif; ?>">
                            <?php if($errors->has('image')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('image')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">Save Product</button>
                            <button type="reset" class="btn btn-danger">Clear All</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\uSER\Desktop\laravel-crud\crud-app\resources\views/products/create.blade.php ENDPATH**/ ?>