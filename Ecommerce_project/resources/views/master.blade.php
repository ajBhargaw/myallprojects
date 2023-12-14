<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerse Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    {{-- <style>
      .slider-text{
        background: #35443585 !important;
        text-align: center;
        width: 60%;
        margin: auto;
        bottom: 0px;
      }
      .img-content{
        text-decoration: none;
        color: black;
      }
      .trending-item{
        display: flex;
        flex-wrap: wrap;
      }
      .trending-item a{
        text-decoration: none;
        color: black;
      }
      .go-back{
        color: black;
        
      }
      .cart-list{
        border-bottom: 1px solid #ccc;
      }
    </style> --}}
  </head>
  <body>
    @include('header')

    @yield('content')

    @include('footer')

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  @yield('carousel')

</html>