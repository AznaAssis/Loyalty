@extends('customer.cheader')
@section('main-body')
<br><br><br>
<br><br><br>

<div class="container" id="main_div">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center" style="color: black; font-weight: bold; background-color:#E6E6FA;border-radius: 10px;">

            
            <h2 style="color: black;">Payment</h2>
            <form action="/pay" id="myForm" method="post">
                @csrf
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="cnumber">Card Number</label>
                        <input type="number" name="cnumber" id="cnumber" class="form-control" placeholder=" Card Number" pattern="[0-9]{12}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="name">Name on Card</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder=" Name on Card" required>
                    </div>
                    <div class="col">
                        <label for="amount">Amount to Pay</label>
                        @foreach($res as $val)
                        @if($val->status=="book")
                        <input type="text" name="amount" id="amount" class="form-control" value="{{$val->total}}" required>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="expdate">Expiry Date</label>
                        <input type="date" id="expdate" name="expdate" required class="form-control">
                    </div>
                    <div class="col">
                        <label for="cvv">CVV</label>
                        <input type="password" pattern="[0-9]{3}" id="cvv" name="cvv" required class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 text-right">
                        <button type="reset" id="cancel" class="btn btn-secondary">Cancel</button>
                        <button type="submit" id="submit" class="btn btn-success">Pay Now</button>
                    </div>
                </div>
                <div class="text-center" id="msg"></div>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection