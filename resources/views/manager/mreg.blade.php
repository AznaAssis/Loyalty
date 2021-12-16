@extends('user.mainheader')
@section('main-body')
<section class="ftco-section" style="background-color:lightgrey;">
      <div class="container">
        <div class="row justify-content-center" >
          <div class="col-xl-7 ftco-animate">
						<form action="/mregaction"  method="post" class="billing-form">
                            @csrf
							<center><h1 class="mb-4 billing-heading"><b>MANAGER REGISTRATION</b></h1></center>
							<div >
	          		<div>
	                <div class="form-group">
	                	<label for="firstname"> Name</label>
	                  <input type="text" name="name" class="form-control" placeholder="">
	                </div>
	              </div>
				  <div >
		            	<div class="form-group">
	                	<label for="towncity">City</label>
	                  <input type="text" name="city" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div >
		            	<div class="form-group">
		            		<label for="pincode">Pincode</label>
	                  <input type="text" name="pincode" class="form-control" placeholder="">
	                </div>
		            </div>
		            <div >
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" name="phno" class="form-control" placeholder="">
	                </div>
	              </div>
	              <div >
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" name="email" class="form-control" placeholder="">
	                </div>
                </div>
				<div class="form-group">
	                	<label for="shop name">Shop Name</label>
	                  <input type="text" name="sname" class="form-control" placeholder="">
	                </div>
				<div >
	                <div class="form-group">
	                	<label for="uname">Username</label>
	                  <input type="text" name="uname" class="form-control" placeholder="">
	                </div>
                </div>
				<div >
	                <div class="form-group">
	                	<label for="password">Password</label>
	                  <input type="text" name="password" class="form-control" placeholder="">
	                </div>
                </div>
                <div style="padding-bottom:5%">
                	<input type="submit" name="submit" value="Register" class="btn btn-success btn-block" >
					<input type="reset" value="Clear" class="btn btn-success btn-block">
					Don't Have an Account?<a href="/mlog">SignIn</a>
                </div>
	            </div>
	          </form><!-- END -->
					</div>
@endsection