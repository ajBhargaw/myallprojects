@extends('master')

@section('content')
    <div class="container mt-3 mb-5">
        <div class="row">
            @if (session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="col-md-5 col-11 mx-auto">
                <form method="post" action="addproduct" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="productname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="productprice">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="category">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
