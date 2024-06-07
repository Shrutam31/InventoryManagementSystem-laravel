@extends('layouts.admin')
@section('content')
<div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category
                            <a href="{{url('admin/category/create')}}" class="btn btn-primary text-white float-end">Back</a>
                        </h4>
                    </div>
                <div class="card-body">
                    <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Category type</label>
                            <input type="text" name="product" id="" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Category Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" id="" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" id="" class="form-control">
                        </div>
                        <!-- <div class="col-md-6 mb-3">
                            <label for="">Status</label><br/>
                            <input type="checkbox" name="Status" id="">
                        </div> -->
                        <div class="col-md-6 mb-3 ">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>

         </div>
</div>

@endsection