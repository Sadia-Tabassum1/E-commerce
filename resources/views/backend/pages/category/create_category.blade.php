@extends('master')
@section('content')
<h4 class="card-title">Category Create Form</h4>
@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif*
      @if ($errors->any())
        @foreach($errors->all() as $error)
          <div>
            <p class="alert-danger"> {{$error}} </p>
        </div>
        @endforeach
        @endif
      <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">

            @csrf
            <!-- <div class="mb-2">
              <label for="exampleInputName" class="form-label">Name</label>
              <input name="Category_Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div> -->
            <label for="name">  Name:</label>
    <select id="name" name="name" class="custom-dropdown" >
    
      <option >Black Abaya</option>
      <option >Color Abaya</option>
      
  
    </select>
            <div class="mb-3">
              <label for="exampleInputDescription" class="form-label">Description</label>
              <input name="Category_Description" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputDescription" class="form-label">Status</label>
              <input name="Category_Description" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-4">
              <label name="image"  for="exampleInputImage" class="form-label">Image</label>
              <input name="image" type="file" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection