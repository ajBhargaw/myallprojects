@php
   use App\Http\Controllers\productController;
   $totle =0;
   if(Session::has('user')){
    $totle = productController::cartItem();
   }
@endphp
<header>
<nav class="navbar navbar-expand-lg bg-dark text-light position-sticky ">
    <div class="container-fluid text-light">
        <a class="navbar-brand text-light" href="#">E-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-light me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="myorders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-disabled="true" href="/cartList">cart({{$totle}})</a>
                </li>
                @if (Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{Session::get('user')['name']}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="userlogout">LogOut</a></li>
                    </ul>
                </li>
                @else
                <li><a class="nav-link text-light" href="login">Login</a></li>
                <li><a class="nav-link text-light" href="register">Register</a></li>
                @endif
                        
               
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mb-2 me-2 mb-lg-0 position-relative">
                <li class="nav-item  adminshow ">
                    <a class="nav-link text-light" href="">ADMIN</a>
                    <ul class="navbar-nav bg-dark position-absolute d-flex flex-column adminhide" >
                        <li class="nav-item "><a href="admin" class="nav-link text-light">login</a></li>
                        <li class="nav-item"><a href="logout" class="nav-link text-light">logout</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
</header>


