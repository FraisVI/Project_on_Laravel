@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('product.create') }}" class="btn btn-secondary mb-3">Добавить товар</a>
        </div>
        <div class="list-group">
            @foreach($products as $product)
                <a href="{{ route('product.show', $product->id) }}"
                   class="list-group-item list-group-item-action"> {{ $product->id }}.{{ $product->product_name }}
                    :{{ $product->price }}</a>
            @endforeach
        </div>
    </div>
@endsection
