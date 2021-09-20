@extends('master')
@section('content')
    <div class="container m-4 text-center">
        <h3 class="mb-5">My Orders</h3>

        @foreach ($data as $product)
            <div class="row">
                <div class="col-sm-4">
                    <img style="max-height: 150px" src="{{ $product->gallery }}">
                </div>
                <div class="col-sm-4">
                    <div>
                        <h2>{{ $product->name }}</h2>
                        <p>Delivery Status : {{ $product->status }}
                        <p>
                        <p>Address : {{ $product->address }}</p>
                        <p>Payment Status : {{ $product->payment_status }}</p>
                        <p>Payment Method : {{ $product->payment_method }}</p>
                    </div>
                </div>
                <hr>
            </div>
        @endforeach
    </div>
    </div>
@endsection
