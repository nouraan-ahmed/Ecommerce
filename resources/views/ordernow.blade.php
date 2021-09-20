@extends('master')
@section('content')
    <div class="container m-4 text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Total Amount</th>
                    <th scope="col">products</th>
                    <th scope="col">Tax</th>
                    <th scope="col">Delivery</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">${{ $price + 10 }}</th>
                    <td>${{ $price }}</td>
                    <td>$0</td>
                    <td>$10</td>
                </tr>

            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea name="address" type="text" class="form-control" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="d-block mb-3" for="pwd">Payment Method</label>
                    <input class="m-2" type="radio" value="cash" name="payment"><span>Online payment</span>
                    <input class="m-2" type="radio" value="cash" name="payment"><span>Payment On Delivery</span>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>

        </div>
    </div>
@endsection
