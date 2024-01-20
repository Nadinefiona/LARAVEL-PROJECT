@extends('products.layout')
@section('content')

<div class="card">
    <div class="card-header">Products Page</div>
    <div class="card-body">

        <div class="card-body">
            <h5 class="card-title">Photo : {{ $product->photo }}</h5>
            <h5 class="card-title">Name : {{ $product->name }}</h5>
            <p class="card-text">Description : {{ $product->description }}</p>
            <p class="card-text">Price : {{ $product->price }}</p>
        </div>

        <!-- You might want to remove this line as it's not a valid HTML tag -->
        <!-- </hr> -->

    </div>
</div>

@endsection
