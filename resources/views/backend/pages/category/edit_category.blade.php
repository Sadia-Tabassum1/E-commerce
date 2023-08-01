@extends('master')
@section('content')
<div class="container">

<form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-2">
    <label for="exampleInputName" class="form-label">Name</label>
    <input value="{{$category->name}}" name="Category_Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Description</label>
    <input value="{{$category->description}}" name="Category_Description" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Status</label>
    <input value="{{$category->status}}" name="Category_Description" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label name="image"  for="exampleInputImage" class="form-label">Image</label>
    <input name="image" type="file" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection