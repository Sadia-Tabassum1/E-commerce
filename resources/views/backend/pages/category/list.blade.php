@extends('master')
@section('content')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category Table <a class= "btn btn-success"href="{{Route('category.create')}}">Create</a></h4>
                                <h6 class="card-subtitle">Add class <code>table</code></h6>
                                <div class="table-responsive">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">sl</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $key=>$value)
                                            <tr>
                                                <td>{{ ++ $key}}</td>
                                                <td>{{$value->name}}</td>
                                                <td>{{$value->description}}</td>
                                                <td>
                                                    <a class="btn btn-info" href="">edit</a>
                                                    <a class="btn btn-danger" href="">delete</a>
                                                </td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection