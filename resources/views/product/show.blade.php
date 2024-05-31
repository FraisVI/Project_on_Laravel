@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $product->id }}.{{ $product->product_name }}</div>
        <div>{{ $product->about_product }}</div>
        <div>{{ $product->price }}</div>
    </div>
    <div>
        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('product.delete', $product->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{ route('product.index') }}">Back</a>
    </div>
@endsection
