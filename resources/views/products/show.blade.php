@extends('layouts.app')

@section('main')
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
                <img src="/products/{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-danger">M.R.P (Rm): <del>{{ $product->mrp }}</del></p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-success">Selling Price (Rm): {{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

