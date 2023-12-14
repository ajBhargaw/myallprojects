@extends('master')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-sm-6">
                <img src="" alt="">
            </div>
            <div class="col-sm-6">
                <div class="text-end">
                    <a href="/" class="go-back"><button class="btn btn-dark">Go Back</button></a>
                </div>
                <h3>Name : {{$product->name}}</h3>
                <small class="text-bold"> Price : {{$product->price}}</small>
                <h5 class="mt-2">Detail : {{$product->description}}</h5>
                <br>
                <form action="/add_to_card" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-success">Add to Card</button>
                </form>
                <br><br>
                <a href="" ><button class="btn btn-info">Buy Now</button></a>
                <br><br>
            </div>
        </div>
    </div>
@endsection