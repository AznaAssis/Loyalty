@extends('customer.cheader')
@section('main-body')
<br><br><br><br>
<section>
<div class="container products">
        <div class="row">
			
		@foreach($res as $val)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div class="caption">
					<a href="#" class="img-prod"><img class="img-fluid" src="pimage/{{$val->pimg}}" style="height:200px;" alt="Colorlib Template">
                        <p>{{$val->pname}}</p>
                        <p><input type="hidden" name="prize" value="{{$val->Prize}}"><strong>Price: </strong> {{$val->Prize}}</p>
                        <p class="btn-holder"><a href="/addcart/{{$val->id}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>
@endsection