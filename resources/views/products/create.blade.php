@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">
      
      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Photo</label></br>
        <input type="file" name="name" id="name" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop