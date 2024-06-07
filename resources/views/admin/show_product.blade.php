extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Product Details</h1>
                <p>Category: {{ $product->category }}</p>
                <p>Name: {{ $product->name }}</p>
                <p>Description: {{ $product->description }}</p>
                <p>Price: {{ $product->price }}</p>
                <!-- Display other details as needed -->
            </div>
        </div>
    </div>
@endsection