@extends('layouts.admin')
@section('content')

<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <h3 class="mx-auto mt-3 text-primary">Products</h3>
                    <div class="card-body">
                    <form action="{{url('/generate_pdf')}}" method="GET">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                               <th>Category</th>
                               <th>Product Name</th>
                               <th>Description</th>
                               <th>Quantity</th>
                               
                               <th>Date</th>
                               <th>Image</th>
                              
                               <th>Delete</th>
                            </tr>
                            @foreach($product as $product)
                            <tr>
                                <td>{{$product->category}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->created_at}}</td>
                                <td>
                                    <a href="{{url('img/{image}')}}">
                                    <img src="/product/{{ $product->image }}" class="img-fluid" alt="" style="height:7rem; width:7rem; border-radius:10%;">
                                 
                                    </a>
                                </td>
                              
                                <td>
                            <a onclick="return confirm('Are you sure you want to delete this?')" href="{{url('delete_product',$product->id)}}" class="btn btn-danger text-light">Delete</a>
                                   
                            </td>
                                
                            </tr>
                            @endforeach
                            </tbody>
                            
                        </table>
                     
                       
                        <div class="col-md-6 mb-3">
                            <input type="submit" class="btn btn-primary mt-3" name="submit" value="Generate Report ">
                                 </div>
                       </form>
                    </div>
                </div>
            </div>
</div>
@endsection