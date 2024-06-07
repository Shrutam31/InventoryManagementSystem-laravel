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
                    <h3 class="mx-auto mt-3">Dispatch Products</h3>
                    <div class="card-body">
                        
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                               <th>Category</th>
                               <th>ProductName</th>
                               <th>Description</th>
                               <th>Quantity</th>
                               <th>Image</th>
                               <th>Dispatch</th>
                              
                            </tr>
                            @foreach($product as $product)
                            <tr>
                                <td>{{$product->category}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <a href="">
                                    <img src="/product/{{ $product->image }}" class="img-fluid" alt="" style="height:7rem; width:7rem; border-radius:10%;">
                                 
                                    </a>
                                </td>
                              
                                <td>
                                <form action="{{url('/dispatch_product')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <button type="submit" class="btn btn-primary">Dispatch</button>
                                </form>
                            </td>
                                
                            </tr>
                            @endforeach
                            </tbody>
                            
                        </table>
                       <form action="{{url('/generate_incoming')}}" method="GET">
                       
                       <div class="col-md-6 mb-3">
                            <input type="submit" class="btn btn-primary mt-3" name="submit" value="Generate Report ">
                        </div>
                       </form>
                    </div>
                </div>
            </div>
</div>
@endsection