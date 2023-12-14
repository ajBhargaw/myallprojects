@extends('master')

@section('content')
    <div class=" mb-3">
        <div class="home-demo">
            <div class="owl-carousel owl-theme  row">
                @foreach ($product as $item)
                    <div class="item {{ $item->id == 1 ? 'active' : '' }} col-md-5 col-sm-7 col-10 m-auto position-relative">
                        {{-- <a href="detail/{{$item->id}}" class="img-content"> --}}
                            <div class="image-slider text-center">
                                <img src="{{asset('images/'.$item->gallery)}}"  alt="" width="30%" >
                            </div>
                            
                            <div class="slider-text position-absolute">
                                <h3>{{ 'Name : ' . $item->name }}</h3>
                                <h4> {{ 'Price : ' . "$" . $item->price }} </h4>
                                <small> {{ 'category : ' . $item->category }} </small>
                                <p>{{ 'About : ' . $item->description }}</p>
                            </div>
                        {{-- </a> --}}
                    </div>
                @endforeach
            </div>
        </div>
        <div class="trending-wrapper mt-3">
            <h4 class="text-center my-2">Trending Products</h4>
            <div class="trending-item">
                @foreach ($product as $item)
                    <a href="detail/{{$item->id}}" class="">
                        <div class="mx-3">
                            <img src="{{asset('images/'.$item->gallery)}}" alt="" height="150px" width="250px">
                            <h6 class="text-center py-1 bg-dark text-light">{{ $item->name }}</h6>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('carousel')
    <script>
        $(function() {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 1,
                margin: 10,
                loop: true,
                nav: true
            });
        });
    </script>
@endsection
