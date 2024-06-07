@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                @if(session()->has('message'))
              <div class="alert alert-success">
               
                {{session()->get('message')}}
                <!-- <button class="close" type="button" data-dismiss="alert" area-hidden=""></button> -->
              </div>
              @endif
                    <!-- <div class="card-header">
                        <h4>Category
                            <a href="" class="btn btn-primary text-white float-end">Add Category</a>
                        </h4>
                    </div> -->
                    
                <h3 class="mx-auto mt-3 text-primary">Add Category</h3>
                <div class="card-body">
                <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-15 mb-3 fs-5 ">
                        <label for="" class="text-primary"><b>Category Type</b></label>
                        <input type="text" class="form-control text-center text-primary" required="" name="type" placeholder="Write category type">
                        </div>
                        
                 </div>
                    <div class="col-md-15 mb-3 fs-5">
                        <label for="" class="text-primary"><b>Category Name</b></label>
                        <input type="text" class="form-control text-center placeholder-glow" name="name" required="" placeholder="Write category name">
                        </div>
                    <div class="col-md-15 mb-3 fs-5  ">
                        <label for="" class="text-primary"><b>Category Description</b></label>
                        <input type="text" class="form-control text-center" name="description" required="" placeholder="Write category Description">
                        </div>
                    <div class="col-md-15 mb-3 fs-5  ">
                        <label for="" class="text-primary"><b>More Details</b></label>
                        <input type="text" class="form-control text-center"  name="details" required="" placeholder="Write category Details">
                        </div>
                    <div class="col-md-1 mb-3">
                        <input type="submit" class="btn btn-primary fs-5 text-light" name="submit" value="Add Category ">
                        </div>
                </form>
                </div>
                <table class="table table-bordered table-striped">
                   
                    <tbody>
                        <tr class="">
                            <th scope="row"><b>Category Type</b></th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Category Details</th>
                            <th>Remove</th>
                           
                        </tr>
                        @foreach($data as $data)
                        <tr>
                            <td scope="row">{{$data->type}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->description}}</td>
                            <td>{{$data->details}}</td>
                            <td>
                            <a onclick="return confirm('Are you sure you want to delete this?')" href="{{url('delete_category',$data->id)}}" class="btn btn-danger text-light">Delete</a>
                                   
                            </td>
                          
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

         </div>
</div>

@endsection