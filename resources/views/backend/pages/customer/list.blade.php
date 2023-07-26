@extends('master')
@section('content')
    <h4 class="card-title">Customer Table <a class= "btn btn-success"href="{{Route('product.create')}}">Create</a></h4>
    <h6 class="card-subtitle">Add class <code>table</code></h6>
    <div class="table-responsive">
        <table class="table user-table">
            <thead>
                <tr>
                    <th class="border-top-0">sl</th>
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Password</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tfoot>
                <tbody>
                    @foreach($allProducts as $value)
                    <tr>
                    
                    <th scope="row">{{$value->id}}</th>
                        <td>{{$value->name}}</td>
                        <td>{{$value->categoryname->name}}</td>
                        <td>
                            <img style="width: 50px;" src="{{url('/uploads/product/'.$value->image)}}" alt="">
                        </td>
                        <td>{{$value->price}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->status}}</td>
                        <td >
                            <a class="btn btn-success" href="">Show</a>
                            <a class="btn btn-info" href="">Edit</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </tfoot>
        </table>  
        {{$allProducts->links()}}        
    </div>
                          
@endsection