@extends('customer.cheader')
@section('main-body')
<section class="ftco-section" style="background-color:lightgrey;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
              @foreach($res as $val)
						<form action="/upc" method="post" class="billing-form">
							@csrf
							<center><h1 class="mb-4 billing-heading"><b>CUSTOMER REGISTRATION</b></h1></center>
	          	<div >
	          		<div>
	                <div class="form-group">
	                	<label for="firstname"> Name</label>
	                  <input type="text" name="name" class="form-control" value="{{$val->name}}">
	                </div>
	              </div>
				  <div >
	          		<div >
	                <div class="form-group">
	                	<label for="firstname">District</label>
	                  <input type="text" name="district" class="form-control"  value="{{$val->district}}">
	                </div>
	              </div>
		            <div >
		            	<div class="form-group">
	                	<label for="streetaddress">Address</label>
	                  <input type="text" name="address" class="form-control" value="{{$val->address}}" >
	                </div>
		            <div >
		            	<div class="form-group">
	                	<label for="towncity">City</label>
	                  <input type="text" name="city" class="form-control" value="{{$val->city}}">
	                </div>
		            </div>
		            <div >
		            	<div class="form-group">
		            		<label for="pincode">Pincode</label>
	                  <input type="text" name="pincode" class="form-control" value="{{$val->pincode}}">
	                </div>
		            </div>
		            <div >
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phno" class="form-control" value="{{$val->phno}}">
	                </div>
	              </div>
	              <div >
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" value="{{$val->email}}">
	                </div>
                </div>
				<div >
	                <div class="form-group">
	                	<label for="uname">Username</label>
	                  <input type="text" name="uname" class="form-control" value="{{$val->username}}">
	                </div>
                </div>
				<div >
	                <div class="form-group">
	                	<label for="password">Password</label>
	                  <input type="text" name="password" class="form-control" value="{{$val->password}}">
	                </div>
                </div>
                <div style="padding-bottom:5%">
                	<input type="submit" name="submit" value="update" class="btn btn-success btn-block" >
                </div>
	            </div>
	          </form><!-- END -->
              @endforeach
					</div>
					
@endsection