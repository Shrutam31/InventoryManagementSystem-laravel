@extends('layouts.admin')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                @if(session()->has('message'))
              <div class="alert alert-success">
               
                {{session()->get('message')}}
                <button class="close" type="button" data-dismiss="alert" area-hidden="true"></button>
              </div>
              @endif
                <h3 class="mx-auto mt-3 text-primary">Return Supply</h3>
                    <div class="card-body">
                        <form action="{{url('/add_supply')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                <div class="col-md-15 mb-3 fs-5">

                        <!-- <label for="" class="text-primary"><b>Product Category :</b></label> -->
                            <select class="form-select form-select-lg mb-3 fs-5" aria-label="form-select-lg example" name="category" id="" required="">
                                    <option value="null"  selected="" required="">Select Category</option>   
                                    
                                    @foreach($category as $category)

                                    <option value="{{$category->name}}" class="text-primary" required="">{{$category->name}}</option>     

                                    @endforeach
                            </select>

                        </div>

                        <div class="col-md-15 mb-3 fs-5">
                        <label for="" class="text-primary"><b>Product name</b></label>
                        <input type="text" class="form-control" name="name" placeholder="Write Product name" required="">
                        </div>

                        <div class="col-md-15 mb-3 fs-5">
                        <label for="" class="text-primary"><b>Product Description</b></label>
                        <input type="text" class="form-control" name="description" placeholder="Write Product Description" required="">
                        </div>

                        <div class="col-md-15 mb-3 fs-5">
                        <label for="" class="text-primary"><b>Quantity</b></label>
                        <input type="number" class="form-control" name="price" placeholder="Write category Details" required="">
                        </div>

                        <div class="col-md-15 mb-3 fs-5">
                        <label for="" class="text-primary"><b>Product Image</b></label><br>
                        <br>
                        <input type="file" name="image" required="">
                        </div>


                        
                        

                    </div>
                        <div class="col-md-6 mb-3">
                            <input type="submit" class="btn btn-primary" name="submit" value="Add product ">
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
</div>
@endsection