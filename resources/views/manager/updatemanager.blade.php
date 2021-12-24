@extends('manager.mheader')
@section('main-body')
<section class="ftco-section" style="background-color:lightgrey;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
              @foreach($res as $val)
              <form action="/upm" id="frm"  method="post" class="billing-form">
                            @csrf
							<center><h1 class="mb-4 billing-heading"><b>MANAGER REGISTRATION</b></h1></center>
	                <div class="form-group">
	                	<label for="firstname"> Name</label>
	                  <input type="text" name="name" class="form-control" value="{{$val->name}}">
	                </div>
		            	<div class="form-group">
	                	<label for="towncity">City</label>
	                  <input type="text" name="city" class="form-control" value="{{$val->city}}">
	                </div>
		            <div class="form-group">
		            		<label for="pincode">Pincode</label>
	                  <input type="text" name="pincode" class="form-control" value="{{$val->pincode}}">
	                </div>
		             <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phno" class="form-control" value="{{$val->phno}}">
	                </div>
	              <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" value="{{$val->email}}">
	                </div>
				<div class="form-group">
	                	<label for="shop name">Shop Name</label>
	                  <input type="text" name="sname" class="form-control" value="{{$val->sname}}">
	                <div class="form-group">
	                	<label for="uname">Username</label>
	                  <input type="text" name="uname" class="form-control" value="{{$val->username}}">
	                </div>
                <div class="form-group">
	                	<label for="password">Password</label>
	                  <input type="text" name="password" class="form-control" value="{{$val->password}}">
	                </div>
                <div style="padding-bottom:5%">
                	<input type="submit" name="submit" value="update" class="btn btn-success btn-block" >
	            </div>
	          </form>
              @endforeach
					</div>
@endsection