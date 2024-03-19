@extends('layouts.app')

@section('main')
<div class="row">
    <div class="d-flex justify-content-between">
        <h5><i class="bi bi-journal-richtext"></i>Product Details</h5>
        <a href="products/create" class="btn btn-primary"><i class="bi bi-plus-circle"></i> New Product</a>
    </div>
</div>

<div class="row mt-3">
    @foreach ($products as $product)
    <div class="col-md-4">
        <div class="card mb-4">
            
                <img src="products/{{$product->image}}" class="card-img-top" style="height: 200px; width: 100%; object-fit: cover;" alt="Product Image">
            
            <div class="card-body">
            <a href="products/{{$product->id}}/show" style="text-decoration: none; color: inherit;">
                    <h5 class="card-title">{{$product->name}}</h5>
                </a>
                <p class="card-text">MRP: RM {{$product->mrp}}</p>
                <p class="card-text">Selling Price: RM {{$product->price}}</p>
                <div class="d-flex justify-content-between">
                    <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="products/{{$product->id}}/delete" onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>




{{$products->links()}}
@endsection
