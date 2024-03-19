
<?php $__env->startSection('main'); ?>
<div class="row">
        <div class="d-flex justify-content-between">
          <h5><i class="bi bi-journal-richtext"></i>Product Details</h5>
          <a href="create.html" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
        </div>
        <div class="col-md-12 table-responsive mt-3">
           <table class="table table-bordered">
            <thead>
              <tr>
                <th>Serial No</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>M.R.P</th>
                <th>Selling Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="images/1.jpg" style="height: 50px; width: 50px; object-fit: contain;" alt="Product"></td>
                <td><a href="show.html">Samsung Phone</a> </td>
                <td>Rm 2500</td>
                <td>Rm 1800</td>
                <td>
                    <a href="edit.html" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
              
            </tbody>
           </table>
        </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\uSER\Desktop\laravel-crud\crud-app\resources\views/index.blade.php ENDPATH**/ ?>