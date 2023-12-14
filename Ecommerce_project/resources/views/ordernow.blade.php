@extends('master')
@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td>Amounts</td>
                            <td>$ {{ $total }}</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>$ 0</td>
                        </tr>
                        <tr>
                            <td>Delivery Charge</td>
                            <td>$ 10</td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>$ </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-3 col-sm-4 col-12">
                <form method="post" action="orderplace">
                    @csrf
                    <div class="mb-3">
                        <textarea name="address" placeholder="Enter Your Address" cols="80" rows="4" style="resize: none" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Payment Method</label><br/>
                        <input type="radio" value="cash" name="payment">
                        <span>online Payment</span><br /> <br />
                        <input type="radio" value="cash" name="payment">
                        <span>EMI Payment</span><br /> <br />
                        <input type="radio" value="cash" name="payment">
                        <span>Payment On Delivary</span><br /> <br />
                    </div>
    
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>


        
    </div>
@endsection
