@extends('layouts.app')

@section('main')
<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-md-12">
        <h5><i class="bi bi-pencil-square"></i> Edit Product</h5>
        <hr>
        <nav class="my-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Edit Product</li>
            </ol>
        </nav>

                <form action="/products/{{ $product->id}}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Enter Product Name" value="{{ old('name',$product->name) }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="mrp" class="form-label">M.R.P</label>
                            <input type="text" name="mrp" id="mrp" class="form-control @if($errors->has('mrp')) is-invalid @endif" placeholder="Enter M.R.P" value="{{ old('mrp',$product->mrp) }}">
                            @if($errors->has('mrp'))
                                <div class="invalid-feedback">{{ $errors->first('mrp') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="price" class="form-label">Selling Price</label>
                            <input type="text" name="price" id="price" class="form-control @if($errors->has('price')) is-invalid @endif" placeholder="Enter Selling Price" value="{{ old('price',$product->price) }}">
                            @if($errors->has('price'))
                                <div class="invalid-feedback">{{ $errors->first('price') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" style="resize:none; height: 150px;" class="form-control @if($errors->has('description')) is-invalid @endif" placeholder="Enter the description of the product">{{ old('description',$product->description) }}</textarea>
                        @if($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" name="image" id="image" class="form-control @if($errors->has('image')) is-invalid @endif">
                        @if($errors->has('image'))
                            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Update Product</button>
                        <button type="reset" class="btn btn-danger">Clear All</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
