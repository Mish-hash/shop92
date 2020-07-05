@extends('main.layout')

@section('content')
    <h2 class="text-center mb-3">Categories</h2>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 mb-5">
                <a href="/category/{{$category->slug}}">
                    <img src="{{ $category->img }}" alt="{{ $category->slug }}" class="img-fluid">
                    {{ $category->name }}
                </a>
            </div>
        @endforeach
    </div>

    <h2 class="text-center mb-3">Products</h2>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-5">
                <a href="/product/{{$product->slug}}">
                    <img src="{{ $product->img }}" alt="{{ $product->slug }}" class="img-fluid">
                    {{ $product->name }}
                </a>
            </div>
        @endforeach
    </div>

@endsection
