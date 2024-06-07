@extends('layouts.admin')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <h3 class="mx-auto mt-3 text-primary">Products</h3>
                    <div class="card-body">
                    <form action="{{url('/')}}" method="GET">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                               <th>Category</th>
                               <th>Product Name</th>
                               <th>Description</th>
                               <th>Quantity</th>
                               <th>Image</th>
                               <th>Update</th>
                               <th>Remove</th>
                            </tr>
                            @foreach($product as $product)
                            <tr>
                                <td>{{$product->category}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <!-- <td>
                                    <a href="{{url('img/{image}')}}">
                                    <img src="/product/{{$product->image}}" class="img-fluid" alt="">
                                    </a>
                                </td> -->
                                <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                <div class="col-md-6 mb-3">
                            <input type="submit" class="btn btn-primary mt-3" name="submit" value="dispatch ">
                                </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            
                        </table>
                       
                       
                      
                       </form>
                    </div>
                </div>
            </div>
</div>
@endsection