@extends('master')
@section('content')
<h4 class="card-title">Product Edit Form</h4>
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

<form action="{{route('product.update',$products->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-2">
    <label for="exampleInputName" class="form-label">Name</label>
    <input value="{{$products->name}}" name="Product_Name" type="text" class="form-control" id="exampleInputName">
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
    <input value="{{$products->name}}"name="Product_Description" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label value="{{$products->image}}" name="image"  for="exampleInputImage" class="form-label">Image</label>
    <input name="product_image" type="file" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
      <label  name="Product_price"  for="exampleInputImage" class="form-label">Enter Price</label>
      <input value="{{$products->price}}" min='100' type="number" class="form-control" required name="product_price">
  </div>
  <div class="mb-3">
      <label  name="Stock"  for="exampleInputImage" class="form-label">Enter Stock</label>
      <input  value="{{$products->quantity}}" min='10' type="number" class="form-control" required name="product_stock" placeholder="Enter Product Stock">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection