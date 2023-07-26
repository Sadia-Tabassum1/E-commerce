@extends('master')
@section('content')
<h4 class="card-title">Product Insert Form</h4>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
    <div>
      <p class="alert-danger"> {{$error}} </p>
  </div>
  @endforeach
  @endif

<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-2">
    <label for="exampleInputName" class="form-label">Name</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Select Category</label>
        <select class="form-control" name="category_id" id="a">



            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>



        
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Description</label>
    <input name="Product_Description" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label name="image"  for="exampleInputImage" class="form-label">Image</label>
    <input name="product_image" type="file" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
      <label name="Price"  for="exampleInputImage" class="form-label">Enter Price</label>
      <input min='100' type="number" class="form-control" required name="product_price" placeholder="Enter Product Price">
  </div>
  <div class="mb-3">
      <label name="Stock"  for="exampleInputImage" class="form-label">Enter Stock</label>
      <input min='10' type="number" class="form-control" required name="product_stock" placeholder="Enter Product Stock">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection