@extends('master')
@section('content')
    <div class="custom-product container mb-3">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h4>Result for Products</h4>
                    @foreach ($products as $item)
                        <div class=" row mt-3 p-2 cart-list">
                            <div class="col-sm-6">
                                <a href="detail/{{ $item->id }}">
                                    <img src="{{asset('images/'.$item->gallery)}}" alt="" class="trending-image">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <h3>{{ $item->name }}</h3>
                                    <h6>{{ $item->description }}</h6>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <a href="/removecart/{{$item->cart_id}}"><button class="btn btn-danger">Remove From cart</button></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="text-end mt-2 mb-5"><a href="ordernow" class="btn btn-success">Order Now</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
