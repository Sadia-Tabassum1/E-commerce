@extends('master')
@section('content')
<div class="container">
<form action="{{route('category.store')}}" method="post">
  @csrf
  <div class="mb-2">
    <label for="exampleInputName" class="form-label">Name</label>
    <input name="Category_Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputDescription" class="form-label">Description</label>
    <input name="Category_Description" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-4">
    <label for="exampleInputImage" class="form-label">Image</label>
    <input name="Category_Image" type="file" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-5">
    <label for="exampleInputEmail" class="form-label">Email</label>
    <input name="Category_Image" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection