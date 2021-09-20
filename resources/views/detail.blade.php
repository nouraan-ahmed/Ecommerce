@extends('master')
@section('content')
    <div class="container m-4">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ $product['gallery'] }}">
            </div>
            <div class="col-sm-6">
                <a href="/"><button class="btn btn-primary mb-5">Go Back</button></a>
                <h2 class="mb-3">{{ $product['name'] }}</h2>
                <h3>Price:{{ $product['price'] }}</h3>
                <h4>Details: {{ $product['description'] }}</h4>
                <h4 class="mb-4">Category: {{ $product['category'] }}</h4>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{ $product['id'] }}>
                    <button class="btn btn-primary">Add to Cart</button>
                </form>
                <button class="btn btn-success">Buy Now</button>
            </div>
        </div>
    </div>
@endsection
