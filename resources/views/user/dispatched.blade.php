@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <h3 class="mx-auto mt-3 text-primary">Products</h3>
            <div class="card-body">
            <!-- <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">
                                        Filter By Date
                                    </label>
                                    <input type="date" name="date" valye="{{ date('Y-m-d')}}" class="form-control">
                                </div>
                            
                            <div class="col-md-6">
                                <br>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                            </div>
                        </form>
                        <hr> -->
          <!-- Add this to include CSRF token -->
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Category</th>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Image</th>
                              
                            </tr>
                            @foreach($product as $item)
                            <tr>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <!-- <a href="{{ url('img/' . $item->image) }}">
                                        <img src="/product/{{ $item->image }}" class="img-fluid" alt="">
                                    </a> -->
                                    <a href="{{ url('img/' . $item->image) }}" download>
                                    <img src="/product/{{ $item->image }}" class="img-fluid" alt="" style="height:7rem; width:7rem; border-radius:10%;">
                                    </a>
                                </td>
                                <!-- <td>
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-primary">Return</button>
                                </td> -->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              
            </div>
        </div>
    </div>
</div>
@endsection
