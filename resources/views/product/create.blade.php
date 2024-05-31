@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="product_name" class="form-label">Name product</label>
                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Name product">
            </div>
            <div class="mb-3">
                <label for="about_product" class="form-label">About</label>
                <textarea class="form-control" name="about_product" id="about_product" placeholder="about product"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Image product">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="Price product">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
