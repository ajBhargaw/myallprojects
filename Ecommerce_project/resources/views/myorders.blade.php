@extends('master')
@section('content')
    <div class="custom-product container mb-3">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h4>Result for Products</h4>
                    @foreach ($orders as $item)
                        <div class=" row mt-3 p-2 cart-list">
                            <div class="col-sm">
                                <a href="detail/{{ $item->id }}">
                                    <img src="{{ $item->gallery }}" alt="" class="trending-image">
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <div>
                                    <h3>Name: {{ $item->name }}</h3>
                                    <h6>Delivery Status : {{ $item->status }}</h6>
                                    <h6>Address : {{ $item->address }}</h6>
                                    <h6>Payment Status : {{ $item->payment_status }}</h6>
                                    <h6>Payment Method : {{ $item->payment_method }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
