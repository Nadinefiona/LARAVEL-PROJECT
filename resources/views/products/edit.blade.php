@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">
      
      <form action="{{ url('product/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Photo</label></br>
        <input type="file" name="name" id="name" value="{{$products->photo}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="address" id="address" value="{{$products->description}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$products->price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop