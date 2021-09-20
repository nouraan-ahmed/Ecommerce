@extends('master')
@section('content')
    <div class="container m-4 text-center">
        <h3 class="mb-5">Result for Products</h3>

        @foreach ($products as $product)
            <div class="row">
                <div class="col-sm-4">
                    <img style="max-height: 150px" src="{{ $product->gallery }}">
                </div>
                <div class="col-sm-4">
                    <div>
                        <h2>{{ $product->name }}</h2>
                        <h4>{{ $product->description }}</h4>
                        <h4>Price:{{ $product->price }}</h3>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="/removecart/{{ $product->cart_id }}"><button class="btn btn-danger">Remove Item</button></a>
                </div>
                <hr>
            </div>
        @endforeach
        <a class="btn btn-success" href="ordernow">Order Now</a>
    </div>
    </div>
@endsection
