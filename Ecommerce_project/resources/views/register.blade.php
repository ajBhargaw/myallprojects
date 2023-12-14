@extends('master')

@section('content')
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-md-5 col-11 mx-auto">
               <h4>Register Now</h4>
               <form method="post" action="register">
                  @csrf
                     <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                     </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
               </form>
            </div>
        </div>
    </div>
@endsection