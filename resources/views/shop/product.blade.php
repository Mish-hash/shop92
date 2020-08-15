@extends('layouts.app')

@section('content')

    
    <div class="row">
        <h4 class="text-center mb-3">{{$product->name}}</h4>
        <div class="col-md-3 mb-5">
            <a href="/product/{{$product->slug}}">
                <img src="{{ $product->img }}" alt="{{ $product->slug }}" class="img-fluid">
                {{ $product->name }}
            </a>
            <p>Price: {{$product->price}}</p>
        </div>
    </div>

    <div class="">
        <h1 class="text-center mb-3">{{$product->name}}</h1>
        <form action="/" class="add-to-cart">
            @csrf
            <input type="number" name="qty" value="1" min="1">
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button class="btn btn-primary">Add to char</button>
        </form>
    </div>

@endsection
