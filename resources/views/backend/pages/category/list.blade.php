@extends('master')
@section('content')

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif
        <h4 class="card-title">Category Table <a class= "btn btn-success"href="{{Route('category.create')}}">Create</a></h4>
        <div class="table-responsive">
            <table class="table user-table">
                <thead>
                    <tr>
                        <th class="border-top-0">sl</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Description</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Image</th>
                        <th class="border-top-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $key=>$value)
                    <tr>
                    
                    <th scope="row">{{$key+1}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->description}}</td>
                        <td>{{$value->status}}</td>
                        <td>
                            <img style="width: 50px ;height:50px;" src="{{url('/uploads/category/'.$value->image)}}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-success" href="">Show</a>
                            <a class="btn btn-info" href="{{route('category.edit',$value->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{Route('category.delete',$value->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$category->links()}}
        </div>
@endsection